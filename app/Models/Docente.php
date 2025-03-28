<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Docente extends Authenticatable {
    use HasFactory;

    protected $fillable = [
        'nombre_docente',
        'curp',
        'departamento',
        'rol',
        'telefono',
        'email',
        'password',
        'foto',
    ];

    protected $hidden = [
        'password',
    ];
}
