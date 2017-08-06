@extends('layouts.admin')

@section('content')

  <h1 class="text-center">Facilities</h1>
  <a href="/admin/facilty/create" class="btn btn-primary pull-right">Add New</a> 

  @if(count($facilities) > 0)
    <table class="table table-hover">
      <colgroup>
        <col width="150px">
        <col>
        <col class="admin-table-buttons">
      </colgroup>
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th></th>
        </tr>
      </thead>

      @foreach($facilities as $facility)
        <tr>
          <td>{{$facility->name}}</td>
          <td>{!! str_limit($facility->description, 100) !!}</td>
          <td>
            <a href="/admin/facility/{{$facility->id}}" class="btn btn-warning btn-sm pull-left">Edit</a> 
            {!! Form::open(['method'=>'DELETE', 'action'=>['FacilitiesController@destroy', $facility->id]]) !!}
            {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm pull-right']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
      @endforeach

    </table>
  @endif

@endsection