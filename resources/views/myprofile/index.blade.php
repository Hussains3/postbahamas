@extends('myprofile.master')

@section('profile-content')
    <div class="card mt-4 p-4">
        <!-- Only -->
        <div class="row">
            <div class="row mb-3">
                <div class="col-md-3 col-sm-6"><h3 class="fs-5">Personal Information</h3></div>
                <div class="col-md-1"><a class="btn btn-sm btn-primary" href="{{route('editmyprofile')}}"><i class="fa-solid fa-pen"></i></a></div>
            </div>

            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Name :</strong></p></div>
                <div class="col-md-9"><p class="m-0">{{Auth::user()->first_name.' '.Auth::user()->last_name}}</p></div>
            </div>
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Email :</strong></p></div>
                <div class="col-md-9 d-flex">
                    <p class="m-0">{{Auth::user()->email}}</p>

                    @if (Auth::user()->email_verified_at == null)
                    <form class="" method="POST" action="{{route('verification.send')}}">
                        @csrf
                        <button type="submit" class="text-primary btn-unstiled ms-2 text-decoration-underline">{{ __('Verify') }}</button>.
                    </form>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Phone :</strong></p></div>
                <div class="col-md-9"><p class="m-0">{{Auth::user()->phone}}</p></div>
            </div>
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>NIB Mumber :</strong></p></div>
                <div class="col-md-9"><p class="m-0">{{Auth::user()->nib_number}}</p></div>
            </div>

            @if (Auth::user()->date_of_birth)
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Date of Birth :</strong></p></div>
                <div class="col-md-9"><p class="m-0">{{Auth::user()->date_of_birth}}</p></div>
            </div>
            @endif
            @if (Auth::user()->gender)
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Gender :</strong></p></div>
                <div class="col-md-9"><p class="m-0 text-capitalize">{{Auth::user()->gender}}</p></div>
            </div>
            @endif

            @if (Auth::user()->country_of_birth)
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Country of Birth :</strong></p></div>
                <div class="col-md-9"><p class="m-0">{{Auth::user()->country_of_birth}}</p></div>
            </div>
            @endif

            @if (Auth::user()->island_of_birth)
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Island of Birth :</strong></p></div>
                <div class="col-md-9"><p class="m-0">{{Auth::user()->island_of_birth}}</p></div>
            </div>
            @endif

            @if (Auth::user()->country_of_citizenship)
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Country of Citizenship :</strong></p></div>
                <div class="col-md-9"><p class="m-0">{{Auth::user()->country_of_citizenship}}</p></div>
            </div>
            @endif
        </div>
    </div>
@endsection

