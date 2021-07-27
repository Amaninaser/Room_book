@extends('home')
@section('title', 'Conttact Form')
@section('content')

<section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url(img/background.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Contact</h1>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6801.799976694364!2d34.4331627!3d31.5269067!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x99bb4d6be1f2ad03!2z2YHZhtiv2YIg2KzYsdin2YbYryDYqNin2YTYp9izIEdyYW5kIFBhbGFjZSBIb3RlbA!5e0!3m2!1sen!2s!4v1626416224800!5m2!1sen!2s" width="450" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
            </div>
        </div>
    </section>

@endsection