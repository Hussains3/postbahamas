<div class="position-relative">
    <button class="navbar-header-auth-togler btn fs-2 text-secondary lg"><i class="fa-solid fa-bars"></i></button>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
        <div class="container">
            <div class="row w-100 flex-sm-row menu-row">
                <div class="col-md-3 col-sm-3 d-flex logo-column">
                    <button class="d-md-none navbar-header-auth-togler btn fs-2 text-secondary"><i class="fa-solid fa-bars"></i></button>

                    <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                        <img class="" src="{{ asset('staticimages/bahamas-post-office.png') }}"
                            alt="{{ config('app.name', 'Laravel') }}" width="50px" height="50px">
                        <p
                            class="logo-text ps-2  ms-2 mb-0 fs-4 border-start border-warning text-uppercase fw-bold lh-1 text-primary">
                            Bahamas<br />Postal Service</p>
                    </a>
                </div>
                <div class="col-md-6 d-flex menu-column">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav  airmail-main-menu mx-auto">
                            <li class="nav-item mx-1"><a class="nav-link @if(Request::url() === route('airmail.home')) active @endif" href="{{route('airmail.home')}}">Home</a></li>
                            {{-- <li class="nav-item mx-1 @if(Request::url() === route('myprofile')) active @endif d-none"><a class="nav-link" href="#">Print</a></li> --}}
                            <li class="nav-item mx-1"><a class="nav-link @if(Request::url() === route('rates.frontend')) active @endif" href="{{route('rates.frontend')}}">Rates</a></li>
                            <li class="nav-item mx-1"><a class="nav-link @if(Request::url() === route('myprofile')) active @endif" href="#">Calculator</a></li>
                            <li class="nav-item mx-1"><a class="nav-link @if(Request::url() === route('faq.frontend')) active @endif" href="{{route('faq.frontend')}}" target="_blank">FAQ</a></li>
                            <li class="nav-item mx-1"><a class="nav-link @if(Request::url() === route('myprofile')) active @endif" href="#">Tips</a></li>
                            <li class="nav-item mx-1"><a class="nav-link @if(Request::url() === route('contact.frontend')) active @endif" href="{{route('contact.frontend')}}" target="_blank">Contact</a></li>
                        </ul>




                    </div>
                </div>
                <div class="col-md-3 d-flex justify-content-end align-items-center profile-columm ">
                    <div class="dropdown" id="profiledropdown">
                        <a class="" href="#" role="button" id="profiledropdownbutton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            @guest
                            <i class="fa-solid fa-user text-light bg-primary btn btn-sm rounded-circle"></i>
                            @endguest
                            @auth
                            @if (Auth::user()->photo)
                            <img class="airmalil-user-profile-picture" src="{{asset(Auth::user()->photo)}}" alt="User Image" id="user-photo">
                            <span class="ms-2 only-lgd">{{Auth::user()->first_name}}</span>
                            @else
                            <img class="airmalil-user-profile-picture" src="{{asset('staticimages/noimage.png')}}" alt="User Image" id="user-photo">
                            <span class="ms-2 only-lgd">{{Auth::user()->first_name}}</span>
                            @endif
                            @endauth

                        </a>

                        <ul class="dropdown-menu" aria-labelledby="profiledropdownbutton">
                            @auth
                            <li><a class="dropdown-item" href="{{ route('myprofile') }}">Profile</a></li>
                            @role('admin')
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Admin Dash</a></li>
                            @endrole
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </li>

                            @endauth
                            @guest
                            <li><a class="dropdown-item" href="{{ route('login') }}">Register/Sign In</a></li>

                            @endguest

                        </ul>
                    </div>
                    <!--Language dropdown-->
                    <div class="dropdown ms-3 d-none"  id="languagedropdown">
                        <button class="btn btn-sm dropdown-toggle rounded-pill" type="button" id="languagedropdownbutton"
                            data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #F2F7FD">
                            EN
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="languagedropdownbutton">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="navbar-header-auth bg-primary p-0 m-0 navbar-header-auth-hide">
    <ul class="nav flex-column nav-only-phone">
        <li class="nav-item"><a class="" aria-current="page" href="{{route('airmail.home')}}">Home</a></li>
        <li class="nav-item"><a class="" aria-current="page" href="#">Print</a></li>
        <li class="nav-item"><a class="" aria-current="page" href="{{route('rates.frontend')}}">Rates</a></li>
        <li class="nav-item"><a class="" aria-current="page" href="#">Calculator</a></li>
        <li class="nav-item"><a class="" aria-current="page" href="{{route('faq.frontend')}}" target="_blank">FAQ</a></li>
        <li class="nav-item"><a class="" aria-current="page" href="#">Tips</a></li>
        <li class="nav-item"><a class="" aria-current="page" href="{{route('contact.frontend')}}" target="_blank">Contact</a></li>
    </ul>
    <hr class="w-80 nav-only-phone">
    <p class="title nav-only-phone">Manage Account</p>
    <ul class="nav flex-column">
        <li class="nav-item text-uppercase fs-6">
            <a href="{{route('myprofile')}}"><i class="fa-solid fa-user me-3"></i>My Account</a>
        </li>
        <li class="nav-item text-uppercase fs-6">
            <a href="{{route('airmail.packages')}}"><i class="fa-solid fa-box-open me-3"></i>Manage Packages</a>
        </li>
        <li class="nav-item text-uppercase fs-6">
            <a href="{{route('airmail.inPackages')}}"><i class="fa-solid fa-boxes-packing me-3"></i>Incoming Packages</a>
        </li>
        <li class="nav-item text-uppercase fs-6"><i class="fa fa-box me-3"></i>Pick Up</li>
    </ul>

</div>

