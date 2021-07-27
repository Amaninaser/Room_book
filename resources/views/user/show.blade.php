@extends('home')
@section('title', 'User Profile')
@section('content')
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<section class="probootstrap-slider flexslider">

  <ul class="slides">
    <li style="background-image: url( {{ asset('images/background.jpg') }} ); " class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="probootstrap-slider-text text-center">
              <p><img src="{{ asset('img/curve_white.svg') }}" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
              <h1 class="probootstrap-heading probootstrap-animate">Welcome You'r Profile</h1>
              <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
            </div>
          </div>
        </div>
      </div>
    </li>

    <li style="background-image: url( {{ asset('img/background.jpg') }} );" class="overlay">
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

<section>
  <section class="container">

    <h2>My Profile:</h2>


    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-12">
          <div class="well well-sm">
            <div class="row">
              @foreach ($user as $user)
              @if($user->id ===Auth::user()->id)
              <div class="col-sm-6 col-md-4">
                @if($user->gender === 'Famale')
                <img src="{{ asset('images/person_1.jpg') }}" height="350" width="250" alt="" class="img-rounded img-responsive" />
           @else
           <img src="{{ asset('images/person_2.jpg') }}" height="350" width="250" alt="" class="img-rounded img-responsive" />
                @endif 
              </div>
              <div class="col-sm-6 col-md-8">
                <h2>
                  {{ Auth::user()->name }}  
                  <a href="myprofile/edit">
                  <button  type="button" class="btn btn-primary">Update</button>

                  </a>
                </h2>
                
                <p><cite title=""><i class="fa fa-globe"> </i> {{Auth::user()->city}}, {{Auth::user()->country}} </cite></p>
                <div class="row">
                  <div class="col-md-6">

                    <p class="ml-2">
                      <i class="fa fa-envelope"> </i> {{Auth::user()->email}}
                      <br />
                      <i class="fa fa-globe"></i> {{Auth::user()->National}}

                      <br />
                      <i class="fa fa-building"></i> {{Auth::user()->city}}
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p>

                      <i class="fa fa-birthday-cake"> </i> {{Auth::user()->Brithday}}
                      <br /> 
                      <i class="fa fa-phone-square"></i> {{Auth::user()->phone}}
                      <br />
                      <i class="fa fa-venus-mars"></i> {{Auth::user()->gender}}
                    </p>
                    <br />

                    </p> <!-- Split button -->
                 
                  </div>

                </div>
              </div>
              @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>
</section>

<script src="{{ asset('js/scripts.min.js') }}"></script>
<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

@endsection