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

<div class="container">

  @if(Session::has('success'))
  <div class="alert alert-success">
    {{ Session::get('success') }}
    @php
    Session::forget('success');
    @endphp
  </div>
  @endif
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
              <lablel for="user_id" name="user_id" class="form-control" value="{{ Auth::user()->email }}">{{ Auth::user()->email }}</label>
            </div>
          </div>
          </div>

          <div class="form-group">
            <div class="form-group">
              <label for="user_id">User</label>
              <div class="form-field">
              <i class="icon icon-user"></i>
              <lablel for="user_id" name="user_id" class="form-control" value="{{ Auth::user()->name }}">{{ Auth::user()->name }}</label>
            </div>
          </div>
          </div>
          
          <div class="form-group">
            <label for="room">Room Name:</label>
            <div class="form-field">
              <i class="icon icon-chevron-down"></i>
              <select name="room_id" class="form-control @error('room_name') is-invalid @enderror">
                <option value="">Select Room Type</option>
                @foreach ($room as $room)
                <option value="{{ $room->id }}" @if($room->id == old('room_id', $reservation->room_id) ) selected @endif >{{ $room->room_name }}</option>
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


          <!-- <div class="row mb30">
            <div class="col-md-6">
              <div class="form-group">
                <label for="adults">Adults</label>
                <div class="form-field">
                  <i class="icon icon-chevron-down"></i>
                  <select name="adults" id="adults" class="form-control">
                    <option value="">Number of Adults</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4+</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="children">Children</label>
                <div class="form-field">
                  <i class="icon icon-chevron-down"></i>
                  <select name="children" id="children" class="form-control">
                    <option value="">Number of Children</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4+</option>
                  </select>
                </div>

              </div>
            </div>
          </div> -->

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