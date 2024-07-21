<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::controller(AdminController::class)->group(function(){
    Route::prefix("/admin")->group(function(){
        Route::get("/" , "formadminLogin")->name("admin.form.login");        
            Route::post("/login" , "login")->name("admin.login");
               Route::get("/dashboard", "dashboard")->name("admin.dashboard");
                Route::get("/validar/documentos{id}", "artistValidateAttachments")->name("admin.attachments.validate");
                    Route::get("/logout" , "logout")->name("admin.logout");;

    });

});

Route::get("/hash" , function(){
 $pass = bcrypt("admin!2023");
 return $pass;
});
