<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;

    protected $table = "contratos";
    protected $primaryKey = 'id';
    protected $fillable = [
        'anexo',
        'artista_id',
        'promotor_id',
        'casa_evento_id',
        'event_id',
        'status',
    ];

    public function artistaRelacionamento(){
        return $this->belongsTo(Artista::class,'id');
    }

    public function promotorRelacionamento(){
        return $this->belongsTo(Promotor::class,'id');
    }

    public function eventoRelacionamento(){
        return $this->belongsTo(Event::class,'id');
    }


}
