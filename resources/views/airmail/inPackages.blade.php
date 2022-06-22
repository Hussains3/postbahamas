@extends('airmail.layouts.app')

@section('content')
    <!-- Hero -->
    <div class="bg-light container " style="" id="packagesherobanner">
        <h1 class="fw-bold text-dark  text-uppercase fs-4">
            Submit your receipts before they arrive
        </h1>
        <hr>
    </div>
    <div class="container mb-5">
        <div class="card">
            <!-- Edit Profile-->
            <div class="tab-pane p-4" >
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tracking_number" class="form-label">Tracking Number</label>
                                <input class="form-control form-control-sm" type="text" name="tracking_number" value="" id="tracking_number">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tracking_number" class="form-label">Store/Supplier</label>
                                <select class="form-control form-control-sm" name="tracking_number" id="tracking_number">
                                    @foreach ($stores as $store)
                                    <option value="{{$store}}">{{$store}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label>
                                <input class="form-control form-control-sm" type="date" name="date" value="" id="date">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="note_for_package" class="form-label">Note for Package</label>
                                <input class="form-control form-control-sm" type="text" name="note_for_package" value="" id="note_for_package">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Commodity (ex.shoes,parts,etc.)</label>
                                <select class="form-control form-control-sm" name="commodities[]">
                                    @foreach ($commodities as $commodity)
                                    <option value="{{$commodity}}">{{$commodity}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Commodity Price (ex. 9.00)</label>
                                <input class="form-control form-control-sm" type="text" name="commodityPrices[]">
                            </div>
                        </div>
                    </div>
                    <div class="row" id="commodityParent">

                    </div>
                    <div class="row text-center d-flex flex-column align-items-center">
                        <h6>Choose OTHER if no listed commodity matches your product type</h6>
                        <div class="col-md-3">
                            <button class="btn btn-sm btn-primary w-20" id="addMoreCommodity">+ Add Commodity</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="receipt" class="form-label">Receipt</label>
                                <input class="form-control form-control-sm" type="file" name="receipt" value="" id="receipt">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-warning px-4" type="submit">Submit</button>
                            <button class="btn btn-outline-warning px-4 text-dark" type="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('script')

<script>
    $("#addMoreCommodity").click(function (e) {
        e.preventDefault();
        let lt = $('.commodityChild').length;
        $('#commodityParent').append('<div class="col-md-12 commodityChild" id="commodityChild-'+lt+'"><div class="row"><div class="col-md-6"><div class="mb-3"><label for="formFile" class="form-label">Commodity (ex.shoes,parts,etc.)</label><select class="form-control form-control-sm" name="commodities[]">@foreach ($commodities as $commodity)<option value="{{$commodity}}">{{$commodity}}</option> @endforeach</select></div></div><div class="col-md-5"><div class="mb-3"><label for="formFile" class="form-label">Commodity Price (ex. 9.00)</label><input class="form-control form-control-sm" type="text" name="commodityPrices[]"></div></div><div class="col-md-1 d-flex justify-content-end align-items-end"><div class="mb-3"><input type="button" value="X" class="btn btn-sm btn-danger" onclick="removeItsParent('+lt+')"></div></div></div></div>');
    });
    function removeItsParent(id) {$("#commodityChild-"+id).remove();}
</script>
@endsection
