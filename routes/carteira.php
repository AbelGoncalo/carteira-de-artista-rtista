<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarteiraController;

Route::middleware(["auth","carteira"])->group(function(){
    Route::controller(CarteiraController::class)->group(function(){
    Route::prefix("/carteira/artista/")->group(function(){
        Route::get('/dashboard', 'carteiraDashboard')->name('carteira.artista.admin.dashboard');
            Route::get('/mensagens', 'seeMessages')->name('carteira.artista.see.all.messages');
            Route::get('/artistas/pendentes/', 'pendentArtists')->name('carteira.artista.pendent.artists');
                Route::get('/promotores/eventos/pendentes/', 'promoterEventsPendent')->name('carteira.artista.promoter.event.pendent');
                Route::get('/utilizadores/carteira/', 'carteiraUsers')->name('carteira.artista.list.users');
                    Route::post('cadastrar/utilizador/carteira/admin/', 'storeAccountUsersCarteira')->name('carteira.artista.store.user.admin.carteira');
                    Route::post('/validar/dados/promotor/eventos/{id}', "validateEventPromoter")->name('carteira.artista.validate.data.promoter.events');
                    Route::get('/promotores/eventos/validados/' , "tableValidatedEventPromoter")->name('carteira.artista.table.validated.events.promoter');
                        Route::get('/artistas/validados/' , "tableValidatedArtists")->name('carteira.artista.table.validated.artists');
                        Route::post("/bloquear/utilizador/carteira/{id}", "blockUserCarteira")->name('carteira.artista.block.users.carteira');
                            Route::get("/casa/eventos/pendentes/" , 'pendentHouseOfEvents')->name('carteira.artista.house.of.events.pendent');
                            Route::post('/validar/dados/casa/eventos/{id}', "validateHouseOfEvents")->name('carteira.artista.validate.house.of.events');
                                Route::get('/casas/eventos/validadas/' , 'tableValidateddHousesOfEvents')->name('carteira.artista.table.validated.houses.of.events');
                                Route::post('/notificar/artista/email/{id}' , 'notificateArtistByEmail')->name('carteira.artista.notificate.artist.by.email');
                                    Route::get('/casas/eventos/validadas/' ,'tableValidatedHouseOfEvents')->name('carteira.artista.table.validated.house.events');
                                        Route::post('/validar/artista/{id}', 'validatePaymentFilePdf')->name('carteira.artista.validate.artist');

                                        Route::post('/validar/promotor/{id}', 'validatePaymentFilePdfPromotor')->name('carteira.artista.validate.promotor');

                                            Route::post("/eliminar/utilizador/admin/{id}" , 'deleteUserCarteiraAdmin')->name('carteira.artista.delete.user.admin');

                                                Route::get('/comprovativos/pagamentos/pendentes/' ,'tableReceiptPaymentPendent')->name('carteira.artista.table.receipt.payment.pendent');
                                                Route::get('/comprovativos/pagamentos/pendentes/promotor/','tableReceiptPaymentPendentPromotor')->name('carteira.artista.table.receipt.payment.pendent.promotor');

                                                    Route::get('artistas/sem/carteira/emitida/{id}' , "artiststWithoutCarteira")->name('carteira.artista.artists.without.carteira');
                                                        Route::post("/rejeitar/inscricao/artista/{id}", "rejeitarInscricao")->name('carteira.artista.rejeitar.incricao');
                                                            Route::get("/consultar/eventos/todos/" , "showAllEvents")->name('carteira.artista.show.all.events');
                                                                Route::post('/enviar/mensagem/todos/', 'enviarMensagemATodos')->name('carteira.artista.enviar.mensagem.todos');
                                                                    Route::get("/mensagens/artistas/" , "listMessagesByArtists")->name('carteira.artista.messages.artistas');
                                                                        Route::get("/mensagens/promotores/eventos/" , "listMessagesByPromoters")->name('carteira.artista.messages.promoters');
                                                                            Route::get("/mensagens/casa/eventos/" , "listMessagesByHousesOfEvents")->name('carteira.artista.messages.house.of.events');
                                                                                Route::get("/consultar/calendarios/" , 'listAllHousesOfEvent')->name('carteira.artista.show.all.calendars');
                                                                                    Route::get('/ver/calendario/{id}', 'formCalendar')->name('carteira.artista.list.calendar');

                                        Route::post('/notificar/promotor/email/{id}' , 'notificatePromotorByEmail')->name('carteira.artista.notificate.promotor.by.email');

                                        Route::post("/rejeitar/inscricao/promotor/{id}", "rejeitarInscricaoPromotor")->name('carteira.artista.rejeitar.incricao.promotor');
                                                


        });
    });

    //Route::get('/calendar', 'formCalendar')->name('event.get');


});
