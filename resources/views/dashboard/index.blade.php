@extends('layouts.admin')

@section('content')
  <h1 class="text-center">Dashboard</h1>

  <div class="row">
    <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Contact Form Options</h3>
        </div>
        <div class="panel-body">
          {!! Form::open(['method'=>'POST', 'action'=>'DashboardController@addOption']) !!}
            {!! Form::label('description', 'Add Option') !!}
            {!! Form::text('description', null, ['class'=>'form-control']) !!}
            {!! Form::submit('Add', ['class'=>'btn btn-success pull-right']) !!}
          {!! Form::close() !!}
          <div class="clearfix"></div>
          @if(count($options) > 0)
          @foreach($options as $option)
          <p>{{ $option->description }}</p>
          @endforeach
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection