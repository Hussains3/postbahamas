@extends('myprofile.master')

@section('profile-content')
    <div class="card mt-4  ">
        <!-- Edit Profile-->
        <div class="tab-pane p-4" >
            <div class="row">
                <h3 class="fs-5">Add Your Shipping Address</h3>
            </div>
            <form action="{{route('shippingaddresses.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input class="form-control form-control-sm" type="text" name="first_name" value="{{Auth::user()->first_name}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Last Name</label>
                            <input class="form-control form-control-sm" type="text" name="last_name" value="{{Auth::user()->last_name}}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input class="form-control form-control-sm" type="text" name="email" value="{{Auth::user()->email}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Phone</label>
                            <input class="form-control form-control-sm" type="text" name="phone" value="{{Auth::user()->phone ?? ''}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Street</label>
                            <input class="form-control form-control-sm" type="text" name="street" value="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Address</label>
                            <input class="form-control form-control-sm" type="text" name="address_text" value="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Island</label>
                            <input class="form-control form-control-sm" type="text" name="island" value="">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Prefered location</label>
                            <select class="form-control form-control-sm" name="prefered_location" id="">
                                @foreach ($shippingLocations as $location)
                                <option value="{{$location->id}}">{{$location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-warning px-4" type="submit">Submit</button>
                        <button class="btn btn-outline-warning px-4 text-dark" type="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

