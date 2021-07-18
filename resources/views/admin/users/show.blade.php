<x-dashboard-layout>

  <section>
    <section class="">
      <h3 style="margin-top: 50px !important;"><i class="fa fa-angle-right"></i>Admin</h3>
      <div class="row mt">
        <div class="col-lg-12">
          <div class="content-panel">
            <h4><i class="fa fa-angle-right"></i> Admin</h4>
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
                  @foreach ($admin as $admin)
                   @if($admin->type === 'admin')
                  <tr>
                    <td>{{ $admin->id }}</td>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->type }}</td>
                    <td>{{ $admin->country }}</td>
                    <td>{{ $admin->city }}</td>
                    <td>{{ $admin->phone }}</td>
                    <td>{{ $admin->Brithday }}</td>
                    <td>{{ $admin->gender }}</td>
                    <td>{{ $admin->National }}</td>

                    <td>
                      <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.users.edit', $admin->id ) }}">Update</a>
                    </td>

                    <td>
                      <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.users.destroy', $admin->id ) }}">Delete</a>
                    </td>

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
  </section>

  <script src="{{ asset('js/scripts.min.js') }}"></script>
  <script src="{{ asset('js/main.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</x-dashboard-layout>