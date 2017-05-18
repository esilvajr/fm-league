<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table){
           $table->increments('id');
           $table->unsignedInteger('home_team');
           $table->unsignedInteger('away_team');
           $table->unsignedInteger('stadium');
           $table->dateTime('date');

           $table->foreign('home_team')->references('id')->on('teams');
           $table->foreign('away_team')->references('id')->on('teams');
           $table->foreign('stadium')->references('id')->on('stadiums');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
