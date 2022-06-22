<?php

namespace App\Http\Controllers;

use App\Models\FaqCategory;
use App\Models\FaqSubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){return view('welcome');}
    public function rates(){return view('airmail.rates');}
    public function contact() {return view('contact');}
    public function faq() {
        $faqcatagories = FaqCategory::all();
        return view('faq',compact('faqcatagories'));
    }

}
