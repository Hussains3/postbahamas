@extends('dashboard.layout.master')
@section('title','Edit FAQ')
@section('content')

<div class="row">
    <h1 class="fs-5">Edit FAQ</h1>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-md-6">

        <div class="card p-3">
            <form action="{{route('faqs.update',$faq->id)}}" method="post" id="">
                @csrf
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Sub Category<span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                      <select name="sub_category_id" id="sub_category_id" class="form-control" required>
                          @forelse ($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                          @empty
                            <option value="">Please Create Sub Category</option>
                          @endforelse
                      </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Question<span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="question" id="question" cols="30" rows="2" value="{{$faq->question}}"></textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Answer<span class="text-danger">*</span></label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="answer" id="answer" cols="30" rows="2" value="{{$faq->answer}}"></textarea>
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
