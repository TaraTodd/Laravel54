<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DonationHistory extends Model
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
    	'TodayBloodTotal','BloodTotal', 'AppointmentTotal', 'Reward', 'YearsDonating'
    ];

    public function appointments()
    {
        return $this->belongsTo('App\Models\Appointment');
    }

    public function medical_details()
    {
        return $this->belongsTo('App\Models\MedicalDetails');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function rewards()
    {
        return $this->belongsToMany('App\Models\Reward','donation_rewards','DonationHistoryID','RewardID');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
