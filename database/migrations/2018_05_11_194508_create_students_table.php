<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('email')->unique(); // ESTE CAMPO COMPRAR CON EMAIL DE USUARIOS
            $table->string('dni')->unique();
            $table->string('sexo');
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->string('distrito');
            $table->string('departamento');
            $table->string('estado')->nullable();
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
        Schema::dropIfExists('students');
    }
}
