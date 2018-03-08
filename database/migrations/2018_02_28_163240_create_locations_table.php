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
            $table->integer('UserID')->unsigned()->index();
            $table->string('Location_Name');
            $table->string('Location_Postcode');
            $table->string('Location_Number');
            $table->string('Location_Address1');
            $table->string('Location_Address2');
            $table->string('Location_Town');
            $table->string('Location_City');
            $table->string('Location_County');
            $table->string('Location_Country');
            $table->string('Location_Date');
            $table->string('Location_Time');
            $table->string('Location_Distance');
            $table->string('Location_Longtitute');
            $table->string('Location_Latitude');
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
        Schema::dropIfExists('locations');
    }
}
