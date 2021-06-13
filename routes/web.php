<?php

use App\digital;
use App\paintings;
use Illuminate\Support\Facades\Route;
use App\photography;
use App\sculptures;

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



//Route::post('/uploadimg', 'uploadController@post')->name('image');

Route::get('logout', 'LogOutController@LogOut')->name('logout');

Route::view('/home', 'home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery/photography', function() {
    $contents = new photography;
    return view('subblog')->with('images', $contents);
})->name('photos');

Route::get('/gallery/sculptures', function() {
    $contents = new sculptures;
    return view('subblog')->with('images', $contents);
})->name('sculps');

Route::get('/gallery/paintings', function() {
    $contents = new paintings;
    return view('subblog')->with('images', $contents);
})->name('paint');

Route::get('/gallery/digital', function() {
    $contents = new digital;
    return view('subblog')->with('images', $contents);
})->name('digital');

Route::group(['middleware' => ['prevent-back-history','auth']],function(){
    Route::get('/login', function () {
        return view('auth.login');
    });

    Route::view('/upload', 'submit')->name('uploader');
});

//Route::get('/gallery/{db}/{title}/{id}', ['as' => 'entry', 'uses' => 'entryController@showGallery']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
