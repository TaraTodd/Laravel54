<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
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

    protected $fillable = [
    	'Location_Name','Location_Postcode', 'Location_Number', 'Location_Address1',
    	'Location_Address2', 'Location_Town', 'Location_City', 'Location_County', 
    	'Location_Country', 'Location_Date', 'Location_Time', 'Location_Distance', 
    	'Location_Longtitude', 'Location_Latitude'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function appointments()
    {
        return $this->belongsToMany('App\Models\Appointment','appointment_location','LocationID','AppointmentID');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
