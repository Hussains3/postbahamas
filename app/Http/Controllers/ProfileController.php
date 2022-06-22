<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Show the myprofile dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myprofile()
    {
        return view('myprofile.index');
    }

    /**
     * Show the myprofile edit page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function editmyprofile()
    {
        return view('myprofile.editprofile');
    }


    /**
     * Update profile information.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function update(Request $request)
    {
        // return $request;

        $user = User::find(Auth::user()->id);
        if ($request->hasFile('photo')) {
            $profilepic = $request->file('photo');
            $photoName = $request->first_name.time().$profilepic->getClientOriginalName();
            $path = public_path('images/users/profilepic/');
            $image_url = 'images/users/profilepic/'.$photoName;
            $success = $profilepic->move($path, $photoName);
            $user->photo = $image_url;
        }


        if ($request->first_name) { $user->first_name = $request->first_name;}
        if ($request->last_name) { $user->last_name = $request->last_name;}
        if ($request->email && $user->email != $request->email) {
            $user->email = $request->email;
            $user->email_verified_at = null;
        }
        if ($request->phone) { $user->phone = $request->phone;}
        if ($request->nib_number) { $user->nib_number = $request->nib_number;}
        if ($request->date_of_birth) { $user->date_of_birth = $request->date_of_birth;}
        if ($request->gender) { $user->gender = $request->gender;}
        if ($request->country_of_birth) { $user->country_of_birth = $request->country_of_birth;}
        if ($request->island_of_birth) { $user->island_of_birth = $request->island_of_birth;}
        if ($request->country_of_citizenship) { $user->country_of_citizenship = $request->country_of_citizenship;}
        $user->save();

        return redirect()->route('myprofile')
            ->withSuccess(__('Profile Update successfully.'));


    }

}
