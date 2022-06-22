<?php

namespace App\Http\Controllers;

use App\Models\ShippingAddress;
use App\Http\Requests\StoreShippingAddressRequest;
use App\Http\Requests\UpdateShippingAddressRequest;
use App\Models\ShippingLocation;
use Illuminate\Support\Facades\Auth;

class ShippingAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myAddress = ShippingAddress::where('user_id',Auth::user()->id)->first();
        return view('myprofile.address',compact('myAddress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shippingLocations  = ShippingLocation::where('status',1)->get();
        return view('myprofile.addaddress',compact('shippingLocations'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShippingAddressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShippingAddressRequest $request)
    {
        $userId = Auth::user()->id;
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email'=> $request->email,
            'phone' => $request->phone,
            'street'=>$request->street,
            'address_text'=> $request->address_text,
            'island' => $request->island,
            'prefered_location' => $request->prefered_location,
            'user_id' => $userId
        ];
        ShippingAddress::create($data);

        return redirect()->route('shippingaddresses.index')
        ->withSuccess(__('Shipping address added to your profile.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingAddress  $shippingAddress
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingAddress $shippingAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingAddress  $shippingAddress
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // return $shippingAddress;
        $shippingAddress = ShippingAddress::find($id);
        $shippingLocations  = ShippingLocation::where('status',1)->get();
        return view('myprofile.editaddress',compact('shippingAddress','shippingLocations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShippingAddressRequest  $request
     * @param  \App\Models\ShippingAddress  $shippingAddress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShippingAddressRequest $request, $id)
    {
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email'=> $request->email,
            'phone' => $request->phone,
            'street'=>$request->street,
            'address_text'=> $request->address_text,
            'island' => $request->island,
            'prefered_location' => $request->prefered_location,
            'user_id' => $request->user_id
        ];

        $shippingAddress = ShippingAddress::find($id)->update($data);
        if (Auth::user()->roles->first()->name == 'admin') {
            return redirect()->route('users.show',$request->user_id)
            ->withSuccess(__('Address updated successfully.'));
        }else {
            return redirect()->route('shippingaddresses.index')
            ->withSuccess(__('Address updated successfully.'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingAddress  $shippingAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShippingAddress $shippingAddress)
    {
        //
    }
}
