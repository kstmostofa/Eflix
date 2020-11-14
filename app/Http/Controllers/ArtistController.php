<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtistController extends Controller
{
    public function index()
    {
        $artist = Artist::all();
        return view('artist.index');
    }

    public function create()
    {
        return view('artist.create');
    }

    public function store(Request $request)
    {
        $artist = new Artist();
        $artist->name = $request->name;
        $artist->slug = Str::slug($request->name);
        // $category->is_auth = boolval($request->is_auth);
        // $category->status = boolval($request->status);
        $artist->title = $request->title;
        $artist->bio = $request->bio;
        $artist->image = $request->image->store('upload/artist');
        $artist->save();
        return redirect()->route('Artist.index');
    }

    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()->route('Category.index');
    }
}
