<?php

namespace App\Http\Controllers;

use App\Models\{Artista,Pagamento,Galeria,User,EmissaoCarteira,Event,Convidado,
     Message,CasaEvento, Contrato};

use Illuminate\Http\Request;
use App\Http\Requests\PromotorEventosRequest;
use App\Mail\PromotorEventoInscricaoMail;
use App\Services\RestCountriesAPI;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\formPromotorEvento;
use Illuminate\Support\Facades\Hash;
use App\Mail\PromotorCarteiraEnviaComprovativoPagamento;


class PromotorEventoController extends Controller{

    public function index(){

        return view('promotor_eventos.index');
    }

    public function formCreateAccount(){
        $countries = RestCountriesAPI::getAllCountries();
        return view("promotor_eventos.forms.criar_conta",compact("countries"));
    }

    public function storeAccount(formPromotorEvento $request){
        try{
            $data = $request->all();
            //Saving the file \Hash::of BI attachment

            $destinyPathName = "/public/files/bilhete_identidade_anexos";
            $file = $request->file("bilhete_identidade_anexo");
            $name = $file->getClientOriginalName();
            $path = $file->storeAs($destinyPathName, $name);
            $data['bilhete_identidade_anexo'] = $name;

            $promotorEventos = Promotor::create($data);

            $user = new User();
            $user->name = $data["nome"];
            $user->email = $data["email"];
            $user->password = \Hash::make($data["password"]);
            $user->perfil = "promotor_evento";
            $user->promotor_id = $promotorEventos["id"];
            $user->save();

            //Send email
            
            //Esse try-catch logo abaixo é para executar o código sem ter conexão a internet
            try{
                $admins = User::where('perfil','carteira')->where('status' ,'verificado')->get();
                $name = $data['nome'];
                $admins = User::where('perfil','carteira')->where('status' ,'verificado')->get();
                foreach($admins as $admin){
                $email = Mail::to($admin->email)->send(new PromotorEventoInscricaoMail($name));
            }
            return redirect()->route("comissao.profissional.artista")->with("message","A sua conta foi criada com êxito e encontra-se em um estado de avaliação, consulte o seu e-mail para poder proceder o login na plataforma.");

            }catch(\Exception $e){
                if($promotorEventos && $user){
                    return redirect()->route("comissao.profissional.artista")->with("message","A sua conta foi criada com êxito e encontra-se em um estado de avaliação, consulte o seu e-mail para poder proceder o login na plataforma.");
                }

            }

            }catch(\Exception $e){
                return back()->with("catch", $e->getMessage());
            }


        }

        public function promotorEventosDashboard(){
            $response['pendeInvites'] = Convidado::where('promotor_id' , Auth::user()->id)
            ->where('status', 'pendente')->get();

            $response['acceptedInvites'] = Convidado::where('promotor_id' , Auth::user()->id)
            ->where('status', 'aceite')->get();

            $response['deniedInvites'] = Convidado::where('promotor_id' , Auth::user()->id)
            ->where('status', 'rejeitado')->get();

            $response['artistas'] = Artista::get();
            $response["casa_eventos"] = CasaEvento::get();
            $response["promotor_casa_eventos"] = CasaEvento::where('promotor_id',Auth::user()->id ?? '')->get();


            return view("promotor_eventos.dashboard.index", $response);
        }

        public function dashboardPromotorEventos(Request $request){
            if ($request->ajax()) {
                $data = Event::whereDate('start', '>=', $request->start)
                    ->whereDate('end',   '<=', $request->end)
                    ->get(['id', 'title', 'start', 'end']);

                return response()->json($data);
            }
            return view('promotor_eventos.dashboard.index');
        }



    public function saveCalendar(Request $request){
    $data = $request->all();
    $data['user_id'] = Auth::user()->id;
    $newEvent = Event::create($data);
    return back()->with('eventCreated' , 'Evento criado com sucesso');
    }

    public function saveHouseOfEventOfPromotor(Request $request){
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
            $file = $request->file("foto_iltustrativa_espaco");
            $name = $file->getClientOriginalName();
            $path = $file->storeAs($destinyPathName, $name);
            $data['foto_iltustrativa_espaco'] = $name;

            $casaEvento = CasaEvento::create([
                'nome' => $data['nome'],
            'provincia' => $data['provincia'],
            'municipio' => $data['municipio'],
            'bairro' => $data['bairro'],
            'ponto_referencia' => $data['ponto_referencia'],
            'foto_iltustrativa_espaco' => $data['foto_iltustrativa_espaco'],
            'documentos' => $novoNomeArquivos,
            'promotor_id' =>Auth::user()->id,
            ]);

            return back()->with('houseOfEventCreatedByPromotor', 'A sua casa de evento foi cadastrada com êxito.');

        }catch(\Exception $e){
            return back()->with("errorStoreCasaEventoByPromotor", $e->getMessage());
        }
    }


    public function listMessages(){
        return view("promotor_eventos.forms.mensagens");
    }

    public function listCasaventos(){

        $casas = CasaEvento::get();

        return view("promotor_eventos.detalhes.casaEvento",compact('casas'));
    }

    public function listArtista(){

        $artistas = Artista::get();
        return view("promotor_eventos.detalhes.artistas", compact('artistas'));
    }

    public function listConviteAceites(){

       // $convites = Convidado::where('promotor_id',Auth::user()->promotor_id)->get();

        // $convites = \DB::table("convidados")->where('convidados.promotor_id' , Auth::user()->promotor_id)
        //  ->join('casa_eventos', 'convidados.casa_evento_id','=', 'casa_eventos.id')
        //  ->where('convidados.promotor_id',4)
        //  ->get();


        $convites = Convidado::join('promotors' , 'convidados.promotor_id' , "=" , 'promotors.id')->where('promotor_id',auth()->user()->promotor_id)->get(['convidados.*']);
        
        return view("promotor_eventos.detalhes.convite", compact("convites"));
    }



    public function sendMessageToCarteira(Request $request){
        try{
            $data = $request->all();
            //$message = Messages
            $data['promotor_id'] = Auth::user()->promotor_id;
            $data['user_id'] = Auth::user()->id;
            $message = Message::create($data);
            return redirect()->route('carteira.artista.promotor.eventos.dashboard')->with('sentMessage', 'A sua mensagem foi enviada com sucesso.');

        }catch(\Exception $e){

            return back()->with("errorSentMessage" , $e->getMessage());
        }
    }


    public function aceitarConvite($id){

       // $convites = Convidado::find($id);
        
          $event = Convidado::find($id)->update([
              'status' => 'aceite'
                                 
         ]);
    
        return redirect()->route('carteira.artista.promotor.list.conviteAceites');
    }

    public function rejeitarConvite($id){

        $event = Convidado::find($id)->update([
            'status' => 'rejeitado'                      
       ]);
        return redirect()->route('carteira.artista.promotor.list.conviteAceites');
    }


    public function viewperfil(){

        $promotors = User::join('promotors', 'users.promotor_id','=', 'promotors.id')
        ->where('users.promotor_id',Auth::user()->promotor_id)->get();

        foreach( $promotors as $promotor ){
            $promotor = $promotor;
            $promotor->save();
        }

       // dd( $promotor);
        return view("promotor_eventos.detalhes.perfils", compact("promotor"));
    }

   

    public function mudarSenha(Request $request){

        
        try {

            $user = User::find(auth()->user()->id);

            if($user){

                if(Hash::check($request->cpassword,$user->password))
                {
                    $user->password = Hash::make($request->npassword);
                    $user->email = $request->email;

                    $user->save();
                    return back()->with("sucesso", "Operação Realizada com sucesso ");
                }else{
                    return back()->with("catch", "Senha Actual Inválida!");
                }
            }
        } catch (\Exception $th) {

            return back()->with("catch", "Falha ao realizar operação");
        }

    }

    
    public function detalhesCasaEventos($id){
        
        $casaeventos = CasaEvento::where('id',$id)
        ->get();
        foreach(  $casaeventos as  $casaevento ){
            $casaevento = $casaevento;
            $casaevento->save();
           
        }

        return view("promotor_eventos.detalhes.casaevento.detalhe_casaevento", compact("casaevento"));
    }


    public function detalheArtista($id){
        
        $artistas = Artista::where('id',$id)
        ->get();
        foreach(  $artistas as  $artista ){
            $artista = $artista;
            $artista->save();  
        }

        return view("promotor_eventos.detalhes.artista.detalhe_artista", compact("artista"));
    }


    public function sendComprovativoPaymentPdf($id){
        return view('promotor_eventos.forms.enviar-comprovativo-pagamento',['id' =>$id]);
    }


    public function finishSendDetailsOfPaymentPromotor(Request $request,$id){
        try{
            //Treating the file
            $data = $request->all();
            $destinyPathName = "/public/files/comprovativo_pagamentos/";
            $file = $request->file("comprovativo");
            $name = $file->getClientOriginalName();
            $path = $file->storeAs($destinyPathName, $name);
            $data['comprovativo'] = $name;

            $paimentReceipt = Pagamento::create([
                'comprovativo' => $data['comprovativo'],
                'promotor_id'=> $id
            ]);

             //Send email
             try{
                 $admins = User::where('perfil','carteira')->where('status' ,'verificado')->get();
                 foreach($admins as $admin){

                  $sendEmailToCarteira = Mail::to($admin->email)->send(new PromotorCarteiraEnviaComprovativoPagamento);
                  if(isset($sendEmailToCarteira) ? $sendEmailToCarteira : ''){
                        //Will send the email following the rule of this conditional operation.
                        return redirect()->to('/')->with('receptionPaimentReceipt' , "Recebemos o seu comprovativo de de pagamento, será notificado pelo seu email para os passos seguintes.");
                    }
                 }

             }catch(\Exception $e){
                 if($paimentReceipt){
                     return redirect()->to('/')->with('receptionPaimentReceipt' , "Recebemos o seu comprovativo de de pagamento, será notificado pelo seu email para os passos seguintes.");
                 }
            }

        }catch(\Exception $e){
            return back()->with('errReceptionPaimentReceipt' , $e->getMessage());
        }
    }


    public function listarContratos(){
       

        $response['contractsOfPromoters'] = Contrato::join("casa_eventos" , 'contratos.promotor_id' , '=' , auth()->user()->promotor_id)
        ->where('status','promotor_emissor')
        ->get();

        return view('casaevento.tables.contratos-enviados-recebidos',$response);
    }



   


}
