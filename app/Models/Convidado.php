<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\CasaEvento;

class Convidado extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'texto',
        'artista_id',
        'promotor_id',
        'casa_evento_id',
        'event_id',
        'status',
    ];

    public function casaevento(){

        return $this->belongsTo(CasaEvento::class,"id");
    }
    
}
