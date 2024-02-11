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
        Schema::create('season_table_details', function (Blueprint $table) {
            $table->id();
            $table->integer("schedule_id");
            $table->integer("season_id");
            $table->integer("team_id");
            $table->char("result_type");
            $table->integer("goal_scored_for");
            $table->integer("goal_scored_against");
            $table->date("date_played");
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
        Schema::dropIfExists('season_table_details');
    }
};
