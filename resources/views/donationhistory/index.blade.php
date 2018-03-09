<!-- index.blade.php -->
@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Today Blood Total</th>
        <th>Blood Total</th>
        <th>Appointment Total</th>
        <th>Reward</th>
        <th>Years Donating</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($donation_histories as $post)
      <tr>
        <td>{{$post['TodayBloodTotal']}}</td>
        <td>{{$post['BloodTotal']}}</td>
        <td>{{$post['AppointmentTotal']}}</td>
        <td>{{$post['Reward']}}</td>
        <td>{{$post['YearsDonating']}}</td>
        <td><a href="{{action('DONATIONHISTORYController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('DONATIONHISTORYController@destroy', $post['id'])}}" method="post">
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