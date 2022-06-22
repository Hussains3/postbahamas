@extends('dashboard.layout.master')
@section('title','Sub Category')
@section('content')

<div class="row">
    <h1 class="fs-5">Sub Categories</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card p-3">
            <div class="row">
                <div class="col-10"></div>
                <div class="col-2 d-flex justify-content-end">
                    <button class="btn btn-sm btn-warning w-20" data-bs-toggle="modal" data-bs-target="#createcategoryModal">
                        <i class="fa-solid fa-circle-plus me-2"></i>
                        Add Sub Category
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <table class="table" id="categoryTable">
                        <thead>
                            <tr>
                                <td>SL</td>
                                <td>Sub Category</td>
                                <td>Category</td>
                                <td>Slug</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subcategories as $category)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>
                                    <button class="d-none btn btn-primary btn-sm" onclick="showEdit({{$category->id}})"><i class="fa fa-pencil"></i></button>
                                    {!! Form::open(['method' => 'DELETE','route' => ['faqSubCategories.destroy', $category->id],'style'=>'display:inline']) !!}
                                    <input type="hidden" name="subcategory_id" value="{{$category->id}}">
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



<!-- Create Modal -->
<div class="modal fade" id="createcategoryModal" tabindex="-1" aria-labelledby="createcategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('faqSubCategories.store')}}" method="post" id="createCategoryform">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createcategoryModalLabel">Add Sub Category</h5>
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Category<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                          <select class="form-control" name="category_id" id="category_id">
                              @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Name<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Sub category name" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer text-center">
                    <button type="reset" class="btn btn-primary btn-warning btn-sm">Reset</button>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post" id="updateCategoryform">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Add Category</h5>
                    <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label">Category<span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="name" name="name" placeholder="ctegory name" required>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="editId" id="editId">
                <div class="modal-footer text-center">
                    <button type="reset" class="btn btn-primary btn-warning btn-sm">Reset</button>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>




@endsection


@section('script')
<script>
    $(document).ready(function () {
        $('#categoryTable').DataTable({
            "info": false,
            "paginate": false,
            "searching": false
        });

        $("#createCategoryform").on('submit', function (event) {
            event.preventDefault();
            var actionUrl = "{{route('faqSubCategories.store')}}";

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
