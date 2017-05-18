<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('birthdate');
            $table->enum('position', [
                'GK', 'SW', 'CB', 'RB', 'LB', 'RWB', 'LWB', 'DM', 'CM', 'RM', 'LM', 'AM', 'SS', 'RW', 'LW', 'CF'
            ]);
            $table->unsignedInteger('team_id');
            $table->timestamps();

            $table->foreign('team_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExits('players');
    }
}
