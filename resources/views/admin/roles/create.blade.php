<x-dashboard-layout>
  <div class="col-md-6" style="margin-top: 15px !important;">
    <h2 class="my-2"> {{ $title }} </h2>
  </div>

  <div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
        <div class="form">
          <form class="cmxform form-horizontal style-form" id="signupForm" method="post" class="mb-3" action="{{ route('admin.roles.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
              <label for="name" class="control-label col-lg-2">Role Name:</label>
              <div class="col-lg-10">
                <input type="text" name="name" value="{{ old('name', $role->name) }}" class="form-control @error('name') is-invaild  @enderror">
                @error('name')
                <p class="invaild-feedback">{{ $message }}</p>
                @enderror
              </div>
            </div>

            <div class="form-group mb-3">
              <label for="abilities" class="control-label col-lg-2">Role Abilities:</label>
              <div class="col-lg-10">
                <div class="mb-1">
                  @foreach(config('abilities') as $key => $lable)
                  <label for="">
                    <input type="checkbox" name="abilities[]" value="{{ $key }}">
                    {{$lable}}
                  </label>
                  @endforeach
                </div>
                @error('abilities')
                <p class="invaild-feedback">{{ $message }}</p>
                @enderror
              </div>
            </div>


            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                <button class="btn btn-theme" type="submit">Save</button>
                <button class="btn btn-theme04" type="button">Cancel</button>
              </div>
            </div>

          </form>
        </div>
      </div>
      <!-- /form-panel -->
    </div>
    <!-- /col-lg-12 -->
  </div>
  
</x-dashboard-layout>