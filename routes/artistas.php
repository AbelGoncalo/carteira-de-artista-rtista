<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistaController;
use Illuminate\Support\Facades\Hash;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Livewire\GaleriaArtistaComponent;

use SimpleSoftwareIO\QrCode\Facades\QrCode;



Route::controller(ArtistaController::class)->group(function (){
    Route::prefix("/artistas")->group(function (){
        Route::get("/abertura/conta/", "formulario_criacao_conta")->name("carteira.artista.formulario");
        Route::post("/enviar/dados/", "enviar_dados")->name("carteira.artista.enviar.dados");
        Route::post("/criar/event/", "criarEvento")->name("carteira.artista.criar.evento")->middleware('auth');
        Route::get("/painel/artista", "painel_artista")->name("carteira.painel.artista")->middleware('auth');
        Route::get("/painel/minha-carteira", "painel_artista_carteira")->name("carteira.painel.artista.minha.carteira");
        Route::get("/painel/notificacoes", "painel_artista_notificacoes")->name("carteira.painel.artista.notificacoes")->middleware('auth');
        Route::post("/painel/enviar/notificao", "painel_artista_enviar_notificao")->name("carteira.painel.artista.enviar.notificacao")->middleware('auth');
        Route::get("/painel/pagamentos", "painel_artista_pagamentos")->name("carteira.painel.artista.pagamentos")->middleware('auth');
        Route::get("/minha-conta", "painel_minha_conta")->name("carteira.painel.artista.conta")->middleware('auth');
        Route::get("/artistas/galeria", "painel_galeria")->name("carteira.painel.artista.galeria")->middleware('auth');
        Route::get("/faturas", "painel_fatura")->name("carteira.painel.artista.fatura")->middleware('auth');
            Route::get('/envio/comprovativo/pagamento/{id}', 'sendDetailsPaymentPdf')->name('carteira.artista.send.comprovant.payment.pdf');
                Route::post("/concluir/submissao/comprovativo/pagamento/{id}" , 'finishSendDetailsOfPayment')->name('carteira.artista.finish.send.details.of.payment.pdf');
                    Route::post("/solicitar/emissao/carteira/" , "solicitaEmissaoCarteira")->name("carteira.artista.solicita.emissao.carteira");
    });

});


Route::get('/test',function(){


    // return view('qr-codes',[
    //     'qrCodes' => $qrCodes, //
    // ]);



});



Route::get('/carteira',function(){

    $data = [
        'foo' => 'bar'
    ];

    $pdf = PDF::loadView('modelo_carteira.index', $data);

    $pdf->setPaper(array(0, 0, 176, 250), 'portrait');
    return $pdf->stream();

});
