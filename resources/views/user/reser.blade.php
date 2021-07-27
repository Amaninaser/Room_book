@extends('home')
@section('title', 'User Profile')
@section('content')

<section class="probootstrap-slider flexslider">

    <ul class="slides">
        <li style="background-image: url( {{ asset('images/background.jpg') }} ); " class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="probootstrap-slider-text text-center">
                            <p><img src="{{ asset('img/curve_white.svg') }}" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                            <h1 class="probootstrap-heading probootstrap-animate">You'r Reservations Rooms</h1>
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

<section>
    <section class="container">
        <div class="row mt">
            <div class="col-lg-12">
                <div class="content-panel">
                    <h4><i class="fa fa-angle-right"></i>You'r Reservation</h4>
                    <section id="unseen">
                        <table class="table table-bordered table-striped table-condensed">
                            <thead>

                                <tr style="background-color:lightblue !important; color:black">
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>

                                    <th>Room Type</th>
                                    <th>Arrival</th>
                                    <th>Departure</th>
                                    <th>Max Guest</th>
                                    <th>Children</th>
                                    <th>Adults</th>

                                    <th>Total Price</th>

                                </tr>
                            </thead>

                            <tbody>
                                @if($reservations->count()==0)
                                <tr>
                                    <td colspan="10" style="padding-left:40% !important; color:black">You haven't booked any room yet</td>
                                </tr>
                                @endif

                                @foreach ($reservations as $reservation)
                                @if($reservation->user->id == Auth::user()->id)
                                <tr>
                                    <td>{{ $reservation->user->name }}</td>
                                    <td>{{ $reservation->user->email }}</td>
                                    <td>{{ $reservation->user->phone }}</td>

                                    <td>{{ $reservation->room->room_type }}</td>
                                    <td>{{ $reservation->arrival }}</td>
                                    <td>{{ $reservation->departure }}</td>
                                    <td>{{ $reservation->room->max_guest }}</td>
                                    <td>{{ $reservation->room->children }}</td>
                                    <td>{{ $reservation->room->adults }}</td>

                                    <td>$ {{ $reservation->room->room_price }} </td>

                                </tr>
                                @endif
                                @endforeach

                            </tbody>
                        </table>
                    </section>
                </div>
                <!-- /content-panel -->
            </div>
            <!-- /col-lg-4 -->
        </div>

    </section>
    <!-- /wrapper -->
</section>

@endsection