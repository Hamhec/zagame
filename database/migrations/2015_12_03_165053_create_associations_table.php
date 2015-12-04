<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associations', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('concept_id')->unsigned();
            $table->integer('associated_concept_id')->unsigned();
            $table->integer('weight');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('concept_id')->references('id')->on('concepts');
            $table->foreign('associated_concept_id')->references('id')->on('concepts');

            $table->timestamps();

            $table->primary(array('user_id', 'concept_id', 'associated_concept_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('associations');
    }
}
