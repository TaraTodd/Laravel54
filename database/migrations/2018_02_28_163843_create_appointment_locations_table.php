<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('AppointmentID')->unsigned()->index();
            $table->integer('LocationID')->unsigned()->index();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('AppointmentID')->references('id')->on('appointments');
            $table->foreign('LocationID')->references('id')->on('locations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_locations');
    }
}
