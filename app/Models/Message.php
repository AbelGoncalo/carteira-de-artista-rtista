<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';
    protected $primaryKey = 'id';
    
    protected $fillable = [
    'title',
     'message', 
     'status', 
     'artista_id',
     'casa_evento_id',
     'promotor_id',
     'user_id',
    ];


    public function utilizadorRelacionamento(){
        return $this->belongsTo(User::class, 'id');
    }

    public function artistaRelacionamento(){
        return $this->belongsTo(Artista::class, 'id');
    }
}
