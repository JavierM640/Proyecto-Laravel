<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;


    public function users(){
        return $this->belongsToMany(User::class, 'realizarexamens')->withPivot('examen_id');
    }

    public function materias(){
        return $this->belongsTo(Materia::class);
    }

    public function preguntas(){
        return $this->hasMany(Pregunta::class, 'examen_id');
    }

    public function cursos(){
        return $this->belongsTo(Curso::class);
    }
}
