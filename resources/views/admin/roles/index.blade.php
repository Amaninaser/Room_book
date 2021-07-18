<x-dashboard-layout>


  <div style="margin-top: 20px !important;">
    <x-alert />
  </div>

  <div class="col-md-6">
    <p><a href="{{ route('admin.roles.create') }}" class="btn btn-primary" style="margin-top: 8px !important;" role="button">Create</a></p>
  </div>

  <section class="probootstrap-section" style="padding-bottom: 5px !important;">

    <section>

      <section class="">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i>All Roles</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Role Name</th>
                      <th>Abilities</th>
                      <th>Created At</th>

                      <th>Update</th>
                      <th>Delete</th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach($roles as $role)
                    <tr>
                      <td>{{ $role->id }}</td>
                      <td>{{ $role->name }}</td>
                      <td>{{ count($role->abilities) }}</td>
                      <td>{{ $role->created_at }}</td>

                      <td>
                        <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.roles.edit', $role->id ) }}">Update</a>
                      </td>

                      <td>
                        <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.roles.destroy', $role->id ) }}">Delete</a>
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

  </section>

  {{ $roles->links() }}

  <script src="{{ asset('js/scripts.min.js') }}"></script>
  <script src="{{ asset('js/main.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</x-dashboard-layout>