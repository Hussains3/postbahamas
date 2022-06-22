@extends('layouts.app')

@section('content')
<div class="container py-4">
    @include('layouts.partials.messages')
    <div class="card shadow ">
        <div class="row p-3">
            <div class="col-md-2 d-flex justify-content-center align-items-center">
                @if (Auth::user()->photo)
                <img class="user-profile-picture" src="{{asset(Auth::user()->photo)}}" alt="User Image" id="user-photo">
                @else
                <img class="user-profile-picture" src="{{asset('staticimages/noimage.png')}}" alt="User Image" id="user-photo">
                @endif
            </div>
            <div class="col-md-10 user-profile-binfo">
                <h2 class="fs-5">{{Auth::user()->first_name.' '.Auth::user()->last_name}}</h2>
                <p class="mb-0"><strong>Phone: </strong>{{Auth::user()->phone}}</p>
                <p class="mb-0 position-relative"><strong>Email: </strong>{{Auth::user()->email}}
                    @if (Auth::user()->email_verified_at != null)
                        <i class="fa-solid fa-check-circle text-primary"></i>
                    @endif
                </p>
            </div>
        </div>

        <nav class="profileNav">
            <hr class="m-0">
            <div class="btn-group" role="group" aria-label="Basic example outlined">
                <a href="{{route('myprofile')}}" class="btn btn-outline-primary @if(Request::url() === route('myprofile')) active @endif">Profile</a>
                <a href="{{route('shippingaddresses.index')}}" class="btn btn-outline-primary @if(Request::url() === route('shippingaddresses.index')) active @endif">Address</a>
                {{-- <a href="" class="btn btn-outline-primary @if(Request::url() === route('shippingaddresses.index')) active @endif">3</a>
                <a href="" class="btn btn-outline-primary @if(Request::url() === route('shippingaddresses.index')) active @endif">4</a>
                <a href="" class="btn btn-outline-primary @if(Request::url() === route('shippingaddresses.index')) active @endif">5</a>
                <a href="" class="btn btn-outline-primary @if(Request::url() === route('shippingaddresses.index')) active @endif">6</a> --}}
            </div>
        </nav>
    </div>
    @yield('profile-content')

</div>
@endsection


@section('script')
<script>
    $(document).ready(function () {
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();

		        reader.onload = function (e) {
		            $('#user-photo').attr('src', e.target.result);
		        }

		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#profilePhoto").change(function(){
		    readURL(this);
            console.log('hi');

		});
    });
</script>

@endsection

