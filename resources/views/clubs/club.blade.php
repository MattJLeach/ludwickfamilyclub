@extends('layouts.public')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="angle-header text-center paper paper-title">
        <h1>{{$club->name}}</h1>
        @if($club->longName)
          <h3>{{$club->longName}}</h3>
        @endif
      </div>
    </div>
  </div>

  <section>
    <div class="row">
      <div class="col-md-4">
        <div class="angle box text-center club-details paper-title">
          <div>
            <h2>Contact Details</h2>
            <div class="col-xs-4 text-right">Name:</div>
            <div class="col-xs-8 text-left club-contact">
              {{$club->contact}}
            </div><br />
            <div class="col-xs-4 text-right">Phone:</div>
            <div class="col-xs-8 text-left club-contact">
              {{$club->phone}}
            </div><br />
            <div class="col-xs-4 text-right">Email:</div>
            <div class="col-xs-8 text-left club-contact">
              <a href="mailto:{{$club->email}}">{{$club->email}}</a>
            </div><br />
            <div class="col-xs-4 text-right">Website:</div>
            <div class="col-xs-8 text-left club-contact">
              <a href="//{{$club->website}}" target="_blank">{{$club->website}}</a>
            </div><br />
            <!-- Social links here -->
            <div class="col-xs-12">
            @if($club->facebook)
              <a href="https://www.facebook.com/{{$club->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a>
            @endif
            @if($club->twitter)
              <a href="https://twitter.com/{{$club->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
            @endif
            @if($club->google)
              <a href="https://plus.google.com/{{$club->google}}/posts" target="_blank"><i class="fa fa-google-plus"></i></a>
            @endif
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8">
        @if($club->description || $club->sessions)
        <div class="angle box text-center club-description paper-title">
          @if($club->description)
          <h2>Description</h2>
          <p>{{$club->description}}</p>
          @endif
          @if($club->sessions)
          <h2>Session Times</h2>
          {{--  Still need to add this  --}}
          @endif
        </div>
        @endif
      </div>
    </div>
    @if($club->image)
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="angle box text-center club-image paper-title">
            <img src="/images/{{$club->image}}" alt="">
          </div>
        </div>
      </div>
    @endif
  </section>
@endsection