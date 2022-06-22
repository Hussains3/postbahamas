@extends('dashboard.layout.master')
@section('title','Master trash')
@section('content')
<div class="d-none alert alert-danger alert-dismissible fade show" role="alert">
    <i class="fa-solid fa-ban"></i>
    This page is under development
</div>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="message_trash-tab" data-bs-toggle="tab" data-bs-target="#message_trash" type="button" role="tab" aria-controls="message_trash" aria-selected="true">Message Trash</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="user_trash-tab" data-bs-toggle="tab" data-bs-target="#user_trash" type="button" role="tab" aria-controls="user_trash" aria-selected="false">User Trash</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="faq_trash-tab" data-bs-toggle="tab" data-bs-target="#faq_trash" type="button" role="tab" aria-controls="faq_trash" aria-selected="false">FAQ Trash</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="loation_trash-tab" data-bs-toggle="tab" data-bs-target="#loation_trash" type="button" role="tab" aria-controls="loation_trash" aria-selected="false">Location Trash</button>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    {{-- Query Trash --}}
    <div class="tab-pane fade show active" id="message_trash" role="tabpanel" aria-labelledby="message_trash-tab">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <table id="queryTable" class="w-100 table table-bordered">
                        <thead class="">
                            <tr>
                                <th>ID</th>
                                <td>Name</td>
                                <td>Message</td>
                                <td>Date</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($queries as $query)
                            <tr class="@if($query->status == 1) fw-bold @endif">
                                <th scope="row">{{ $query->id }}</th>
                                <td class="text-dark">
                                    <a class="text-dark" href="{{route('queries.show',$query->id)}}">{{$query->name}}@if ($query->user_id != null)
                                        <i class="fa-solid fa-user-circle text-primary"></i>
                                        @endif</a>
                                </td>
                                <td class="text-dark"><a class="text-dark" href="{{route('queries.show',$query->id)}}">{{$query->subject}}</a></td>
                                <td class="text-dark text-right"><a class="text-dark" href="{{route('queries.show',$query->id)}}">@php echo date_format(date_create($query->created_at),"F j"); @endphp</a></td>
                                <td class="text-right">
                                    <a href="{{ route('queries.restore', $query->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
                                    </a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['queries.delete', $query->id],'style'=>'display:inline']) !!}
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
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
    {{-- User trash --}}
    <div class="tab-pane fade" id="user_trash" role="tabpanel" aria-labelledby="user_trash-tab">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <table id="userTable" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>NIB</th>
                                <th class="no-sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->first_name.' '. $user->last_name}}</td>
                                    <td>
                                        {{ $user->email }}
                                        @if ($user->email_verified_at != null)
                                        <i class="fa-solid fa-check-circle text-primary"></i>
                                        @endif
                                    </td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->nib_number}}</td>
                                    <td class="text-right">
                                        <a href="{{ route('users.restore', $user->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                                        </a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['users.delete', $user->id],'style'=>'display:inline']) !!}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
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
    {{-- FAQ trash --}}
    <div class="tab-pane fade" id="faq_trash" role="tabpanel" aria-labelledby="faq_trash-tab">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <table class="table table-bordered" id="faqTable" style="width:100%">
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
                                <td class="text-right">
                                    <a href="{{ route('faqs.restore', $faq->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
                                    </a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['faqs.delete', $faq->id],'style'=>'display:inline']) !!}
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
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
    {{-- Location  --}}
    <div class="tab-pane fade" id="loation_trash" role="tabpanel" aria-labelledby="loation_trash-tab">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-3">
                    <table class="table table-bordered" id="shippingLocationtable">
                        <thead>
                        <tr>
                            <th scope="col" width="15%">SL.No</th>
                            <th scope="col">Name of existing location</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($locations as $shippinglocation)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $shippinglocation->name }}</td>
                                    <td>
                                        <span class="badge rounded-pill @if ($shippinglocation->status == 1)
                                            bg-success
                                            @else
                                            bg-warning text-dark
                                        @endif">
                                        @if ($shippinglocation->status == 1)
                                        Active
                                        @else
                                        In-active
                                    @endif
                                        </span>
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('shippinglocations.restore', $shippinglocation->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa-solid fa-trash-can-arrow-up"></i>
                                        </a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['shippinglocations.delete', $shippinglocation->id],'style'=>'display:inline']) !!}
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
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
        $('#userTable').DataTable({
            "info": false
        });
        $('#queryTable').DataTable({
            "info": false
        });
        $('#faqTable').DataTable({
            "info": false
        });
        $('#shippingLocationtable').DataTable({
            "info": false
        });
    });


    // "info": false,
    // "paginate": false,
    // "searching": false

</script>
@endsection
