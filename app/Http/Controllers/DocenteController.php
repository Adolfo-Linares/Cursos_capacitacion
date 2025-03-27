<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;

class DocenteController extends Controller
{
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre_docente' => 'required|string|max:100',
            'curp' => 'required|string|size:18|unique:docentes,curp',
            'departamento' => 'required|string|max:100',
            'telefono' => 'required|digits:10',
            'email' => 'required|email|unique:docentes,email',
        ]);

        // Insertar en la base de datos
        Docente::create([
            'nombre' => $request->nombre_docente,
            'curp' => $request->curp,
            'departamento' => $request->departamento,
            'telefono' => $request->telefono,
            'email' => $request->email,
        ]);

        return back()->with('success', 'Docente registrado correctamente.');
    }
}
