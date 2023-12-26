<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('admin.listings.index', compact('category'));
    }
    public function store(Request $request)
    {
        $request->validate([
            "pimage" => "sometimes|mimes:png,jpg,jpeg'"
        ]);
        //  dd($request->all());
        $listing = new Listing();
        $listing->listname = $request->listname;
        $listing->listcategory = $request->listcategory;
        $listing->listcity = $request->listcity;
        $listing->liststate = $request->liststate;
        $listing->listcountry = $request->listcountry;
        $listing->listzip = $request->listzip;
        $listing->listaddress = $request->listaddress;
        $listing->listdescription = $request->listdescription;
        if ($request->file('listimage')) {
            $listimage = $request->listimage;
            $listImage = time() . '.' . $listimage->getClientOriginalExtension();
            $listimage->storeAs('public/listing', $listImage);
            $listing->listimage = $listImage;
        }
        $listing->save();
        return redirect()->route('listing.list');
    }
    public function listinglist()
    {
        $listing = Listing::all();

        return view('admin.listings.listing-list', compact('listing'));
    }

    public function listingedit($id)
    {
        $listing = Listing::where('id', $id)->first();
        $category = Category::all();
        return view('admin.listings.edit-list', compact('listing', 'category'));
    }
    public function listingupdate(Request $request, $id)
    {
        $listing = Listing::find($id);
        $listing->listname = $request->input('listname');
        $listing->listcategory = $request->input('listcategory');
        $listing->listcity = $request->input('listcity');
        $listing->liststate = $request->input('liststate');
        $listing->listcountry = $request->input('listcountry');
        $listing->listzip = $request->input('listzip');
        $listing->listaddress = $request->input('listaddress');
        $listing->listdescription = $request->input('listdescription');
        if ($request->file('pimage')) {
            $listimage = $request->listimage;
            $listImage = time() . '.' . $listimage->getClientOriginalExtension();
            $listimage->storeAs('public/listing', $listImage);
            $listing->listimage = $listImage;
        }
        $listing->save();
        return redirect()->route('listing.list');
    }
    public function listingdelete($id)
    {
        $listing = Listing::find($id)->delete();
        return redirect()->route('listing.list');
    }
}
