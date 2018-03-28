<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('s_id');
            $table->string('s_username', 50);
            $table->string('s_passwd', 50);
            $table->string('s_header', 100);
            $table->string('s_tel', 50)->unique();;
            $table->string('s_email', 50)->unique();;
            $table->string('s_school', 50);
            $table->string('s_major', 50);
            $table->string('s_code', 50);
            $table->date('s_birth');
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
        Schema::dropIfExists('students');
    }
}
