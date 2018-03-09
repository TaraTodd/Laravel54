<!-- index.blade.php -->
@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Donor ID</th>
        <th>Blood Group</th>
        <th>Blood Pressure</th>
        <th>Smoker</th>
        <th>Medication</th>
        <th>Blood Total</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($medicaldetails as $post)
      <tr>
        <td>{{$post['DonorID']}}</td>
        <td>{{$post['BloodGroup']}}</td>
        <td>{{$post['BloodPressure']}}</td>
        <td>{{$post['Smoker']}}</td>
        <td>{{$post['Medication']}}</td>
        <td>{{$post['BloodTotal']}}</td>
        <td><a href="{{action('MEDICALDETAILController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('MEDICALDETAILController@destroy', $post['id'])}}" method="post">
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