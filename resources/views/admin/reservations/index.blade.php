<x-dashboard-layout>


  <div style="margin-top: 20px !important;">
    <x-alert />
  </div>

  <section>
    <section class="">
      <h3><i class="fa fa-angle-right"></i>All Reservation Guest</h3>
      <div class="row mt">
        <div class="col-lg-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Reservation Guest</h4>
            <section id="unseen">
              <table class="table table-bordered table-striped table-condensed">
                <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Room ID</th>

                    <th>Room Name</th>
                    <th>Room Type</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Max Guest</th>
                    <th>Total Price</th>
                    <th>Delete</th>

                  </tr>
                </thead>

                <tbody>
                  @foreach ($reservations as $reservation)
                  <tr>
                    <td>{{ $reservation->user->id }}</td>
                    <td>{{ $reservation->user->name }}</td>
                    <td>{{ $reservation->user->email }}</td>
                    <td>{{ $reservation->user->phone }}</td>
                    <td>{{ $reservation->room->id }}</td>
                    <td>{{ $reservation->room->room_name }}</td>
                    <td>{{ $reservation->room->room_type }}</td>
                    <td>{{ $reservation->arrival }}</td>
                    <td>{{ $reservation->departure }}</td>
                    <td>{{ $reservation->room->max_guest }}</td>
                    <td>$ {{ $reservation->room->room_price }} </td>
                    <td>
                    </td>
                  </tr>
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


  <script src="{{ asset('js/scripts.min.js') }}"></script>
  <script src="{{ asset('js/main.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</x-dashboard-layout>