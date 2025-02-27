<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Generacion extends Model
{

    use SoftDeletes;
    
    public function pokemon(){
        return $this->hasMany('App\Models\Pokemon');
    }

    public function tipo(){
        return $this->hasMany('App\Models\Tipo');
    }
}
