<?php

namespace App\Http\Controllers;

use App\ContentType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContentTypeController extends Controller
{
    public function index()
    {
        $contenttypes = ContentType::all();
        return view('contenttype.index', compact('contenttypes'));
    }

    public function create()
    {
        return view('contenttype.create');
    }

    public function store(Request $request)
    {
        $category = new ContentType();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->save();
        return redirect()->route('contenttype.index');
    }

    public function destroy($id)
    {
        ContentType::destroy($id);
        return redirect()->route('contenttype.index');
    }
}
