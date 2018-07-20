<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('dni')->unique();
            $table->string('sexo');
            $table->string('correo')->unique();
            $table->string('estado')->nullable();
            $table->string('profesion');
            $table->string('documentos');
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
        Schema::dropIfExists('teachers');
    }
}
