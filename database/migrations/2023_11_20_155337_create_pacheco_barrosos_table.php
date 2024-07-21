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
        Schema::create('pacheco_barrosos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string("provincia");
            $table->string("bairro");
            $table->string("ponto_referencia");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacheco_barrosos');
    }
};
