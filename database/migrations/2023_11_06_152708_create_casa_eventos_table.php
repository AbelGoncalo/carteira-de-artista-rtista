<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('casa_eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string("provincia");
            $table->string("municipio");
            $table->string("bairro");
            $table->string("telefone");
            $table->string("ponto_referencia");
            $table->json("documentos");
            $table->string("foto_ilustrativa_espaco");
            $table->foreignId("promotor_id")->constraint()->onDelete("CASCADE")->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('casa_eventos');
    }
};
