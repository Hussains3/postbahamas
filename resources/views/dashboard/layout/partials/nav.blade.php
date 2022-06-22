<div class="container d-sm-none d-md-block top-bar">
    <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-7 d-flex justify-content-end">
            <div class=""><a class="nav-link d-flex align-items-center" href=""><i class="text-secondary me-2 fa-solid fa-location-dot"></i>Post Office Location</a></div>
            <div class=""><a class="nav-link d-flex align-items-center" href=""><i class="text-secondary me-2 fa-solid fa-headset"></i>Support</a></div>
            <div class=""><a class="nav-link d-flex align-items-center" href=""><i class="text-secondary me-2 fa-solid fa-address-book"></i>Contact Us</a></div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img class="" src="{{asset('staticimages/bahamas-post-office.png')}}" alt="{{ config('app.name', 'Laravel') }}" width="50px" height="50px">
            <p class="ps-2 ms-2 mb-0 fs-4 border-start border-warning text-uppercase fw-bold lh-1 text-primary">Bahamas<br/>Postal Service</p>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto main-menu">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Air Mail</a></li>
                      <li><a class="dropdown-item" href="#">Domestic Money Order</a></li>
                      <li><a class="dropdown-item" href="#">International Money Order</a></li>
                      <li><a class="dropdown-item" href="#">E-commerce Service</a></li>
                    </ul>
                </li>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Register/Sign In</a></li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('myprofile')}}">Profile</a>
                            @role('admin')
                            <a class="dropdown-item" href="{{route('dashboard')}}">Admin Dash</a>
                            @endrole
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
