<!-- index.blade.php -->
@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Day</th>
        <th>Duration</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($appointments as $post)
      <tr>
        <td>{{$post['Appointment_Date']}}</td>
        <td>{{$post['Appointment_Time']}}</td>
        <td>{{$post['Appointment_Day']}}</td>
        <td>{{$post['Appointment_Duration']}}</td>
        <td><a href="{{action('APPOINTMENTController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('APPOINTMENTController@destroy', $post['id'])}}" method="post">
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