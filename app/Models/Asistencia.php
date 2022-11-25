<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;


    protected $fillable = [
        'alumno_id', 'asistio'
    ];


    

    
    public function alumno(){
        return $this->hasOne(Alumno::class, 'id', 'alumno_id');
    }


    public function curso(){

        return $this->hasOne(Curso::class, 'id', 'curso_id');
    }

    public function jornada(){
        return $this->hasOne(Jornada::class, 'id', 'jornada_id');
    }


}
