<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pokemon extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function tipo(){
        return $this->belongsTo('App\Models\Tipo');
    }

    public function generacion(){
        return $this->belongsTo('App\Models\Generacion');
    }

    public function objeto(){
        return $this->belongsTo('App\Models\Objeto');
    }

    public function equipo(){
        return $this->belongsTo('App\Models\Equipo');
    }
    protected $table = 'pokemons';
}
