@extends('layouts.admin')

@section('content')

  <h1 class="text-center">Create New Facility</h1>

  {!! Form::open(['method'=>'POST', 'action'=>'FacilitiesController@store', 'files'=>true]) !!}

    <div class="form-group">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('description', 'Description') !!}
      {!! Form::textarea('description', null, ['id'=>'article-ckeditor', 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('file1', 'First Image') !!}
      {!! Form::file('file1') !!}
    </div>

    <div class="form-group">
      {!! Form::label('file2', 'Second Image') !!}
      {!! Form::file('file2') !!}
    </div>

    {!! Form::submit('Create', ['class'=>'btn btn-primary pull-right']) !!}

  {!! Form::close() !!}

@endsection