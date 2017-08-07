@extends('layouts.public')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="angle-header text-center paper paper-title">
        <h1>People</h1>
      </div>
    </div>
  </div>

  <section>
    @foreach($people as $person)
    <div class="row">
  		<div class="col-md-12">
  			<div class="angle box text-center people paper-title">
  				<div class="col-sm-4">
  					<img src="/images/uploads/people/{{$person->image}}" alt="{{$person->name}}" class="people-img">  
  				</div>
  				<div class="col-sm-8">
  					<h2>{{$person->name}}</h2>
  					<p>{{$person->description}}</p>
  				</div>
  			</div>
  		</div>
  	</div>
    @endforeach
  </section>
@endsection