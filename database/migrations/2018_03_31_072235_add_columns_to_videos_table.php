<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->renameColumn('v_headling', 'v_headline');
            $table->string('v_description')->nullable()->after('v_uri');
            $table->string('v_tag')->nullable()->after('v_looker_num');
            $table->index('v_classify','v_classify_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('videos', function (Blueprint $table) {
            $table->dropColumn('v_description');
            $table->dropColumn('v_tag');
            $table->dropIndex('v_classify_index');
        });
    }
}
