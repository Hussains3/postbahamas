@extends('myprofile.master')

@section('profile-content')
    <div class="card mt-4 p-4">


        <!-- Only -->
        <div class="row">
            <div class="row mb-3">
                <div class="col-md-3 col-sm-6"><h3 class="fs-5">Shipping Address</h3></div>
                @if ($myAddress)
                <div class="col-md-1"><a class="btn btn-sm btn-primary" href="{{route('shippingaddresses.edit', $myAddress->id)}}"><i class="fa-solid fa-pen"></i></a></div>
                @else
                <div class="col-md-1"><a class="btn btn-sm btn-primary" href="{{route('shippingaddresses.create')}}"><i class="fa-solid fa-plus"></i></a></div>
                @endif
            </div>
            @if ($myAddress)
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Name :</strong></p></div>

                <div class="col-md-9"><p class="m-0">{{$myAddress->first_name ?? ''.' '.$myAddress->last_name ?? ''}}</p></div>
            </div>
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Email :</strong></p></div>
                <div class="col-md-9 d-flex"> <p class="m-0">{{$myAddress->email ?? ''}}</p></div>
            </div>
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Phone :</strong></p></div>
                <div class="col-md-9"><p class="m-0">{{$myAddress->phone ?? ''}}</p></div>
            </div>
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Street :</strong></p></div>
                <div class="col-md-9"><p class="m-0">{{$myAddress->street ?? ''}}</p></div>
            </div>
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Address :</strong></p></div>
                <div class="col-md-9"><p class="m-0">{{$myAddress->address_text ?? ''}}</p></div>
            </div>
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Island :</strong></p></div>
                <div class="col-md-9"><p class="m-0 text-capitalize">{{$myAddress->island ?? ''}}</p></div>
            </div>
            <div class="row">
                <div class="col-md-3"><p class="m-0"><strong>Prefered Location :</strong></p></div>
                <div class="col-md-9"><p class="m-0">{{$myAddress->location->name ?? ''}}</p></div>
            </div>
            @endif
        </div>
    </div>
@endsection

