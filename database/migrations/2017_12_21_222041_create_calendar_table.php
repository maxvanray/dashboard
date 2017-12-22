<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendars', function (Blueprint $table) {
            $table->increments('id');

            $table->string('title')->nullable();

            $table->text('description')->nullable();

            $table->date('startDate')->nullable();
            $table->date('endDate')->nullable();
            $table->time('startTime')->nullable();
            $table->time('endTime')->nullable();

            $table->string('backgroundColor')->nullable();

            $table->integer('facilitator')->unsigned();
            $table->foreign('facilitator')->references('id')->on('users');

            $table->integer('location')->unsigned();
            $table->foreign('location')->references('id')->on('locations');

            $table->integer('createdBy')->unsigned();
            $table->foreign('createdBy')->references('id')->on('users');

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
        Schema::dropIfExists('calendar');
    }
}
