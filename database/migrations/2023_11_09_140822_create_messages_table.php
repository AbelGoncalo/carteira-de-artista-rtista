<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\{Artista,CasaEvento,Promotor,User};
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('message');
            $table->enum('status',['nao_lida','lida']);
            $table->foreignIdFor(Artista::class)->nullable();
            $table->foreignIdFor(CasaEvento::class)->nullable();
            $table->foreignIdFor(Promotor::class)->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
