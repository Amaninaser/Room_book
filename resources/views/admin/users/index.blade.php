<x-dashboard-layout>


  <div style="margin-top: 20px !important;">
  
    <x-alert />

  </div>

  <form action="{{ route('admin.users.index') }}" method="get" class="d-flex probootstrap-section" style="padding: 10px !important; border:0px !important;">
    <div class="">
      <div class="col-md-5  col-xs-5">
        <input type="text" class="form-control" name="id" placeholder="Search By ID">
      </div>
      <div class="col-md-5  col-xs-5">
        <input type="text" class="form-control" name="name" placeholder="Search By Name">
      </div>
      <div class="col-md-2  col-xs-2">
        <button type="submit" class="btn" style="background:#903479; color: #fff;">Search</button>

      </div>

    </div>
  </form>

  <section>
    <section class="">
      <h3 style="margin-top: 50px !important;"><i class="fa fa-angle-right"></i>All User</h3>
      <div class="row mt">
        <div class="col-lg-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> User</h4>
            <section id="unseen">
              <table class="table table-bordered table-striped table-condensed">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                    <th>Country Name</th>
                    <th>City Name</th>
                    <th>Phone</th>
                    <th>Brithday</th>
                    <th>Gender</th>
                    <th>National</th>
                    <th>Update</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>
                    <td>{{ $user->country }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>{{ $user->Brithday }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->National }}</td>

                    <td>
                      <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.users.edit', $user->id ) }}">Update</a>
                    </td>

                    <td>
                      <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.users.destroy', $user->id ) }}">Delete</a>
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
  </section>

  <script src="{{ asset('js/scripts.min.js') }}"></script>
  <script src="{{ asset('js/main.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</x-dashboard-layout>