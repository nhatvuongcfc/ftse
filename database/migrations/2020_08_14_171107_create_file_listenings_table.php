<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFileListeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('file_listenings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file');
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
        Schema::dropIfExists('file_listenings');
    }
}
