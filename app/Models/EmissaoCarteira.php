<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmissaoCarteira extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'emissao_carteiras';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'artista_id',
        'qrcode',
        'modalidade',
        'validate',
    ];



    

}
