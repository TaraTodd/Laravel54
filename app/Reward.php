<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reward extends Model
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
    	'Reward_Name','Reward_Type', 'Reward_Description', 'Reward_BloodTotal',
		'Reward_YearsDonating'
	];

    public function donation_histories()
    {
        return $this->belongsToMany('App\Models\DonationHistory','donation_rewards','RewardID','DonationHistoryID');
    }

    public function donation_histories()
    {
        return $this->belongsTo(DonationHistory::class);
    }
}
