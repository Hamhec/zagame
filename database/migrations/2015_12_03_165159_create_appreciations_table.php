<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppreciationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appreciations', function (Blueprint $table) {
            $table->integer('appreciation');
            $table->integer('user_id')->unsigned();
            $table->integer('concept_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('concept_id')->references('id')->on('concepts');

            $table->timestamps();

            $table->primary(array('user_id', 'concept_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('appreciations');
    }
}
