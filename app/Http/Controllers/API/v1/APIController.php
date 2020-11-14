<?php

namespace App\Http\Controllers\API\v1;

use App\Category;
use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function category()
    {
        $category = Category::with('subcategory')->get();
        return $category;
    }

    public function singlecontent($slug)
    {
        $content = Content::where('slug', $slug)->first();
        return $content;
    }

    public function categorycontent($slug)
    {
        $category = Category::where('slug', $slug)->with(['subcategory', 'contents'])->first();
        return $category;
    }
}
