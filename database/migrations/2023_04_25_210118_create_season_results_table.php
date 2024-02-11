<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('season_results', function (Blueprint $table) {
            $table->id();
            $table->integer("match_id");
            $table->integer("team_id");
            $table->integer("player_id");
            $table->char("stat_type");
            $table->time("time_scored");
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
        Schema::dropIfExists('season_results');
    }
};
