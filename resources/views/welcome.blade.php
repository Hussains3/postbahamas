@extends('layouts.app')

@section('content')
    {{-- Hero --}}
    <div class="bg-light py-5" style="background-image: url({{ asset('staticimages/hero1.jpg') }});background-size:cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-5 br-0-120">
                    <h1 class="fw-bold fs-1 text-primary mb-4">Welcome To <br />Bahamas
                        Postal Service
                    </h1>
                    <div class="bg-dark rounded-pill ps-4 pt-4 form-div">
                        <h3 class="text-light">Search or Track Packages</h3>
                        <form class="search-form" action="" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control border-warning" placeholder="Enter Tracking Number"
                                    aria-label="Enter Tracking Number" aria-describedby="button-addon2">
                                <button class="btn btn-primary" type="button" id="button-addon2"><i
                                        class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 d-flex justify-content-center">
                    <img class="minister" src="{{ asset('staticimages/5.jpg') }}" alt="Minister of Transport and Housing">
                </div>
                <div class="col-md-8">
                    <p class="fs-5">Welcome to a new and improved postal experience. We at the Bahamas Post have, for some time, been cognizant of the need to transform and expand our services as we continue to engage in a global e-commerce market and so are poised to bring to you, the Bahamian public, modern and innovative postal products, with the utilization of the latest technology applications.
                        So come, and take advantage of our postal products that you will find to be high on satisfaction, and low on the money!
                        </p>
                    <p class="fs-4 fw-bold">Hon. JoBeth L. Coleby-Davis<br />
                        Minister of Transport and Housing</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5 d-none">
        <div class="text-center ">
            <h2 class="text-dark fs-1 mb-5 fw-bold">Meet the Team</h2>
        </div>
        <div class="row">
            <div class="col-md-3 mt-2">
                <div class="card shadow-lg" >
                    <img src="{{asset('staticimages/minister/DSC_6768.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title fs-6">Hon. JoBeth L. Coleby-Davis</h5>
                      <p class="card-text">Minister of Transport and Housing</p>
                      <div class="">
                          <a href="#" class="btn btn-primary btn-sm"><i class=" fa fa-phone"></i></a>
                          <a href="#" class="btn btn-primary btn-sm"><i class=" fa fa-envelope"></i></a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card shadow-lg" >
                    <img src="{{asset('staticimages/minister/DSC_6805.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title fs-6">Gaynell Rolle, MBA</h5>
                      <p class="card-text">Under Secretary</p>
                      <div class="">
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-phone"></i></a>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-envelope"></i></a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card shadow-lg" >
                    <img src="{{asset('staticimages/minister/DSC_6906.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title fs-6">Mr. Oral Lafleur</h5>
                      <p class="card-text">Acting Chief Housing Officer</p>
                      <div class="">
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-phone"></i></a>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-envelope"></i></a>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2">
                <div class="card shadow-lg" >
                    <img src="{{asset('staticimages/minister/DSC_6955.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                      <h5 class="card-title fs-6">Mr. Thomas Ferguson</h5>
                      <p class="card-text">Acting Director of Housing</p>
                      <div class="">
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-phone"></i></a>
                          <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-envelope"></i></a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-offwhite">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4 mt-3">
                    <div class="card shadow-sm p-3 d-flex flex-column align-items-center justify-content-between">
                        <i class="fs-1 text-primary mb-3 fa-solid fa-envelope-open-text"></i>
                        <h3 class="fw-bold">Air Mail Service</h3>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="card shadow-sm p-3 d-flex flex-column align-items-center justify-content-between">
                        <i class="fs-1 text-primary mb-3 fa-solid fa-money-bill-transfer"></i>
                        <h3 class="fw-bold">Money Order Service</h3>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="card shadow-sm p-3 d-flex flex-column align-items-center justify-content-between">
                        <i class="fs-1 text-primary mb-3 fa-solid fa-cart-shopping"></i>
                        <h3 class="fw-bold">E-commerce Service</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container py-5">
        <div class="text-center ">
            <h2 class="text-dark fs-1 mb-5 fw-bold">Bahamas Postal Products & Services</h2>
        </div>

        <div class="row mt-5">
            <div class="col-md-6 pe-md-5">
                <h3 class="border border-warning rounded-pill text-center py-2 mb-5 bg-warning post-heading">Airmail Express
                    Mail</h3>
                <p class="fs-5">Airmail Express Mail allows the sender to post letters and small packages faster
                    than ordinary mail. This type of mail is not trackable by the post office.</p>
                <button class="btn btn-warning  mb-3 px-5">Read More</button>
            </div>
            <div class="col-md-6 service-img ">
                <img class="rounded img-fluid" src="{{ asset('staticimages/blog1.jpg') }}" alt="">
            </div>
        </div>

        <div class="row mt-5 freverse">
            <div class="col-md-6 service-img ">
                <img class="rounded img-fluid" src="{{ asset('staticimages/blog2.jpg') }}" alt="">
            </div>
            <div class="col-md-6 ps-md-5 flex-sm-row-reverse">
                <h3 class="border border-warning rounded-pill text-center py-2 mb-5 bg-warning post-heading">Domestic Money Order</h3>
                <p class="fs-5">A Domestic Money Order allows the applicant to transmit money to various sections
                    of the Family Islands. Persons who would be interested in this type of service include: Businesses,
                    Citizens and Residents who seek to make bill payments. Parents of school children. Government Agencies
                    who seek to make payments in the Family Islands.</p>
                <button class="btn btn-warning  mb-3 px-5">Read More</button>
            </div>
        </div>


        <div class="row mt-5">
            <div class="col-md-6 pe-md-5">
                <h3 class="border border-warning rounded-pill text-center py-2 mb-5 bg-warning post-heading">International Money Order
                    (US Dollar) </h3>
                <p class="fs-5">A Canadian Dollar International Money Order can be used for paying bills or making
                    purchases abroad. A US Dollar International Money Order can be purchased at the Savings Bank Money
                    Orders Section at any Post Office.</p>
                <button class="btn btn-warning  mb-3 px-5">Read More</button>
            </div>
            <div class="col-md-6 service-img ">
                <img class="rounded img-fluid" src="{{ asset('staticimages/blog3.jpg') }}" alt="">
            </div>
        </div>
    </div>



    <div class="bg-offwhite">
        <div class="container py-5 ">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-primary mb-4">Our Vision</h4>
                    <p>The Bahamas Post Office is committed to providing high-quality postal services to all Bahamians. Its enthusiastic, professional staff will maintain a progressive organization through a commitment to the highest levels of customer satisfaction.</p>
                </div>
                <div class="col-md-6 border-start border-primary">
                    <h4 class="text-primary mb-4">Our Mission</h4>
                    <p>The mission of the Bahamas Post Office is to be recognized and respected for its timely collection, and transmittal of postal products, from and for Bahamian and international consumers, including businesses and other organizations. It is to become a fully-featured market-oriented and profitable business, which meets the communications, advertising, and physical distributional needs of the customer.</p>

                </div>
            </div>
        </div>
    </div>
    @guest
    <div class="container-fluid bg-bluegreen py-5">
        <div class="container d-flex flex-column align-items-center">
            <h4 class="fs-1 fw-bold text-light mb-4">To get service form Bahamas Post Office</h4>
            <div class="">
                <a class="btn btn-warning me-2" href="{{route('login')}}">Sign In</a>
                <a class="btn border border-warning text-light bt-outline-warning" href="{{route('register')}}">Register</a>
            </div>
        </div>
    </div>
    @endguest




    <div class="container py-5 d-none">
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex flex-column align-items-center mb-5">
                                <img src="{{ asset('staticimages/stamps-may.jpg') }}" class="d-block w-30" alt="">
                                <h5 class="fs-2 mt-2">Stamps</h5>
                                <p>Sending cards and letters across the country or across the globe?</p>
                                <p>Find a stamp for any type of mail.</p>
                                <p>Stamp Pricing:<br>Forever: $0.58 | Postcard: $0.40</p>
                                <button class="btn btn-warning rounded-pill">Shop Now</button>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="d-flex flex-column align-items-center mb-5">
                                <img src="{{ asset('staticimages/stamps-may.jpg') }}" class="d-block w-30" alt="">
                                <h5 class="fs-2 mt-2">Stamps</h5>
                                <p>Sending cards and letters across the country or across the globe?</p>
                                <p>Find a stamp for any type of mail.</p>
                                <p>Stamp Pricing:<br>Forever: $0.58 | Postcard: $0.40</p>
                                <button class="btn btn-warning rounded-pill">Shop Now</button>
                            </div>
                        </div>
                        <div class=" carousel-item">
                            <div class="d-flex flex-column align-items-center mb-5">
                                <img src="{{ asset('staticimages/stamps-may.jpg') }}" class="d-block w-30" alt="">
                                <h5 class="fs-2 mt-2">Stamps</h5>
                                <p>Sending cards and letters across the country or across the globe?</p>
                                <p>Find a stamp for any type of mail.</p>
                                <p>Stamp Pricing:<br>Forever: $0.58 | Postcard: $0.40</p>
                                <button class="btn btn-warning rounded-pill">Shop Now</button>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev text-warning" type="button"
                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <i class="fa-solid fa-angle-left fs-1"></i>
                    </button>
                    <button class="carousel-control-next text-warning" type="button"
                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <i class="fa-solid fa-angle-right fs-1"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Agency Slide-->
    <div class="container-fluid py-5 bg-offwhite">
        <div class="text-center ">
            <h2 class="text-dark fs-1 mb-5 fw-bold">Agency Featuring</h2>
        </div>
        <div style="--pause-on-hover: running; --pause-on-click: running;" class=" marquee-container">
            <div class="marquee">
                <div class="w-100 d-flex justify-content-between">
                    <img class="pe-none" src="{{asset('staticimages/agency/eProcurement-and-Suppliers-Registry-System-feature-link-bahamas-gov-bs.jpg')}}" alt="">
                    <img class="pe-none" src="{{asset('staticimages/agency/featuring-ads-real-property-tax.jpg')}}" alt="">
                    <img class="pe-none" src="{{asset('staticimages/agency/featuring-ads-vendor-govern.jpg')}}" alt="">
                    <img class="pe-none" src="{{asset('staticimages/agency/featurning-cyber-sec-awarness.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Accordion -->
    <div class="container py-5">
        <div class="text-center ">
            <h2 class="text-dark fs-1 mb-5 fw-bold">Our Priority Is You</h2>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        Mail & Ship from Home
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                        plugin adds the appropriate classes that we use to style each element. These classes control the
                        overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                        this with custom CSS or overriding our default variables. It's also worth noting that just about any
                        HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Stay Updated on Service Impacts
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                        overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Read Our Coronavirus FAQs
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting that
                        just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit
                        overflow.
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-offwhite">
        <div class="container py-5 ">
            <div class="text-center ">
                <h2 class="text-dark fs-1 mb-5 fw-bold">Bahamas Postal Service Updates</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-primary">Upcoming Bahamas Postal Service Holidays</h4>
                    <p>Bahamas Postal Service will be closed on Monday, May 30th in observance of Memorial Day.</p>
                </div>
                <div class="col-md-6 border-start border-primary">
                    <h4 class="text-primary">Alert: Text & Email Scams</h4>
                    <p>If you get a text or email claiming to be from Bahamas Postal Service about a package awaiting action or
                        a delivery failure, don't click it: Delete it immediately. This is an attempt to steal your personal
                        information. Find out how to protect yourself.</p>


                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
@endsection
