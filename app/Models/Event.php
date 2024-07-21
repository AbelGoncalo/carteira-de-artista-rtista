<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Convidado;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'start',
        'end',
        'casa_evento_id',
        'status',


    ];

    
    public function convidado(){

        return $this->hasMany(Convidado::class,"id");
    }

    public function casaEventoRelacionamento(){
        return $this->belongsTo(CasaEvento::class,'id');
    }
    
}
