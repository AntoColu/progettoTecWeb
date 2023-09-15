<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messaggio extends Model
{
    use HasFactory;

    protected $table = 'messaggio';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = ['id'];

    protected $fillable = [
        'mittente', 
        'destinatario', 
        'messaggio', 
        'created_at'
    ];

    protected $hidden = ['messaggio'];
}
