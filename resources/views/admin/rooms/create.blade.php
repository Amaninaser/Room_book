<x-dashboard-layout>
  <div class="col-md-6" style="margin-top: 15px !important;">
    <h2 class="my-2"> {{ $title }} </h2>
  </div>

  <div class="row mt">
    <div class="col-lg-12">
      <div class="form-panel">
        <div class="form">
          <form class="cmxform form-horizontal style-form" id="signupForm" method="post" class="mb-3"
           action="{{ route('admin.rooms.store') }}" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group mb-3">
              <label for="room_name" class="control-label col-lg-2">Room Name:</label>
              <div class="col-lg-10">
                <input type="text" name="room_name" class="form-control @error('room_name') is-invaild  @enderror">
                @error('room_name')
                <p class="invaild-feedback">{{ $message }}</p>
                @enderror
              </div>

            </div>

            <div class="form-group mb-3">
              <label for="room_type" class="control-label col-lg-2">Room Type:</label>
              <div class="col-lg-10">
                <label><input type="radio" name="room_type" value="Superior Room"> Superior Room</label>
                <label><input type="radio" name="room_type" value="Deluxe Room"> Deluxe Room</label>
                <label><input type="radio" name="room_type" value="Single Room"> Single Room</label>
                <label><input type="radio" name="room_type" value="Guest House"> Guest House</label>
                @error('room_type')
                <p class="invaild-feedback text-red">{{ $message }}</p>
                @enderror
              </div>

            </div>

            <div class="form-group mb-3">
              <label for="bedding" class="control-label col-lg-2">Room Bedding:</label>
              <div class="col-lg-10">
                <label><input type="radio" name="bedding" value="Single"> Single</label>
                <label><input type="radio" name="bedding" value="Double"> Double</label>
                <label><input type="radio" name="bedding" value="Triple"> Triple</label>
                <label><input type="radio" name="bedding" value="Quad"> Quad</label>
                @error('bedding')
                <p class="invaild-feedback text-red">{{ $message }}</p>
                @enderror
              </div>
            </div>
              
        
              <div class="form-group mb-3">
              <label for="Bathroom" class="control-label col-lg-2">Room Bathroom:</label>
              <div class="col-lg-10">
                <label><input type="radio" name="Bathroom" value="Separate"> Separate</label>
                <label><input type="radio" name="Bathroom" value="Double"> Double</label>
              
                @error('Bathroom')
                <p class="invaild-feedback text-red">{{ $message }}</p>
                @enderror
              </div>

            </div>

            <div class="form-group mb-3">
              <label for="description" class="control-label col-lg-2">Room Description:</label>
              <div class="col-lg-10">
                <textarea class="form-control" name="description"></textarea>
                @error('description')
                <p class="invaild-feedback @error('description') is-invaild  @enderror">{{ $message }}</p>
                @enderror
              </div>

            </div>

            <div class="form-group mb-3">
              <label for="room_price" class="control-label col-lg-2">Room Price:</label>
              <div class="col-lg-10">
                <input type="text" name="room_price" class="form-control @error('room_price') is-invaild  @enderror">
                @error('room_price')
                <p class="invaild-feedback">{{ $message }}</p>
                @enderror
              </div>

            </div>

            <div class="form-group mb-3">
              <label for="room_size" class="control-label col-lg-2">Room Size:</label>
              <div class="col-lg-10">
                <input type="text" name="room_size" class="form-control @error('room_size') is-invaild  @enderror">
                @error('room_size')
                <p class="invaild-feedback">{{ $message }}</p>
                @enderror
              </div>

            </div>


            <div class="form-group mb-3">
              <label for="image" class="control-label col-lg-2">Room Image:</label>

              <div class="col-lg-10">
                <div style="padding-bottom: 10px !important;">
                  <img src="{{ $room->image_url }}" height="100" alt="">
                </div>

                <input type="file" name="image" class="form-control @error('image') is-invaild  @enderror" value="{{ old('image', $room->image) }}">
                @error('image')
                <p class="invaild-feedback text-red">{{ $message }}</p>
                @enderror
              </div>

            </div>

            <div class="form-group mb-3">
              <label for="image" class="control-label col-lg-2">Room Gallery:</label>
              <div class="col-lg-10">
                <div class="row" style="padding-bottom: 10px !important;">
                  @foreach($room->images as $image)
                  <div class="co-md-2">
                    <img src="{{ $room->image_url }}" class="img-fit m-1 border p-1" height="80" alt="">
                  </div>
                  @endforeach
                </div>
                <input type="file" name="gallery[]" multiple class="form-control @error('gallery') is-invaild  @enderror" value="{{ old('gallery', $room->image) }}">
                @error('gallery')
                <p class="invaild-feedback text-red">{{ $message }}</p>
                @enderror
              </div>
            </div>


            <div class="form-group mb-3">
              <label for="Is_active" class="control-label col-lg-2">Room Active:</label>
              <div class="col-lg-10">
                <label><input type="radio" name="Is_active" value="Active"> Active</label>
                <label><input type="radio" name="Is_active" value="Non_Active"> Inactive</label>
                @error('Is_active')
                <p class="invaild-feedback text-red">{{ $message }}</p>
                @enderror
              </div>

            </div>

            <div class="form-group mb-3">
              <label for="max_guest" class="control-label col-lg-2">Room Max Guest:</label>
              <div class="col-lg-10">
                <input type="text" name="max_guest" class="form-control @error('max_guest') is-invaild  @enderror">
                @error('max_guest')
                <p class="invaild-feedback text-red">{{ $message }}</p>
                @enderror
              </div>

            </div>

            <div class="form-group mb-3">
              <label for="children" class="control-label col-lg-2">Room Children:</label>
              <div class="col-lg-10">
                <input type="text" name="children" class="form-control @error('children') is-invaild  @enderror">
                @error('children')
                <p class="invaild-feedback text-red">{{ $message }}</p>
                @enderror
              </div>

            </div>

            <div class="form-group mb-3">
              <label for="adults" class="control-label col-lg-2">Room Adults:</label>
              <div class="col-lg-10">
                <input type="text" name="adults" class="form-control @error('adults') is-invaild  @enderror">
                @error('adults')
                <p class="invaild-feedback text-red">{{ $message }}</p>
                @enderror
              </div>

            </div>

            <div class="form-group mb-3">
              <label for="stars" class="control-label col-lg-2">Room Stars:</label>
              <div class="col-lg-10">
                <input type="text" name="stars" class="form-control @error('stars') is-invaild  @enderror">
                @error('stars')
                <p class="invaild-feedback text-red">{{ $message }}</p>
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