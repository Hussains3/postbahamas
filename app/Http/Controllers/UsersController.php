<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\ShippingLocation;

class UsersController extends Controller
{
    /**
     * Display all users
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(10);

        return view('dashboard.users.index', compact('users'));
    }

    /**
     * Show form for creating user
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created user
     *
     * @param User $user
     * @param StoreUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(User $user, StoreUserRequest $request)
    {
        //For demo purposes only. When creating user or inviting a user
        // you should create a generated random password and email it to the user
        $user->create(array_merge($request->validated(), [
            'password' => 'test'
        ]));

        return redirect()->route('users.index')
            ->withSuccess(__('User created successfully.'));
    }

    /**
     * Show user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $shippingLocations  = ShippingLocation::where('status',1)->get();
        return view('dashboard.users.show', [
            'user' => $user,
            'shippingLocations' => $shippingLocations
        ]);
    }

    /**
     * Edit user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'user' => $user,
            'userRole' => $user->roles->pluck('name')->toArray(),
            'roles' => Role::latest()->get()
        ]);
    }

    /**
     * Update user data
     *
     * @param User $user
     * @param UpdateUserRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, UpdateUserRequest $request)
    {

        $user->nib_number = $request->nib_number;

        if ($request->email) {
            $user->email = $request->email;
            $user->email_verified_at = null;
        }

        $user->save();

        $user->syncRoles($request->get('role'));
        return redirect()->route('users.index')
            ->withSuccess(__('User updated successfully.'));
    }

    /**
     * Soft Delete user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }



    /**
     * Display deleted users
     *
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $users = User::onlyTrashed()->get();
        return view('dashboard.users.trash', compact('users'));
    }

    /**
     * Restoring deleted user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function restore($user)
    {
        $user = User::withTrashed()
        ->where('id', $user)
        ->restore();
        return redirect()->route('users.index')
            ->withSuccess(__('Restored'));
    }


    /**
     * Hard Delete user data
     *
     * @param User $user
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($user)
    {
        $user = User::withTrashed()
        ->where('id', $user)
        ->forceDelete();

        return redirect()->route('users.trash')
            ->withSuccess(__('Deleted parmanently'));
    }
}
