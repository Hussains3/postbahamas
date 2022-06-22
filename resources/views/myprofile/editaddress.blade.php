@extends('myprofile.master')

@section('profile-content')
    <div class="card mt-4  ">
        <!-- Edit Profile-->
        <div class="tab-pane p-4" >
            <div class="row">
                <h3 class="fs-5">Edit Your Shipping Address</h3>
            </div>
            <form action="{{route('shippingaddresses.update',$shippingAddress->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input class="form-control form-control-sm" type="text" name="first_name" value="{{$shippingAddress->first_name}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Last Name</label>
                            <input class="form-control form-control-sm" type="text" name="last_name" value="{{$shippingAddress->last_name}}" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Email</label>
                            <input class="form-control form-control-sm" type="text" name="email" value="{{$shippingAddress->email}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Phone</label>
                            <input class="form-control form-control-sm" type="text" name="phone" value="{{$shippingAddress->phone}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Street</label>
                            <input class="form-control form-control-sm" type="text" name="street" value="{{$shippingAddress->street}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Address</label>
                            <input class="form-control form-control-sm" type="text" name="address_text" value="{{$shippingAddress->address_text}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Island</label>
                            <input class="form-control form-control-sm" type="text" name="island" value="{{$shippingAddress->island}}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Prefered location</label>
                            <select class="form-control form-control-sm" name="prefered_location" id="">
                                @foreach ($shippingLocations as $location)
                                <option value="{{$location->id}}" @if ($shippingAddress->prefered_location == $location->id) selected @endif>{{$location->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{Auth::user()->id}}" >
                        <button class="btn btn-warning px-4" type="submit">Submit</button>
                        <button class="btn btn-outline-warning px-4 text-dark" type="reset">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

