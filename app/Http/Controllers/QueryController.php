<?php

namespace App\Http\Controllers;

use App\Models\Query;
use App\Http\Requests\StoreQueryRequest;
use App\Http\Requests\UpdateQueryRequest;
use App\Mail\ContactThanks;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queries = Query::where('status','!=', 3)
        ->orderBy('status', 'ASC')
        ->orderBy('id', 'DESC')
        ->orderBy('user_id', 'DESC')
        ->get();

        $unread = Query::where('status', 1)->count();

        return view('dashboard.queries.index',compact('queries','unread'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sentbox()
    {
        $queries = Query::where('status', 3)
        ->orderBy('id', 'DESC')
        ->orderBy('user_id', 'DESC')
        ->get();

        $unread = Query::where('status', 1)->count();

        return view('dashboard.queries.sentbox',compact('queries','unread'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $email =  $request->email;
        $unread = Query::where('status', 1)->count();

        return view('dashboard.queries.create',compact('email','unread'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQueryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQueryRequest $request)
    {

        $query = new Query();
        $query->name =  $request->name;
        $query->email =  $request->email;
        $query->phone =  $request->phone;
        $query->subject =  $request->subject;
        $query->message =  $request->message;

        if (Auth::user()) {
        $query->user_id = Auth::user()->id;
        }

        if ($request->messegeSender && $request->messegeSender == 'admin'){
            $query->status =  3;
        }
        $query->save();

        // Messages


        $messegeBody = 'Thank you for Contacting us,Your Message is "'.$request->message.'"Please patience for our replay.';
        if ($request->messegeSender && $request->messegeSender == 'admin') {
           $messegeBody = $request->message;
        } elseif ($request->messegeSender && $request->messegeSender == 'registerdUser') {
            $messegeBody = 'Your Message is "'.$request->message.'"Please patience for our replay.';
        }


        $messegeName = $request->name;
        if ($request->name == 'Bahabas Post Office') {
            $messegeName = 'User';
        }


        $user = [
            'name' => $messegeName,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $messegeBody,
        ];


        try{
            Mail::to($request->email)->send(new ContactThanks($user));
            return response()->json(['status'=>'Success','message'=>'Thanks for contacting us.']);
        }catch (\Exception $exception){}




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function show($query)
    {
        $query= Query::find($query);
        $query->status = 2;
        $query->save();
        $unread = Query::where('status', 1)->count();

        return view('dashboard.queries.show',compact('query','unread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function edit(Query $query)
    {
        $unread = Query::where('status', 1)->count();

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQueryRequest  $request
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQueryRequest $request, Query $query)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Query  $query
     * @return \Illuminate\Http\Response
     */
    public function destroy(Query $query,Request $request)
    {
        $query = Query::find($request->query_id)->delete();
        return redirect()->route('queries.index')->withSuccess(__('Moved to trash'));
    }

    public function batchdestroy(Request $request)
    {
        foreach ($request->quryIds as $quryId) {$query = Query::find($quryId)->delete();}
        return response()->json(['data'=> $request->quryIds,'status'=>'success','message' => 'Category saved successfylly !']);
    }


    /**
     * Restoring deleted user data
     *
     * @param Query $query
     *
     * @return \Illuminate\Http\Response
     */
    public function restore($query)
    {
        $query = Query::withTrashed()
        ->where('id', $query)
        ->restore();
        return redirect()->route('queries.index')
            ->withSuccess(__('Restored'));
    }


    /**
     * Hard Delete user data
     *
     * @param Query $query
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($query)
    {
        $query = Query::withTrashed()
        ->where('id', $query)
        ->forceDelete();

        return redirect()->route('dashboard.trash')
            ->withSuccess(__('Deleted parmanently'));
    }
}
