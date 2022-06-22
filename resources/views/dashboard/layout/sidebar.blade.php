<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
        <img class="sidebar-brand-icon" src="{{asset('staticimages/bahamas-post-office.png')}}" alt="{{ config('app.name', 'Laravel') }}" width="50px" height="50px">
        <p class="text-left sidebar-brand-text ps-2 ms-2 mb-0 fs-5 border-start border-warning text-uppercase fw-bold lh-1 text-primary">Bahamas<br/>Postal Service</p>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('queries.index')}}">
            <i class="fa-solid fa-envelope"></i>
            <span>Message</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Frontend
    </div>
    <li class="nav-item" id="faqdropdown">
        <div class="">
            <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq" aria-expanded="true" aria-controls="collapseFaq"><i class="fa-solid fa-circle-question"></i><span>FAQ</span></a>
          <div id="collapseFaq" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqdropdown">
            <div class="">
                <a class="nav-link" href="{{route('faqCategories.index')}}">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>Category</span>
                </a>
                <a class="nav-link" href="{{route('faqSubCategories.index')}}">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>Subcategory</span>
                </a>
                <a class="nav-link" href="{{route('faqs.index')}}">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>QA</span>
                </a>
            </div>
          </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('shippinglocations.index')}}">
            <i class="fa-solid fa-location-dot"></i>
            <span>Prefered Location</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">


    <!-- Heading -->
    <div class="sidebar-heading">
        Admin Area
    </div>

    <li class="nav-item" id="userdropdown">
        <div class="">
            <a class="nav-link dropdown-toggle" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUser" aria-expanded="true" aria-controls="collapseUser"><i class="fa-solid fa-user"></i><span>User</span></a>
          <div id="collapseUser" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#userdropdown">
            <div class="">
                <a class="nav-link" href="{{route('users.index')}}">
                    <i class="fa-solid fa-user"></i>
                    <span>Users</span>
                </a>
                <a class="nav-link" href="{{route('roles.index')}}">
                    <i class="fa-solid fa-hat-cowboy-side"></i>
                    <span>Roles</span>
                </a>
                <a class="nav-link" href="{{route('permissions.index')}}">
                    <i class="fa-solid fa-hat-cowboy"></i>
                    <span>Permissions</span>
                </a>
            </div>
          </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard.trash')}}">
            <i class="fa-solid fa-trash"></i>
            <span>Master Trash</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item d-none">
        <a class="nav-link collapsed" href="{{route('users.index')}}" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>User</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>

</ul>
<!-- End of Sidebar -->
