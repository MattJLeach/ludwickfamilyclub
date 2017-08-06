@extends('layouts.admin')

@section('content')

  <h1 class="text-center">Create New Facility</h1>

  {!! Form::model($facility, ['method'=>'PUT', 'action'=>['FacilitiesController@update', $facility->id]]) !!}

    <div class="form-group">
      {!! Form::label('name', 'Name') !!}
      {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('description', 'Description') !!}
      {!! Form::textarea('description', null, ['id'=>'article-ckeditor', 'class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::file('image1', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::file('image2', ['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('Create', ['class'=>'btn btn-primary pull-right']) !!}

  {!! Form::close() !!}

@endsection