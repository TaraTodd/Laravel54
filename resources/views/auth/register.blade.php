@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_Title') ? ' has-error' : '' }}">
                            <label for="Donor_Title" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="Donor_Title" type="text" class="form-control" name="Donor_Title" value="{{ old('Donor_Title') }}" required autofocus>

                                @if ($errors->has('Donor_Title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_Title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_FirstName') ? ' has-error' : '' }}">
                            <label for="Donor_FirstName" class="col-md-4 control-label">Firstname</label>

                            <div class="col-md-6">
                                <input id="Donor_FirstName" type="text" class="form-control" name="Donor_FirstName" value="{{ old('Donor_FirstName') }}" required autofocus>

                                @if ($errors->has('Donor_FirstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_FirstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_LastName') ? ' has-error' : '' }}">
                            <label for="Donor_LastName" class="col-md-4 control-label">Lastname</label>

                            <div class="col-md-6">
                                <input id="Donor_LastName" type="text" class="form-control" name="Donor_LastName" value="{{ old('Donor_LastName') }}" required autofocus>

                                @if ($errors->has('Donor_LastName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_LastName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_Gender') ? ' has-error' : '' }}">
                            <label for="Donor_Gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input id="Donor_Gender" type="text" class="form-control" name="Donor_Gender" value="{{ old('Donor_Gender') }}" required autofocus>

                                @if ($errors->has('Donor_Gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_Gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_EthnicOrigin') ? ' has-error' : '' }}">
                            <label for="Donor_EthnicOrigin" class="col-md-4 control-label">Ethnic Origin</label>

                            <div class="col-md-6">
                                <input id="Donor_EthnicOrigin" type="text" class="form-control" name="Donor_EthnicOrigin" value="{{ old('Donor_EthnicOrigin') }}" required autofocus>

                                @if ($errors->has('Donor_EthnicOrigin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_EthnicOrigin') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_Landline') ? ' has-error' : '' }}">
                            <label for="Donor_Landline" class="col-md-4 control-label">Landline</label>

                            <div class="col-md-6">
                                <input id="Donor_Landline" type="text" class="form-control" name="Donor_Landline" value="{{ old('Donor_Landline') }}" required autofocus>

                                @if ($errors->has('Donor_Landline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_Landline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_Mobile') ? ' has-error' : '' }}">
                            <label for="Donor_Mobile" class="col-md-4 control-label">Mobile</label>

                            <div class="col-md-6">
                                <input id="Donor_Mobile" type="text" class="form-control" name="Donor_Mobile" value="{{ old('Donor_Mobile') }}" required autofocus>

                                @if ($errors->has('Donor_Mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_Mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_Postcode') ? ' has-error' : '' }}">
                            <label for="Donor_Postcode" class="col-md-4 control-label">Postcode</label>

                            <div class="col-md-6">
                                <input id="Donor_Postcode" type="text" class="form-control" name="Donor_Postcode" value="{{ old('Donor_Postcode') }}" required autofocus>

                                @if ($errors->has('Donor_Postcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_Postcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_House_Number') ? ' has-error' : '' }}">
                            <label for="Donor_House_Number" class="col-md-4 control-label">House Number</label>

                            <div class="col-md-6">
                                <input id="Donor_House_Number" type="text" class="form-control" name="Donor_House_Number" value="{{ old('Donor_House_Number') }}" required autofocus>

                                @if ($errors->has('Donor_House_Number'))
                                    <span class="help-block">Donor_House_Number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_Address_line1') ? ' has-error' : '' }}">
                            <label for="Donor_Address_line1" class="col-md-4 control-label">Address Line 1</label>

                            <div class="col-md-6">
                                <input id="Donor_Address_line1" type="text" class="form-control" name="Donor_Address_line1" value="{{ old('Donor_Address_line1') }}" required autofocus>

                                @if ($errors->has('Donor_Address_line1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_Address_line1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_Address_line2') ? ' has-error' : '' }}">
                            <label for="Donor_Address_line2" class="col-md-4 control-label">Address Line 2</label>

                            <div class="col-md-6">
                                <input id="Donor_Address_line2" type="text" class="form-control" name="Donor_Address_line2" value="{{ old('Donor_Address_line2') }}" required autofocus>

                                @if ($errors->has('Donor_Address_line2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_Address_line2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_Town') ? ' has-error' : '' }}">
                            <label for="Donor_Town" class="col-md-4 control-label">Town</label>

                            <div class="col-md-6">
                                <input id="Donor_Town" type="text" class="form-control" name="Donor_Town" value="{{ old('Donor_Town') }}" required autofocus>

                                @if ($errors->has('Donor_Town'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_Town') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_City') ? ' has-error' : '' }}">
                            <label for="Donor_City" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="Donor_City" type="text" class="form-control" name="Donor_City" value="{{ old('Donor_City') }}" required autofocus>

                                @if ($errors->has('Donor_City'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_City') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_County') ? ' has-error' : '' }}">
                            <label for="Donor_County" class="col-md-4 control-label">County</label>

                            <div class="col-md-6">
                                <input id="Donor_County" type="text" class="form-control" name="Donor_County" value="{{ old('Donor_County') }}" required autofocus>

                                @if ($errors->has('Donor_County'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_County') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Donor_Country') ? ' has-error' : '' }}">
                            <label for="Donor_Country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input id="Donor_Country" type="text" class="form-control" name="Donor_Country" value="{{ old('Donor_Country') }}" required autofocus>

                                @if ($errors->has('Donor_Country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Donor_Country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
