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
        $subcategories = SubCategory::all();
        return view('subcategory.index', compact('categories', 'subcategories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('subcategory.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $subcategory = new SubCategory();
        $subcategory->name = $request->name;
        $subcategory->category = $request->category;
        $subcategory->slug = Str::slug($request->name);
        $subcategory->is_auth = boolval($request->is_auth);
        $subcategory->status = boolval($request->status);
        $subcategory->save();
        return redirect()->route('subcategory.index');
    }

    public function edit($id)
    {
        $categories = Category::all();
        $subcategories = SubCategory::findOrFail($id);
        return view('subcategory.edit', compact('categories', 'subcategories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::all();
        $subcategory = SubCategory::findOrFail($id);
        $subcategory->name = $request->name;
        $subcategory->category = $request->category;
        $subcategory->slug = Str::slug($request->name);
        $subcategory->is_auth = boolval($request->is_auth);
        $subcategory->status = boolval($request->status);
        if ($subcategory->save()) {
            return redirect()->route('subcategory.index')->withSuccess('SubCategory has been updated successfully');
        } else {
            return back()->withFail('Something went wrong');
        }
        return redirect()->route('subcategory.index');
    }

    public function destroy($id)
    {
        SubCategory::destroy($id);
        return redirect()->route('subcategory.index');
    }
}
