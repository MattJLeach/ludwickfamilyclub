@extends('layouts.admin')

@section('content')
  <h1 class="text-center">Users</h1>
  <a href="/register" class="btn btn-primary pull-right">Add New</a>
  <p>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</p>
  
  @if(count($users) > 0)
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Date Created</th>
          <th></th>
        </tr>
      </thead>
      @foreach($users as $user)
        <tbody>
          <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>
            <td>
            @if(Auth::user()->id !== $user->id)
            {!! Form::open(['method'=>'DELETE', 'action'=>['UsersController@destroy', $user->id]]) !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm pull-right']) !!}
            {!! Form::close() !!}
            @endif
            </td>
          </tr>
        </tbody>
      @endforeach
    </table>
  @endif
@endsection