<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('category', 'CategoryController');
Route::get('/category/destroy/{id}', 'CategoryController@destroy')->name('category.destroy');

Route::resource('subcategory', 'SubCategoryController');
Route::get('/subcategory/destroy/{id}', 'SubCategoryController@destroy')->name('subcategory.destroy');

Route::resource('content', 'ContentController');
Route::get('/content/destroy/{id}', 'ContentController@destroy')->name('content.destroy');

Route::resource('artist', 'ArtistController');
Route::get('/artist/destroy/{id}', 'ArtistController@destroy')->name('artist.destroy');

Route::resource('contenttype', 'ContentTypeController');
Route::resource('sliders', 'SliderController');

