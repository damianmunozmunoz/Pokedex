<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Entrenador extends Authenticatable
{
    use SoftDeletes;
    use Notifiable;

    protected $fillable = [
        'email',
        'name',
        'password'
    ];
    
    protected $hidden = [
        'password',
        'remember-token'
    ];
    
    public function equipo(){
        return $this->hasOne('App\Models\Equipo');
    }

    protected $table = 'entrenadores';
}
