<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Category;
use App\Content;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContentController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $artists = Artist::all();
        $contents = Content::all();
        return view('content.index', compact('categories', 'subcategories', 'artists', 'contents'));
    }

    public function create()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $artists = Artist::all();
        return view('content.create', compact('categories', 'subcategories', 'artists'));
    }

    public function store(Request $request)
    {
        $content = new Content();
        $content->name = $request->name;
        $content->category = $request->category;
        $content->subcategory = $request->subcategory;
        $content->artists = $request->artists;
        $content->url = $request->url;
        $content->image = $request->image->store('upload/content');
        $content->slug = Str::slug($request->name);
        $content->is_auth = boolval($request->is_auth);
        $content->status = boolval($request->status);
        $content->save();
        return redirect()->route('content.index');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('content.index');
    }
}
