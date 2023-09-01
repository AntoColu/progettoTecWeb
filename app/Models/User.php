<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'utente';
    protected $primaryKey = 'username';
    public $incrementing = false;
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'cognome',
        'residenza',
        'nascita',
        'email',
        'occupazione',
        'username',
        'password',
        'ruolo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'username',
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
    **/
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Funzione che serve a verificare se l'utente ha 
     * un determinato ruolo specificato come parametro
    **/
    public function hasRole($ruolo) {
        $ruolo = (array)$ruolo;
        return in_array($this->ruolo, $ruolo);
    }

    // è statico perchè mi serve chiamarlo nel controller senza dover istanziare un ogg di user
    public static function getUtenti()
    {
        return User::where('Ruolo', 'user')->get();
    }
}
