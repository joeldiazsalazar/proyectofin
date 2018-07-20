<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProgrammingIdToEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('enrollments', function (Blueprint $table) {
            $table->integer('programming_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enrollments', function (Blueprint $table) {
           $table->dropColumn('programming_id')->unsigned();
        });
    }
}
