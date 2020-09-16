<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorrectAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('correct_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('index');
            $table->string('answer');
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
        Schema::dropIfExists('correct_answers');
    }
}
