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

    <div class="col-md-12">
      <a href="/admin/facilities" class="btn btn-primary">Back</a>
      {!! Form::submit('Create', ['class'=>'btn btn-success pull-right']) !!}
    </div>

  {!! Form::close() !!}

@endsection