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
    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::get('/upload', function () {
        return view('submit');
    })->name('uploader');
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('our-team');
})->name('about');

Route::get('/gallery/{id}', ['uses' => 'subgalleryController@showGallery'])->name('subgalleries');

Route::get('/gallery/{db}/{title}/{id}', ['as' => 'entry', 'uses' => 'entryController@showGallery']);

Auth::routes();
