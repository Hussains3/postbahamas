<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqCategory;
use App\Models\FaqSubCategory;
use App\Models\Query;
use App\Models\ShippingAddress;
use App\Models\ShippingLocation;
use Illuminate\Http\Request;
use App\Models\User;
class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard()
    {
        return view('dashboard.index');
    }


    public function trash() {

        $users = User::onlyTrashed()->get();
        $faqs = Faq::onlyTrashed()->get();
        $queries = Query::onlyTrashed()->get();
        $addresses = ShippingAddress::onlyTrashed()->get();
        $locations = ShippingLocation::onlyTrashed()->get();
        $categories = FaqCategory::onlyTrashed()->get();
        $subcategories = FaqSubCategory::onlyTrashed()->get();

        return view('dashboard.trash', compact(
            'users',
            'faqs',
            'queries',
            'addresses',
            'locations',
            'categories',
            'subcategories'
        ));
    }


}
