<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalDetails extends Model
{
    protected $fillable = ['DonorID','BloodGroup', 'BloodPressure', 'Smoker', 'Medication', 'BloodTotal'];
}
