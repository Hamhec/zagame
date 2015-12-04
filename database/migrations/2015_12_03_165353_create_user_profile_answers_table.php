<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile_answers', function (Blueprint $table) {
            $table->string('answer')->nullable();
            $table->integer('profile_possible_value_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('profile_id')->unsigned();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->foreign('profile_possible_value_id')->references('id')->on('profile_possible_values');

            $table->primary(array('user_id', 'profile_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_profile_answers');
    }
}
