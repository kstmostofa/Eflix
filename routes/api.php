<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('category', 'API\v1\APIController@category');
Route::post('CategoryContent/{slug}', 'API\v1\APIController@categorycontent');
Route::post('contentdetails/{slug}', 'API\v1\APIController@singlecontent');


// Route::post('HomeContent', 'API\v1\APIController@homecontent');
