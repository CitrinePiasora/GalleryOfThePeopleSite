<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function getEntry($category, $id)
    {   
        if($category == "digital") {
            $category = "digital art";
        }

        $data = [ 
            'db' => $category,
            'art' => $id
        ];

        return view('blog-single')->with('data', $data);
    }
}
