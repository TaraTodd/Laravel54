<!-- index.blade.php -->
@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Location Name</th>
        <th>Location Postcode</th>
        <th>Location Number</th>
        <th>Location Address1</th>
        <th>Location Address2</th>
        <th>Location Town</th>
        <th>Location City</th>
        <th>Location County</th>
        <th>Location Country</th>
        <th>Location Date</th>
        <th>Location Time</th>
        <th>Location Distance</th>
        <th>Location Latitude</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($locations as $post)
      <tr>
        <td>{{$post['Location_Name']}}</td>
        <td>{{$post['Location_Postcode']}}</td>
        <td>{{$post['Location_Number']}}</td>
        <td>{{$post['Location_Address1']}}</td>
        <td>{{$post['Location_Address2']}}</td>
        <td>{{$post['Location_Town']}}</td>
        <td>{{$post['Location_City']}}</td>
        <td>{{$post['Location_County']}}</td>
        <td>{{$post['Location_Country']}}</td>
        <td>{{$post['Location_Date']}}</td>
        <td>{{$post['Location_Time']}}</td>
        <td>{{$post['Location_Distance']}}</td>
        <td>{{$post['Location_Longtitude']}}</td>
        <td>{{$post['Location_Latitude']}}</td>
        <td><a href="{{action('LOCATIONController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('LOCATIONController@destroy', $post['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection