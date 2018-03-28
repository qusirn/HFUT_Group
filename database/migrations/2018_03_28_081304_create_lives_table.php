<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lives', function (Blueprint $table) {
            $table->increments('l_id');
            $table->string('l_headling', 50);
            $table->string('l_cover', 50);
            $table->string('l_code', 50);
            $table->string('l_classify', 50);
            $table->string('l_camera', 50);
            $table->integer('l_looker_num')->unsigned();
            $table->boolean('l_is_broadcast');
            $table->boolean('l_is_pause');
            $table->integer('t_id')->unsigned()->references('t_id')->on('teachers');
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
        Schema::dropIfExists('lives');
    }
}
