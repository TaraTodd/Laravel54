<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_rewards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('DonationHistoryID')->unsigned()->index();
            $table->integer('RewardID')->unsigned()->index();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('DonationHistoryID')->references('id')->on('donation_histories');
            $table->foreign('RewardID')->references('id')->on('rewards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_rewards');
    }
}
