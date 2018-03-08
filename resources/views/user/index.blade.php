<!-- index.blade.php -->
@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Gender</th>
        <th>Ethnic Origin</th>
        <th>Landline</th>
        <th>Mobile</th>
        <th>Postcode</th>
        <th>House Number</th>
        <th>Address 1</th>
        <th>Address 2</th>
        <th>Town</th>
        <th>City</th>
        <th>County</th>
        <th>Country</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $post)
      <tr>
        <td>{{$post['Donor_Title']}}</td>
        <td>{{$post['Donor_FirstName']}}</td>
        <td>{{$post['Donor_LastName']}}</td>
        <td>{{$post['Donor_Gender']}}</td>
        <td>{{$post['Donor_EthnicOrigin']}}</td>
        <td>{{$post['Donor_Landline']}}</td>
        <td>{{$post['Donor_Mobile']}}</td>
        <td>{{$post['Donor_Postcode']}}</td>
        <td>{{$post['Donor_House_Number']}}</td>
        <td>{{$post['Donor_Address_line1']}}</td>
        <td>{{$post['Donor_Address_line2']}}</td>
        <td>{{$post['Donor_Town']}}</td>
        <td>{{$post['Donor_City']}}</td>
        <td>{{$post['Donor_County']}}</td>
        <td>{{$post['Donor_Country']}}</td>
        <td><a href="{{action('USERController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('USERController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td></tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
