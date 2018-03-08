<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'Donor_Title', 'Donor_FirstName', 'Donor_LastName', 'Donor_Gender', 'Donor_EthnicOrigin', 'Donor_Landline', 'Donor_Mobile', 'Donor_Postcode', 'Donor_House_Number', 'Donor_Address_line1', 'Donor_Address_line2', 'Donor_Town', 'Donor_City', 'Donor_County', 'Donor_Country',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}