@extends('dashboard.layout.master')
@section('title','Queries')
@section('content')

    <div class="row">
        <h1 class="fs-5">Queries</h1>
    </div>
    <div class="row">
        @include('dashboard.layout.partials.compose')

        <div class="col-md-10">
            <div class="card">
                <form action="{{route('queries.store')}}" method="POST" id="contactusform">
                    @csrf
                    <div class="card-header">
                        <h2 class="fs-5">Compose New Message</h2>
                    </div>
                    <div class="card-body p-3">

                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">To *</label>
                                <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email" value="{{$email}}" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="subject" class="col-sm-2 col-form-label">Subject *</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <input type="hidden" name="name" id="name" value="Bahabas Post Office">
                                <input type="hidden" name="phone" id="phone" value="01234567895">
                                <input type="hidden" name="messegeSender" id="messegeSender" value="admin">
                                <label for="message" class="col-sm-2 col-form-label">Message *</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="Message" required maxlength="1000"></textarea>
                                </div>
                            </div>

                    </div>
                    <div class="card-footer text-muted text-right">
                        <a class="btn btn-danger btn-sm " href="{{url()->previous()}}">Cancle</a>
                        <button type="submit" class="btn btn-primary btn-sm " id="conntactussubmit"><i class="fa-solid fa-reply"></i> Send Message</button>
                        <div class="spinner-border text-warning text-center d-none" role="status" id="contactformspinner">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
                    console.log(response.data);
                    $('#contactusform').trigger("reset");
                    $('#contactformspinner').toggleClass('d-none');
                    $('#conntactussubmit').prop("disabled", true).toggleClass('d-none').html('Replay Sent.');

                }
            });
        });
    });
</script>
@endsection
