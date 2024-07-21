<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::controller(AuthController::class)->group(function(){
    Route::prefix("/auth")->group(function(){
        Route::get("/login", "formLogin")->name("login");
        Route::post("/login" , "login")->name("authentication");
        Route::post("/authentication", "authentication")->name("comissao.profissional.artista.user.authenticated");
        Route::get('/logout' , 'logout')->name('logout');
        //Recuperar senha 
        Route::post('/mudar-senha' , 'mudarSenha')->name('Mudar.senha');
        //Fazer Upload de uma imagem de perfil
        Route::post('/carregar-foto' , 'carregarFoto')->name('carregar.foto');

    });

});

