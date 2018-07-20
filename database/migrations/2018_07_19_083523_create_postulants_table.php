<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostulantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postulants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('puesto_trabajo');
            $table->string('dni');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('nombres');
            $table->string('fecha_nacimiento');
            $table->string('correo');
            $table->string('celular');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('estado_civil');
            $table->string('grado_academico');
            $table->string('experiencia_laboral');
            $table->string('celular_corporativo');
            $table->string('tipo_contrato');
            $table->string('sueldo_basico');
            $table->string('fecha_contrato');
            $table->string('correo_corporativo');
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
        Schema::dropIfExists('postulants');
    }
}
