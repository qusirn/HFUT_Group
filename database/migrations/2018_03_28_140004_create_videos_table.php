<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('v_id');
            $table->string('v_headling', 50);
            $table->string('v_cover', 50);
            $table->string('v_code', 50);
            $table->string('v_classify', 50);
            $table->string('v_uri', 100);
            $table->integer('v_looker_num')->unsigned();
            $table->integer('t_id')->unsigned();
            $table->timestamps();

            $table->foreign('t_id')->references('t_id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
