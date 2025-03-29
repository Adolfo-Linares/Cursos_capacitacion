<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cvv;
use App\Models\Cv;


class CvController extends Controller
{


    public function store(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre_docente' => 'required|string|max:255',
            'curp' => 'required|string|max:18',
            'departamento' => 'required|string|max:255',
            'telefono' => 'required|numeric|digits:10',
            'email' => 'required|email',
            'formacion_academica' => 'nullable|string|max:255',
            'nivel_estudios' => 'nullable|string|max:255',
            'institucion_academica' => 'nullable|string|max:255',
            'ano_graduacion' => 'nullable|digits:4',
            'institucion_docente' => 'nullable|string|max:255',
            'materias_impartidas' => 'nullable|string|max:255',
            'anos_experiencia' => 'nullable|numeric',
            'habilidades' => 'nullable|string|max:255',
            'certificaciones' => 'nullable|string|max:255',
        ]);
    
        // Crear nuevo objeto Cv
        $cv = new Cvv($validatedData);
        $cv->save(); // Guardar en la base de datos
    
        return redirect()->route('docente.cursos')->with('success', 'CV guardado correctamente');
    }
    
    
}
