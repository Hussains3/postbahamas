@extends('dashboard.layout.master')
@section('title','Categories')
@section('content')

<div class="row">
    <h1 class="fs-5">Frequently Asked Questions</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card p-3">
            <div class="row mb-2">
                <div class="col-10"></div>
                <div class="col-2 d-flex justify-content-end">
                    <a href="{{route('faqs.create')}}" class="btn btn-sm btn-warning w-20">
                        <i class="fa-solid fa-circle-plus me-2"></i>
                        Add FAQ
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table" id="faqTable">
                        <thead>
                            <tr>
                                <td>SL</td>
                                <td>Question</td>
                                <td>Answer</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $faq)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                {{-- {{ Str::limit($faq->question, 30, '...') }} --}}
                                <td>
                                    <p class="text-wrap">{{ Str::limit($faq->question, 30, '...') }}</p>
                                </td>
                                <td>
                                    <p class="text-wrap">{{ Str::limit($faq->answer, 30, '...') }}</p>
                                </td>
                                <td>
                                    <a class="d-none btn btn-primary btn-sm" href="{{route('faqs.edit', $faq->id)}}"><i class="fa fa-pencil"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['faqs.destroy', $faq->id],'style'=>'display:inline']) !!}
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
<script>
    $(document).ready(function () {
        $('#faqTable').DataTable({
            "info": false,
            "paginate": false,
            "searching": true
        });

        $("#createCategoryform").on('submit', function (event) {
            event.preventDefault();
            var actionUrl = "{{route('faqCategories.store')}}";

            $.ajax({
                type: "post",
                url: actionUrl,
                data: $('#createCategoryform').serialize(),
                success: function (response) {
                    $('#createCategoryform').trigger("reset");
                    location.reload();
                }
            });
        });

        $("#updateCategoryform").on('submit', function (event) {
            event.preventDefault();
            var editid = $("#editId").val();
            var actionUrl = "{{route('faqCategories.update',"+editid+")}}";

            $.ajax({
                type: "patch",
                url: actionUrl,
                data: $('#updateCategoryform').serialize(),
                success: function (response) {
                    $('#updateCategoryform').trigger("reset");
                    location.reload();
                }
            });
        });

    });
    function showEdit(editid) {
        $("#editId").val(editid);
        $("#editModal").modal('show');
    }
</script>
@endsection
