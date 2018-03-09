<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('AppointmentID')->unsigned()->index();
            $table->integer('UserID')->unsigned()->index();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('AppointmentID')->references('id')->on('appointments');
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
        Schema::dropIfExists('user_appointments');
    }
}
