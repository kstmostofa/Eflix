<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.index');
    }

    public function create()
    {
        $whitelist = Category::all();
        return view('category.create');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->is_auth = boolval($request->is_auth);
        $category->status = boolval($request->status);


        $category->save();
        return redirect()->route('Category.index');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('Category.index');
    }
}
