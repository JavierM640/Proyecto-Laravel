<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    public function examen(){
        return $this->belongsTo(Examen::class);
    }

    public function respuestas(){
        return $this->hasMany(Respuesta::class, 'respuestas_id');
    }
}
