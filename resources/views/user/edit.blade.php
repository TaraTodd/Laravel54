<!-- edit.blade.php -->

@extends('master')
@section('content')
<div class="container">
  <form method="post" action="{{action('USERController@update', $id)}}">
    <div class="form-group row">
      {{csrf_field()}}
       <input name="_method" type="hidden" value="PATCH">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
      <div class="col-sm-10">
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Title" name="Donor_Title" value="{{$user->Donor_Title}}">
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Firstname</label>
      <div class="col-sm-10">
        <textarea name="Donor_FirstName" rows="8" cols="80">{{$user->Donor_FirstName}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Lastname</label>
      <div class="col-sm-10">
        <textarea name="Donor_LastName" rows="8" cols="80">{{$user->Donor_LastName}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Gender</label>
      <div class="col-sm-10">
        <textarea name="Donor_Gender" rows="8" cols="80">{{$user->Donor_Gender}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Ethnic Origin</label>
      <div class="col-sm-10">
        <textarea name="Donor_EthnicOrigin" rows="8" cols="80">{{$user->Donor_EthnicOrigin}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Landline</label>
      <div class="col-sm-10">
        <textarea name="Donor_Landline" rows="8" cols="80">{{$user->Donor_Landline}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Mobile</label>
      <div class="col-sm-10">
        <textarea name="Donor_Mobile" rows="8" cols="80">{{$user->Donor_Mobile}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Postcode</label>
      <div class="col-sm-10">
        <textarea name="Donor_Postcode" rows="8" cols="80">{{$user->Donor_Postcode}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">House Number</label>
      <div class="col-sm-10">
        <textarea name="Donor_House_Number" rows="8" cols="80">{{$user->Donor_House_Number}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Addres 1</label>
      <div class="col-sm-10">
        <textarea name="Donor_Address_line1" rows="8" cols="80">{{$user->Donor_Address_line1}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Address 2</label>
      <div class="col-sm-10">
        <textarea name="Donor_Address_line2" rows="8" cols="80">{{$user->Donor_Address_line2}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Town</label>
      <div class="col-sm-10">
        <textarea name="Donor_Town" rows="8" cols="80">{{$user->Donor_Town}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">City</label>
      <div class="col-sm-10">
        <textarea name="Donor_City" rows="8" cols="80">{{$user->Donor_City}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">County</label>
      <div class="col-sm-10">
        <textarea name="Donor_County" rows="8" cols="80">{{$user->Donor_County}}</textarea>
      </div>
    </div>
     <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Country</label>
      <div class="col-sm-10">
        <textarea name="Donor_Country" rows="8" cols="80">{{$user->Donor_Country}}</textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-md-2"></div>
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
@endsection