@extends('layouts.admin')

@section('content')
  <h1 class="text-center">People</h1>
  <a href="/admin/person/create" class="btn btn-primary pull-right">Add New</a>
  
  @if(count($people) > 0)
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th></th>
        </tr>
      </thead>
      @foreach($people as $person)
        <tbody>
          <tr>
            <td>{{$person->name}}</td>
            <td>{!! str_limit($person->description, 100) !!}</td>
            <td class="admin-table-buttons">
              <a href="/admin/person/{{$person->id}}" class="btn btn-warning btn-sm pull-left">Edit</a> 
              {!! Form::open(['method'=>'DELETE', 'action'=>['PeopleController@destroy', $person->id]]) !!}
              {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm pull-right']) !!}
              {!! Form::close() !!}
            </td>
          </tr>
        </tbody>
      @endforeach
    </table>
  @endif
@endsection