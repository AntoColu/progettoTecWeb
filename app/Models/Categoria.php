<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categoria';
    protected $primaryKey = 'catId';
    public $incrementing = true;
    public $timestamps = false;

    /**
     * Relazione uno-molti con le auto
     */
    public function auto(){
        return $this->hasMany(Auto::class);
    }
}
