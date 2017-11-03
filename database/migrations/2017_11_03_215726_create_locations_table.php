<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->string('floor');

            $table->string('contact');
            $table->string('contact_email');
            $table->string('contact_phone');

            $table->string('mon_from');
            $table->string('mon_to');
            $table->string('tues_from');
            $table->string('tues_to');
            $table->string('wed_from');
            $table->string('wed_to');
            $table->string('thur_from');
            $table->string('thur_to');
            $table->string('fri_from');
            $table->string('fri_to');
            $table->string('sat_from');
            $table->string('sat_to');
            $table->string('sun_from');
            $table->string('sun_to');
            
            $table->string('images');
            $table->string('description');

            $table->integer('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users');

            $table->integer('last_edited_by')->unsigned();
            $table->foreign('last_edited_by')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
