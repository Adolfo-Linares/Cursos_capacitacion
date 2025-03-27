<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function showForm()
    {
        return view('docentes.form');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre_docente' => 'required|string|max:255',
            'curp' => 'required|string|size:18|unique:docentes,curp',
            'departamento' => 'required|string|max:255',
            'telefono' => 'required|string|size:10',
            'email' => 'required|email|unique:docentes,email',
        ]);

        // Crear un nuevo docente
        Docente::create($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()->route('home')->with('success', 'Docente registrado exitosamente');
    }
}

