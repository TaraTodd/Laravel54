<!-- index.blade.php -->

@extends('master')
@section('content')
  <div class="container">
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Reward Name</th>
        <th>Reward Type</th>
        <th>Reward Description</th>
        <th>Reward Blood Total</th>
        <th>Reward Years Donating</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($rewards as $post)
      <tr>
        <td>{{$post['Reward_Name']}}</td>
        <td>{{$post['Reward_Type']}}</td>
        <td>{{$post['Reward_Description']}}</td>
        <td>{{$post['Reward_BloodTotal']}}</td>
        <td>{{$post['Reward_YearsDonating']}}</td>
        <td><a href="{{action('REWARDController@edit', $post['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('REWARDController@destroy', $post['id'])}}" method="post">
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