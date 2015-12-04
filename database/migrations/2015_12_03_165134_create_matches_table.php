<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('score')->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('opponent_user_id')->unsigned()->nullable();
            $table->integer('concept_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('opponent_user_id')->references('id')->on('users');
            $table->foreign('concept_id')->references('id')->on('concepts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('matches');
    }
}
