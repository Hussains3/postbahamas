@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <div class="bg-light" style="" id="contactherobanner">
        <div class="container text-center d-flex flex-column align-items-center">
            <h1 class="fw-bold text-dark mb-4 text-uppercase">Contact</h1>
        </div>
    </div>
    <div class="container py-5">
        <div class="text-center ">
            <h2 class="text-dark fs-1 mb-5 fw-bold text-uppercase">Get in Touch</h2>
            <p>Please fill in all the information below to complete the form</p>
        </div>
        <form  class="w-100" id="contactusform">
            @csrf
            <div class="row">
                <div class="col-md-6 mt-4">
                    <input class="w-100 bg-transparent border-bottom border-primary bps-input" type="text" name="name" id="name"  placeholder="Name *" required>
                </div>
                <div class="col-md-6 mt-4">
                    <input
                    class="w-100 bg-transparent border-bottom border-primary bps-input"
                    type="email"
                    name="email"
                    id="email"
                    value="@auth{{Auth::user()->email}}@endauth"
                    placeholder="Email Address *"
                    required
                    @auth readonly @endauth
                    >
                </div>
                <div class="col-md-6 mt-4" >
                    <input class="w-100 bg-transparent border-bottom border-primary bps-input" type="text" name="phone" id="phone" placeholder="Phone">
                </div>
                <div class="col-md-6 mt-4">
                    <input class="w-100 bg-transparent border-bottom border-primary bps-input" type="text" name="subject" id="subject" placeholder="Subject *" required>
                </div>
                <div class="col-md-12 mt-4">
                    <textarea class="w-100 bg-transparent border-bottom border-primary bps-input" name="message" id="message" cols="30" rows="3" placeholder="Message *" required maxlength="1000"></textarea>
                </div>
                <div class="col-md-12 mt-5 text-center">
                    <button class="btn btn-primary px-3" type="submit" id="conntactussubmit">Submit Here</button>
                    <div class="spinner-border text-warning text-center d-none" role="status" id="contactformspinner">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>

            </div>
        </form>

    </div>
@endsection


@section('script')
<script>
    $(document).ready(function () {
        $("#contactusform").on('submit', function (event) {
            event.preventDefault();
            var actionUrl = "{{route('queries.store')}}";

            $.ajax({
                type: "post",
                url: actionUrl,
                data: $('#contactusform').serialize(),
                beforeSend: function() {
                    $('#conntactussubmit').prop("disabled", true).toggleClass('d-none');
                    $('#contactformspinner').toggleClass('d-none');
                },
                success: function (response) {
                    // alert(response.status);
                    console.log(response.message);
                    $('#contactusform').trigger("reset");
                    $('#contactformspinner').toggleClass('d-none');
                    $('#conntactussubmit').prop("disabled", true).toggleClass('d-none').html(response.message);

                }
            });
        });

    });
</script>
@endsection
