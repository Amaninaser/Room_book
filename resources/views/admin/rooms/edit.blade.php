<x-dashboard-layout>
    <div class="container" style="margin-top: 15px !important;">
        <h2 class="my-2"> Edit Room </h2>
    </div>
    </div>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <div class="form">
                    <form class="cmxform form-horizontal style-form" id="signupForm" method="post" class="mb-3" action="/admin/rooms/{{$room->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group mb-3">
                            <label for="room_name" class="control-label col-lg-2">Room Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="room_name" value="{{ old('room_name', $room->room_name) }}" class="form-control @error('room_name') is-invaild  @enderror">
                                @error('room_name')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="room_type" class="control-label col-lg-2">Room Name:</label>
                            <div class="col-lg-10">
                                <label><input type="radio" name="room_type" value="Superior Room" @if (old('room_type', $room->room_type) == 'Superior Room') checked @endif> Superior Room</label>
                                <label><input type="radio" name="room_type" value="Deluxe Room" @if (old('room_type', $room->room_type) == 'Deluxe Room') checked @endif> Deluxe Room</label>
                                <label><input type="radio" name="room_type" value="Single Room" @if (old('room_type', $room->room_type) == 'Single Room') checked @endif> Single Room</label>
                                <label><input type="radio" name="room_type" value="Guest House" @if (old('room_type', $room->room_type) == 'Guest House') checked @endif> Guest House</label>
                            </div>
                            @error('room_type')
                            <p class="invaild-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="bedding" class="control-label col-lg-2">Room Bedding:</label>
                            <div class="col-lg-10">
                                <label><input type="radio" name="bedding" value="Single" @if ( old('bedding', $room->bedding) == 'Single') checked @endif> Single</label>
                                <label><input type="radio" name="bedding" value="Double" @if (old('bedding', $room->bedding) == 'Double') checked @endif> Double</label>
                                <label><input type="radio" name="bedding" value="Triple" @if (old('bedding', $room->bedding) == 'Triple') checked @endif> Triple</label>
                                <label><input type="radio" name="bedding" value="Quad" @if (old('bedding', $room->bedding) == 'Quad') checked @endif> Quad</label>
                            </div>
                            @error('bedding')
                            <p class="invaild-feedback text-red">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="control-label col-lg-2">Room Description:</label>
                            <div class="col-lg-10">
                                <textarea class="form-control @error('description') is-invaild  @enderror" name="description" value="{{ old('description', $room->description) }}"></textarea>
                                @error('description')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="current_price" class="control-label col-lg-2">Room Price:</label>
                            <div class="col-lg-10">
                                <input type="text" name="current_price" value="{{ old('current_price', $room->current_price) }}" class="form-control @error('current_price') is-invaild  @enderror">
                                @error('current_price')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="image" class="control-label col-lg-2">Room Image:</label>
                            <div class="col-lg-10">
                                <input type="file" name="image" class="form-control @error('image') is-invaild  @enderror" value="{{ old('image', $room->image) }}">
                                @error('image')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="Is_active" class="control-label col-lg-2">Room Active:</label>
                            <div class="col-lg-10">
                                <label><input type="radio" name="Is_active" value="Active" @if( old('Is_active', $room->Is_active) == 'Active') checked @endif> Active</label>
                                <label><input type="radio" name="Is_active" value="Non_Active" @if( old('Is_active',$room->Is_active) == 'Non_Active') checked @endif> Inactive</label>
                                @error('Is_active')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="max_guest" class="control-label col-lg-2">Room Max Guest:</label>
                            <div class="col-lg-10">
                                <input type="text" name="max_guest" class="form-control @error('max_guest') is-invaild  @enderror" value="{{ old('max_guest', $room->max_guest) }}">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="children" class="control-label col-lg-2">Room Children:</label>
                            <div class="col-lg-10">
                                <input type="text" name="children" class="form-control @error('children') is-invaild  @enderror" value="{{ old('children', $room->children )}}">
                                @error('children')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="adults" class="control-label col-lg-2">Room Adults:</label>
                            <div class="col-lg-10">
                                <input type="text" name="adults" class="form-control @error('adults') is-invaild  @enderror" value="{{ old('adults', $room->adults) }}">
                                @error('adults')
                                <p class="invaild-feedback text-red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="stars" class="control-label col-lg-2">Room Stars:</label>
                            <div class="col-lg-10">
                                <input type="text" name="stars" class="form-control @error('stars') is-invaild  @enderror" value="{{ old('stars', $room->stars )}}">
                                @error('stars')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group last">
                            <label class="control-label col-md-3">Image Upload</label>
                            <div class="col-md-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                            <input type="file" class="default" />
                                        </span>
                                        <a href="advanced_form_components.html#" class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                                <span class="label label-info">NOTE!</span>
                                <span>
                                    Attached image thumbnail is
                                    supported in Latest Firefox, Chrome, Opera,
                                    Safari and Internet Explorer 10 only
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-theme" type="submit">Update</button>
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