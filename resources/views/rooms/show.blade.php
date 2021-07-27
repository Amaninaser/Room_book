@extends('home')
@section('title', 'Home')
@section('content')
<link rel="stylesheet" href="{{ asset('css/asset/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/asset/_forms.scss') }}">


<section class="probootstrap-slider flexslider">
    @foreach($room->images as $image)
    <ul class="slides ">
        <li style="background-image: url('{{ $image->image_url }}'); " class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <h1 class="probootstrap-heading probootstrap-animate">Welcome to {{$room->room_type}}</h1>
                            <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    @endforeach
</section>

<section class="probootstrap-cta probootstrap-light">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="probootstrap-cta-heading">Reserve a room for your family <span> &mdash; Far far away behind the word mountains far.</span></h2>
                <div class="probootstrap-cta-button-wrap"><a href="/reservationForm" class="btn btn-primary" style="color: #fff !important;">Reserve now</a></div>
            </div>
        </div>
    </div>
</section>

<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 probootstrap-relative">
                <h3 class="mt0 mb30">Gallery</h3>

                <ul class="probootstrap-owl-navigation absolute right">
                    <li><a href="/{{$room->slug}}" class="probootstrap-owl-prev"><i class="icon-chevron-thin-left"></i></a></li>
                    <li><a href="/{{$room->slug}}" class="probootstrap-owl-next"><i class="icon-chevron-thin-right"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 ">
                <div class="slider-gallery">
                    <ul class="owl-carousel owl-carousel-carousel">
                        @foreach($room->images as $image)
                        <li class="slick-slide slick-cloned" width="200" height="200" data-slick-index="-4" aria-hidden="true">
                            <img src="{{ $image->image_url }}" alt="{{ $image->room_type }}">
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="info-grid">
                    <div class="row align-items-center">
                        <div class="col-6 col-sm">
                            <div class="info-grid-label">Room size</div>
                            <div class="info-grid-text">{{ $room->room_size }} <sup>2</sup></div>
                        </div>
                        <div class="col-6 col-sm">
                            <div class="info-grid-label">Sleeps</div>
                            <div class="info-grid-text">{{ $room->adults }} Adults + {{ $room->children }} Childs</div>
                        </div>
                        <div class="col-6 col-sm">
                            <div class="info-grid-label">Bed types</div>
                            <div class="info-grid-text">{{ $room->bedding }}</div>
                        </div>
                        <div class="col-6 col-sm">
                            <div class="info-grid-label">Bathroom</div>
                            <div class="info-grid-text">{{ $room->Bathroom }}</div>
                        </div>
                        <div class="col-6 col-sm">
                            <div class="info-grid-label">Price</div>
                            <div class="info-grid-text">$ {{ $room->room_price }}</div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 mt-md-7"></div>
                <h2 class="mt-3 bt-3">Room Description</h2>
                <p> {{ $room->description }}</p>
                <div class="mt-3 mt-md-5"></div>
                <h2>Room Features</h2>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="marker-list">
                            <li><i class="icofont-tick-mark"></i> Full furnished and equipped with A/C</li>
                            <li><i class="icofont-tick-mark"></i> Hot &amp; Cold Water</li>
                            <li><i class="icofont-tick-mark"></i> Private Bathroom</li>
                            <li><i class="icofont-tick-mark"></i> 32” Television</li>
                            <li<i class="icofont-tick-mark"></i> Mini Bar</li>
                        </ul>

                    </div>
                    <div class="col-md-8 mt-4 mt-md-0">
                        <div class="d-flex justify-content-between flex-wrap">
                            <div class="icn-text-sm">
                                <div class="icn-text-circle"><i class="icofont-wifi "></i></div>
                                <div>Free WiFi:</div>
                            </div>
                            <div class="icn-text-sm">
                                <div class="icn-text-circle"><i class="icofont-cab"></i></i></div>
                                <div>Transport:</div>
                            </div>
                            <div class="icn-text-sm">
                                <div class="icn-text-circle"><i class="icofont-culinary"></i></div>
                                <div>Food:</div>
                            </div>
                            <div class="icn-text-sm">
                                <div class="icn-text-circle"><i class="icofont-cocktail"></i></div>
                                <div>Minibar:</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
</section>

<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 probootstrap-relative">
        <h3 class="mt0 mb30">More Rooms</h3>
        <ul class="probootstrap-owl-navigation absolute right">
          <li><a href="{{route('room.show',$room->slug) }}" class="probootstrap-owl-prev"><i class="icon-chevron-thin-left"></i></a></li>
          <li><a href="{{route('room.show',$room->slug) }}" class="probootstrap-owl-next"><i class="icon-chevron-thin-right"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 probootstrap-relative">
        <div class="owl-carousel owl-carousel-carousel">
          @foreach ($rooms as $room)
          @if($room->Is_active == 'Non_Active')

          <div class="item">
            <div class="probootstrap-room">
              <a href="{{route('room.show',$room->slug) }}"><img src="{{ $room->image_url }}" width="200" height="200 alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
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
          @endif
          @endforeach

        </div>
      </div>
    </div>
  </div>
</section>


<script src="{{ asset('js/scripts.min.js') }}"></script>
<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

@endsection