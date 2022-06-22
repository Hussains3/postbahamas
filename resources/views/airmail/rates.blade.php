@extends('airmail.layouts.app')

@section('content')
    <!-- Hero -->
    <div class="bg-light" style="" id="ratesherobanner">
        <div class="container text-center">
            <h1 class="fw-bold text-dark mb-4 text-uppercase">Rates
            </h1>
        </div>
    </div>

    <!--Package Rates-->
    <div class="container py-5">
        <div class="text-center ">
            <h2 class="text-dark fs-1 mb-5 fw-bold text-uppercase">Package Rates</h2>
        </div>
        <div class="row">
            <div class="col-md-3 package-rate-col px-3">
                <div class="card pakage-rate-card">
                    <p class="package-rate-title">Small</p>
                    <p class="package-rate-price">$6.99</p>
                    <p class="package-rate-weight">0-3lbs</p>
                </div>
            </div>
            <div class="col-md-3 package-rate-col px-3">
                <div class="card pakage-rate-card">
                    <p class="package-rate-title">Medium</p>
                    <p class="package-rate-price">$8.99</p>
                    <p class="package-rate-weight">3.01-5lbs</p>
                </div>
            </div>
            <div class="col-md-3 package-rate-col px-3">
                <div class="card pakage-rate-card">
                    <p class="package-rate-title">LARGE</p>
                    <p class="package-rate-price">$1.89</p>
                    <p class="package-rate-weight">5.01-30lbs</p>
                </div>
            </div>
            <div class="col-md-3 package-rate-col px-3">
                <div class="card pakage-rate-card">
                    <p class="package-rate-title">X-LARGE</p>
                    <p class="package-rate-price">$0.99</p>
                    <p class="package-rate-weight">30.01lbs & up</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-offwhite">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card other-fees-card">
                        <h3 class="other-fees-title">Other fees</h3>
                        <p class="other-fees-parcent">10% vat</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card other-fees-card">
                        <h3 class="other-fees-title">Processign Fees</h3>
                        <p class="other-fees-parcent">1% of</p>
                        <p>Purchase price for consumers.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card other-fees-card">
                        <h3 class="other-fees-title">&nbsp;</h3>
                        <p class="other-fees-parcent">1% of</p>
                        <p>Purchase price or $10, whichever is
                            greter for business</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card conditional-cart">
                    <div class="card-header text-center text-uppercase fw-bold fs-4">
                        CONDITIONAL
                    </div>
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="fs-5">Brokerage Fee:</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-primary fw-bold fs-5">$1.25</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="fs-5">Brokerage Fee:</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-primary fw-bold fs-5">$1.25</p>
                                <p>Per package (whichever is higher)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="fs-5">Brokerage Fee:</p>
                                <p>Package over 30.01 pounds</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-primary fw-bold fs-5">$1.25</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="fs-5">Custom Duty and/
                                    or Environmental Levy:</p>
                                <p>Varies</p>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-warning rounded-pill">View Here</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        *Conditional fees are only accessed on packages that fit within this criteria. <br> *We charge
                        dimensional weight or actual weight. Whichever is greater. See FAQ for further
                        explanation.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card conditional-cart">
                    <div class="card-header text-center text-uppercase fw-bold fs-4">
                        Optional
                    </div>
                    <img class="card-img-top" src="holder.js/100px180/" alt="">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="fs-5">Storage Fees:</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-primary fw-bold fs-5">$01</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="fs-5">Pick Up Fees:</p>
                            </div>
                            <div class="col-md-6">
                                <ul class="list-unstyled">
                                    <li class="d-flex justify-content-between">
                                        <p>Miami Areas:</p>
                                        <p>$50</p>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <p>Coral Gables:</p>
                                        <p>$60</p>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <p>Hallandale/Aventure area:</p>
                                        <p>$60</p>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <p>Dania Beach/Pembroke Pines:</p>
                                        <p>$60</p>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <p>Fort Lauderdale:</p>
                                        <p>$70</p>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <p>Plantation & Sunrise area:</p>
                                        <p>$70</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="fs-5">Delivery Fees:</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-primary fw-bold fs-5">Starting from $5</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        *If a package(s) is not picked up within 28 days, Go Postal reserves the right to sell said
                        package(s) to recoup the cost.
                        <br>*Optional fees are only accessed if the customer decides to use one of our services or storage
                        facilities.
                    </div>
                </div>
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
