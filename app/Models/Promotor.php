<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotor extends Model

{
    use HasFactory;

    protected $table = 'promotors';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nome',
        'data_nascimento',
        'nif',
        'bilhete_identidade_anexo',
        'telefone',
        'pais',
        'provincia',
        'municipio',
        'bairro',
        'referencia',
        'codigo_postal',
        'preco'
        ];

        public function UserRelashionship(){
            return $this->hasOne(User::class, 'id');
        }
}
