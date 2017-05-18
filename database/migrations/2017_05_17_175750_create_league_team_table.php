<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeagueTeamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_team', function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('league_id');
            $table->unsignedInteger('team_id');
            $table->timestamps();

            $table->foreign('league_id')->references('id')->on('leagues');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropifExists('league_team');
    }
}
