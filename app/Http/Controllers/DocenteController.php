<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class DocenteController extends Controller {
    public function store(Request $request) {
        try {
            // Log para verificar si entra al método
            Log::info('Entrando al método store');

            // Validar los datos recibidos
            $validatedData = $request->validate([
                'nombre_docente' => 'required|string|max:255',
                'curp' => 'required|string|size:18|unique:docentes',
                'departamento' => 'required|string|max:255',
                'rol' => 'required|string|max:255',
                'telefono' => 'required|string|size:10',
                'email' => 'required|string|email|max:255|unique:docentes',
                'password' => 'required|string|min:6',
                'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            // Subir la foto si existe
            $fotoPath = null;
            if ($request->hasFile('foto')) {
                $fotoPath = $request->file('foto')->store('public/docentes');
                $fotoPath = str_replace('public/', 'storage/', $fotoPath);
            }

            // Crear el registro en la BD
            $docente = Docente::create([
                'nombre_docente' => $validatedData['nombre_docente'],
                'curp' => strtoupper($validatedData['curp']),
                'departamento' => $validatedData['departamento'],
                'rol' => $validatedData['rol'],
                'telefono' => $validatedData['telefono'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'foto' => $fotoPath,
            ]);

            Log::info('Docente registrado correctamente', ['docente' => $docente]);

            // Redirigir a la página principal
            return redirect()->route('home')->with('success', 'Docente registrado exitosamente.');
        
        } catch (\Exception $e) {
            Log::error('Error al registrar el docente: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Hubo un error al registrar el docente: ' . $e->getMessage());
        }
    }
}
