@extends('airmail.layouts.app')

@section('content')
    <!-- Hero -->
    <div class="bg-light container " style="" id="packagesherobanner">
        <h1 class="fw-bold text-dark  text-uppercase fs-4">
            See, Track, & Pay for all your packages
        </h1>
        <hr>
    </div>
    <div class="container packagesSection">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="invoiced-tab" data-bs-toggle="tab" data-bs-target="#invoiced"
                    type="button" role="tab" aria-controls="invoiced" aria-selected="true">
                    Invoiced<span class="badge rounded-pill bg-primary ms-1">0</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="canceled-tab" data-bs-toggle="tab" data-bs-target="#canceled" type="button"
                    role="tab" aria-controls="canceled" aria-selected="true">
                    Canceled<span class="badge rounded-pill bg-primary ms-1">0</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="booking-tab" data-bs-toggle="tab" data-bs-target="#booking" type="button"
                    role="tab" aria-controls="booking" aria-selected="true">
                    Booking<span class="badge rounded-pill bg-primary ms-1">0</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="stand-by-tab" data-bs-toggle="tab" data-bs-target="#stand-by" type="button"
                    role="tab" aria-controls="stand-by" aria-selected="true">
                    Stand by<span class="badge bg-secondary rounded-pill ms-1" data-bs-toggle="modal"
                        data-bs-target="#stand-by-Modal">?</span><span class="badge rounded-pill bg-primary ms-1">0</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="invoice-pending-tab" data-bs-toggle="tab" data-bs-target="#invoice-pending"
                    type="button" role="tab" aria-controls="invoice-pending" aria-selected="true">
                    Invoice pending<span class="badge bg-secondary rounded-pill ms-1" data-bs-toggle="modal" data-bs-target="#invoice-pending-Modal">?</span>
                    <span class="badge rounded-pill bg-primary ms-1">0</span>
                </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="invoiced" role="tabpanel" aria-labelledby="invoiced-tab">
                <table class="table">
                    <thead>
                        <tr class="bg-primary text-light text-center">
                            <th scope="col">AWB</th>
                            <th scope="col">Commodity</th>
                            <th scope="col">Image</th>
                            <th scope="col">Tracking Number</th>
                            <th scope="col">Location</th>
                            <th scope="col">Receipt</th>
                            <th scope="col">Invoice</th>
                            <th scope="col">AMT Due</th>
                            <th scope="col">Package</th>
                            <th scope="col">Delivery</th>
                            <th scope="col">Pincode</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <th scope="row" colspan="11">You currently have no package(s) to manage. Shop online to make the most out of your account.</th>
                        </tr>
                        <tr class="text-center d-none">
                            <th scope="row">D</th>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="canceled" role="tabpanel" aria-labelledby="canceled-tab">
                <table class="table">
                    <thead>
                        <tr class="bg-primary text-light">
                            <th scope="col">AWB</th>
                            <th scope="col">Сommodity (ex. shoes, parts, etc.)</th>
                            <th scope="col">Image</th>
                            <th scope="col">Tracking Number</th>
                            <th scope="col">Location</th>
                            <th scope="col">Return</th>
                            <th scope="col">Receipt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" colspan="7">You currently have no package(s) to manage. Shop online to make the most out of your account.</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="booking" role="tabpanel" aria-labelledby="booking-tab">
                <table class="table">
                    <thead>
                        <tr class="bg-primary text-light">
                            <th scope="col">AWB</th>
                            <th scope="col">Сommodity (ex. shoes, parts, etc.)</th>
                            <th scope="col">Tracking Number</th>
                            <th scope="col">Return</th>
                            <th scope="col">Receipt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <th scope="row" colspan="5">No Record</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="stand-by" role="tabpanel" aria-labelledby="stand-by-tab">
                <table class="table">
                    <thead>
                        <tr class="bg-primary text-light">
                            <th scope="col">AWB</th>
                            <th scope="col">Сommodity (ex. shoes, parts, etc.)</th>
                            <th scope="col">Image</th>
                            <th scope="col">Tracking Number</th>
                            <th scope="col">Location</th>
                            <th scope="col">Return</th>
                            <th scope="col">Receipt</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" colspan="7">You currently have no package(s) to manage. Shop online to make the most out of your account.</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="invoice-pending" role="tabpanel" aria-labelledby="invoice-pending-tab">
                <table class="table">
                    <thead>
                        <tr class="bg-primary text-light">
                            <th scope="col">AWB</th>
                            <th scope="col">Сommodity (ex. shoes, parts, etc.)</th>
                            <th scope="col">Image</th>
                            <th scope="col">Tracking Number</th>
                            <th scope="col">Location</th>
                            <th scope="col">Return</th>
                            <th scope="col">Receipt</th>
                            <th scope="col">Invoice</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" colspan="8">You currently have no package(s) to manage. Shop online to make the most out of your account.</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Stand by Modal -->
    <div class="modal fade" id="stand-by-Modal" tabindex="-1" aria-labelledby="stand-by-ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="stand-by-ModalLabel">Why?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>If you've uploaded your receipt, but your package is still in our US warehouse after 2 business days
                        you
                        may be missing one of the four requirements:
                    </p>
                    <ol>
                        <li>Supplier Name</li>
                        <li>Your Name & Address</li>
                        <li>Item & Description</li>
                        <li>Subtotal & Total</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Invoice Pending Modal -->
    <div class="modal fade" id="invoice-pending-Modal" tabindex="-1" aria-labelledby="invoice-pending-ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="invoice-pending-ModalLabel">WHERE'S MY PACKAGE?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Your package (s) is on standby because you have not uploaded your receipt. Please upload your receipt and ensure it includes the following requirments:</p>
                    <ol>
                        <li>Supplier Name</li>
                        <li>Your Name & Address</li>
                        <li>Item & Description</li>
                        <li>Subtotal & Total</li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
@endsection
