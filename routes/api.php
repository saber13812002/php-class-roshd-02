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

Route::get('test', function (Request $request) {
    return $request;
});

Route::post('test/post', function (Request $request) {
    return $request;
});

Route::get('saber','Controller@method');



//Route::get('like', function (Request $request) {
//    $item = new \App\Models\Like;
//    $item->fill($request->all());
//    $item->save();
//    return $item;
//});


Route::get('like','App\Http\Controllers\LikeController@store');
