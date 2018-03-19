<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{

    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];


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

    /**
     * Get the locations for the user.
     */
    public function locations()
    {
        return $this->hasMany('App\Models\Location','UserID','id');

        $locations = User::find(UserID)->locations;
    }

        /**
     * Get the medicaldetails for the user.
     */
    public function medical_details()
    {
        return $this->hasMany('App\Models\MedicalDetails','UserID','id');

        $medicaldetails = User::find(UserID)->medicaldetails;

    }

       /**
     * Get the donation histories for the user.
     */
    public function donation_histories()
    {
        return $this->hasMany('App\Models\DonationHistory','UserID','id');

        $donationhistories = User::find(UserID)->donationhistories;
    }

    public function appointments()
    {
        return $this->belongsToMany('App\Models\Appointment','user_appointment','UserID','AppointmentID');

        $appointments = User::find(UserID)->appointments;
    }

    public function publish(MedicalDetails $medicaldetails)
    {

        $this->medicaldetails()->save($medicaldetails);//automatically set user id

    }

    public function publish(Appointment $appointments)
    {

        $this->appointments()->save($appointments);//automatically set user id

    }

    public function publish(DonationHistory $donationhistories)
    {

        $this->donationhistories()->save($donationhistories);//automatically set user id

    }

    public function publish(Location $locations)
    {

        $this->locations()->save($locations);//automatically set user id

    }

}