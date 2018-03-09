<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('UserID')->unsigned()->index();
            $table->integer('MedicalID')->unsigned()->index();
            $table->integer('AppointmentID')->unsigned()->index();
            $table->string('TodayBloodTotal');
            $table->string('BloodTotal');
            $table->string('AppointmentTotal');
            $table->string('YearsDonating');
            $table->string('Reward');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('UserID')->references('id')->on('users');
            $table->foreign('MedicalID')->references('id')->on('medical_details');
            $table->foreign('AppointmentID')->references('id')->on('appointments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_histories');
    }
}
