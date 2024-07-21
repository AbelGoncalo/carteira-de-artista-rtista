<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasaEventoController;

Route::controller(CasaEventoController::class)->group(function(){
    Route::middleware(['casa.eventos'])->group(function(){
        Route::prefix("/casa/eventos/")->group(function(){
                Route::get("/dashboard", "casaEventoDashboard")->name("carteira.artista.casa.evento.dashboard");           
                        
                            Route::get("/artista/convite", "formInviteArtist")->name('carteira.artista.form.invite.artista');
                                Route::get("/promotor/evento/convite", "formInviteEventPromoter")->name('carteira.artista.form.invite.event.promoter');
                                     Route::post("/salvar/calendario/casa/evento/", "saveCalendarioHouseOfEvent")->name('carteira.artista.save.calendar.house.event');
                                            Route::get("/form/convite/promotor/eventos/", "finishFormInvitePromoterEvent")->name('carteira.artista.form.invite.promoter.event');                                   
                                                Route::post("/efectuar/convite/artista/" , "invitingArtistToHouseOfEvent")->name('carteira.artista.invite.artist.and.promoters');
                                                    
                                                        Route::get('/casas/eventos/todas' , 'listOfAllHouseOfEvents')->name('carteira.artista.houes.of.events');
                                                            Route::get('/ver/calendario/artista' , 'formCalendarArtist')->name("carteira.artista.show.calendar.artist");
                                                                Route::get('/definicoes/usuario/' , 'userSettings')->name('carteira.artista.user.settings');
                                                                    Route::get('consultar/meus/detalhes/' ,'showMyDetails')->name('carteira.artista.show.my.details');
                                                                    
                                                                        Route::post("/envio/contrato/" , "sendContrato")->name("carteira.artista.send.contrato");
                                                                            Route::get("/lista/contratos/enviados/", "sentContratos")->name("carteira.artista.sent.contratos");
                                                                        
        });


        Route::get('/calendar', 'dashboardCasaEventos')->name('event.get');
            Route::post('/save/calendar', 'storeEventos')->name('event.store.house.event');
    });

    Route::get('/formulario/cadastro', 'formCadastroCasaEvento')->name('carteira.artista.casa.evento.cadastro');
        Route::post("/cadastrar/casa/evento/" , "storeHouseOfEvent")->name("carteira.artista.store.house.of.event");

});
