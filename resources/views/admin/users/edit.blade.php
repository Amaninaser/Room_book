<x-dashboard-layout>

<div style="margin-top: 20px !important;">
    <x-alert />
  </div>

  <div class="" style="margin-top: 15px !important;">
        <h2 class="my-2"> Edit My Profile </h2>
    </div>
    </div>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <div class="form">
                    <form class="cmxform form-horizontal style-form" id="signupForm" method="post" class="mb-3" action="{{ route('admin.users.update', $user->id ) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')


                        <div class="form-group mb-3">
                            <label for="name" class="control-label col-lg-2">Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control @error('name') is-invaild  @enderror">
                                @error('name')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group mb-3">
                            <label for="email" class="control-label col-lg-2">Email:</label>
                            <div class="col-lg-10">
                                <input type="text" name="email" value="{{ old('email', $user->email) }}" class="form-control @error('email') is-invaild  @enderror">
                                @error('email')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group mb-3">
                            <label for="phone" class="control-label col-lg-2">Phone:</label>
                            <div class="col-lg-10">
                                <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="form-control @error('phone') is-invaild  @enderror">
                                @error('phone')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="Brithday" class="control-label col-lg-2">Brithday:</label>
                            <div class="col-lg-10">
                                <input type="text" name="Brithday" value="{{ old('Brithday', $user->Brithday) }}" class="form-control @error('Brithday') is-invaild  @enderror">
                                @error('Brithday')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group mb-3">
                            <label for="gender" class="control-label col-lg-2">Gender:</label>
                            <div class="col-lg-10">
                                <label><input type="radio" name="gender" value="Famale" @if ( old('gender', $user->gender) == 'Famale') checked @endif> Famale</label>
                                <label><input type="radio" name="gender" value="Male" @if (old('gender', $user->gender) == 'Male') checked @endif> Male</label>
                            </div>
                            @error('gender')
                            <p class="invaild-feedback text-red">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="form-group mb-3">
                            <label for="National" class="control-label col-lg-2">National:</label>
                            <div class="col-lg-10">
                                <label><input type="radio" name="National" value="Palestine" @if ( old('National', $user->National) == 'Palestine') checked @endif> Palestine</label>
                                <label><input type="radio" name="National" value="Non-Palestine" @if (old('National', $user->National) == 'Non-Palestine') checked @endif> Non-Palestine</label>
                            </div>
                            @error('National')
                            <p class="invaild-feedback text-red">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="country" class="control-label col-lg-2">Country Name:</label>
                            <div class="col-lg-10">
                                <select name="country" class="form-control">
                                    <option value="">Select Country</option>
                                    @foreach(Symfony\Component\Intl\Countries::getNames() as $code => $name)
                                    <option name="code" value="{{ old('code', $user->$code) }}" >{{ old('name',  $user->$name) }} </option>
                                    @endforeach
                                </select>
                                 @error('country')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group mb-3">
                            <label for="city" class="control-label col-lg-2">city Name:</label>
                            <div class="col-lg-10">
                                <input type="text" name="city" value="{{ old('city', $user->city) }}" class="form-control @error('city') is-invaild  @enderror">
                                @error('city')
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
    <script src="{{ asset('js/scripts.min.js') }}"></script>
  <script src="{{ asset('js/main.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

</x-dashboard-layout>