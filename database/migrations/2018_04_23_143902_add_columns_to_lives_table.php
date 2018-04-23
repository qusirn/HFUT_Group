<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToLivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lives', function (Blueprint $table) {
            $table->boolean('l_camera')->default(false)->after('l_is_pause')->change();
            $table->boolean('l_control_switch')->default(false)->after('l_is_pause');
            $table->boolean('l_chat')->default(false)->after('l_is_pause');
            $table->boolean('l_white_board')->default(false)->after('l_is_pause');
            $table->boolean('l_code_editor')->defalt(false)->after('l_is_pause');
            $table->string('l_tag', 255)->nullable()->after('l_looker_num');
            $table->string('l_description')->nullable()->after('l_classify');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lives', function (Blueprint $table) {
            $table->dropColumn('l_control_switch');
            $table->dropColumn('l_chat');
            $table->dropColumn('l_white_board');
            $table->dropColumn('l_code_editor');
            $table->dropColumn('l_tag');
            $table->dropColumn('l_description');
        });
    }
}
