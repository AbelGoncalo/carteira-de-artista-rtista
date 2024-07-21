<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CasaEvento extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "casa_eventos";

    protected $fillable = [ 
        'nome',       
        'provincia',
        'municipio',
        'bairro',
        'ponto_referencia',
        'documentos',
        'foto_ilustrativa_espaco',
        'promotor_id',
        'user_id',
        'telefone',
    ];

    protected $casts =[
        'documentos' => 'array'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id');
    }
   
}
