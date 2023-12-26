<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            "cimage" => "sometimes|mimes:png,jpg,jpeg,svg'"
        ]);
        // dd($request->all());
        $category = new Category();
        $category->cname = $request->cname;
        $category->cnameslug = $request->cnameslug;
        if ($request->file('cimage')) {
            $cimage = $request->cimage;
            $categoryImage = time() . '.' . $cimage->getClientOriginalExtension();
            $cimage->storeAs('public/category', $categoryImage);
            $category->cimage = $categoryImage;
        }
        $category->save();
        return redirect()->route('category.list');
    }
    public function categorylist()
    {
        $category = Category::all();
        return view('admin.category.category-list',compact('category'));
    }
    public function categoryedit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.category.edit-category', compact('category'));
    }
    public function categoryupdate(Request $request, $id)
    {   
        // dd($request->all());
        $category = Category::find($id);
        $category->cname = $request->input('cname');
        $category->cnameslug = $request->input('cnameslug');
        if ($request->file('pimage')) {
            $cimage = $request->cimage;
            $categoryImage = time() . '.' . $cimage->getClientOriginalExtension();
            $cimage->storeAs('public/category', $categoryImage);
            $category->pimage = $categoryImage;
        }
        $category->save();
        return redirect()->route('category.list');
    }
    public function categorydelete($id)
    {
        $category = Category::find($id)->delete();
        return redirect()->route('category.list');
    }
}
