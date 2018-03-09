<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationHistory extends Model
{
    protected $fillable = ['TodayBloodTotal','BloodTotal', 'AppointmentTotal', 'Reward', 'YearsDonating'];
}
