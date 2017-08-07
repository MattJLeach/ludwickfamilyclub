@extends('layouts.admin')

@section('content')

  <h1 class="text-center">Edit {{$person->name}}</h1>

  {!! Form::model($person, ['method'=>'PUT', 'action'=>['PeopleController@update', $person->id], 'files'=>true]) !!}

    <div class="form-group">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('description', 'Description') !!}
      {!! Form::textarea('description', null, ['id'=>'article-ckeditor', 'class'=>'form-control']) !!}
    </div>

    @if($person->image)
    <div class="form-group image-edit">
      <img src="/images/uploads/people/{{$person->image}}" alt="{{$person->name}}">
      {{--  {!! Form::open(['method'=>'DELETE', 'action'=>['PeopleController@remove', $person->id], 'files'=>true]) !!}
      {!! Form::submit('Delete', ['class'=>'btn btn-danger btn-sm']) !!}
      {!! Form::close() !!}  --}}
    </div>
    @else
    <div class="form-group">
      {!! Form::file('file') !!}
    </div>
    @endif

    <a href="/admin/people" class="btn btn-primary">Back</a>
    {!! Form::submit('Update', ['class'=>'btn btn-success pull-right']) !!}

  {!! Form::close() !!}

@endsection