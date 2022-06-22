@extends('dashboard.layout.master')

@section('content')

        <div class="main-panel">

            <div class="bg-light p-4 rounded">
                <div class="lead">
                    Manage your roles here.

                    <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm float-right">Add role</a>
                </div>

                <div class="mt-2">
                    @include('layouts.partials.messages')
                </div>

                <table class="table table-bordered" id="roleTable">
                <tr>
                    <th width="1%">No</th>
                    <th>Name</th>
                    <th width="3%" colspan="3">Action</th>
                </tr>
                    @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route('roles.show', $role->id) }}">Show</a>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('roles.edit', $role->id) }}">Edit</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </table>

                <div class="d-flex">
                    {!! $roles->links() !!}
                </div>
            </div>
        </div>
@endsection
@section('script')
<script>
    $(document).ready(function () {
        console.log('table');
        $('#roleTable').DataTable();
    });
</script>
@endsection