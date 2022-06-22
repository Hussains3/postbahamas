<?php

namespace App\Http\Controllers;

use App\Models\ShippingLocation;
use App\Http\Requests\StoreShippingLocationRequest;
use App\Http\Requests\UpdateShippingLocationRequest;

class ShippingLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippingLocations = ShippingLocation::all();
        return view('dashboard.shippingLocations.index',compact('shippingLocations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreShippingLocationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShippingLocationRequest $request)
    {
        $data = [
            'name' => $request->name,
            'status' => 1
        ];
        ShippingLocation::create($data);
        return redirect()->route('shippinglocations.index')
            ->withSuccess(__('Location added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShippingLocation  $shippingLocation
     * @return \Illuminate\Http\Response
     */
    public function show(ShippingLocation $shippingLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShippingLocation  $shippingLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(ShippingLocation $shippingLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShippingLocationRequest  $request
     * @param  \App\Models\ShippingLocation  $shippingLocation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShippingLocationRequest $request, $id)
    {
        $data = [
            'status'=> $request->status,
            'name'=> $request->name
        ];

        $location = ShippingLocation::where('id',$id)->update($data);

        if ($location) {
            return redirect()
            ->route('shippinglocations.index')
            ->withSuccess(__('Location Updated.'));
        }
        return redirect()
            ->route('shippinglocations.index')
            ->withSuccess(__('Not Updated.'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShippingLocation  $shippingLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = ShippingLocation::where('id',$id)->delete();
        return redirect()->route('shippinglocations.index')
            ->withSuccess(__('Location Deleted.'));
    }

    /**
     * Restoring deleted user data
     *
     * @param ShippingLocation $location
     *
     * @return \Illuminate\Http\Response
     */
    public function restore($location)
    {
        $location = ShippingLocation::withTrashed()
        ->where('id', $location)
        ->restore();
        return redirect()->route('shippinglocations.index')
            ->withSuccess(__('Restored.'));
    }


    /**
     * Hard Delete user data
     *
     * @param ShippingLocation $location
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($location)
    {
        $location = ShippingLocation::withTrashed()
        ->where('id', $location)
        ->forceDelete();

        return redirect()->route('dashboard.trash')
            ->withSuccess(__('Deleted parmanently'));
    }
}
