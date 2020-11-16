<?php

namespace App\Http\Controllers;

use App\Category;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('sliders.index');
    }

    public function create()
    {
        $categories =  Category::all();
        return view('sliders.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $slider = new Slider();
        $slider->name = $request->name;
        $slider->category = $request->category;
        // $photos = array();
        // foreach ($request->images as $photo) {
        //     $photos[] = $photo->store('upload/slider');
        // }
        // $slider->images = $photos;
        $data = array();
        foreach ($request->gallery as $photo) {
            $path = $photo['image']->store('media/gallery/photos');
            array_push($data, ['image' => $path, 'caption' => $photo['link']]);
        }
        $slider->images = $data;
        $slider->save();
    }
}
