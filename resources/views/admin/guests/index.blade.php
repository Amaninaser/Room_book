<x-dashboard-layout>
  <div style="margin-top: 20px !important;">
    <x-alert />
  </div>
  <section>
    <section class="wrapper">
      <h3><i class="fa fa-angle-right"></i>All Guest</h3>
      <div class="row mt">
        <div class="col-lg-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Guest</h4>
            <section id="unseen">
              <table class="table table-bordered table-striped table-condensed">
                <thead>
                  <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Brithday</th>
                    <th>Gender</th>
                    <th>National</th>
                    <th>Country Name</th>
                    <th>City Name</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($guests as $guest)
                  <tr>


                    <td>{{ $guest->first_name }}</td>
                    <td>{{ $guest->last_name }}</td>
                    <td>{{ $guest->email }}</td>
                    <td>{{ $guest->phone }}</td> 
                    <td>{{ $guest->Brithday }}</td>
                    <td>{{ $guest->gender }}</td>
                    <td>{{ $guest->National }}</td>
                    <td>{{ $guest->city->country->country_name }}</td>
                    <td>{{ $guest->city->city_name }}</td>
                    <td>

                      <form action="/admin/guests/{{ $guest->id }}/edit" method="POST" style="padding: 0px !important; border:0px !important;">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-primary">Update</a>
                      </form>

                    </td>
                    <td>

                      <form action="/admin/guests/ {{ $guest->id }}" method="post" style="padding: 0px !important; border:0px !important;">
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