<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            /** $table->integer('AppointmentID')->unsigned()->index(); **/
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('Donor_Title');
            $table->string('Donor_FirstName');
            $table->string('Donor_LastName');
            $table->string('Donor_Gender');
            $table->string('Donor_EthnicOrigin');
            $table->integer('Donor_Landline');
            $table->integer('Donor_Mobile');
            $table->string('Donor_Postcode');
            $table->string('Donor_House_Number');
            $table->string('Donor_Address_line1');
            $table->string('Donor_Address_line2');
            $table->string('Donor_Town');
            $table->string('Donor_City');
            $table->string('Donor_County');
            $table->string('Donor_Country');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

        });

            /**Schema::table('users', function(Blueprint $table){
            $table->foreign('AppointmentID')->references('id')->on('appointments');
        });**/
            
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
