<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignPlatform extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('game_platform', function (Blueprint $table) {
            $table->unsignedBigInteger('game_id');
            $table->foreign('game_id')->on('games')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('game_platform', function (Blueprint $table) {
            $table->dropForeign('game_platform_game_id_foreign');
            $table->dropColumn('game_id');
        });
    }
}
