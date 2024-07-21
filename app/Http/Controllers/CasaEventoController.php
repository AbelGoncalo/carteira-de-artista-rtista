<?php

namespace App\Http\Controllers;

use App\Models\CasaEvento;
use App\Models\{User, Event, Convidado,  Artista, Contrato, Notificacao, Promotor};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\{CasaEventoMail,CasaEventoEnvioContratos};
use App\Http\Requests\formCasaEventos;
use Illuminate\Support\Facades\Session;

class CasaEventoController extends Controller
{

    public function casaEventoDashboard(){

        $response["invites"] = Convidado::join('events' , 'convidados.event_id' , '=' , 'events.id')
        ->join('artistas' , 'convidados.artista_id' , "=" , 'artistas.id')
        ->join('promotors' , 'convidados.promotor_id' , '=' , 'promotors.id')
        ->get();
        $response['artists'] = Artista::get();
        $response['promotor_eventos'] = User::join('promotors' , 'users.promotor_id' , '=' , 'promotors.id')->get();       
        
        $response['artistsToInvite'] = Artista::get();
        $response['promotersToInvite'] = Promotor::get();

        $response['events'] = Event::where("casa_evento_id",auth()->user()->casa_evento_id)->get();

        $response['artistsAcceptedInvite'] = Convidado::join('artistas' , 'convidados.artista_id' , '=' , 'artistas.id')
        ->where('convidados.status','aceite')
        ->where('casa_evento_id',auth()->user()->casa_evento_id)
        ->get();

        $response['promotersAcceptedInvite'] = Convidado::join('promotors' , 'convidados.promotor_id' , '=' , 'promotors.id')
        ->where('convidados.status','aceite')
        ->where('casa_evento_id',auth()->user()->casa_evento_id)
        ->get();

        $response['notifications'] = Notificacao::get();
        
        return view("casaevento.dashboard.index",$response);
    }

    public function formCadastroCasaEvento(){
        return view('casaevento.forms.index');
    }

    public function listaCasaEventos(){

    }

    public function storeHouseOfEvent(formCasaEventos $request){

        try{
            $data = $request->all();
            $novoNomeArquivos = [];

            // for($key=0;$key < count($data['documentos']); $key++){
            foreach($data['documentos'] as $key=>$value){
                $destinyPathName = "/public/files/documentos_casa_evento";
                $name = $value->getClientOriginalName();
                $path = $value->storeAs($destinyPathName, $name);
                
                array_push($novoNomeArquivos,$name);

            }


            $destinyPathName = "/public/files/fotos_casas_evento";
            $file = $request->file("foto_ilustrativa_espaco");
            $name = $file->getClientOriginalName();
            $path = $file->storeAs($destinyPathName, $name);
            $data['foto_ilustrativa_espaco'] = $name;

            $casaEvento = CasaEvento::create([
            'nome' => $data['nome'],
            'provincia' => $data['provincia'],
            'municipio' => $data['municipio'],
            'bairro' => $data['bairro'],
            'telefone' => $data['telefone'],
            'ponto_referencia' => $data['ponto_referencia'],
            'foto_ilustrativa_espaco' => $data['foto_ilustrativa_espaco'],
            'documentos' => $novoNomeArquivos,
            'telefone' => $data['telefone'],
            ]);

            $user = new User();
            $user->name = $data['nome'];
            $user->email = $data['email'];
            $user->password = \Hash::make($data['password']);
            $user->perfil = 'casa_evento';
            $user->casa_evento_id =  $casaEvento['id'];
            $user->save();

            

            //Esse try-catch logo abaixo é para executar o código sem ter conexão a internet
            try{
                //Send e-mail to Carteira
                $admins = User::where('perfil','carteira')->where('status' ,'verificado')->get();
                foreach($admins as $admin){
                  $name = $data['nome'];
                  $email = Mail::to($admin->email)->send(new CasaEventoMail($name));
            }
            return redirect()->to('/')->with('messageCasaEvento', 'A sua conta foi criada com êxito e encontra-se em um estado de avaliação, consulte o seu e-mail para poder proceder o login na plataforma.');

            }catch(\Exception $ex){
                return redirect()->to('/')->with('messageCasaEvento', 'A sua conta foi criada com êxito e encontra-se em um estado de avaliação, consulte o seu e-mail para poder proceder o login na plataforma.');
            }

        }catch(\Exception $e){
            return back()->with("errorCasaEvento", $e->getMessage());
        }
    }

    public function formInviteArtist(){
        $response['artists'] = Artista::get();
        return view('casaevento.pages.artistas', $response);
    }

    public function formInviteEventPromoter(){
        $response['promoters'] = User::join('promotors' , 'users.promotor_id' , '=' , 'promotors.id')->get();
        return view('casaevento.pages.promotores_eventos',$response);
    }

    public function storeEventos(Request $request){

        switch ($request->type) {
            case 'add':
                $event = Event::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
                return response()->json($event);
                break;

            case 'update':
                $event = Event::find($request->id)->update([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
                return response()->json($event);
                break;

            case 'delete':
                $event = Event::find($request->id)->delete();
                return response()->json($event);
                break;
                default:
                break;
    }

}

public function dashboardCasaEventos(Request $request){

    if ($request->ajax()){
        $data = Event::whereDate('start', '>=', $request->start)
            ->whereDate('end',   '<=', $request->end)
            ->where("casa_evento_id", Auth::user()->casa_evento_id)
            ->get(['id', 'title', 'start', 'end', 'created_at']);
            return response()->json($data);
            return view('casaevento.dashboard.index');
        }
}

public function saveCalendarioHouseOfEvent(Request $request){
    $data = $request->all();
    $data['casa_evento_id'] = Auth::user()->casa_evento_id;
    $newEvent = Event::create($data);
    return back()->with('eventCreated' , 'Evento criado com sucesso');
 }

 public function myEventHouses(){
    return view();
 }


 //convidar artistas

 public function invitingArtistToHouseOfEvent(Request $request){
    try{
        $data = $request->all(); 

        if(isset($data['artista_id'])){
            foreach($data['artista_id'] as $key=>$artista_id){    
         
                $artist = Convidado::create([
                    'texto' => $data['texto'],
                    'artista_id' => $artista_id,                
                    'event_id' => $data['event_id'],
                    'casa_evento_id' => Auth::user()->casa_evento_id,
                ]);
            }

        }
            if(isset($data["promotor_id"])){

                foreach($data['promotor_id'] as $key=>$promotor_id){        
                        $promotor = Convidado::create([
                        'texto' => $data['texto'],
                        'promotor_id' => $promotor_id,
                        'event_id' => $data['event_id'],
                        'casa_evento_id' => Auth::user()->casa_evento_id,
                    ]);
                }
            }   

        if($artist || $promotor){
            //return back();
            return redirect()->route('carteira.artista.casa.evento.dashboard')->with('inviteDone' , "O seu convite foi enviado com sucesso");
        }          

    }catch(\Exception $ex){
        dd($ex->getMessage());
        //return back()->with('inviteErr' , $ex->getMessage());
    }


 }

// Convidar promotores
 public function invitingPromotorOfEventsToHouseOfEvent(Request $request){
    try{
        $data = $request->all();

        foreach($data['promotor_evento_id'] as $key=>$promotor_evento_id){
            $artist = Convidado::create([
                'texto' => $data['texto'],
                'promotor_id' => $promotor_evento_id,
                'casa_evento_id' => Auth::user()->casa_evento_id,
                'event_id' => $data['event_id'],

            ]);

        }

        return redirect()->route('carteira.artista.casa.evento.dashboard')->with('inviteDone' , "O seu convite foi enviado com sucesso");

    }catch(\Exception $ex){
        return back()->with('inviteErr' , $ex->getMessage());
    }

 }

 public function finishFormInviteArtist(Request $request){
    $response['artists']  = Artista::get();
    $response["eventos"] = Event::where('user_id', Auth::user()->id)->get();
    return view('casaevento.pages.formFinishInviteArtist',$response);
}


 public function finishFormInvitePromoterEvent(Request $request){
    $response['promoters'] = User::join('promotors' , 'users.promotor_id' , '=' , 'promotors.id')->get();
    //$response['promotor_eventos']  = Promotor::get();
    $response["eventos"] = Event::where('user_id', Auth::user()->id)->get();
    return view('casaevento.pages.formFinishInvitePromoterEvent',$response);
}

public function listOfAllHouseOfEvents(){
    $response['casa_eventos'] = CasaEvento::get();
    return view('casaevento.pages.casasEventos', $response);
}

public function formCalendarArtist(Request $request){
    $response['nameArtist'] = Convidado::join('artistas' , 'convidados.artista_id' , '=' , 'artistas.id')->where('convidados.artista_id' ,$request->artista_id)->limit(1)->get();

    if($request->ajax()){

        //$data = Convidado::join('events' , 'convidados.event_id' , '=' , 'events.id')

        $data = Event::whereDate('start', '>=', $request->start)
            ->whereDate('end',   '<=', $request->end)
            //->orWhere("convidados.artista_id",$request->artista_id)
            ->get(['id','title', 'start', 'end']);
            return response()->json($data);

        }
        return view('casaevento.pages.calendarioArtista',$response);
}


public function userSettings(){
    return view("casaevento.forms.user");
}


public function showMyDetails(){
    $response['promotorOfEvents'] = User::join('casa_eventos' , 'users.casa_evento_id' , '=' , 'casa_eventos.id')->where('users.casa_evento_id',auth()->user()->casa_evento_id)->get();
    return view('casaevento.pages.meus-detalhes',$response);
}

public function sendContrato(Request $request){

    try{
                $data = $request->all();
        
                 $destinyPathName = "/public/contratos";
                 $file = $request->file("anexo");
                 $name = $file->getClientOriginalName();
                 $path = $file->storeAs($destinyPathName, $name);
                 $data['anexo'] = $name;
    
                 $destinyPathName = "/public/contratos";
                 $file = $request->file("anexo");
                 $name = $file->getClientOriginalName();
                 $path = $file->storeAs($destinyPathName, $name);
                 $data['anexo'] = $name;
    
                 $newContratoArtista = Contrato::create([
                    'anexo' => $data['anexo'],
                    'artista_id' => $data['artista_id'],
                    'event_id' => $data['event_id'],
                    'casa_evento_id' => auth()->user()->casa_evento_id,
                    'status' => 'casa_emissor'
                 ]);

                 
                 //Send the email
                 $artistEmail = Convidado::where('status','aceite')
                 ->join('artistas' , 'convidados.artista_id' , '=' , 'artistas.id')
                 ->get(['artistas.email']);
                 
                 foreach($artistEmail as $artist){
                  Mail::to($artist->email)->send(new CasaEventoEnvioContratos);
                  }
                //Send the email

                 $notification = new Notificacao();
                 $notification->text = 'Recebeu o contrato contrato de trabalho consulte a sua dashboard para fazer o download';
                 $notification->artista_id = $newContratoArtista['artista_id'];
                 $notification->casa_evento_id = auth()->user()->casa_evento_id;
                 $notification->save();
             
                $newContratoPromotor = Contrato::create([
                    'anexo' => $data['anexo'],
                    'event_id' =>$data['event_id'],
                    'promotor_id' => $data['promotor_id'],
                    'casa_evento_id' => auth()->user()->casa_evento_id,
                    'event_id' => $data['event_id'],
                    'status' => 'casa_emissor'
                ]);

                 //Send the email
                 $promoterEmail = Convidado::where('convidados.status','aceite')
                 ->join('promotors' , 'convidados.promotor_id' , '=' , 'promotors.id')
                 ->join('users' , 'promotors.id' , 'users.promotor_id')
                 ->get(['users.email']);
                 
                 foreach( $promoterEmail as $promotor){
                  Mail::to($promotor->email)->send(new CasaEventoEnvioContratos);
                  }
                //Send the email

                $notification = new Notificacao();
                 $notification->text = 'Recebeu o contrato contrato de trabalho consulte a sua dashboard para fazer o download';
                 $notification->promotor_id = $newContratoArtista['promotor_id'];
                 $notification->casa_evento_id = auth()->user()->casa_evento_id;
                 $notification->save();

                return back()->with('sentContrato' , 'O seu contrato foi enviado com sucesso');

            }catch(\Exception $ex){
                dd($ex->getMessage());
            }
        }            
            
        
        public function sentContratos(){
            $response['contractsOfArtists'] = Contrato::join("artistas" , 'contratos.artista_id' , '=' , 'artistas.id')
            ->where('status','artista_emissor')
            ->get();

            $response['contractsOfPromoters'] = Contrato::join("promotors" , 'contratos.promotor_id' , '=' , 'promotors.id')
            ->where('status','promotor_emissor')

            ->get();

            return view('casaevento.tables.contratos-enviados-recebidos',$response);
        }


}
