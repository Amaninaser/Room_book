<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>{{ config('app.name') }}</title>
  <meta name="description" content="Free Bootstrap Theme by uicookies.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png')}}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />

  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/zabuto_calendar.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/gritter/css/jquery.gritter.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-fileupload/bootstrap-fileupload.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-datepicker/css/datepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-daterangepicker/daterangepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-timepicker/compiled/timepicker.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('lib/bootstrap-datetimepicker/datertimepicker.css') }}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
  <script src="{{ asset('lib/chart-master/Chart.js') }}"></script>
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">


  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->

      <div class="top-menu">
        <ul class="nav pull-right top-menu">

          <li><a class="logout" href="#" onclick="document.getElementById('logout').submit()">Logout</a></li>
          <form id="logout" class="d-none" action="{{ route('logout','web') }}" method="post">
            @csrf
          </form>

        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('img/ui-sam.jpg')}}" class="img-circle" width="80"></a></p>
          @auth('web')
          <h5 class="centered">Hi, {{ Auth::user()->name }}</h5>
          @endauth
          <li class="mt-3">
            <a class="@if(request()->routeIs('admin.show')) active @endif" href="{{route('admin.show')}}">
              <i class="fa fa-dashboard"></i>
              <span>Profile</span>
            </a>
          </li>
          <li class="mt-3">
            <a class="@if(request()->routeIs('admin.rooms.index')) active @endif" href="{{route('admin.rooms.index')}}">
              <i class="fa fa-hotel"></i>
              <span>Show Rooms</span>
            </a>
          </li>

          <li class="mt-3">
            <a class="@if(request()->routeIs('admin.rooms.create')) active @endif" href="{{route('admin.rooms.create')}}">
              <i class="fa fa-plus-square"></i>
              <span>Add Room</span>
            </a>
          </li>

          <li class="mt-3">
            <a class="@if(request()->routeIs('reservations.index')) active @endif" href="{{ route('reservations.index') }}">
            <i class="fa fa-address-book"></i>        
                  <span>Show Reservation</span>
            </a>
          </li>

          <li class="mt-3">
            <a href="/admin/reservations">
              <i class="fa fa-check-square"></i>
              <span>Confirm Reservation</span>
            </a>
          </li>



          <li class="mt-3">
            <a class="@if(request()->routeIs('admin.users.index')) active @endif" href="{{route('admin.users.index')}}">
              <i class="fa fa-users"></i>
              <span>Customers/Users</span>
            </a>
          </li>

          <li class="mt-3">
            <a class="@if(request()->routeIs('admin.index')) active @endif" href="{{ route('admin.index') }}">
              <i class="fa fa-envelope"></i>
              <span>Contacts</span>
            </a>
          </li>

          <li class="mt-3">
            <a class="@if(request()->routeIs('admin.roles.index')) active @endif" href="{{route('admin.roles.index')}}">
            <i class="fa fa-check-circle"></i>              <span>Roles</span>
            </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <section id="main-content">
      <section class="wrapper">
        {{ $slot }}
      </section>
    </section>

    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer>
    <!--footer end-->
  </section>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>

  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('lib/jquery.sparkline.js') }}"></script>
  <!--common script for all pages-->
  <script src="{{ asset('lib/common-scripts.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/gritter/js/jquery.gritter.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/gritter-conf.js') }}"></script>
  <!--script for this page-->
  <script src="{{ asset('lib/sparkline-chart.js') }}"></script>
  <script src="{{ asset('lib/zabuto_calendar.js') }}"></script>
  <!-- js placed at the end of the document so the pages load faster -->
  <script class="include" type="text/javascript" src="{{ asset('lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <!--script for this page-->
  <script src="{{ asset('lib/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/bootstrap-fileupload/bootstrap-fileupload.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/bootstrap-daterangepicker/date.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/bootstrap-daterangepicker/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('lib/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
  <script src="{{ asset('lib/advanced-form-components.js') }}"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo. Developed by <a href="http://alvarez.is" target="_blank" style="color:#4ECDC4">Alvarez.is</a>.',
        // (string | optional) the image to display on the left
        image: '{{ asset('
        img / ui - sam.jpg ') }}',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>