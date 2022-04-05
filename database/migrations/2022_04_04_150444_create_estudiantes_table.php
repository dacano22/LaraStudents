<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();

            $table->string('Documento');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Genero');
            $table->date('FechaIngreso');
            $table->date('FechaNacimiento');
            $table->string('DireccionResidencia');
            $table->string('NombrePadre');
            $table->string('NombreMadre');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
