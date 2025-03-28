<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Docente;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validar los datos del formulario
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Buscar al usuario en la base de datos
        $docente = Docente::where('email', $credentials['email'])->first();

        if ($docente && Hash::check($credentials['password'], $docente->password)) {
            // Iniciar sesión con Laravel Auth
            Auth::login($docente);

            // Registrar en el log para depuración
            Log::info("Usuario autenticado", [
                'email' => $docente->email,
                'rol' => $docente->rol,
            ]);

            // Redirección basada en el rol
            $redirectUrl = match (strtolower(trim($docente->rol))) {
                'docente' => route('docente.principal'),
                'desarrollo academico' => route('desarrollo.academico'),
                'crc' => route('crc.cursos'),
                'jefe departamento' => route('jefe.departamento'),
                'subdireccion academica' => route('desarrollo.academico'),
                default => route('home'), // Redirección predeterminada
            };

            return response()->json([
                'success' => true,
                'message' => 'Inicio de sesión exitoso',
                'redirect' => $redirectUrl,
            ]);
        } else {
            Log::warning("Intento de login fallido", ['email' => $credentials['email']]);

            return response()->json([
                'success' => false,
                'message' => 'Correo o contraseña incorrectos',
            ], 401);
        }
    }
}
