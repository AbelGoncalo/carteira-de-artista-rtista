<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Artista,User};
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function authentication(Request $request){
        try {

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

        if(Auth::attempt($credentials) && Auth::user()->status === 'pendente' || Auth::user()->status === 'notificado'){
            return back()->with('userStatusPendent', 'O seu perfil encontra-se em estado de validação para poder aceder a plataforma, o mesmo deve ser aprovado pela carteira consulte o seu e-mail para saber mais.');
        }

        if(Auth::user()->perfil === "promotor_evento" && Auth::user()->status === "verificado"){
            return redirect()->route("carteira.artista.promotor.eventos.dashboard");
        }
        if(Auth::user()->perfil === "artista" && Auth::user()->status === "verificado"){
            return redirect()->route("carteira.painel.artista");
        }

        if(Auth::user()->perfil === "carteira" && Auth::user()->status === "verificado"){
            return redirect()->route("carteira.artista.admin.dashboard");
        }

        if(Auth::user()->perfil === "casa_evento" && Auth::user()->status === "verificado"){
            return redirect()->route("carteira.artista.casa.evento.dashboard");
        }

        }else{
            return back()->with("authenticationError", "As suas credenciais estão incorretas, tente novamente");
        }

    } catch (\Throwable $th) {

        return back()->with("catch", "Falha ao realizar operação");
    }
    }

    public function logout(Request $request){


        try {

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->to('/');

        } catch (\Throwable $th) {

            return back()->with("catch", "Falha ao realizar operação");
        }


    }


    public function formLogin(){
        try {
            //code...
            return view("authentication.index");
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with("catch", "Falha ao realizar operação");
        }
    }


    public function mudarSenha(Request $request){

        $this->validate($request,[
                'cpassword'=>'required|min:8',
                'npassword'=>'required|min:8',
                'cnpassword'=>'required|min:8',
        ],[
            'cpassword.required'=>'Obrigatório',
            'cpassword.min'=>'Deve ter 8 Caracteres',
            'npassword.required'=>'Obrigatório',
            'npassword.min'=>'Deve ter 8 Caracteres',
            'cnpassword.required'=>'Obrigatório',
            'cnpassword.min'=>'Deve ter 8 Caracteres',
            ]);

            try {

                $user = User::find(auth()->user()->id);

                if($user){

                    if(Hash::check($request->cpassword,$user->password))
                    {
                        $user->password = Hash::make($request->npassword);
                        return back()->with("sucesso", "Operação Realizada com sucesso ");
                    }else{
                        return back()->with("catch", "Senha Actual Inválida!");
                    }
                }
            } catch (\Exception $th) {

                return back()->with("catch", "Falha ao realizar operação");
            }
    }
    public function carregarFoto(Request $request){

            $this->validate($request,['foto_perfil'=>'required', ],['foto_perfil.required'=>'Obrigatório',]);

            try {

                $user = User::find(auth()->user()->id);

                if($user){

                    $foto = md5($request->file('foto_perfil')->getClientOriginalName()).'.'.$request->file('foto_perfil')->getClientOriginalExtension();
                    $request->file('foto_perfil')->storeAs('public/fotos_perfil/',$foto);

                    $user->foto = $foto;
                    $user->save();
                    return back()->with("sucesso", "Operação Realizada com sucesso ");

                }
            } catch (\Exception $th) {
                dd($th->getMessage());
                return back()->with("catch", "Falha ao realizar operação");
            }
    }



}
