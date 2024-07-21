<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Artista;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('emissao_carteiras', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Artista::class);
            $table->string('qrcode')->nullable();
            $table->enum('modalidade',['Amador','Intermediario','Profissional']);
            $table->date('validate')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emissao_carteiras');
    }
};
