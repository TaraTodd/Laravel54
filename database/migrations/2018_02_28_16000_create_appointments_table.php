<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UserID')->unsigned()->index();
            $table->string('Appointment_Date');
            $table->string('Appointment_Day');
            $table->string('Appointment_Time');
            $table->string('Appointment_Duration');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('UserID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
