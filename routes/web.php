<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.principales/principal'); 
})->name('home');  // Página principal
 
Route::get('/desarrollo-academico', function () {
    return view('livewire.desarrolloAcademico.publicacionDeCursosDesarrolloAcademico'); 
})->name('desarrollo.academico');
 
Route::get('/desarrollo-crc', function () {
    return view('livewire.CRC.publicacionDeCursosCRC'); 
})->name('desarrollo.crc');

Route::get('/docente', function () {
    return view('livewire.docente.pagePrincipalDocente'); 
})->name('docente.principal');
 
Route::get('/jefe-departamento', function () {
    return view('livewire.jefeDepartamento.publicacionDeCursosJefeDepartamento'); 
})->name('jefe.departamento');
 
Route::get('/crc', function () {
    return view('livewire.CRC.publicacionDeCursosCRC'); 
})->name('crc.cursos');



//pagePrincipalDocente
Route::get('/', function () {
    return view('livewire.principales.principal'); 
})->name('home');  // Página principal

Route::get('/cursos', function () {
    return view('livewire.docente.pagePrincipalDocente'); 
})->name('docente.cursos');

Route::get('/constancias', function () {
    return view('livewire.docente.contanciasDeCursosDocente'); 
})->name('docente.constancias');

Route::get('/evaluaciones', function () {
    return view('livewire.docente.evaluacionDocente'); 
})->name('docente.evaluaciones');

Route::get('/cursos-rechazados', function () {
    return view('livewire.docente.cursosRechazadosDocente'); 
})->name('docente.cursosRechazados');

Route::get('/inscripcion', function () {
    return view('livewire.docente.inscripcionDeCursos'); 
})->name('docente.inscripcion');

Route::get('/alta', function () {
    return view('livewire.docente.altaDeCursos'); 
})->name('docente.alta');

Route::get('/constancias-desarrollo-academico', function () {
    return view('livewire.desarrolloAcademico.contanciasDeCursosDesarrolloAcademico'); 
})->name('desarrollo.constancias');


Route::get('/cvv', function () {
    return view('livewire.docente.cvv'); 
})->name('cvv');


Route::get('/registro', function () {
    return view('livewire.principales.registroLogin'); 
})->name('registro');


use App\Http\Controllers\DocenteController;

Route::get('/docente/create', [DocenteController::class, 'showForm'])->name('docente.create');
Route::post('/docente', [DocenteController::class, 'store'])->name('docente.store');

