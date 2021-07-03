<x-dashboard-layout>

  <x-alert style="padding-top: 15px !important; padding-bottom: 10px !important;" />

  <form action="/admin/rooms" method="get" class="d-flex probootstrap-section" style="padding: 10px !important; border:0px !important;">
    <div class="">

      <div class="col-md-5  col-xs-5">
        <input type="text" class="form-control" name="room_name" placeholder="Search By Room Name">
      </div>
      <div class="col-md-5 col-xs-5">
        <select name="id" class="form-control">
          <option value="">No Bedding Select</option>
          @foreach ($room_search as $room)
          <option value="{{ $room->id }}">{{ $room->bedding }}</option>
          @endforeach

        </select>
      </div>
      <div class="col-md-2  col-xs-2">
        <button type="submit" class="btn" style="background:#903479; color: #fff;">Search</button>

      </div>

    </div>
  </form>

  <section class="probootstrap-section">
    <p><a href="/admin/rooms/create" class="btn btn-primary" style="margin-top: 8px !important;" role="button">Create</a></p>
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
                      <th>Room Name</th>
                      <th>Room Type</th>
                      <th>Bedding</th>
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
                      <td>{{ $room->room_name }}</td>
                      <td>{{ $room->room_type }}</td>
                      <td>{{ $room->bedding }}</td>
                      <td>{{ $room->current_price }}</td>
                      <td>{{ $room->Is_active }}</td>
                      <td>{{ $room->image }}</td>
                      <td>{{ $room->max_guest }}</td>
                      <td>{{ $room->children }}</td>
                      <td>{{ $room->adults }}</td>
                      <td>{{ $room->stars }}</td>
                      <td>
                        <form action="/admin/rooms/{{$room->id}}/edit" method="post" style="padding: 0px !important; border:0px !important;">
                          @csrf
                          @method('put')
                          <button type="submit" class="btn btn-sm btn-primary">Update</a>
                        </form>
                      </td>

                      <td>
                        <form action="/admin/rooms/{{ $room->id }}" method="post" style="padding: 0px !important; border:0px !important;">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-sm btn-primary">Delete</a>
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

  </section>

  {{ $rooms->links() }}

    <script src="{{ asset('js/scripts.min.js') }}"></script>
    <script src="{{ asset('js/main.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</x-dashboard-layout>