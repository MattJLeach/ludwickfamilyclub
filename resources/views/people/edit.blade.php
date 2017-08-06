@extends('layouts.admin')

@section('content')

  <h1>Edit {{$person->name}}</h1>

  {!! Form::model($person, ['method'=>'PUT', 'action'=>['PeopleController@update', $person->id], 'files'=>true]) !!}

    <div class="form-group">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('description', 'Description') !!}
      {!! Form::textarea('description', null, ['id'=>'article-ckeditor', 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::file('file') !!}
    </div>

    <a href="/admin/people" class="btn btn-primary">Back</a>
    {!! Form::submit('Update', ['class'=>'btn btn-success pull-right']) !!}

  {!! Form::close() !!}

@endsection