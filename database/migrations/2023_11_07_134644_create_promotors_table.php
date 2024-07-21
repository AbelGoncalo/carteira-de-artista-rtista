<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('promotors', function (Blueprint $table) {
            $table->id();
            //$table->foreignIdFor(User::class);
            $table->string('nome');
            $table->date("data_nascimento");
            $table->string("nif");
            $table->string("bilhete_identidade_anexo");
            $table->string("telefone");
            $table->string("pais");
            $table->string("provincia");
            $table->string("municipio");
            $table->string("bairro");
            $table->string("referencia")->nullable();
            $table->string("codigo_postal")->nullable();
            $table->decimal("preco",20,2)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotors');
    }
};
