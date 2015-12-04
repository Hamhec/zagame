<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConceptDomainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concept_domain', function (Blueprint $table) {
            $table->integer('concept_id')->unsigned();
            $table->integer('domain_id')->unsigned();

            $table->foreign('concept_id')->references('id')->on('concepts');
            $table->foreign('domain_id')->references('id')->on('domains');

            $table->primary(array('concept_id', 'domain_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('concept_domain');
    }
}
