<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->id();  // ID autoincremental
            $table->string('nombre_docente', 100);  // Nombre del docente
            $table->string('curp', 18)->unique();  // CURP del docente
            $table->string('departamento', 50);  // Departamento del docente
            $table->enum('rol', ['Docente', 'CRC', 'Jefe de Departamento', 'Subdireccion Academica', 'Desarrollo Academico']);  // Rol del docente
            $table->string('telefono', 10);  // Teléfono del docente
            $table->string('email', 100)->unique();  // Email del docente
            $table->string('password', 255);  // Contraseña del docente
            $table->binary('foto')->nullable();  // Foto del docente (opcional)
            $table->timestamps();  // Incluye las columnas created_at y updated_at

            // Aquí podrías agregar otras restricciones si las necesitas
        });
    }

    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
