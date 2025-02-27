<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entrenador extends Model
{
    use SoftDeletes;
    
    public function equipo(){
        return $this->hasOne('App\Models\Equipo');
    }
}
