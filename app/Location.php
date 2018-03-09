<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['Location_Name','Location_Postcode', 'Location_Number', 'Location_Address1',
'Location_Address2', 'Location_Town', 'Location_City', 'Location_County', 'Location_Country', 'Location_Date', 'Location_Time', 'Location_Distance', 'Location_Longtitude', 'Location_Latitude'];
}
