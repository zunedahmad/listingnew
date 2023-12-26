<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Listing;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function Dashboard()
    {
        $categoryCount = Category::count();
        $listingcount = Listing::count();
        $listinglist=Listing::latest('id')->take(7)->get();
        return view('admin.dashboard', compact('categoryCount', 'listingcount', 'listinglist'));
    }

    public function adminlogin()
    {
        return view('admin.auth.login');
    }

    public function adminloginstore(Request $request)
    {

        $request->validate([
            "email" => "required",
            "password" => "required"
        ]);
        // dd($request->all());

        $credentials = $request->only("email", "password");
        // dd(Auth::guard('admin')->attempt($credentials));
        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect()->intended(RouteServiceProvider::ADMIN_HOME);
        } else {
            return "login failled";
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/home');
    }
}
