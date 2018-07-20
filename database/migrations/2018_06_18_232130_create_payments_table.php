<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cuota');
            $table->string('periodo_inicio');
            $table->string('periodo_fin');
            $table->string('monto');
            $table->string('adeuda');
            $table->string('estado');
            $table->integer('enrollment_id');
            $table->integer('trimester_id');
            $table->timestamps();
        });
    }







    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
