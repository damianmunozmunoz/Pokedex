<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Entrenador extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'correo',
        'nombre',
        'password',
        'nacimiento'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
    
    public function equipo(){
        return $this->hasOne('App\Models\Equipo');
    }
}
