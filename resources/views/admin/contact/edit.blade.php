<x-dashboard-layout>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <div class="form">
                    <form class="cmxform form-horizontal style-form"
                     id="signupForm" method="post" class="mb-3" action="{{ route('admin.contacts.update', $data->id) }}">
                        @csrf
                        @method('put')

                        <div class="form-group mb-3 required">
                            <label for="name" class="control-label col-lg-2">Name:</label>
                            <div class="col-lg-10">
                                <input class="form-control @error('name') is-invaild  @enderror" name="name" value="{{ old('name', $data->email) }}">
                                @error('name')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3 required">
                            <label for="email" class="control-label col-lg-2">Email:</label>
                            <div class="col-lg-10">
                                <input class="form-control @error('email') is-invaild  @enderror" name="email" value="{{ old('email', $data->email) }}">
                                @error('email')
                                <p class="invaild-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group mb-3 required">
                            <label for="phone" class="control-label col-lg-2">Phone:</label>
                            <div class="col-lg-10">
                                <input class="form-control @error('phone') is-invaild  @enderror" name="email" value="{{ old('phone', $data->phone) }}">
                                @error('phone')
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
                </div>
                 </form>
                </div>
            </div>
            <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
    </div>             
</x-dashboard-layout>