@extends('home')
@section('title', 'User Profile')
@section('content')
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;

    }
</style>
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

        <table>
            @foreach ($user as $user)
            @if($user->type === 'user')
            <tr>
                <th>Personal Detail</th>
                <th>Detail</th>
            </tr>
            <tr>
                <td>Name</td>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{Auth::user()->email}}</td>
            </tr>
            <tr>
                <td>Country Name</td>
                <td>{{Auth::user()->country}}</td>
            </tr>
            <tr>
                <td>City Name</td>
                <td>{{Auth::user()->city}}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{Auth::user()->phone}}</td>
            </tr>
            <tr>
                <td>Brithday</td>
                <td>{{Auth::user()->Brithday}}</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>{{Auth::user()->gender}}</td>
            </tr>
            <tr>
                <td>National</td>
                <td>{{Auth::user()->National}}</td>
            </tr>
            @endif
            @endforeach
        </table>
  
    </section>
</section>

<script src="{{ asset('js/scripts.min.js') }}"></script>
<script src="{{ asset('js/main.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

@endsection