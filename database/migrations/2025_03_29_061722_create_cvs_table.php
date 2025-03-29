<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_docente');
            $table->string('curp', 18);
            $table->string('departamento');
            $table->string('telefono', 10);
            $table->string('email');
            $table->string('formacion_academica');
            $table->string('nivel_estudios');
            $table->string('institucion_academica');
            $table->string('ano_graduacion', 4);
            $table->string('institucion_docente');
            $table->string('materias_impartidas');
            $table->string('anos_experiencia', 4);
            $table->string('habilidades');
            $table->string('certificaciones');
            $table->timestamps(); // Esto generará las columnas created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}

