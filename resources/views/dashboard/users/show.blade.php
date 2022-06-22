@extends('dashboard.layout.master')


@section('content')
    <div class="card mt-4 p-4">
        <div class="row p-3">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        @if ($user->photo)
                        <img class="user-profile-picture" src="{{asset($user->photo)}}" alt="User Image" id="user-photo">
                        @else
                        <img class="user-profile-picture" src="{{asset('staticimages/noimage.png')}}" alt="User Image" id="user-photo">
                        @endif
                    </div>
                    <div class="col-md-10 user-profile-binfo">
                        <h2 class="fs-5">{{$user->first_name.' '.$user->last_name}}</h2>
                        <p class="mb-0"><strong>Phone: </strong>{{$user->phone}}</p>
                        <p class="mb-0 position-relative"><strong>Email: </strong>{{$user->email}}
                            @if ($user->email_verified_at != null)
                                <i class="fa-solid fa-check-circle text-primary"></i>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 border-start">
                <div class="row">
                    <div class="row mb-3 d-none">
                        <div class="col-md-1"><a class="btn btn-sm btn-primary" href="{{ route('users.edit', $user->id) }}"><i class="fa-solid fa-pen"></i></a></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><p class="m-0"><strong>NIB Mumber :</strong></p></div>
                        <div class="col-md-9"><p class="m-0">{{$user->nib_number}}</p></div>
                    </div>

                    @if ($user->date_of_birth)
                    <div class="row">
                        <div class="col-md-3"><p class="m-0"><strong>Date of Birth :</strong></p></div>
                        <div class="col-md-9"><p class="m-0">{{$user->date_of_birth}}</p></div>
                    </div>
                    @endif
                    @if ($user->gender)
                    <div class="row">
                        <div class="col-md-3"><p class="m-0"><strong>Gender :</strong></p></div>
                        <div class="col-md-9"><p class="m-0 text-capitalize">{{$user->gender}}</p></div>
                    </div>
                    @endif

                    @if ($user->country_of_birth)
                    <div class="row">
                        <div class="col-md-3"><p class="m-0"><strong>Country of Birth :</strong></p></div>
                        <div class="col-md-9"><p class="m-0">{{$user->country_of_birth}}</p></div>
                    </div>
                    @endif

                    @if ($user->island_of_birth)
                    <div class="row">
                        <div class="col-md-3"><p class="m-0"><strong>Island of Birth :</strong></p></div>
                        <div class="col-md-9"><p class="m-0">{{$user->island_of_birth}}</p></div>
                    </div>
                    @endif

                    @if ($user->country_of_citizenship)
                    <div class="row">
                        <div class="col-md-3"><p class="m-0"><strong>Country of Citizenship :</strong></p></div>
                        <div class="col-md-9"><p class="m-0">{{$user->country_of_citizenship}}</p></div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <hr>


        <!-- Only -->
        @if ($user->shippingAddress)
        <div class="row">
            <div class="row mb-3">
                <div class="col-md-3 col-sm-6"><h3 class="fs-5">Shipping Address</h3></div>
                <div class="col-md-1">
                    <button class="btn btn-sm btn-primary" id="showForm"><i class="fa-solid fa-pen"></i></button>
                </div>
            </div>

            <form class="row g-3"  action="{{route('shippingaddresses.update',$user->shippingAddress->id)}}" method="POST">
                @csrf
                @method('patch')
                <div class="row mb-2">
                    <div class="col-md-3"><p class="m-0"><strong>Ftrst Name :</strong></p></div>
                    <div class="col-md-3">
                        <input type="text" class="form-control-sm form-control" id="first_name" name="first_name" value="{{$user->shippingAddress->first_name ??''}}" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3"><p class="m-0"><strong>Last Name :</strong></p></div>
                    <div class="col-md-3">
                        <input type="text" class="form-control-sm form-control" id="last_name" name="last_name" value="{{$user->shippingAddress->last_name ?? ''}}" required>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3"><p class="m-0"><strong>Email :</strong></p></div>
                    <div class="col-md-3">
                        <input type="email" name="email" id="email" class="form-control form-control-sm" value="{{$user->shippingAddress->email ?? ''}}">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3"><p class="m-0"><strong>Phone :</strong></p></div>
                    <div class="col-md-3"><p class="m-0">
                        <input type="text" name="phone" id="phone" class="form-control form-control-sm" value="{{$user->shippingAddress->phone ?? ''}}">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3"><p class="m-0"><strong>Street :</strong></p></div>
                    <div class="col-md-3">
                        <p class="m-0"></p>
                        <input type="text" name="street" id="street" class="form-control form-control-sm" value="{{$user->shippingAddress->street ?? ''}}">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3"><p class="m-0"><strong>Address :</strong></p></div>
                    <div class="col-md-3">
                        <input type="text" name="address_text" id="address_text" class="form-control form-control-sm" value="{{$user->shippingAddress->address_text ?? ''}}">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3"><p class="m-0"><strong>Island :</strong></p></div>
                    <div class="col-md-3">
                        <input type="text" name="island" id="island" class="form-control form-control-sm" value="{{$user->shippingAddress->island ?? ''}}" >
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3"><p class="m-0"><strong>Prefered Location :</strong></p></div>
                    <div class="col-md-3">
                        <select class="form-control form-control-sm" name="prefered_location" id="">
                            @foreach ($shippingLocations as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-3"></div>
                    <div class="col-md-3 d-flex justify-content-between">
                        <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{$user->id}}" >
                        <button type="submit" class="btn btn-sm btn-warning px-4" id="submitForm">Save</button>
                        <button type="reset" class="btn btn-sm btn-secondary px-4" id="cancleForm">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
        @endif
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('.form-control').attr('readonly', true);
        $('#submitForm').css('display', 'none');
        $('#cancleForm').css('display', 'none');

        $('#showForm').click(function (e) {
            e.preventDefault();
            $('.form-control').attr('readonly', false);
            $('#showForm').css('display', 'none');
            $('#submitForm').css('display', 'block');
            $('#cancleForm').css('display', 'block');
        });
        $('#cancleForm').click(function (e) {
            e.preventDefault();
            $('.form-control').attr('readonly', true);
            $('#showForm').css('display', 'block');
            $('#submitForm').css('display', 'none');
            $('#cancleForm').css('display', 'none');
        });
    });
</script>
@endsection

