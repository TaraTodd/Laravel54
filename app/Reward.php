<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    protected $fillable = ['Reward_Name','Reward_Type', 'Reward_Description', 'Reward_BloodTotal',
'Reward_YearsDonating'];
}
