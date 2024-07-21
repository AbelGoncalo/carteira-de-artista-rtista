<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Artista extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'artistas';
    protected $primaryKey = 'id';
    protected $guarded =['id'];
    protected $fillable = [
        'id',
        'nome_completo',
        'nome_pai',
        'nome_mae',
        'data_nascimento',
        'nacionalidade',
        'naturalidade',
        'genero',
        'estado_civil',
        'telefone',
        'telefone_alternativo',
        'email',
        'endereco',
        'numero_bi',
        'bi_anexo',
        'historial_artistico_anexo',
        'declaracao_compromisso_honra_anexo',
        'doc_filiacao_associacao_artista_anexo',
        'categoria',
        'nome_artistico',
        'foto_meio_corpo',
        'preco'
    ];
 
        public function user()
        {
            return $this->hasOne(User::class, 'artista_id', 'id');
        }


        public function utilizadorRelacionamento(){
            return $this->hasMany(User::class, 'id');
        }

        public function contratosRelacionamento(){
            return $this->hasMany(Contrato::class,'id');
        }
    
}
