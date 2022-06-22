<!-- Signup -->
<div class="bg-warning">
    <div class="container pt-2">
        <div class="row align-items-center">

            <div class="col-md-4 signup-heading">
                <h2>Sign UP NOW</h2>
                <p>To get next day delivery</p>
            </div>

            <div class="col-md-8">
                <form class="d-flex justify-content-between" action="{{route('register')}}" method="get">
                    <input class="bg-transparent border-bottom border-primary signup-mail" type="email" name="email" required placeholder="Email Address">
                    <button class="btn btn-primary rounded-pill px-3 fs-4">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>
