<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('detail_id')->unsigned();
            $table->integer('trimester_id')->unsigned();
            $table->integer('nota1')->unsigned();
            $table->integer('nota2')->unsigned();
            $table->integer('nota3')->unsigned();
            $table->integer('nota4')->unsigned();
            $table->integer('promedio')->unsigned();
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
        Schema::dropIfExists('qualifications');
    }
}
