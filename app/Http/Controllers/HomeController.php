<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArtistRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\UploadedFile;
use App\Models\Artista;


class HomeController extends Controller{

    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view("index");
    }

    public function showInformations(){
        return view("site.informations");
    }

    public function  whoAreWe(){
        return view('site.about');
    }


    public function ver_estado_da_carteira($id){

        try {
            $dados =   Artista::find($id);
            return view("estado-carteira.index",compact('dados'));


        } catch (\Throwable $th) {
           
        }
    }

           
}
