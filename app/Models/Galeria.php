<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
    protected $table = 'galerias';
    protected $primaryKey = 'id';
    protected $guarded =['id'];
    protected $fillable = [
        'user_id',
        'foto',
    ];
}
