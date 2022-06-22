<?php

namespace App\Http\Controllers;

use App\Models\FaqSubCategory;
use App\Http\Requests\StoreFaqSubCategoryRequest;
use App\Http\Requests\UpdateFaqSubCategoryRequest;
use App\Models\FaqCategory;

class FaqSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = FaqSubCategory::all();
        $categories = FaqCategory::all();
        return view('dashboard.faqSubCategories.index',compact('subcategories','categories'));
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
     * @param  \App\Http\Requests\StoreFaqSubCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaqSubCategoryRequest $request)
    {
        $subcategory = FaqSubCategory::saveCategory($request);
        if ($subcategory){
            return response()->json(['status'=>'success','message' => 'Category saved successfylly !']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FaqSubCategory  $faqSubCategory
     * @return \Illuminate\Http\Response
     */
    public function show(FaqSubCategory $faqSubCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FaqSubCategory  $faqSubCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(FaqSubCategory $faqSubCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFaqSubCategoryRequest  $request
     * @param  \App\Models\FaqSubCategory  $faqSubCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaqSubCategoryRequest $request, FaqSubCategory $faqSubCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FaqSubCategory  $faqSubCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faqSubCategory=FaqSubCategory::find($id)->delete();
        return redirect()->route('faqSubCategories.index');
    }
}
