<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asigna extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'curso_id', 'jornada_id'
    ];


    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function curso(){
        return $this->hasOne(Curso::class, 'id', 'curso_id');
    }

    public function jornada(){
        return $this->hasOne(Jornada::class, 'id', 'jornada_id');
    }

}
