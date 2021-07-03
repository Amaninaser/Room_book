<x-dashboard-layout>
  <x-alert />
  <section>
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i>All Reservation Guest</h3>
      <div class="row mt">
        <div class="col-lg-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Reservation Guest</h4>
            <section id="unseen">
              <table class="table table-bordered table-striped table-condensed">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <!-- <th>Brithday</th>
                      <th>Gender</th>
                      <th>City Name</th> -->
                    <th>National</th>
                    <th>Arrival</th>
                    <th>Departure</th>
                    <th>Is_active</th>
                    <th>Total Price</th>
                    <th>Delete</th>

                  </tr>
                </thead>

                <tbody>
                  @foreach ($reservations as $reservation)
                  <tr>


                    <td>{{ $reservation->guest->first_name }}</td>
                    <td>{{ $reservation->guest->last_name }}</td>
                    <td>{{ $reservation->guest->email }}</td>
                    <td>{{ $reservation->guest->phone }}</td>
                    <!-- <td>{{ $reservation->guest->Brithday }}</td>
        <td>{{ $reservation->guest->gender }}</td>
        <td>{{ $reservation->guest->city->city_name }}</td> -->

                    <td>{{ $reservation->arrival }}</td>
                    <td>{{ $reservation->departure }}</td>
                    <td>{{ $reservation->Is_active }}</td>
                    <td>{{ $reservation->total_price }} </td>

                    <td>
                      <form action="/admin/reservations/{{ $reservation->id }}" method="post" style="padding: 0px !important; border:0px !important;">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-primary">Delete</a>
                      </form>
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