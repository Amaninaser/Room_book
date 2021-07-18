<x-dashboard-layout>

  <section class="probootstrap-section">
    <section>
      <section class="">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> All Contacts</h4>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>SUBJECT</th>
                    <th>MESSAGE</th>
                    <th>ACTION</th>
                  </thead>

                  <tbody>
                    @foreach($data as $row)
                    <tr>

                      <td>{{$row->id }}</td>
                      <td>{{$row->name }}</td>
                      <td>{{$row->email }}</td>
                      <td>{{$row->phone }}</td>
                      <td>{{$row->subject }}</td>
                      <td>{{$row->message }}</td>
                      <td>
                        <a type="submit" class="btn btn-sm btn-primary" href="{{route('admin.contacts.destroy',  $row->id ) }}" style="padding:0em !important; border:0em !important;">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>

                </table>
            </div>
            <div>
              <?php echo $data->render(); ?>
            </div>
          </div>
</x-dashboard-layout>