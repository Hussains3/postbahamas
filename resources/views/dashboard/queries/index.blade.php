@extends('dashboard.layout.master')
@section('title','Queries')
@section('content')

<div class="row">
    <h1 class="fs-5">Messages</h1>
    <div class="mt-2">
        @include('layouts.partials.messages')
    </div>
</div>
<div class="row">
    @include('dashboard.layout.partials.compose')
    <div class="col-md-10">
        <div class="card p-3">
            <div class="d-flex">
                <div class="me-2">
                    <input type="checkbox" name="selectAll" id="selectAll">
                    <label for="selectAll">All</label>
                </div>
                <a href="" class="px-2 d-none" id="deletebtn"><i class="fa fa-trash text-danger"></i></a>
                <a href="" class="px-2 d-none"><i class="fa-solid fa-envelope-open "></i></a>
                <a href="" class="px-2 d-none"><i class="fa-solid fa-envelope text-info"></i></a>
            </div>
            <table id="queryTable" class="w-100 table">
                <thead class="">
                    <tr>
                        <td>Select</td>
                        <td>Name</td>
                        <td>Message</td>
                        <td>Date</td>
                        <td class="text-right">Action</td>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($queries as $query)
                    <tr class="@if($query->status == 1) fw-bold @endif">
                        <td><input class="tableraw" type="checkbox" name="tableraw[]" id="" value="{{$query->id}}" ></td>
                        <td class="text-dark">
                            <a class="text-dark" href="{{route('queries.show',$query->id)}}">{{$query->name}}@if ($query->user_id != null)
                                <i class="fa-solid fa-user-circle text-primary"></i>
                                @endif</a>
                        </td>
                        <td class="text-dark"><a class="text-dark" href="{{route('queries.show',$query->id)}}">{{$query->subject}}</a></td>
                        <td class="text-dark text-right"><a class="text-dark" href="{{route('queries.show',$query->id)}}">@php echo date_format(date_create($query->created_at),"F j"); @endphp</a></td>
                        <td class="text-right">
                            <form action="{{route('queries.destroy', $query->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="query_id" value="{{$query->id}}">
                                <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
            var queryIds = [];
            var batchdestroyurl = "{{route('queries.batchdestroy')}}";
            $("input[name='tableraw[]']").each(function (index, obj) {
                queryIds.push($(this).val());
            });

            $.ajax({
                type: "post",
                url: batchdestroyurl,
                data: {
                    'quryIds' : queryIds
                },
                beforeSend: function() {
                    console.log(batchdestroyurl);
                },
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success: function (response) {
                    if (response.status == 'success') {
                        console.log(response.data);
                        location.reload();
                    }
                }
            });
          });
    });
</script>
@endsection
