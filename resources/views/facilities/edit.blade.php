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

    @if($facility->image1 || $facility->image2)
    <div class="alert alert-danger" role="alert">Uploading a new image will override the current one</div>
    @endif

    <div class="form-group">
      {!! Form::file('image1') !!}
    </div>

    <div class="form-group">
      {!! Form::file('image2') !!}
    </div>

    <div class="col-md-12">
      <a href="/admin/facilities" class="btn btn-primary">Back</a>
      {!! Form::submit('Create', ['class'=>'btn btn-success pull-right']) !!}
    </div>

  {!! Form::close() !!}

@endsection