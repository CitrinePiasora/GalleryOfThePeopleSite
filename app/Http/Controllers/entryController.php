<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photography;
use App\sculptures;
use App\paintings;
use App\digital;

class entryController extends Controller
{
    public function showGallery($db, $title, $id) {
        if($db == 'photography') {
            $contents = photography::where('id', $id)->first();
            $dbname = "Photography";
        } else if($db == 'paintings') {
            $contents = paintings::where('id', $id)->first();
            $dbname = "Paintings";
        } else if($db == 'digital') {
            $contents = digital::where('id', $id)->first();
            $dbname = "Digital Art";
        } else if($db == 'sculptures') {
            $contents = sculptures::where('id', $id)->first();
            $dbname = "Scupltures";
        }

        $data = [
            'db'  => $dbname,
            'route' => $db,
            'image'   => $contents['path'],
            'date' => $contents['created_at']->format('Y-m-d'),
            'desc' => $contents['description'],
            'title' => $title,
            'by' => $contents['copyright']
        ];

        return view('blog-single')->with('data', $data);        
    }
}
