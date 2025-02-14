<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Generacion extends Model
{
    public function pokemon(){
        return $this->hasMany('App\Models\Pokemon');
    }

    public function tipo(){
        return $this->hasMany('App\Models\Tipo');
    }
}
