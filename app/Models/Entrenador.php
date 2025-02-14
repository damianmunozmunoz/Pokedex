<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrenador extends Model
{
    public function equipo(){
        return $this->hasOne('App\Models\Equipo');
    }
}
