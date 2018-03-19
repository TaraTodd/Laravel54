<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
	use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['Appointment_Date','Appointment_Time', 'Appointment_Day', 'Appointment_Duration'];

      /**
     * Get the donation histories for the appointment.
     */
    public function donation_histories()
    {
        return $this->hasMany('App\Models\DonationHistory','AppointmentID','id');
    }

    public function locations()
    {
        return $this->belongsToMany('App\Models\Location','appointment_location','AppointmentID','LocationID');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User','user_appointment','AppointmentID','UserID');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
