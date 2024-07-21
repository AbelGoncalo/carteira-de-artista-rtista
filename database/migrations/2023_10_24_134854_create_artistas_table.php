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
        Schema::create('artistas', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->string('nome_pai');
            $table->string('nome_mae');
            $table->string('data_nascimento');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('genero');
            $table->string('estado_civil');
            $table->string('telefone');
            $table->string('telefone_alternativo')->nullable();
            $table->string('email')->unique();
            $table->string('endereco');
            $table->string('foto_meio_corpo');
            $table->string('numero_bi')->unique();
            $table->string('bi_anexo');
            $table->string('historial_artistico_anexo');
            $table->string('declaracao_compromisso_honra_anexo');
            $table->string('doc_filiacao_associacao_artista_anexo');
            $table->string("categoria");
            $table->string("nome_artistico");
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
        Schema::dropIfExists('artistas');
    }
};
