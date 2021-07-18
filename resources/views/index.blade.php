@extends('home')
@section('title', 'Home')
@section('content')
<section class="probootstrap-slider flexslider">

  <ul class="slides">
    <li style="background-image: url( {{ asset('images/background.jpg') }} ); " class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="probootstrap-slider-text text-center">
              <p><img src="{{ asset('img/curve_white.svg') }}" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
              <h1 class="probootstrap-heading probootstrap-animate">Welcome to Atlantis</h1>
              <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
            </div>
          </div>
        </div>
      </div>
    </li>

    <li style="background-image: url( {{ asset('images/slider-7.jpg') }} );" class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="probootstrap-slider-text text-center">
              <p><img src="{{ asset('img/curve_white.svg') }}" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
              <h1 class="probootstrap-heading probootstrap-animate">Enjoy Luxury Experience</h1>
              <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
            </div>
          </div>
        </div>
      </div>

    </li>
  </ul>
</section>

<section class="probootstrap-cta probootstrap-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="probootstrap-cta-heading">Reserve a room for your family <span> &mdash; Far far away behind the word mountains far.</span></h2>
          <div class="probootstrap-cta-button-wrap"><a href="/room" class="btn btn-primary">Find Room and Reserve now</a></div>
        </div>
      </div>
    </div>
</section>

<section class="probootstrap-section">
  <div class="container">
    <div class="row mb30">
      <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
        <h2>Explore our Services</h2>
        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <p><img src="{{ asset('img/curve.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template"></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service left-icon probootstrap-animate">
          <div class="icon">
            <img src="{{ asset('img/flaticon/svg/001-building.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
          </div>
          <div class="text">
            <h3>1+ Million Hotel Rooms</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service left-icon probootstrap-animate">
          <div class="icon">
            <img src="{{ asset('img/flaticon/svg/003-restaurant.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
          </div>
          <div class="text">
            <h3>Food &amp; Drinks</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service left-icon probootstrap-animate">
          <div class="icon">
            <img src="{{ asset('img/flaticon/svg/004-parking.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
          </div>
          <div class="text">
            <h3>Airport Taxi</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-section probootstrap-section-dark">
  <div class="container">
    <div class="row mb30">
      <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
        <h2>Best Rooms</h2>
        <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
        <p><img src="{{ asset('img/curve.svg') }}" class="svg" alt="Free HTML5 Bootstrap Template"></p>
      </div>
    </div>
    <div class="row probootstrap-gutter10">
    @foreach ($rooms as $room)
    @if($room->stars == 5)

      <div class="col-md-6">
        <div class="probootstrap-block-image-text">
          <figure>
            <a href="{{ $room->image_url }}" height="200" class="image-popup">
              <img src="{{ $room->image_url }}" height="200" alt="Free HTML5 Bootstrap Template by uicookies.com" class="img-responsive">
            </a>
            <div class="actions">
              <a href="https://vimeo.com/45830194" class="popup-vimeo"><i class="icon-play2"></i></a>
            </div>
          </figure>
          <div class="text">
            <h3><a href="#">{{ $room->room_type }}</a></h3>
            <div class="post-meta">
              <ul>
                <li><span class="review-rate">{{ $room->stars }}</span> <i class="icon-star"></i> {{ $room->reviwes }} Reviews</li>
                <li><i class="icon-user2"></i> 3 Guests</li>
              </ul>
            </div>
            <p>{{ $room->description }}</p>
            <p><a href="/reservationForm" class="btn btn-primary">Book now from ${{ $room->room_price }}</a></p>
          </div>
        </div>
      </div>   
     @endif
     @endforeach
    </div>
  </div>
</section>

<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 probootstrap-relative">
        <h3 class="mt0 mb30">More Rooms</h3>
        <ul class="probootstrap-owl-navigation absolute right">
          <li><a href="room/{{$room->slug}}" class="probootstrap-owl-prev"><i class="icon-chevron-thin-left"></i></a></li>
          <li><a href="room/{{$room->slug}}" class="probootstrap-owl-next"><i class="icon-chevron-thin-right"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 probootstrap-relative">
        <div class="owl-carousel owl-carousel-carousel">
          @foreach ($rooms as $room)

          <div class="item">
            <div class="probootstrap-room">
              <a href="room/{{$room->slug}}"><img src="{{ $room->image_url }}" width="200" height="200 alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
              <div class="text">
                <h3>{{ $room->room_type }}</h3>
                <p>Starting from <strong>${{ $room->room_price }}/Night</strong></p>
                <div class="post-meta">
                  <ul>
                    <li><span class="review-rate">{{ $room->stars }}</span> <i class="icon-star"></i> 255 Reviews</li>
                    <li><i class="icon-user2"></i> {{ $room->max_guest }} Guests</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-half">
  <div class="image" style="background-image: url( {{ asset('img/slider_2.jpg') }} );">
  <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6801.799976694364!2d34.4331627!3d31.5269067!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x99bb4d6be1f2ad03!2z2YHZhtiv2YIg2KzYsdin2YbYryDYqNin2YTYp9izIEdyYW5kIFBhbGFjZSBIb3RlbA!5e0!3m2!1sen!2s!4v1626416224800!5m2!1sen!2s" width="710" height="680" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->

</div>
  <div class="text">
    <div class="probootstrap-animate fadeInUp probootstrap-animated">
      <h2 class="mt0">Best 5 Star hotel</h2>
      <p><img src="{{ asset('img/curve_white.svg') }}" class="seperator" alt="Free HTML5 Bootstrap Template"></p>
      <div class="row">
        <div class="col-md-6">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        </div>
        <div class="col-md-6">
          <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
      </div>
      <p><a href="/about" class="link-with-icon white">Learn More <i class=" icon-chevron-right"></i></a></p>
    </div>
  </div>
</section>

@endsection