<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontController extends Controller
{
    public function homepage()
    {
        $categorylist = Category::all();
        $listingcount = Listing::count();
        $listings = Listing::inRandomOrder()->limit(6)->get();
        return view('welcome', compact('listingcount', 'listings', 'categorylist'));
    }
    public function listingsdetails($id)
    {
        $categorylist = Category::all();
        $listingDetails = Listing::where('id', $id)->first();
        return view('listing-details', compact('listingDetails', 'categorylist'));
    }
    public function listingscategorywise($cnameslug)
    {
        $categorylist = Category::all();
        $listingcategory = Listing::where('listcategory', $cnameslug)->get();
        $listingcategorycount = Listing::where('listcategory', $cnameslug)->get();
        return view('lt-category-vise', compact('categorylist', 'listingcategory', 'listingcategorycount'));
    }
}
