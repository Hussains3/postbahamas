@extends('myprofile.master')

@section('profile-content')
    <div class="card mt-4  ">
        <!-- Edit Profile-->
        <div class="tab-pane p-4" >
            <div class="row">
                <h3 class="fs-5">Personal Information Edit</h3>
            </div>
            <form action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Profile Picture (250px *250px, Max: 1 MB)</label>
                            <input class="form-control form-control-sm" type="file" id="profilePhoto" name="photo">
                        </div>
                    </div>
                </div>
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
                            <input class="form-control form-control-sm" type="text" name="email" value="{{Auth::user()->email}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Phone</label>
                            <input class="form-control form-control-sm" type="text" name="phone" value="{{Auth::user()->phone}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">NIB Number</label>
                            <input class="form-control form-control-sm" type="text" name="nib_number" value="{{Auth::user()->nib_number}}" readonly>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Date of Birth</label>
                            <input class="form-control form-control-sm" type="date" name="date_of_birth" value="{{Auth::user()->date_of_birth}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                          <label for="" class="form-label">Gender</label>
                          <select class="form-control form-control-sm" name="gender" id="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                          </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                          <label for="" class="form-label">Country of Birth</label>
                          <select class="form-control form-control-sm" name="country_of_birth" id="country_of_birth">
                            @include('countries')
                          </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                          <label for="" class="form-label">Island of Birth</label>
                          <select class="form-control form-control-sm" name="island_of_birth" id="island_of_birth">
                            @include('islands')
                          </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="" class="form-label">Country of Citizenship</label>
                            <select class="form-control form-control-sm" name="country_of_citizenship" id="country_of_citizenship">
                              @include('countries')
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

