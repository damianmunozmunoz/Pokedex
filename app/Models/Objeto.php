<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objeto extends Model
{
    public function pokemon(){
        return $this->hasMany('App\Models\Pokemon');
    }
}
