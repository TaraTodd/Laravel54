<!-- create.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{url('DonorDetails')}}">
  <form>
  <div class="form-row">
    {{csrf_field()}}
    <div class="form-group col-md-12">
      <label for="Donor_ID">Donor ID</label>
      <input type="text" class="form-control" id="Donor_ID" placeholder="Donor ID">
    </div>
    <div class="form-group col-md-4">
      <label for="Donor_Title">Title</label>
      <select id="Donor_Title" class="form-control">
        <option selected>Miss</option>
        <option>Mrs</option>
        <option>Ms</option>
        <option>Mr</option>
        <option>Dr</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="Donor_FirstName">First Name</label>
      <input type="text" class="form-control" id="Donor_FirstName" placeholder="First Name">
    </div>
    <div class="form-group col-md-4">
      <label for="Donor_LastName">Last Name</label>
      <input type="text" class="form-control" id="iDonor_LastName" placeholder="Last Name">
    </div>
    <div class="form-group col-md-4">
      <label for="Donor_Gender">Gender</label>
      <select id="Donor_Gender" class="form-control">
        <option selected>Male</option>
        <option>Female</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="Donor_EthnicOrigin">Ethnic Origin</label>
      <select id="Donor_EthnicOrigin" class="form-control">
        <option selected>White</option>
        <option>White Irish</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="Donor_Landline">Landline</label>
      <input type="Number" class="form-control" id="Donor_Landline" placeholder="Landline Number">
    </div>
    <div class="form-group col-md-6">
      <label for="Donor_Mobile">Mobile Number</label>
      <input type="Number" class="form-control" id="Donor_Mobile" placeholder="Mobile Number">
    </div>
    <div class="form-group col-md-12">
      <label for="email">Email Address</label>
      <input type="email" class="form-control" id="email" placeholder="Email Address">
    </div>
   <div class="form-group col-md-12">
    <label for="Donor_House_Number">House Number</label>
    <input type="text" class="form-control" id="Donor_House_Number" placeholder="House Number">
  </div>
  <div class="form-group col-md-12">
    <label for="Donor_Address_line1">Address Line 1</label>
    <input type="text" class="form-control" id="Donor_Address_line1" placeholder="Address">
  </div>
  <div class="form-group col-md-12">
    <label for="Donor_Address_line2">Address Line 2</label>
    <input type="text" class="form-control" id="Donor_Address_line2" placeholder="Address">
  </div>
    <div class="form-group col-md-6">
      <label for="Donor_Town">Town</label>
      <input type="text" class="form-control" id="Donor_Town" placeholder="Town">
    </div>
    <div class="form-group col-md-6">
      <label for="Donor_City">City</label>
      <input type="text" class="form-control" id="Donor_City" placeholder="City">
    </div>
    <div class="form-group col-md-4">
      <label for="Donor_County">County</label>
      <select id="Donor_County" class="form-control">
        <option selected>Co.Armagh</option>
        <option>Co.Down</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="Donor_Country">Country</label>
      <select id="Donor_Country" class="form-control">
        <option selected>United Kingdom</option>
        <option>Northern Ireland</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="Donor_Postcode">Postcode</label>
      <input type="text" class="form-control" id="Donor_Postcode" placeholder="Postcode">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection