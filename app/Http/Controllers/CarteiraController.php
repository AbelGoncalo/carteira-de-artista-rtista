<?php

namespace App\Http\Controllers;

use App\Models\{Message,Artista,User,Pagamento,EmissaoCarteira,Event, CasaEvento, Promotor};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\{PromotorEventoMail,CarteiraCasaEventoMail,CarteiraArtistaMail,CarteiraPromotorMail,
    CarteiraArtistaValidadoMail
    };

use Illuminate\Support\Facades\Session;

class CarteiraController extends Controller {

    public function carteiraDashboard(){
        $response['artistsWithoutCarteira'] = EmissaoCarteira::where('modalidade',NULL,)
        ->where('validate',NULL)
        ->where('created_at',NULL)
        ->get();
        $response['pendentPaymentReceip'] = Pagamento::where('status', 'Pendente')->get();
        $response['pendentdHouseOfEvents'] = User::where('perfil','casa_evento')->where("status" , "pendente")->get();
        $response['validatedHouseOfEvents'] = User::where('perfil','casa_evento')->where("status" , "verificado")->get();
        $response['carteira_users'] = User::where('perfil','carteira')->where("status" , "verificado")->get();
        $response['pendentArtists'] = \DB::table('users')->where('perfil','artista')->where('status','pendente')->get();
        $response['allevents'] = Event::get();
        foreach($response['pendentArtists'] as $artist){

            if($artist->status === 'notificado'){
                $response['pendentArtists'] = User::where('perfil','artista')->where('status','notificado')->get();
            }else if($artist->status === 'pendente'){
                $response['pendentArtists'] = User::where('perfil','artista')->where('status','pendente')->get();
            }else{
                $response['pendentArtists'] = [];
            }

        }
        $response['pendentPromoterEVents'] = User::where('perfil','promotor_evento')->where('status' , 'pendente')->get();
        $response['validatedPromotorEvents'] = User::where('perfil','promotor_evento')->where('status' , 'verificado')->get();
        $response['validatedArtists'] = User::where('perfil','artista')->where('status' , 'verificado')->get();
        $response['messages'] = Message::where('status','nao_lida')->get();

        return view('carteira.dashboard.index',$response);
    }




    public function pendentArtists(){
        $response['pendentArtists'] = User::where('perfil','artista')->where('status' , 'pendente')
        ->orWhere('status' , 'notificado')
        ->join('artistas' , 'users.artista_id' , '=' , 'artistas.id')
        //->where('artistas.deleted_at', '=' , NULL)
        ->get();
        return view('carteira.tables.artistas_pendentes',$response);
}

public function carteiraUsers(){
    $response['carteira_users'] = User::where('perfil','carteira')->get();
    return view('carteira.tables.utilizadores_carteira',$response);
}


public function storeAccountUsersCarteira(Request $request){
    
    try{
    $data = $request->all();
    $user = User::create([
    'name' =>  $data['name'],
    'email' => $data['email'],
    'perfil' => 'carteira',
    'status' => 'verificado',
    'password' => bcrypt($data['password']),
    ]);

    if($user){
    return back()->with('successToCreateUserAdminCarteira' , 'Conta de usuário criada com sucesso.');
    }

    }catch(\Exception $e){
     return back()->with('ErrToCreateUserAdminCarteira' , $e->getMessage());
    }

}

public function promoterEventsPendent(){
    $response['pendentPromoterEvents'] = User::Join('promotors' , 'users.promotor_id' , "=" , 'promotors.id')
    ->where('perfil' , 'promotor_evento')
    ->where('status' , 'pendente')
    ->get();

    return view("carteira.tables.promotores_eventos_pendentes",$response);
}


public function validateEventPromoter($id){
    try{
        $promoters = User::where('promotor_id','=',$id)->get();
        foreach($promoters as $promoter){
        $promoter->status = 'verificado';
        $promoter->save();

        //Send email
        Mail::to($promoter->email)->send(new PromotorEventoMail);
        return back()->with('promotorValidated', 'Promotor de eventos validado com sucesso');
    }

    }catch(\Exception $ex){
        return back()->with('errValidateEventPromoter' , $ex->getMessage());
    }

}

public function tableValidatedEventPromoter(){
    $response['validatedArtists'] = User::join("artistas" , "users.artista_id" , '=' , 'artistas.id')->where('status' , 'verificado')
    ->where('perfil' , 'artistas')->get();
    return view("carteira.tables.promotores_eventos_validados", $response);
}

public function tableValidatedArtists(){
    $response['validatedArtists'] = User::join('artistas' , 'users.artista_id' , '=' ,'artistas.id')->where('perfil' ,'artista')
    ->where('status','verificado')
    ->get();
    return view("carteira.tables.artistas_validados",$response);
}

public function blockUserCarteira($id){
    $users = User::find($id);
    $users->status = 'pendente';
    $users->save();
    return back();
}


public function deleteUserCarteira($id){

}

public function pendentHouseOfEvents(){
    $response['pendentHuseOfEvents'] = User::join('casa_eventos' , 'users.casa_evento_id' , '=' , 'casa_eventos.id')
    ->where('perfil' ,'casa_evento')
    ->where('status' , 'pendente')->paginate(8);

    return view("carteira.tables.casa_eventos_pendentes",$response);
}

public function validateHouseOfEvents($id){
    try{
    $houseOfEvent = User::where('casa_evento_id',$id)->get();
    foreach($houseOfEvent as $house){
    $house->status = 'verificado';
    $house->save();

    //Send email
    Mail::to($house->email)->send(new CarteiraCasaEventoMail);
    }

    return back()->with('validatedPendentHouseOfEvents' , "A casa de eventos foi validada com sucesso.");

    }catch(\Exception $ex){
        return back()->with('errValidatedPendentHouseOfEvents' , $ex->getMessage());

    }
}


public function notificateArtistByEmail($id){
    try{
        $artists = User::where('artista_id',$id)->get();
        foreach($artists as $artist){
        $artist->status = 'notificado';
        $artist->save();
        //Send email
        Mail::to($artist->email)->send(new CarteiraArtistaMail($id));

        return back()->with('notificatedArtist', 'Notificamos ao artista contendo as informações dos próximos passos a seguir');
    }

    }catch(\Exception $e){
        return back()->with('errNotificateArtist', $e->getMessage());
    }

}


public function tableValidatedHouseOfEvents(){
    $response['validatedHousesOfEvents'] = User::join('casa_eventos' , 'users.casa_evento_id' , '=' ,'casa_eventos.id')->where('perfil' ,'casa_evento')
    ->where('status','verificado')
    ->get();
    return view('carteira.tables.casa_eventos_validadas',$response);
}


public function deleteUserCarteiraAdmin($id){
    try{
        $user = User::find($id)->delete();
        return back();
    }catch(\Exception $ex){
        return back()->with('errToDeleteUserAdmin',$ex->getMessage());
    }

}


public function tableReceiptPaymentPendent(){
    $response['proof'] = Pagamento::Join("artistas" , "pagamentos.artista_id" , "=" , "artistas.id")->get();
    return view('carteira.tables.comprovativos_pagamentos_pendentes',$response);
}

public function validatePaymentFilePdf($id, Request $request){
    try{
        $payments = Pagamento::where('artista_id',$id)->get();
        foreach($payments as $payment){
        $payment->status = 'verificado';
        $payment->save();

        //Validate user
         $users = User::where('artista_id',$payment['artista_id'])->where('status' , 'notificado')->where('perfil' ,'artista')->get();
         foreach($users as  $user){
         $user->status = 'verificado';
         $user->save();

        $payments = Pagamento::where('artista_id',$id)->get();
         foreach($payments as $payment){
             $emissaoCarteira = EmissaoCarteira::create([
                'artista_id' =>$payment['artista_id'],
                'modalidade' => $request->modalidade,
                'validate' => date('Y-m-d',strtotime('+1 year')),
             ]);

         }         

         //Send email
         try{
            $email = Mail::to($user->email)->send(new CarteiraArtistaValidadoMail);
             (isset($email)) ? $email : '';
             return back()->with('makeVerifiedArtist' , 'O artista foi validado com sucesso.');

         }catch(\Exception $e){
             return back();
            }
        }

    }

}catch(\Exception $e){
        dd($e->getMessage());
        return back()->with('errMakeVerifiedArtist' , $e->getMessage());
    }
}


public function artiststWithoutCarteira(){
    $response['artistsWithoutCarteira'] = EmissaoCarteira::join('artistas' , 'emissao_carteiras.artista_id' ,'=', 'artistas.id')->where('modalidade',NULL,)
    ->where('validate',NULL)
    ->where('emissao_carteiras.created_at',NULL)
    ->get();

    return view("carteira.tables.artistas_pendentes_emissao-carteira",$response);
}


public function rejeitarInscricao($id){

    $artist = Artista::where("id",$id)->get();        
   
    foreach($artist as  $artists){
        $artists->delete();
    }

    $users = User::where("artista_id",$id)->get();
    foreach( $users as  $user){
        $user->delete();
    }

    return back();
}


public function showAllEvents(){
    $response['events'] = Event::join('casa_eventos' , 'events.casa_evento_id' , '=' , 'casa_eventos.id')->get();
    return view('carteira.pages.consultar-todos-eventos',$response);
}


public function enviarMensagemATodos(Request $request){

    try{        

        if($request->destinatario === 'Todos'){
            
            $artistasAll =  Artista::get();  
            $casaEventosAll =  CasaEvento::get();  
            $promotoresAll =  Promotor::get(); 

                
                foreach($artistasAll as $artist){
                    $message = Message::create([
                     'title' => $request->title,
                     'message' => $request->message,
                     'artista_id' => $artist->id,
                     'user_id' => auth()->user()->id,
                    ]);

                }
                
                foreach($casaEventosAll as $casaEvento){
                    $casaEvento = Message::create([
                     'title' => $request->title,
                     'message' => $request->message,
                     'casa_evento_id' => $casaEvento->id,
                     'user_id' => auth()->user()->id,
                    ]);
                }


                foreach($promotoresAll as $promotor){
                    $promotor = Message::create([
                     'title' => $request->title,
                     'message' => $request->message,
                     'promotor_id' => $promotor->id,
                     'user_id' => auth()->user()->id,
                    ]);
                }
                return back()->with("allMessageSentToUsers" , "A sua mensagem foi enviada com sucesso a todos os usuários");
            }else{
                return back();
            }
    

    }catch(\Exception $e){
        dd($e->getMessage());
    }
}

    public function listMessagesByArtists(){
        $response['allmessagesForArtists'] = Message::join('artistas' , 'messages.artista_id','=','artistas.id')
        ->orderBy('messages.created_at', 'ASC')->paginate(3);      
        return view('carteira.pages.messages.mensagens-artistas',$response);
    }

    
    public function listMessagesByPromoters(){
        $response['allmessagesForPromoters'] = Message::join('promotors' , 'messages.promotor_id','=','promotors.id')
        ->orderBy('messages.created_at', 'ASC')->paginate(3);      
        return view('carteira.pages.messages.mensagens-promotores',$response);
    }

    
    public function listMessagesByHousesOfEvents(){
        $response['allmessagesForHouseOfEvents'] = Message::join('casa_eventos' , 'messages.casa_evento_id','=','casa_eventos.id')
        ->orderBy('messages.created_at', 'ASC')->paginate(3);      
        return view('carteira.pages.messages.mensagens-casa-eventos',$response);
    }


    public function seeMessages(){

        $response['allmessages'] = \DB::table("messages")->get();
          
        //->join('casa_eventos' , "messages.casa_evento_id" , "=" , "casa_eventos.id")
       
        return view('carteira.pages.messages.mensagens',$response);
    }

    public function listAllHousesOfEvent(){
        $response['calendars'] = CasaEvento::get();
        return view('carteira.pages.casas-eventos',$response);
    }

    public function formCalendar(Request $request, $id){

        if ($request->ajax()){
            $data = Event::whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->where("casa_evento_id", $id)
                ->get(['id', 'title', 'start', 'end', 'created_at']);
                return response()->json($data);
            }
        //$response['calendarHouse'] = Event::where('casa_evento_id',$id)->get();
        return view('carteira.pages.consultar-calendario-eventos',['id'=>$id]);
    }



   

  


























public function tableReceiptPaymentPendentPromotor(){

    $response['proof'] = Pagamento::Join("promotors", "pagamentos.promotor_id", "=", "promotors.id")->get();

    
    return view('carteira.tables.comprovativos_pagamentos_pendentes_promotors',$response);
}






public function validatePaymentFilePdfPromotor($id, Request $request){
    
    try{
        $payments = Pagamento::where('promotor_id',$id)->get();

        
        foreach($payments as $payment){
            $payment->status = 'verificado';
            $payment->save();

            //Validate user

       
            $users = User::where('promotor_id',$payment['promotor_id'])->where('status' , 'notificado')->where('perfil' ,'promotor_evento')->get();
        
           

            foreach($users as  $user){

               
                $user->status = 'verificado';
    
                $user->save();



                $payments = Pagamento::where('promotor_id',$id)->get();

                    // //  foreach($payments as $payment){
                    // //      $emissaoCarteira = EmissaoCarteira::create([
                    // //         'promotor_id' =>$payment['promotor_id'],
                    // //         'modalidade' => $request->modalidade,
                    // //         'validate' => date('Y-m-d',strtotime('+1 year')),
                    // //      ]);

                    //  }
         

                //Send email
                try{
                    $email = Mail::to($user->email)->send(new CarteiraArtistaValidadoMail);
                    (isset($email)) ? $email : '';
                    return back()->with('makeVerifiedArtist' , 'O promotor foi validado com sucesso.');

                }catch(\Exception $e){
                    return back();
                }
            }

        }

    }catch(\Exception $e){
            dd($e->getMessage());
            return back()->with('errMakeVerifiedArtist' , $e->getMessage());
    }
}

// Pagamento a carteira por transparencia Promotor
public function notificatePromotorByEmail($id){
    try{
       
        $promotores = User::where('promotor_id',$id)->get();
        foreach($promotores as $promotor){
            //dd($promotor->email);
            $promotor->status = 'notificado';
            $promotor->save();
        //Send email

        Mail::to($promotor->email)->send(new CarteiraPromotorMail($id));
        }    
        return back()->with('notificatedPromotor', 'Notificamos ao Promotor contendo as informações dos próximos passos a seguir');
        

    }catch(\Exception $e){
        return back()->with('errNotificateArtist', $e->getMessage());
    }

}

public function rejeitarInscricaoPromotor($id){

    $artist = Artista::where("id",$id)->get();        
   
    foreach($artist as  $artists){
        $artists->delete();
    }

    $users = User::where("artista_id",$id)->get();
    foreach( $users as  $user){
        $user->delete();
    }

    return back();
}
 

}


