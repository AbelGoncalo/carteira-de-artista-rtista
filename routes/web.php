<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Notifications\CarteiraNotificacao;
use App\Models\{Contrato,User};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomeController::class)->group(function(){
    Route::get("/" , "index")->name("comissao.profissional.artista");
        Route::get("/consultar/informacoes/" , 'showInformations')->name('comissao.profissional.artista.show.informations.about.platform');
            Route::get("/quem/somos/" , "whoAreWe")->name("comissao.profissional.artista.who.are.we");
         //MOSTRAR ESTADO DA CARTEIRA DO ARTIOSTA
         Route::get("/estado-da-carteira/{id}", "ver_estado_da_carteira")->name("carteira.estado");

    });


require __DIR__ .'/artistas.php';
require __DIR__ .'/admin.php';
require __DIR__ .'/promotor_evento.php';
require __DIR__ .'/casa_evento.php';
require __DIR__ .'/auth.php';
require __DIR__ .'/carteira.php';



