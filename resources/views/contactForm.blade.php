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
        <div class="row">
            <a href="index.html" class="probootstrap-logo visible-xs"><img src="{{ asset('img/logo_sm.png') }}" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>

            <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
            <div class="mobile-menu-overlay"></div>

            <nav role="navigation" class="probootstrap-nav hidden-xs">
                <ul class="probootstrap-main-nav">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="rooms.html">Our Rooms</a></li>
                    <li class="hidden-xs probootstrap-logo-center"><a href="index.html"><img src="{{ asset('img/logo_md.png') }}" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a></li>
                    <li><a href="reservation.html">Reservation</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="/contact-form">Contact</a></li>
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


    <section class="probootstrap-slider flexslider">
        <ul class="slides">
            <li style="background-image: url( {{ asset('images/background.jpg') }} ); " class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="probootstrap-slider-text text-center">
                                <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
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
                                <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
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
                    <div class="probootstrap-cta-button-wrap"><a href="#" class="btn btn-primary">Reserve now</a></div>
                </div>
            </div>
        </div>
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
            <div class="row probootstrap-gutter60">
                <div class="col-md-8">
                    <h2 class="mt0">Contact Form</h2>
                    <form action="{{ route('contact-form.store') }}" method="post" class="probootstrap-form">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                            @if ($errors->has('phone'))
                            <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                            @if ($errors->has('subject'))
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h2 class="mt0">Get In Touch</h2>
                    <ul class="probootstrap-contact-info">
                        <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                        <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                        <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                    </ul>
                    <h2>Feedback</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p><a href="#" class="btn btn-primary" role="button">Send Message</a></p>
                </div>
            </div>
        </div>
    </section>


    <!-- START: footer -->
    <footer role="contentinfo" class="probootstrap-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <p class="mt40"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free HTML5 Bootstrap Template by uicookies.com"></p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <h3>Blog</h3>
                        <ul class="probootstrap-blog-list">
                            <li>
                                <a href="#">
                                    <figure class="probootstrap-image"><img src="img/img_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                    <div class="probootstrap-text">
                                        <h4>River named Duden flows</h4>
                                        <span class="meta">August 2, 2017</span>
                                        <p>A small river named Duden flows by their place</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure class="probootstrap-image"><img src="img/img_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                    <div class="probootstrap-text">
                                        <h4>River named Duden flows</h4>
                                        <span class="meta">August 2, 2017</span>
                                        <p>A small river named Duden flows by their place</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <figure class="probootstrap-image"><img src="img/img_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
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

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>