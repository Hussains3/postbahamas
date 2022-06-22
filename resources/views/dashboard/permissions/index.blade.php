@extends('dashboard.layout.master')


@section('content')

    <div class="bg-light p-4 rounded">

        <div class="lead">
            <h1 class="mb-3">Permissions</h1>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mt-2">
                    @include('layouts.partials.messages')
                </div>
                <form method="POST" action="{{ route('permissions.store') }}" class="d-flex mb-3">
                    @csrf
                    <input value="{{ old('name') }}" type="text" class="form-control"  name="name" placeholder="Add Permission" required>
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



        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" width="15%">Name</th>
                <th scope="col">Guard</th>
                <th scope="col" colspan="3" width="1%"></th>
            </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td><a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info btn-sm">Edit</a></td>
                        <td>
                            {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>


@endsection







