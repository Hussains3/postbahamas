
@extends('airmail.layouts.app')

@section('content')
    <!-- Hero -->
    <div class="bg-light" style="" id="airmailherobanner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 bannerelementsection br-0-120">
                    <h1 class="fw-bold text-dark mb-4 text-uppercase">Online <br>
                        shopping made faster and easier
                    </h1>
                    <div class="">
                        <img class="bannerelements" src="{{asset('staticimages/airmailbanner/bannerelements.png')}}" alt="" srcset="">
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </div>

    <!--WHAT WE OFFER-->
    <div class="container py-5">
        <div class="text-center ">
            <h2 class="text-dark fs-1 mb-5 fw-bold text-uppercase">WHaT WE OFFER</h2>
        </div>
        <div class="row">
            <div class="col two-what-do-item d-flex flex-column">
                <div class="img-we-do-back">
                    <div class="img-we-do">
                        <img class="what-icon" src="{{asset('staticimages/weoffer/Laptop with cursor.png')}}" alt="" srcset="">
                    </div>
                </div>
                <p class="text-dark fs-5 text-center pt-3 pb-3">Shop Online at your favorite store</p>
            </div>
            <div class="col two-what-do-item pt-5 d-flex flex-column-reverse">
                <div class="img-we-do-back">
                    <div class="img-we-do">
                        <img class="what-icon" src="{{asset('staticimages/weoffer/Stopwatch.png')}}" alt="" srcset="">
                    </div>
                </div>
                <p class="text-dark fs-5 text-center pt-3 pb-3">Next day shipping</p>
            </div>
            <div class="col two-what-do-item d-flex flex-column">
                <div class="img-we-do-back">
                    <div class="img-we-do">
                        <img class="what-icon" src="{{asset('staticimages/weoffer/In Transit.png')}}" alt="" srcset="">
                    </div>
                </div>
                <p class="text-dark fs-5 text-center pt-3 pb-3">Locker pickups and local delivery</p>
            </div>
            <div class="col two-what-do-item pt-5 d-flex flex-column-reverse">
                <div class="img-we-do-back">
                    <div class="img-we-do">
                        <img class="what-icon" src="{{asset('staticimages/weoffer/Good Quality.png')}}" alt="" srcset="">
                    </div>
                </div>
                <p class="text-dark fs-5 text-center pt-3 pb-3">Product Testing and quality Control</p>
            </div>
            <div class="col two-what-do-item d-flex flex-column what-we-last">
                <div class="img-we-do-back">
                    <div class="img-we-do">
                        <img class="what-icon" src="{{asset('staticimages/weoffer/Buying.png')}}" alt="" srcset="">
                    </div>
                </div>
                <p class="text-dark fs-5 text-center pt-3 pb-3">Pickup in Miami
                    & Fort Lauderdale areas</p>
            </div>
        </div>
    </div>

    <!--We deliver-->
    <div class="container-fluid  we-deliver-section position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="we-deliver-title text-light text-uppercase fw-bold">We deliver!</h2>
                    <p class="text-light fs-4" style="width: 73%">We deliver to homes and businesses. Use our
                        delivery Calculator to get your delivery estimate or add
                        delivery as you check out.</p>
                    <a class="btn btn-warning rounded fs-3 px-4 mt-4 img-fluid calculate-btn" href="">Calculate <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                <div class="col-md-6">
                    <img class=" we-deliver-image" src="{{asset('staticimages/Rectangle 158.png')}}" alt="" srcset="" >
                </div>
            </div>
        </div>
    </div>


    <!--How it works-->
    <div class="bg-offwhite">
        <div class="container py-5 ">
            <div class="text-center mt-4">
                <h2 class="text-dark fs-1 mb-5 fw-bold text-uppercase">How it works</h2>
            </div>
            <div class="row">
                <div class="how-it-work-item col d-flex flex-column align-items-center">
                    <div class="i">
                        <div class="img-how-do mt-5">
                            <img class="img-fluid" src="{{asset('staticimages/howitworks/Ellipse 7.png')}}" alt="" srcset="">
                        </div>
                    </div>
                    <p class="text-dark how-it-text text-center pt-3 pb-3">Place an order online & ship to Go Postal US</p>
                </div>

                <div class="how-it-work-item col d-flex flex-column align-items-center">
                    <p class="text-dark how-it-text text-center pt-3 pb-3">Your package is received & shipped to Go Postal Nassau</p>

                    <div class="i">
                        <div class="img-how-do mb-5">
                            <img class="img-fluid" src="{{asset('staticimages/howitworks/Ellipse 13.png')}}" alt="" srcset="">
                        </div>
                    </div>
                </div>

                <div class="how-it-work-item col d-flex flex-column align-items-center">
                    <div class="i">
                        <div class="img-how-do mt-5">
                            <img class="img-fluid" src="{{asset('staticimages/howitworks/Ellipse 15.png')}}" alt="" srcset="">
                        </div>
                    </div>
                    <p class="text-dark how-it-text text-center pt-3 pb-3">Go Postal then
                        processes the item for Customs clearance</p>
                </div>

                <div class="how-it-work-item col d-flex flex-column align-items-center">
                    <p class="text-dark how-it-text text-center pt-3 pb-3">Your package is received & shipped to Go Postal Nassau</p>

                    <div class="i">
                        <div class="img-how-do mb-5">
                            <img class="img-fluid" src="{{asset('staticimages/howitworks/Ellipse 17.png')}}" alt="" srcset="">
                        </div>
                    </div>
                </div>

                {{-- <img class="dashline1" src="{{asset('staticimages/howitworks/Vector 1.svg')}}" alt="" srcset="">
                <img class="dashline2" src="{{asset('staticimages/howitworks/Vector 3.svg')}}" alt="" srcset="">
                <img class="dashline3" src="{{asset('staticimages/howitworks/Vector 1.svg')}}" alt="" srcset=""> --}}
            </div>
        </div>
    </div>

    <!-- Google Map section-->
    @include('airmail.layouts.partials.googleMap')

    @guest
    @include('airmail.layouts.partials.footerSignup')
    @endguest

@endsection


@section('script')
@endsection
