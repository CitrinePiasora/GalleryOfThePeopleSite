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

Route::get('/home', function () {
    return view('main');
})->name('home');

Route::post('/uploadimg', 'uploadController@post')->name('image');

Route::get('/welcome', function () {
    return view('auth.login');
})->name('login');

Route::get('/gallery/{id}', ['uses' => 'subgalleryController@showGallery']);

Route::get('/upload', function () {
    return view('submit');
})->name('uploader');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();

