<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domain_profile', function (Blueprint $table) {
          $table->tinyInteger('importance');
          $table->integer('domain_id')->unsigned();
          $table->integer('profile_id')->unsigned();

          $table->foreign('profile_id')->references('id')->on('profiles');
          $table->foreign('domain_id')->references('id')->on('domains');

          $table->primary(array('profile_id', 'domain_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('domain_profile');
    }
}
