<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public function pokemon(){
        return $this->hasMany('App\Models\Pokemon');
    }

    public function generacion(){
        return $this->belongsTo('App\Models\Generacion');
    }
}
