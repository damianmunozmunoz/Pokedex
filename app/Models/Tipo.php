<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo extends Model
{
    
    use SoftDeletes;

    public function pokemon(){
        return $this->hasMany('App\Models\Pokemon');
    }

    public function generacion(){
        return $this->belongsTo('App\Models\Generacion');
    }
}
