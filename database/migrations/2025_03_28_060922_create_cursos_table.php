<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;  // Asegúrate de importar el modelo de Curso

class AltaDeCursosController extends Controller
{
    public function store(Request $request)
    {
        // Validación de los datos
        $validated = $request->validate([
            'nombre-servicio' => 'required|string|max:150',
            'duracion-curso' => 'required|string|max:50',
            'horario' => 'required|string|max:50',
            'dias' => 'required|string|max:100',
            'nombre_docente' => 'required|string|max:150',
            'curp' => 'required|string|max:18',
            'departamento' => 'required|string|max:150',
            'telefono' => 'required|regex:/\d{10}/',
            'email' => 'required|email',
            'firmaFacilitador' => 'nullable|image|max:1024', // Validar la firma
        ]);

        // Subir la firma si existe
        $firmaPath = null;
        if ($request->hasFile('firmaFacilitador')) {
            $firmaPath = $request->file('firmaFacilitador')->store('firmas');
        }

        // Crear el curso en la base de datos
        $curso = new Curso();
        $curso->nombre_curso = $request->input('nombre-servicio');
        $curso->objetivo = $request->input('duracion-curso');
        $curso->duracion = $request->input('duracion-curso');
        $curso->horario = $request->input('horario');
        $curso->dias = $request->input('dias');
        $curso->id_docente = $request->input('id_docente'); // Asegúrate de tener el ID del docente
        $curso->firma = $firmaPath ? file_get_contents(storage_path('app/' . $firmaPath)) : null;
        $curso->nombre_firma = $request->input('nombre-docente');
        $curso->save();

        return redirect()->route('cvv'); // Redirigir a la siguiente página
    }
}
