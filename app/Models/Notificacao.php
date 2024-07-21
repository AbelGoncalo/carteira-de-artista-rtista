<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacao extends Model
{
    use HasFactory;
    protected $table = "notificacaos";
    protected $fillable = [
        'text',
        'artista_id',
        'casa_evento_id',
        'promotor_id'
    ];
}

