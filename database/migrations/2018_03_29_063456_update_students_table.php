<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', function (Blueprint $table) {
            // 将一些属性设置为可以为空
            $table->string('s_header', 100)->nullable()->change();
            $table->string('s_school', 50)->nullable()->change();
            $table->string('s_major', 50)->nullable()->change();
            $table->string('s_code', 50)->nullable()->change();
            $table->date('s_birth')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
}
