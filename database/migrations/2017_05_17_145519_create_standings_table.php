<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('standings', function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('team_id');
            $table->tinyInteger('matches')->default(0);
            $table->tinyInteger('wins')->default(0);
            $table->tinyInteger('draws')->default(0);
            $table->tinyInteger('loss')->default(0);
            $table->integer('gf')->default(0);
            $table->integer('ga')->default(0);
            $table->integer('gb')->default(0);
            $table->tinyInteger('points')->default(0);

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
        Schema::dropIfExists('standings');
    }
}
