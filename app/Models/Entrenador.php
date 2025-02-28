<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Entrenador extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
    
    protected $hidden = [
        'password',
        'remember-token'
    ];
    
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
