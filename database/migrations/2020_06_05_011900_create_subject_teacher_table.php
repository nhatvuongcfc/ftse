<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectTeacherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('subject_teacher')) {
            Schema::create('subject_teacher', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('teacher_id')->unsigned();
                $table->foreign('teacher_id')->references('id')->on('personels')->onDelete('cascade')->onUpdate('cascade');
                $table->integer('subject_id')->unsigned();
                $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade')->onUpdate('cascade');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_teacher');
    }
}
