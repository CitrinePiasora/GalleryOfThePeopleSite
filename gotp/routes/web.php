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



Route::post('/uploadimg', 'uploadController@post')->name('image');

Route::get('logout', 'LogOutController@LogOut')->name('logout');

Route::get('/home', function () {
    return view('main');
})->name('home');

Route::group(['middleware' => ['prevent-back-history','auth']],function(){
    Route::get('/welcome', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/upload', function () {
        return view('submit');
    })->name('uploader');
});

Route::get('/gallery/{id}', ['uses' => 'subgalleryController@showGallery']);



Auth::routes();

