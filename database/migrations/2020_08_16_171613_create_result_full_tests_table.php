<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultFullTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_full_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('full_test_id')->unsigned()->default(0);
            $table->foreign('full_test_id')->references('id')->on('full_tests');
            $table->integer('skill_test_id')->unsigned()->default(0);
            $table->foreign('skill_test_id')->references('id')->on('skill_tests');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('number_correct_listening');
            $table->integer('score_listening');
            $table->integer('number_correct_reading');
            $table->integer('score_reading');
            $table->integer('score_total');
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
        Schema::dropIfExists('result_full_tests');
    }
}
