@extends('home')
@section('title', 'Home')
@section('content')

<section class="probootstrap-slider flexslider probootstrap-inner">
  <ul class="slides">
    <li style="background-image: url({{ asset('images/background.jpg') }});" class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="probootstrap-slider-text text-center">
              <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
              <h1 class="probootstrap-heading probootstrap-animate">Book A Room</h1>
              <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
            </div>
          </div>
        </div>
      </div>
    </li>
  </ul>
</section>

<div class="container" style="margin-top: 20px !important;">
    <x-alert />
  </div>



<section class="probootstrap-section">
  <div class="container">
    <div class="row probootstrap-gutter40">
      <div class="col-md-8">
        <h2 class="mt0">Reservation Form</h2>
        <form action="{{ route('reservationForm.store') }}" method="post" class="probootstrap-form">
          @csrf

          <!-- email -->
          <div class="form-group">
            <div class="form-group">
              <label for="user_id">Email</label>
              <div class="form-field">
              <i class="icon icon-mail"></i>
              <lablel for="user_id" name="user_id" class="form-control" value="{{ Auth::user()->id }}">{{ Auth::user()->email }}</label>
            </div>
          </div>
          </div>

          <div class="form-group">
            <div class="form-group">
              <label for="user_id">User Name</label>
              <div class="form-field">
              <i class="icon icon-mail"></i>
              <lablel for="user_id" name="user_id" class="form-control" value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</label>
            </div>
          </div>
          </div>
          
          <div class="form-group">
            <label for="room">Room Type:</label>
            <div class="form-field">
              <i class="icon icon-chevron-down"></i>
              <select name="room_id" class="form-control @error('room_type') is-invalid @enderror">
                <option value="">Select Room Type</option>
                @foreach ($room as $room)
                <option value="{{ $room->id }}" @if($room->id == old('room_id', $reservation->room_id) ) selected @endif >{{ $room->room_type }}</option>
                @endforeach
              </select>
              @error('room_id')
              <p class="invalid-feedback"> {{ $message }} </p>
              @enderror
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="arrival">Arrival</label>
                <div class="form-field">
                  <i class="icon icon-calendar2"></i>
                  <input type="date" class="form-control" id="arrival" name="arrival">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="departure">Departure</label>
                <div class="form-field">
                  <i class="icon icon-calendar2"></i>
                  <input type="date" class="form-control" id="departure" name="departure">
                </div>
              </div>
            </div>
          </div>


          <div class="form-group">
            <div class="form-group">
              <label for="details">Note</label>
              <textarea type="text" name="details" class="form-control" placeholder="Write Here" value="{{ old('details') }}"></textarea>
              @if ($errors->has('details'))
              <span class="text-danger">{{ $errors->first('details') }}</span>
              @endif
            </div>
          </div>


          <div class="form-group">
            <input type="submit" class="btn btn-primary btn" id="submit" name="submit" value="Reserve">
          </div>
        </form>
      </div>
      <div class="col-md-4">
        <h2 class="mt0">Contact</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <p><a href="/contact-form" class="btn btn-primary" role="button">Send Message</a></p>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-half">
  <div class="image" style="background-image: url(img/slider_2.jpg);"></div>
  <div class="text">
    <div class="probootstrap-animate fadeInUp probootstrap-animated">
      <h2 class="mt0">Best 5 Star hotel</h2>
      <p><img src="img/curve_white.svg" class="seperator" alt="Free HTML5 Bootstrap Template"></p>
      <div class="row">
        <div class="col-md-6">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </div>
        <div class="col-md-6">
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
      </div>
      <p><a href="#" class="link-with-icon white">Learn More <i class=" icon-chevron-right"></i></a></p>
    </div>
  </div>
</section>
@endsection