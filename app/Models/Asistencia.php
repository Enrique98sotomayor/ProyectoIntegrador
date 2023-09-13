<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'codAlumno',
        'curso_id',
        'fecha',
        'coordX',
        'coordY',
        'valor'
    ];

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
