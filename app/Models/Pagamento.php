<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    protected $table = 'pagamentos';
    protected $primaryKey = 'id';
    protected $guarded =['id'];
    protected $fillable = [
        'artista_id',
        'promotor_id',
        'casa_id',
        'tipo',
        'status',
        'comprovativo',
       
    ];
}
