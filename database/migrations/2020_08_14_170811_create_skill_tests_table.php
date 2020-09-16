<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_tests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('part_id')->unsigned();
            $table->foreign('part_id')->references('id')->on('parts');
            $table->integer('number_questions');
            $table->time('time');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('skill_tests');
    }
}
