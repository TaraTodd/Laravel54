<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('DonorID')->unique();
            $table->integer('UserID')->unsigned()->index();
            $table->string('BloodGroup');
            $table->string('BloodPressure');
            $table->string('Smoker');
            $table->string('Medication');
            $table->string('BloodTotal');
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
        Schema::dropIfExists('medical_details');
    }
}
