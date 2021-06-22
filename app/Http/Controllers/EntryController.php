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

    public function editEntry($category, $id)
    {   
        $data = [
            'title' => 'Entry Edit',
            'header' => 'Entry Editor',
            'cat' => $category,
            'id' => $id, 
            'editor' => true
        ];

        return view('submit')->with('flag', $data);
    }

    public function newEntry()
    {   
        $data = [
            'title' => 'Upload',
            'header' => 'Submission Form',
            'id' => null, 
            'editor' => false,
            'cat' => null
        ];

        return view('submit')->with('flag', $data);
    }
}
