<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RestCountriesAPI;
use App\Http\Requests\{ArtistRequest,NotificarCarteiraRequest};
use App\Mail\ArtistaInscricaoMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\{Artista,Pagamento,Galeria,User,EmissaoCarteira,Event,Convidado, Message};
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Mail;
use App\Mail\ArtistaCarteiraEnviaComprovativoPagamento;

class ArtistaController extends Controller{

    public function formulario_criacao_conta(){

        try {

            $response['paises'] = RestCountriesAPI::getAllCountries();
            return view("artistas.forms.index",$response);

        } catch (\Exception $th) {
            return back()->with("catch", "Falha ao realizar operação");
        }
    }

    public function enviar_dados(ArtistRequest $request)
    {

        //DB::beginTransaction();
        try {
            $data = $request->all();
            //dd($request->all());


            //VARIAVES QUE CARREGAM O HASH DOS ARQUIVOS CARREGADOS
            $bi ="";
            $historico ="";
            $declaracao ="";
            $associacao ="";
            $foto_meio_corpo ="";
            //PREPARA ARQUIVOS PARA UPLOAD
            if($data['foto_meio_corpo'] and$data['bi_anexo'] and $data['historial_artistico_anexo'] and $data['declaracao_compromisso_honra_anexo'] and $data['doc_filiacao_associacao_artista_anexo'] and $data['fotos_palco'])
            {
                //PREPARA OS FICHEIROS PARA UPLOAD
                $bi = md5($data['bi_anexo']->getClientOriginalName()).'.'.$data['bi_anexo']->getClientOriginalExtension();
                $historico = md5($data['historial_artistico_anexo']->getClientOriginalName()).'.'.$data['historial_artistico_anexo']->getClientOriginalExtension();
                $declaracao = md5($data['declaracao_compromisso_honra_anexo']->getClientOriginalName()).'.'.$data['declaracao_compromisso_honra_anexo']->getClientOriginalExtension();
                $associacao = md5($data['doc_filiacao_associacao_artista_anexo']->getClientOriginalName()).'.'.$data['doc_filiacao_associacao_artista_anexo']->getClientOriginalExtension();
                $foto_meio_corpo = md5($data['foto_meio_corpo']->getClientOriginalName()).'.'.$data['foto_meio_corpo']->getClientOriginalExtension();

                //FAZER UPLOAD DOS FICHEIROS
                $data['bi_anexo']->storeAs('/public/bi/',$bi);
                $data['historial_artistico_anexo']->storeAs('/public/historial/',$historico);
                $data['declaracao_compromisso_honra_anexo']->storeAs('/public/declaracao/',$declaracao);
                $data['doc_filiacao_associacao_artista_anexo']->storeAs('/public/associacao/',$associacao);
                $data['foto_meio_corpo']->storeAs('/public/associacao/',$foto_meio_corpo);

                for($i=0;$i < count($data['fotos_palco']); $i++){
                    $fotos[$i] = md5($data['fotos_palco'][$i]->getClientOriginalName()).'.'.$data['fotos_palco'][$i]->getClientOriginalExtension();
                    Galeria::create([
                        'user_id' =>'1',
                        'foto'=>$fotos[$i],
                    ]);

                    $data['fotos_palco'][$i]->storeAs('/public/fotos/',$fotos[$i]);
                }
            }

            // if(Carbon::parse($data['data_nascimento'])->age == 0 || Carbon\Carbon::parse(data['data_nascimento'])->age <= 17)
            // {
            //     return back()->with("catch", "Lamentamos sua Idade não lhe permite fazer inscrição");
            // }

            $artista =  Artista::create([
            'nome_completo'=>$data['nome_completo'],
            'nome_pai'=>$data['nome_pai'],
            'categoria'=>$data['categoria'],
            'nome_artistico'=>$data['nome_artistico'],
            'nome_mae'=>$data['nome_mae'],
            'data_nascimento'=>$data['data_nascimento'],
            'nacionalidade'=>$data['nacionalidade'],
            'naturalidade'=>$data['naturalidade'],
            'genero'=>$data['genero'],
            'estado_civil'=>$data['estado_civil'],
            'telefone'=>$data['telefone'],
            'telefone_alternativo'=>$data['telefone_alternativo'],
            'email'=>$data['email'],
            'endereco'=>$data['endereco'],
            'numero_bi'=>$data['numero_bi'],
            'bi_anexo'=>$bi,
            'historial_artistico_anexo'=>$historico,
            'declaracao_compromisso_honra_anexo'=>$declaracao,
            'doc_filiacao_associacao_artista_anexo'=>$associacao,
            'foto_meio_corpo'=>$foto_meio_corpo,
         ]);

          //CRIAR DADOS DE ACESSO DO ARTISTA
          User::create([
              'name' => $data['nome_completo'],
              'email' => $data['email'],
              'password' => Hash::make($data['password']),
              'perfil' => 'artista',
              'artista_id' => $artista->id,
            ]);
            
            //Send email
            try{
                $admins = User::where('perfil','carteira')->where('status' ,'verificado')->get();
                foreach($admins as $admin){ 
                    $name = $data['nome_completo'];               
                    $email = Mail::to($admin->email)->send(new ArtistaInscricaoMail($name));
                }
                  
                return redirect()->to('/')->with('sucesso',"A sua conta foi criada com êxito e encontra-se em um estado de avaliação, consulte o seu e-mail para poder proceder o login na plataforma.");

            }catch(\Exception $e){
                return redirect()->to('/')->with('sucesso',"A sua conta foi criada com êxito e encontra-se em um estado de avaliação, consulte o seu e-mail para poder proceder o login na plataforma.");
            }

        // DB::commit();

        } catch (\Exception $th) {
           dd($th->getMessage());

        }
    }

    public function painel_artista(Request $request){
        try {
            if ($request->ajax()) {
                $data = Event::whereDate('start', '>=', $request->start)
                    ->whereDate('end',   '<=', $request->end)
                    ->where('user_id', '=', auth()->user()->id)
                    ->get(['id', 'title', 'start', 'end']);

                return response()->json($data);
            }




            return view('artistas.minha-agenda.index',[
            'aceites'=>Convidado::join('events','convidados.event_id','events.id')
                ->select('events.title','events.start','events.end','convidados.texto','convidados.id as convidadoID')
                ->where('convidados.artista_id',auth()->user()->artista_id)
                ->where('convidados.status','aceite')
                ->orderBy('convidados.id','desc')
                ->count(),
                'rejeitados'=>Convidado::join('events','convidados.event_id','events.id')
                ->select('events.title','events.start','events.end','convidados.texto','convidados.id as convidadoID')
                ->where('convidados.artista_id',auth()->user()->artista_id)
                ->where('convidados.status','rejeitado')
                ->orderBy('convidados.id','desc')
                ->count(),

                'pendentes'=>Convidado::join('events','convidados.id','events.id')
                ->select('events.title','events.start','events.end','convidados.texto','convidados.id as convidadoID')
                ->where('convidados.artista_id',auth()->user()->artista_id)
                ->where('convidados.status','pendente')
                ->orderBy('convidados.id','desc')
                ->count(),
            ]);
        } catch (\Exception $th) {
            return back()->with("catch", "Falha ao realizar operação");
        }
    }

    public function painel_artista_carteira(){
         try {

            $carteira = EmissaoCarteira::where('artista_id', '=', auth()->user()->artista_id ?? '')->first();
           // $artista = Artista::find(auth()->user()->artista_id);
            $artista = Artista::where("id" , auth()->user()->artista_id)->get();
            $validadeDaCarteira = \Carbon\Carbon::parse($carteira->validate)->greaterThan(date('Y-m-d'));
            $qrCodes = QrCode::size(80)->Color(62, 41, 35)->generate('http://127.0.0.1:8000/artistas/painel/minha-carteira');



            return view('artistas.minha-carteira.index',compact('carteira','validadeDaCarteira','qrCodes','artista'));



         } catch (\Exception $th) {

            return back()->with("catch", "Falha ao realizar operação");
         }
    }
    public function painel_artista_notificacoes(){
        try {

            return view('artistas.notificacoes.index');
        } catch (\Exception $th) {
            return back()->with("catch", "Falha ao realizar operação");
        }
    }
    public function painel_artista_enviar_notificao(NotificarCarteiraRequest $request){
        try {
            
            Message::create([
                'title'=>$request->titulo,
                'message'=>$request->mensagem,
                'artista_id'=>auth()->user()->artista_id,
                'user_id' =>auth()->user()->id
            ]);

            return back()->with("sucesso", "A sua mensagem foi enviada com sucesso");
        } catch (\Exception $th) {
            return back()->with("catch", "Falha ao realizar operação");
        }
    }
    public function painel_minha_conta(){
        try {

            return view('artistas.minha_conta.index');
        } catch (\Exception $th) {
            return back()->with("catch", "Falha ao realizar operação");
        }
    }
    public function painel_artista_pagamentos(){
        try {

            return view('artistas.pagamento.index');
        } catch (\Exception $th) {
            return back()->with('catch',"Falha ao realizar Operação");

        }
    }


    ///METODO PARA CADASTRAR EVENTOS
    public function criarEvento(Request $request){


        // switch ($request->type) {
        //     case 'add':

        //         $event = Event::create([
        //             'title' => $request->title,
        //             'start' => $request->start,
        //             'end' => $request->end,
        //             'user_id' => auth()->user()->id,
        //         ]);
        //         return response()->json($event);
        //         break;

        //         case 'update':
        //             $event = Event::find($request->id)->update([
        //                 'title' => $request->title,
        //                 'start' => $request->start,
        //                 'end' => $request->end,
        //                 'user_id' => auth()->user()->id,
        //         ]);
        //         return response()->json($event);
        //         break;

        //     case 'delete':
        //         $event = Event::find($request->id)->delete();
        //         return response()->json($event);
        //         break;

        //     default:
        //     return response()->json([
        //         'title' =>'Error',
        //     ]);
        //         break;


        return response()->json([
          'title' =>'Error',
        ]);


}


    public function painel_galeria(){
        try {

            return view('artistas.galeria.index');
        } catch (\Throwable $th) {
            return back()->with('catch',"Falha ao realizar Operação");

        }
    }
    public function painel_fatura (){
        try {

            return view('artistas.fatura.index');
        } catch (\Throwable $th) {
            return back()->with('catch',"Falha ao realizar Operação");

        }
    }

    public function sendDetailsPaymentPdf($id){
        return view('artistas.forms.enviar-comprovativo-pagamento',['id' =>$id]);
    }

    public function finishSendDetailsOfPayment(Request $request,$id){
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
                'artista_id'=> $id
            ]);

             //Send email
             try{
                 $admins = User::where('perfil','carteira')->where('status' ,'verificado')->get();
                 foreach($admins as $admin){

                  $sendEmailToCarteira = Mail::to($admin->email)->send(new ArtistaCarteiraEnviaComprovativoPagamento);
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

    public function tableReceiptPaymentPendent(){

    }

    public function solicitaEmissaoCarteira(Request $request){
        try{
            $send = new Message();
            $send->user_id  = auth()->user()->id;
            $send->artista_id  = auth()->user()->artista_id;
            $send->title  = 'Pedido de emissão de carteira';
            $send->message = 'O artista ' .auth()->user()->name.' solicitou emissão de carteira';
            $send->save();

            return back();
            
        }catch(\Exception $ex){
            dd($ex->getMessage());
        }
            
    }

  

}
