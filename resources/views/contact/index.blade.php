@extends('layouts.public')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="angle-header text-center paper paper-title contact-header">
        <h1>Contact Us</h1>
        <span>Hall Grove, W.G.C, Herts, AL7 4PH</span>
        <span>01707 324059</span>
        <span>Office Hours: 9am - 11am (Mon - Fri)</span>
      </div>
    </div>
  </div>

  <div class="">
    <div class="row">
      <div class="col-md-12">
        <div class="angle box text-center facility paper-title">
            <div class="facility-text">
              <div id="contact">
              {!! Form::open(['method'=>'POST', 'action'=>'ContactController@store']) !!}
                <div class="col-sm-6">
                  <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class'=>'form-control']) !!}
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email', null, ['class'=>'form-control']) !!}
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    {!! Form::label('phone', 'Phone') !!}
                    {!! Form::text('phone', null, ['class'=>'form-control']) !!}
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    {!! Form::label('contact_options_id', 'What are you contacting us about?') !!} 
                    <select id="contact_options_id" name="contact_options_id" class="form-control">
                      <option value="">(select one)</option>
                      @if(count($options) > 0)
                      @foreach($options as $option)
                      <option value="{{$option->id}}">{{$option->description}}</option>
                      @endforeach
                      @endif
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" placeholder="Leave us a message..." rows="4" class="form-control"></textarea>
                  </div>
                </div> 
                <div class="form-actions">
                  {!! Form::submit('Send', ['class'=>'btn btn-success pull-right']) !!}
                </div>
              {!! Form::close() !!}
              <div class="clearfix"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section>
    <div class="row">
      <div class="col-md-12">
        <div class="angle box text-center facility paper-title">
        <div class="facility-text">
          <h3>How To Find Us</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2467.9458469309507!2d-0.18146688370064434!3d51.78887592968231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x8cb61886e0fabef1!2sLudwick+Family+Club!5e0!3m2!1sen!2suk!4v1449516931654" width="95%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
      </div>
    </div>
  </section>
@endsection