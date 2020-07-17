<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatricesDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matrices_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matrix_id')->unsigned();
            $table->foreign('matrix_id')->references('id')->on('matrices')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('topic_id')->unsigned();
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('NB')->default(0);
            $table->integer('TH')->default(0);
            $table->integer('VD')->default(0);
            $table->integer('VC')->default(0);
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
        Schema::dropIfExists('detail_matrices');
    }
}
