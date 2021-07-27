<x-dashboard-layout>
    <div class="" style="margin-top: 15px !important;">
        <h2 class="my-2"> Confirm Reservation </h2>
    </div>
    </div>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <div class="form">
                    <form class="cmxform form-horizontal style-form" id="signupForm" method="post" class="mb-3" action="{{ route('reservations.update', $reservation->id ) }}" enctype="multipart/form-data">
                        @csrf
                        @method('put')


                       

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