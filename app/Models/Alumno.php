<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;


    public function curso(){

        return $this->hasOne(Curso::class, 'id', 'curso_id');
    }

    public function jornada(){
        return $this->hasOne(Jornada::class, 'id', 'jornada_id');
    }

}

