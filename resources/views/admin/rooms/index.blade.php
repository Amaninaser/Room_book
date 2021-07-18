<x-dashboard-layout>


  <div style="margin-top: 20px !important;">
    <x-alert />
  </div>

  <form action="{{ route('admin.rooms.index') }}" method="get" class="d-flex probootstrap-section" style="padding: 10px !important; border:0px !important;">
    <div class="">
      <div class="col-md-5  col-xs-5">
        <input type="text" class="form-control" name="room_name" placeholder="Search By Room Name">
      </div>
      <div class="col-md-5  col-xs-5">
        <input type="text" class="form-control" name="room_type" placeholder="Search By Room type">
      </div>
      <div class="col-md-2  col-xs-2">
        <button type="submit" class="btn" style="background:#903479; color: #fff;">Search</button>

      </div>

    </div>
  </form>

  @can('create', App\Models\Room::class)
  <div class="col-md-6">
    <p><a href="{{ route('admin.rooms.create') }}" class="btn btn-primary" style="margin-top: 8px !important;" role="button">Create</a></p>
  </div>
  @endcan

  <section class="probootstrap-section" style="padding-bottom: 5px !important;">

    <section>

      <section class="">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i>All Rooms</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                    <th>ID</th>
                      <th>Room Name</th>
                      <th>Room Type</th>
                      <th>Bedding</th>
                      <th>Bathroom</th>
                      <th>room_size</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Image</th>
                      <th>Max-Guest</th>
                      <th>Children</th>
                      <th>Adults</th>
                      <th>Stars</th>
                      <th>Update</th>
                      <th>Delete</th>

                    </tr>
                  </thead>

                  <tbody>
                    @foreach($rooms as $room)
                    <tr>
                    <td>{{ $room->id }}</td>
                      <td>{{ $room->room_name }}</td>
                      <td>{{ $room->room_type }}</td>
                      <td>{{ $room->bedding }}</td>
                      <td>{{ $room->Bathroom }}</td>
                      <td>{{ $room->room_size }}</td>

                      <td>{{ $room->room_price }}</td>
                      <td>{{ $room->Is_active }}</td>
                      <td>
                        <div>
                          <img src="{{ $room->image_url }}" height="80" alt="">
                        </div>
                      </td>
                  
                      <td>{{ $room->max_guest }}</td>
                      <td>{{ $room->children }}</td>
                      <td>{{ $room->adults }}</td>
                      <td>{{ $room->stars }}</td>

                      @can('update', $room)
                      <td>
                          <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.rooms.edit', $room->id ) }}">Update</a>
                      </td>
                      @endcan

                      @can('delete', $room)
                      <td>
                         <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.rooms.destroy', $room->id ) }}">Delete</a>
                      </td>
                      @endcan

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

  {{ $rooms->links() }}

  <script src="{{ asset('js/scripts.min.js') }}"></script>
  <script src="{{ asset('js/main.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</x-dashboard-layout>