@extends('dashboard.layout.master')
@section('title','Users')
@section('content')
    <div class="">
        <div class="row">
            <div class="lead">
                Users
                {{-- <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right">Add User</a> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4">
                    <table id="userTable" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Sr.No</th>
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
                                    <td>
                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm"><i class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                                        {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!} --}}
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


@section('script')
<script>
    $(document).ready(function () {
        $('#userTable').DataTable();
    });
</script>
@endsection
