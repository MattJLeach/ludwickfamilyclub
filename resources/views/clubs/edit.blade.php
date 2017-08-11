@extends('layouts.admin')

@section('content')

  <h1 class="text-center">Create new club</h1>

  {!! Form::model($club, ['method'=>'PUT', 'action'=>['ClubsController@update', $club->id], 'files'=>true]) !!}

    <div class="row">
    
      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('name', 'Name') !!}
          {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('long_name', 'Long Name') !!}
          {!! Form::text('long_name', null, ['class'=>'form-control']) !!}
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          {!! Form::label('description', 'Description') !!}
          {!! Form::textarea('description', null, ['id'=>'article-ckeditor', 'class'=>'form-control']) !!}
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('contact', 'Contact Name') !!}
          {!! Form::text('contact', null, ['class'=>'form-control']) !!}
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('phone', 'Phone Number') !!}
          {!! Form::text('phone', null, ['class'=>'form-control']) !!}
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('email', 'Email') !!}
          {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('website', 'Website') !!}
          {!! Form::text('website', null, ['class'=>'form-control']) !!}
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('facebook', 'Facebook') !!}
          {!! Form::text('facebook', null, ['class'=>'form-control']) !!}
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('twitter', 'Twitter') !!}
          {!! Form::text('twitter', null, ['class'=>'form-control']) !!}
        </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('google', 'Google Plus') !!}
          {!! Form::text('google', null, ['class'=>'form-control']) !!}
        </div>
      </div>

      @if($club->file)
      <div class="alert alert-danger" role="alert">Uploading a new image will override the current one</div>
      @endif

      <div class="col-md-6">
        <div class="form-group">
          {!! Form::label('file', 'Image File') !!}
          {!! Form::file('file') !!}
        </div>
      </div>

      <div class="col-md-12">
        <a href="/admin/clubs" class="btn btn-primary">Back</a>
        {!! Form::submit('Update', ['class'=>'btn btn-success pull-right']) !!}
      </div>
    
    </div>
  
  {!! Form::close() !!} 

@endsection