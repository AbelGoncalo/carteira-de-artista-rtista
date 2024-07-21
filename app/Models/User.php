<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\{Artista};

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

     protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'perfil',
        'foto',
        'status',
        'promotor_id',
        'artista_id',
        'casa_evento_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


   
   public function artista(){   
       return $this->belongsTo(Artista::class, 'artista_id', 'id');
   }

    public function promotorEventoRelashionsip(){
        return $this->belongsTo(Promotor::class, 'id');
    }

    public function casaEvento(){
        return $this->belongsTo(CasaEvento::class, 'id');
    }

    public function mensagensRelacionamento(){
        return $this->hasdMany(Message::class, 'id');
    }

}
