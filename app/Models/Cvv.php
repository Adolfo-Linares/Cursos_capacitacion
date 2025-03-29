<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cvv extends Model
{
    use HasFactory;
 

 // Campos que se pueden asignar de forma masiva
protected $fillable = [
    'nombre_docente',
    'curp',
    'departamento',
    'telefono',
    'email',
    'formacion_academica',
    'nivel_estudios',
    'institucion_academica',
    'ano_graduacion',
    'institucion_docente',
    'materias_impartidas',
    'anos_experiencia',
    'habilidades',
    'certificaciones',
];

    
    protected $table = 'cvs'; // Asegúrate de que esto coincida con el nombre de la tabla
}
