<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos'; // Asegúrate de que este sea el nombre correcto de la tabla

    // Especifica los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre_curso',
        'objetivo',
        'duracion',
        'horario',
        'dias',
        'nombre_docentes',
        'rfcs',
        'departamentos',
        'telefonos',
        'emails',
        'firma',
        'nombre_firma',
    ];
}
