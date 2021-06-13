<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\photography;
use App\digital;
use App\paintings;
use App\sculptures;

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

/*

Get All (GET) /api/posts
Create Post (Post) /api/posts
Get Single (GET) /api/posts/{id}
Update Single (PUT) /api/posts/{id}
Delete (DELETE) /api/posts/{id{}
*/

Route::resource('digital', 'DigitalPostsController');
Route::resource('photos', 'PhotoPostsController');
Route::resource('sculptures', 'SculPostsController');
Route::resource('paintings', 'PaintPostsController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});