@extends('dashboard.layout.master')
@section('title','Categories')
@section('content')

<div class="row">
    <h1 class="fs-5">Add Category</h1>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">

        <div class="card p-3">
            <form action="{{route('faqCategories.store')}}" method="post" id="createCategoryform">
                @csrf
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Category<span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" placeholder="category name" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <button type="reset" class="btn btn-primary btn-warning btn-sm">Reset</button>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
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
        // $("#createCategoryform").on('submit', function (event) {
        //     event.preventDefault();
        //     var actionUrl = "{{route('faqCategories.store')}}";

        //     $.ajax({
        //         type: "post",
        //         url: actionUrl,
        //         data: $('#createCategoryform').serialize(),
        //         success: function (response) {
        //             $('#createCategoryform').trigger("reset");
        //             location.reload();
        //         }
        //     });
        // });
    });
</script>
@endsection
