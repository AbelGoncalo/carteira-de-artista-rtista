<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{ser,Promotor,Artista,CasaEvento};
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id();
            $table->string('tipo')->default('Inscrição')->nullable();
            $table->string('status')->default('pendente')->nullable();
            $table->string('comprovativo')->nullable();
            $table->foreignIdFor(Promotor::class)->nullable();
            $table->foreignIdFor(Artista::class)->nullable();
            $table->foreignIdFor(CasaEvento::class)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagamentos');
    }
};
