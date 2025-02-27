<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Objeto extends Model
{

    use SoftDeletes;
    public function pokemon(){
        return $this->hasMany('App\Models\Pokemon');
    }
}
