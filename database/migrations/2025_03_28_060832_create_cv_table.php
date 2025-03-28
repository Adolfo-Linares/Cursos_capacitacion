<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvTable extends Migration
{
    public function up()
    {
        Schema::create('cv', function (Blueprint $table) {
            $table->id();  // ID autoincremental
            $table->unsignedBigInteger('id_docente');  // ID del docente
            $table->string('curp', 18)->unique();  // CURP del docente
            $table->text('formacion_academica');  // Formación académica
            $table->string('nivel_estudios', 100);  // Nivel de estudios
            $table->string('institucion', 150);  // Institución educativa
            $table->integer('anio_graduacion');  // Año de graduación
            $table->text('materias_impartidas');  // Materias que ha impartido
            $table->integer('anios_experiencia');  // Años de experiencia
            $table->text('habilidades');  // Habilidades del docente
            $table->text('certificaciones')->nullable();  // Certificaciones (opcional)
            $table->timestamps();  // Incluye las columnas created_at y updated_at

            // Definir la clave foránea
            $table->foreign('id_docente')->references('id')->on('docentes')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('cv');
    }
}
