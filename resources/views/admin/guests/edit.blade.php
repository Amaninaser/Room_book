<x-dashboard-layout>
    <div class="" style="margin-top: 15px !important;">
        <h2 class="my-2"> Edit Guest </h2>
    </div>
    </div>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <div class="form">
                    <form class="cmxform form-horizontal style-form" id="signupForm" method="post" class="mb-3" action="/admin/guests/{{$guest->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group mb-3">
                            <label for="first_name" class="control-label col-lg-2">First Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="first_name" value="{{ old('first_name', $guest->first_name) }}" class="form-control @error('first_name') is-invaild  @enderror">
                                @error('first_name')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="last_name" class="control-label col-lg-2">Last Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="last_name" value="{{ old('last_name', $guest->last_name) }}" class="form-control @error('last_name') is-invaild  @enderror">
                                @error('last_name')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group mb-3">
                            <label for="email" class="control-label col-lg-2">Email:</label>
                            <div class="col-lg-10">
                                <input type="text" name="email" value="{{ old('email', $guest->email) }}" class="form-control @error('email') is-invaild  @enderror">
                                @error('email')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group mb-3">
                            <label for="phone" class="control-label col-lg-2">Phone:</label>
                            <div class="col-lg-10">
                                <input type="text" name="phone" value="{{ old('phone', $guest->phone) }}" class="form-control @error('phone') is-invaild  @enderror">
                                @error('phone')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group mb-3">
                            <label for="Brithday" class="control-label col-lg-2">Brithday:</label>
                            <div class="col-lg-10">
                                <input type="text" name="Brithday" value="{{ old('Brithday', $guest->Brithday) }}" class="form-control @error('Brithday') is-invaild  @enderror">
                                @error('Brithday')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group mb-3">
                            <label for="gender" class="control-label col-lg-2">Gender:</label>
                            <div class="col-lg-10">
                                <input type="text" name="gender" value="{{ old('gender', $guest->gender) }}" class="form-control @error('gender') is-invaild  @enderror">
                                @error('gender')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group mb-3">
                            <label for="National" class="control-label col-lg-2">National:</label>
                            <div class="col-lg-10">
                                <input type="text" name="National" value="{{ old('National', $guest->National) }}" class="form-control @error('National') is-invaild  @enderror">
                                @error('National')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="country_name" class="control-label col-lg-2">Country Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="country_name" value="{{ old('country_name', $guest->city->country->country_name) }}" class="form-control @error('country_name') is-invaild  @enderror">
                                @error('country_name')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group mb-3">
                            <label for="city_name" class="control-label col-lg-2">city Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="city_name" value="{{ old('city_name', $guest->city->city_name) }}" class="form-control @error('city_name') is-invaild  @enderror">
                                @error('city_name')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
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