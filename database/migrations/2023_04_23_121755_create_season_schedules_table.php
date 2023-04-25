<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('season_schedules', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->integer("season_id");
            $table->integer("home_team_id");
            $table->integer("away_team_id");
            $table->date("date_scheduled");
            $table->string("match_status");
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
        Schema::dropIfExists('season_schedules');
    }
};
