<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>uiCookies:Atlantis &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
  <meta name="description" content="Free Bootstrap Theme by uicookies.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles-merged.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('icofont/icofont.min.css') }}">
  <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/font-awesome.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/asset/menu.css') }}">


  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

  <!--[if lt IE 9]>
      <script src="{{ asset('js/vendor/html5shiv.min.js') }}"></script>
      <script src="{{ asset('js/vendor/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body>

  <!-- START: header -->

  <header role="banner" class="probootstrap-header">
    <!-- <div class="container"> -->
    <div class="row" style="justify-content: center !important;">
      <a href="/" class="probootstrap-logo visible-xs"><img src="{{ asset('img/logo_sm.png') }}" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>

      <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
      <div class="mobile-menu-overlay"></div>

      <nav role="navigation" class="probootstrap-nav hidden-xs">
        <ul class="probootstrap-main-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/room">Our Rooms</a></li>
          <li><a href="/reservationForm">Reservation</a></li>
          <li class="hidden-xs probootstrap-logo-center"><a href="/"><img src="{{ asset('img/logo_md.png') }}" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a></li>
          <li><a href="/contact-form">Contact</a></li>

          @if(Route::has('login'))
          @auth
          @if(Auth::user()->type === 'user')
          <li> <a title="My Account" href="/myprofile/show">My Account ({{ Auth::user()->name }})</a></i>

          <li> <a title="My Account" href="/myprofile/show">My Reservation</a></i>

          <li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a></i>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>

            @else
          <li class="menu-item"><a title="Register or Login" href="{{ route('login') }}">Login</a></li>
          <li class="menu-item"><a title="Register or Login" href="{{ route('register') }}">Register</a></li>
          @endif
          @endauth
          @endif



        </ul>
        <div class="extra-text visible-xs">
          <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
          <h5>Connect With Us</h5>
          <ul class="social-buttons">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>
        </div>
      </nav>

    </div>
    <!-- </div> -->
  </header>
  <!-- END: header -->

  <main>@yield('content')</main>

  <!-- START: footer -->
  <footer role="contentinfo" class="probootstrap-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <p class="mt40"><img src="{{ asset('img/logo_sm.png') }}" class="hires" width="120" height="33" alt="Free HTML5 Bootstrap Template by uicookies.com"></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p><a href="/about" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h3>Blog</h3>
            <ul class="probootstrap-blog-list">
              <li>
                <a href="#">
                  <figure class="probootstrap-image"><img src="{{ asset('images/background.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                  <div class="probootstrap-text">
                    <h4>River named Duden flows</h4>
                    <span class="meta">August 2, 2017</span>
                    <p>A small river named Duden flows by their place</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <figure class="probootstrap-image"><img src="{{ asset('img/background.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                  <div class="probootstrap-text">
                    <h4>River named Duden flows</h4>
                    <span class="meta">August 2, 2017</span>
                    <p>A small river named Duden flows by their place</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="#">
                  <figure class="probootstrap-image"><img src="{{ asset('images/slider-6.jpg') }}" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                  <div class="probootstrap-text">
                    <h4>River named Duden flows</h4>
                    <span class="meta">August 2, 2017</span>
                    <p>A small river named Duden flows by their place</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h3>Contact</h3>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
              <li><i class="icon-mail"></i><span>info@domain.com</span></li>
              <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
            </ul>

          </div>
        </div>
      </div>
      <div class="row mt40">
        <div class="col-md-12 text-center">
          <ul class="probootstrap-footer-social">
            <li><a href=""><i class="icon-twitter"></i></a></li>
            <li><a href=""><i class="icon-facebook"></i></a></li>
            <li><a href=""><i class="icon-instagram2"></i></a></li>
          </ul>
          <p>
            <small>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Atlantis</a>. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a> Demo Images: Unsplash.com &amp; Pexels.com</small>
          </p>

        </div>
      </div>
    </div>
  </footer>
  <!-- END: footer -->

  <script src="{{ asset('js/scripts.min.js') }}"></script>
  <script src="{{ asset('js/main.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>



</body>

</html>