@extends('layouts.admin')

@section('content')
  <h1 class="text-center">Clubs</h1>
  <a href="/admin/club/add" class="btn btn-primary pull-right">Add New</a>

  @if(count($clubs) > 0)
    <table class="table table-hover">
      <colgroup>
        <col>
        <col>
        <col>
        <col>
        <col>
        <col class="admin-table-buttons">
      </colgroup>
      <thead>
        <tr>
          <th>Name</th>
          <th>Long Name</th>
          <th>Contact Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th></th>
        </tr>
      </thead>

      @foreach($clubs as $club)
        <tr>
          <td>{{$club->name}}</td>
          <td>{{$club->long_name}}</td>
          <td>{{$club->contact}}</td>
          <td>{{$club->phone}}</td>
          <td>{{$club->email}}</td>
          <td>
            <a href="/admin/club/{{$club->id}}/edit" class="btn btn-warning btn-sm pull-left">Edit</a>
            {!! Form::open(['method'=>'DELETE', 'action'=>['ClubsController@destroy', $club->id]]) !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm pull-right']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
      @endforeach

    </table>
  @endif

@endsection