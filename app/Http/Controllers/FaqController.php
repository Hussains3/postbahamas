<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\FaqCategory;
use App\Models\FaqSubCategory;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();
        return view('dashboard.faqs.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = FaqCategory::all();
        $subcategories = FaqSubCategory::all();
        return view('dashboard.faqs.create',compact('categories','subcategories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFaqRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqRequest $request)
    {
        // return $request;

        $faq = new Faq();
        $faq->sub_category_id  = $request->sub_category_id;
        $faq->question  = $request->question;
        $faq->answer  = $request->answer;
        $faq->save();

        return redirect()->route('faqs.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        $categories = FaqCategory::all();
        $subcategories = FaqSubCategory::all();
        return view('dashboard.faqs.edit',compact('categories','subcategories','faq'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFaqRequest  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('faqs.index');
    }

    /**
     * Restoring deleted user data
     *
     * @param Faq $faq
     *
     * @return \Illuminate\Http\Response
     */
    public function restore($faq)
    {
        $faq = Faq::withTrashed()
        ->where('id', $faq)
        ->restore();
        return redirect()->route('faqs.index')
            ->withSuccess(__('Restored'));
    }


    /**
     * Hard Delete user data
     *
     * @param Faq $faq
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($faq)
    {
        $faq = Faq::withTrashed()
        ->where('id', $faq)
        ->forceDelete();

        return redirect()->route('dashboard.trash')
            ->withSuccess(__('Deleted parmanently'));
    }
}
