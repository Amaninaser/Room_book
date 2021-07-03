<x-dashboard-layout>
<x-alert />

<section class="probootstrap-section">
    <div class="">
      <div class="row">
        <div class="clearfix visible-sm-block"></div>
        @foreach($room as $room)
   
        @endforeach

      </div>



      <script src="{{ asset('js/scripts.min.js') }}"></script>
      <script src="{{ asset('js/main.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>

</x-dashboard-layout>