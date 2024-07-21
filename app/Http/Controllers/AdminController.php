<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\{Artista,User};
class AdminController extends Controller
{
    public function formadminLogin(){
        return view("users.login");
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back()->with('failToMakeLogin', 'Credeniais incorretas, tente novamente.');    
        }            

    }

    public function dashboard(){
        $pendentArtists = Artista::where("status", "pendente")->get();
        $verifiedArtists = Artista::where("status", "verificado")->get();
        $users = User::all();

        return view("admin.template-admin.index",[
            "pendentArtists" =>$pendentArtists,
            "verifiedArtists" =>$verifiedArtists,
            "users" =>$users,
        ]);
    }

    public function artistValidateAttachments($id){
        $artist = Artista::find($id);
        $artist->status = 'verificado';
        $artist->save();
        return redirect()->back();
    }

    public function logout(Request $request){
        Auth::logout();       
        $request->session()->invalidate();   
        $request->session()->regenerateToken();
        return redirect('admin.form.login');
    }
}
