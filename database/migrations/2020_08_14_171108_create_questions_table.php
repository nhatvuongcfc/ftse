<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('index');
            $table->string('content')->nullable();
            $table->integer('part_id')->unsigned()->nullable();
            $table->foreign('part_id')->references('id')->on('parts');
            $table->integer('full_test_id')->unsigned()->nullable();
            $table->foreign('full_test_id')->references('id')->on('full_tests');
            $table->integer('skill_test_id')->unsigned()->nullable();
            $table->foreign('skill_test_id')->references('id')->on('skill_tests');
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
        Schema::dropIfExists('questions');
    }
}