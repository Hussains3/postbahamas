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
                <div class="card-header">
                    <h2 class="fs-5">{{$query->subject}}</h2>
                </div>
                <div class="card-body p-3">
                    <div class="d-flex ">
                        @if ($query->sender)
                            @if ($query->sender->photo)
                            <img class="me-3 rounded-circle" src="{{asset($query->sender->photo)}}" alt="User Image" id="user-photo" width="50px" height="50px">
                            @else
                            <img class="me-3 rounded-circle" src="{{asset('staticimages/noimage.png')}}" alt="User Image" id="user-photo" width="50px" height="50px">
                            @endif
                        @endif
                        <div class="">
                            <h4 class="fs-5">{{$query->name}}</h4>
                            <p>to <a href="mailto: {{$query->to}}">{{$query->to}}</a></p>
                        </div>
                    </div>
                    <div class="">
                        <p>{{$query->message}}</p>
                    </div>
                </div>
                <div class="card-footer text-muted d-flex">
                    <a class="btn btn-secondary btn-sm " href="{{route('queries.index')}}">Back</a>
                    <form class="ms-2" action="{{route('queries.create')}}" method="get">
                        <input type="hidden" name="email" value="{{$query->email}}">
                        <button class="btn btn-primary btn-sm"><i class="fa-solid fa-reply"></i> Replay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('script')
<script>
    $(document).ready(function () {
        $('#queryTable').DataTable({
            "searching": false,
            "language": {
                "info": "Page _PAGE_ of _PAGES_",
                "infoEmpty": "No entries to show"
            }
            // "paging": false
        });
        $("#queryTable_length").css('display','none');

        $("#selectAll").change(function(){
            if ($('#selectAll').is(':checked')) {
                $(".tableraw").prop('checked', true);
                $("#deletebtn").removeClass('d-none');
            }else{
                $(".tableraw").prop('checked', false);
                $("#deletebtn").addClass('d-none');
            }
        });

        $(".tableraw").change(function(){
            if ($('.tableraw').is(':checked')) {
                // $("#deletebtn").toggleClass('d-none');
                $("#deletebtn").removeClass('d-none');
            }else{
                $("#deletebtn").addClass('d-none');
            }
        });

        $("#deletebtn").on('click',function (event) {
            event.preventDefault();
            if ($('.tableraw').is(":checked")){
                var selectedIds = $(".tableraw").val();
            }
            alert(selectedIds);
          });
    });
</script>
@endsection
