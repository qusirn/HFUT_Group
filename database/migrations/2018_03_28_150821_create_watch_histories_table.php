<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWatchHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watch_histories', function (Blueprint $table) {
            $table->increments('w_id');
            $table->integer('s_id')->unsigned();
            $table->integer('v_id')->unsigned();
            
            $table->foreign('s_id')->references('s_id')->on('students');
            $table->foreign('v_id')->references('v_id')->on('videos');
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
        Schema::dropIfExists('watch_histories');
    }
}
