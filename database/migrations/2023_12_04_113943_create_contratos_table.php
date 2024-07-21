<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{Artista,CasaEvento,Promotor,Event};

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->string("anexo");
            $table->ForeignIdFor(Artista::class)->nullable();
            $table->ForeignIdFor(CasaEvento::class)->nullable();
            $table->ForeignIdFor(Promotor::class)->nullable();
            $table->ForeignIdFor(Event::class)->nullable();
            $table->enum('status' ,['casa_emissor' , 'artista_emissor' , 'promotor_emissor'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
