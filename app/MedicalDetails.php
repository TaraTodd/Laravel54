<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MedicalDetails extends Model
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

    protected $fillable = ['DonorID','BloodGroup', 'BloodPressure', 'Smoker', 'Medication', 'BloodTotal'];


      /**
     * Get the donation histories for the medical details.
     */
    public function donation_histories()
    {
        return $this->hasMany('App\Models\DonationHistory','MedicalID','id');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
