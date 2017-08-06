@extends('layouts.public')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="angle-header text-center paper paper-title">
        <h1>Clubs</h1>
      </div>
    </div>
  </div>
  <br />
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="angle text-center paper paper-title" style="padding:40px;">
        <p>If you run a club at Ludwick Family Club and there are missing, incomplete or incorrect details, please contact <a href="mailto:email@mattleach.info">our webmaster</a> to update your details.</p>
      </div>
    </div>
  </div>

  <section>
    <div class="row">
      <!-- Start club loop here -->
      @if(count($clubs) > 0)
        @foreach($clubs as $club)
          <div class="col-lg-2 col-md-3 col-sm-6">
            <a href="/club/{{$club->slug}}" class="link angle box text-center club paper-title">
              <div class="box-text">
                <h4>{{$club->name}}</h4>
                <p>{{$club->long_name}}</p>
              </div>
            </a>
          </div>
        @endforeach
      @endif
      <!-- End club loop here -->
    </div>
  </section>
@endsection