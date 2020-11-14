<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('subcategory.index');
    }

    public function create()
    {
        $categories = Category::all();
        return view('subcategory.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = new SubCategory();
        $category->name = $request->name;
        $category->category = $request->category;
        $category->slug = Str::slug($request->name);
        $category->is_auth = boolval($request->is_auth);
        $category->status = boolval($request->status);
        $category->save();
        return redirect()->route('SubCategory.index');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('SubCategory.index');
    }
}
