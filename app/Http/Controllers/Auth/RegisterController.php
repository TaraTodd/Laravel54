<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'Donor_Title' => $data['Donor_Title'],
            'Donor_FirstName' => $data['Donor_FirstName'],
            'Donor_LastName' => $data['Donor_LastName'],
            'Donor_Gender' => $data['Donor_Gender'],
            'Donor_EthnicOrigin' => $data['Donor_EthnicOrigin'],
            'Donor_Landline' => $data['Donor_Landline'],
            'Donor_Mobile' => $data['Donor_Mobile'],
            'Donor_Postcode' => $data['Donor_Postcode'],
            'Donor_House_Number' => $data['Donor_House_Number'],
            'Donor_Address_line1' => $data['Donor_Address_line1'],
            'Donor_Address_line2' => $data['Donor_Address_line2'],
            'Donor_Town' => $data['Donor_Town'],
            'Donor_City' => $data['Donor_City'],
            'Donor_County' => $data['Donor_County'],
            'Donor_Country' => $data['Donor_Country']
        ]);
    }
}
