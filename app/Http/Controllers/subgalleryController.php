<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photography;
use App\sculptures;
use App\paintings;
use App\digital;

class subgalleryController extends Controller
{
    public function showGallery($id) {
        if($id == 'photography') {
            $contents = new photography;
        } else if($id == 'paintings') {
            $contents = new paintings;
        } else if($id == 'digital') {
            $contents = new digital;
        } else if($id == 'sculptures') {
            $contents = new sculptures;
        }

        return view('subblog')->with('images', $contents);        
    }
}
