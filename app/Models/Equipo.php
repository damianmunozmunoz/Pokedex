<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    public function pokemon(){
        return $this->hasMany('App\Models\Pokemon');
    }

    public function entrenador(){
        return $this->hasOne('App\Models\Entrenador');
    }
}
