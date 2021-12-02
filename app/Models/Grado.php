<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    
    public function maestros(){
        return $this->belongsToMany('App\Models\Maestro');
    }

    public function estudiantes(){
        return $this->hasMany('App\Models\Estudiante');
    }

}
