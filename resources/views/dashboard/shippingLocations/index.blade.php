@extends('dashboard.layout.master')


@section('content')

    <div class="bg-light p-4 rounded">

        <div class="lead">
            <h1 class="mb-3">Prefered Locations</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mt-2">
                    @include('layouts.partials.messages')
                </div>
                <form method="POST" action="{{ route('shippinglocations.store') }}" class="d-flex mb-3">
                    @csrf
                    <input value="{{ old('name') }}" type="text" class="form-control"  name="name" placeholder="Location" required>
                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                    <div class="d-flex">
                        <button type="submit" class="btn btn-sm btn-primary ms-2">Save</button>
                        <button type="reset" class="btn btn-sm btn-warning  ms-2">Reset</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="">
                <div class="card">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col" width="15%">SL.No</th>
                            <th scope="col">Name of existing location</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($shippingLocations as $shippinglocation)
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
                                    <td class="d-flex justify-content-center">
                                        {{-- condition ? trueExpression : falseExpression --}}
                                        <form action="{{route('shippinglocations.update',$shippinglocation->id)}}" method="post" class="mx-1">
                                            @csrf
                                            @method('patch')
                                            <input type="hidden" value="{{$shippinglocation->status == 1 ? 2 : 1}}" name="status">
                                            <input type="hidden" value="{{$shippinglocation->name}}" name="name">
                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa-solid fa-rotate"></i></button>
                                        </form>
                                        {!! Form::open(['method' => 'DELETE','route' => ['shippinglocations.destroy', $shippinglocation->id],'style'=>'display:inline']) !!}
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


@endsection







