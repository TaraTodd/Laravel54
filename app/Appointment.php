<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['Appointment_Date','Appointment_Time', 'Appointment_Day', 'Appointment_Duration'];
}
