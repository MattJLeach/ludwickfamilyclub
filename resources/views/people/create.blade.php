@extends('layouts.admin')

@section('content')

  <h1 class="text-center">Create New Person</h1>

  {!! Form::open(['method'=>'POST', 'action'=>'PeopleController@store', 'files'=>true]) !!}

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
    {!! Form::submit('Create', ['class'=>'btn btn-success pull-right']) !!}

  {!! Form::close() !!}

@endsection