<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photographies;
use App\sculptures;
use App\paintings;
use App\digital;

class subgalleryController extends Controller
{
    public function showGallery($id) {
        $content = photographies::all();

        if($id = 'photographies') {
            $contents = photographies::all();
        } else if($id = 'paintings') {
            $contents = paintings::all();
        } else if($id = 'digital') {
            $contents = digital::all();
        } else if($id = 'sculptures') {
            $content = sculptures::all();
        }

        return view('subblog')->with('images', $content);        
    }
}
