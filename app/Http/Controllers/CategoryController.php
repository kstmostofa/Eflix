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
        return view('category.index', compact('categories'));
    }

    public function create()
    {
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
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('category.edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->is_auth = boolval($request->is_auth);
        $category->status = boolval($request->status);
        // $category->save();
        if ($category->save()) {
            return redirect()->route('category.index')->withSuccess('Category has been updated successfully');
        } else {
            return back()->withFail('Something went wrong');
        }
        return redirect()->route('category.index');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('category.index');
    }
}
