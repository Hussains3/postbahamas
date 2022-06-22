@extends('dashboard.layout.master')

@section('contents')
    <div class="bg-light p-4 rounded">
        <h1>Update user</h1>
        <div class="lead">

        </div>

        <div class="container mt-4">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ $user->name }}"
                        type="text"
                        class="form-control"
                        name="name"
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ $user->email }}"
                        type="email"
                        class="form-control"
                        name="email"
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ $user->username }}"
                        type="text"
                        class="form-control"
                        name="username"
                        placeholder="Username" required>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <select class="form-control"
                        name="role" required>
                        <option value="">Select role</option>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}"
                                {{ in_array($role->name, $userRole)
                                    ? 'selected'
                                    : '' }}>{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('role'))
                        <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Update user</button>
                <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</button>
            </form>
        </div>

    </div>
@endsection
@section('content')
    <div class="card mt-4  ">
        <div class="row p-3">
            <div class="col-md-2 d-flex justify-content-center align-items-center">
                @if ($user->photo)
                <img class="user-profile-picture" src="{{asset($user->photo)}}" alt="User Image" id="user-photo">
                @else
                <img class="user-profile-picture" src="{{asset('staticimages/noimage.png')}}" alt="User Image" id="user-photo">
                @endif
            </div>
            <div class="col-md-10 user-profile-binfo">
                <span class="badge rounded-pill bg-primary">{{$user->roles->first()->name}}</span>
                <h2 class="fs-5">{{$user->first_name.' '.$user->last_name}}</h2>
                <p class="mb-0"><strong>Phone: </strong>{{$user->phone}}</p>
                <p class="mb-0 position-relative"><strong>Email: </strong>{{$user->email}}
                    @if ($user->email_verified_at != null)
                        <i class="fa-solid fa-check-circle text-primary"></i>
                    @endif
                </p>
            </div>


        </div>
        <!-- Edit Profile-->
        <div class="tab-pane p-4" >
            <div class="row">
                <h3 class="fs-5">Edit this user</h3>
            </div>
            <form form method="post" action="{{ route('users.update', $user->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3 row">
                    <label for="role" class="col-sm-3 col-form-label">Role</label>
                    <div class="col-sm-9">
                        <select class="form-control"
                            name="role" required>
                            <option value="">Select role</option>
                            @foreach($roles as $role)
                                <option class="text-capitalize" value="{{ $role->id }}"
                                    {{ in_array($role->name, $userRole)
                                        ? 'selected'
                                        : '' }}>{{ $role->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('role'))
                            <span class="text-danger text-left">{{ $errors->first('role') }}</span>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input value="{{ $user->email }}"
                            type="email"
                            class="form-control"
                            name="email"
                            placeholder="Email address" required>
                        @if ($errors->has('email'))
                            <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="nib_number" class="col-sm-3 col-form-label">NIB Number</label>
                    <div class="col-sm-9">
                        <input value="{{ $user->nib_number }}"
                            type="text"
                            class="form-control"
                            name="nib_number"
                            placeholder="NIB Number" required>
                        @if ($errors->has('nib_number'))
                            <span class="text-danger text-left">{{ $errors->first('nib_number') }}</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-warning px-4" type="submit">Submit</button>
                        <a href="{{ url()->previous() }}" class="btn btn-default">Cancel</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
    });
</script>
@endsection
