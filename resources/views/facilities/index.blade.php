@extends('layouts.public')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="angle-header text-center paper paper-title">
      <h1>Facilities</h1>
      </div>
    </div>
  </div>

  @if(count($facilities) > 0)

    <section>
    <div class="row">
      @foreach($facilities as $facility)
        <div class="col-sm-12">
          <div class="angle box text-center facility paper-title">
            <div class="facility-text">
              <h2>{{$facility->name}}</h2>
              {!! $facility->description !!}
              @if($facility->image1 && !$facility->image2)
              <div class="col-sm-6 col-sm-offset-3">
                <img src="/images/uploads/facilities/{{ $facility->image1 }}" alt="{{ $facility->image1 }}" class="full-width">
              </div>
              @endif
              @if($facility->image1 && $facility->image2)
              <div class="col-sm-6">
                <img src="/images/uploads/facilities/{{ $facility->image1 }}" alt="{{ $facility->image1 }}" class="full-width">
              </div>
              <div class="col-sm-6">
                <img src="/images/uploads/facilities/{{ $facility->image2 }}" alt="{{ $facility->image2 }}" class="full-width">
              </div>
              @endif
              <div class="clearfix"></div> 
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  @endif

@endsection