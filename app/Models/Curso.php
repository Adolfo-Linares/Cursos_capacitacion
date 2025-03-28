<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_curso',
        'objetivo',
        'duracion',
        'horario',
        'dias',
        'id_docente',
        'firma',
        'nombre_firma',
        'id_cv',
    ];
}
