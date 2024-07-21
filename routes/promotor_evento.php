<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotorEventoController;

Route::controller(PromotorEventoController::class)->group(function(){
Route::middleware(["promotor.eventos"])->group(function(){
    Route::prefix("/promotor/eventos/")->group(function(){
                Route::get("/inicio", "index")->name('carteira.artista.promotor.eventos.index');
                    
                            Route::get("/dashboard", "promotorEventosDashboard")->name('carteira.artista.promotor.eventos.dashboard');
                                Route::post('/salvar/calendario/' , "saveCalendar")->name("carteira.artista.promotor.eventos.save.calendar");
                                    Route::post('/salvar/casa/evento/' , "saveHouseOfEventOfPromotor")->name("carteira.artista.promotor.casa.evento.store");

                                        Route::get("/casa_eventos", "listCasaventos")->name("carteira.artista.promotor.list.casaEventos");

                                        Route::get("/promotorEventos/artista", "listArtista")->name("carteira.artista.promotor.list.artistas");
                                        Route::get("/promotorEventos/convites", "listConviteAceites")->name("carteira.artista.promotor.list.conviteAceites");
                                       

                                        Route::put("/promotorEventos/aceitar_convite/{id}", "aceitarConvite")->name("carteira.artista.promotor.aceiterconvite");
                                        Route::put("/promotorEventos/rejeitar_convite/{id}", "rejeitarConvite")->name("carteira.artista.promotor.rejeitarconvite");

                                        Route::get("/promotorEventos/meuperfil", "viewperfil")->name("carteira.artista.promotor.meuperfil");

                                        Route::get("/promotorEventos/deltalhes/casaeventos/{id}", "detalhesCasaEventos")->name("carteira.artista.promotor.detalhes.casaeventos");
                                        Route::get("/promotorEventos/deltalhes/artista/{id}", "detalheArtista")->name("carteira.artista.promotor.detalhes.artista");

                                        Route::put('/promotorEventos/mudar_senha' , 'mudarSenha')->name('carteira.artista.promotor.mudar.senha');
                                        
                                        Route::get("/mensagens", "listMessages")->name("carteira.artista.promotor.list.mensagens");

                                        Route::post("enviar/mensagem/carteira/", "sendMessageToCarteira")->name("carteira.artista.promotor.send.mensage");

                                        Route::post("/envio/contrato/promotor" , "sendContrato")->name("carteira.artista.send.contrato.promotor");
                                        Route::get("/lista/contratos/enviados/promotor", " listarContratos")->name("carteira.artista.list.contratos.promotor");


                                });
});

Route::prefix("/promotor/eventos/index")->group(function(){
    Route::get("/abertura/conta/", "formCreateAccount")->name('carteira.artista.promotor.eventos.create.account');
    Route::post("/conta/criada/", "storeAccount")->name('carteira.artista.promotor.eventos.store.account');

    Route::get('/envio/comprovativoPromotor/{id}', 'sendComprovativoPaymentPdf')->name('carteira.artista.send.comprovant.payment.pdf.promotor');

    Route::post("/concluir/submissao/comprovativo/pagamento/promotor/{id}" , 'finishSendDetailsOfPaymentPromotor')->name('carteira.artista.finish.send.details.of.payment.pdf.promotor');


});

});



