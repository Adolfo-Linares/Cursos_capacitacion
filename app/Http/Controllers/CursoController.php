<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function altaDeCursos(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre_servicio' => 'required|max:150',
            'objetivo' => 'required',
            'duracion' => 'required|max:50',
            'horario' => 'required|max:50',
            'dias' => 'required|max:100',
            'nombre_docente' => 'required|max:150',
            'curp' => 'required|max:18',
            'departamento' => 'required|max:100',
            'telefono' => 'required|max:10',
            'email' => 'required|email|max:100',
            'firma' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Valida la imagen

        ]);

        // Crear un nuevo curso
        $curso = new Curso();
        $curso->nombre_curso = $request->nombre_servicio;
        $curso->objetivo = $request->objetivo;
        $curso->duracion = $request->duracion;
        $curso->horario = $request->horario;
        $curso->dias = $request->dias;
        $curso->nombre_docentes = $request->nombre_docente;
        $curso->rfcs = $request->curp;
        $curso->departamentos = $request->departamento;
        $curso->telefonos = $request->telefono;
        $curso->emails = $request->email;


    // Subir la foto si existe
    $firmaPath = null;
    if ($request->hasFile('firma')) {
        $firmaPath = $request->file('firma')->store('public/docentes');
        $firmaPath = str_replace('public/', 'storage/', $firmaPath);
    }
        // Guardar el curso
        $curso->save();

        return redirect()->route('cvv');  // Redirigir después de guardar
    }
}
