<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_curso', 150);
            $table->text('objetivo');
            $table->string('duracion', 50);
            $table->string('horario', 50);
            $table->string('dias', 100);
            $table->binary('firma')->nullable();  // Asegúrate de que sea 'binary' o 'bytea'

            $table->string('nombre_firma', 100)->nullable();
            $table->timestamps();
            $table->string('nombre_docentes', 150);
            $table->string('rfcs', 18);
            $table->string('departamentos', 100);
            $table->string('telefonos', 10);
            $table->string('emails', 100);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
