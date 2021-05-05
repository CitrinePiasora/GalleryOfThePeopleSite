<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photography;
use App\paintings;
use App\sculptures;
use App\digital;

use Auth;

class uploadController extends Controller
{   
    public function post(Request $request) {
        $this->validate($request, [
            'image' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'category' => 'required',
            'copyright' => 'required'
        ]);

        $images = $request->image;
        $desc = $request->desc;
        $title = $request->name;
        $category = $request->category;
        $copyright = $request->copyright;
        
        $post = new photography;

        if($category = "photography") {
            $post = new photography;
        } else if($category = "paintings") {
            $post = new paintings;
        } else if($category = "digital") {
            $post = new digital;
        } else if($category = "sculptures") {
            $post = new sculptures;
        }
        
        foreach($images as $image) {
            $image_name = time() . $image->getClientOriginalName();
            $image->move('public/Image', $image_name);
            $post->uploader_id = Auth::user()->id;
            $post->title = $title;
            $post->copyright = $copyright;
            $post->description = $desc;
            $post->path = 'public/Image/'.$image_name;
            $post->save();
        }
        return redirect('/home');
    }
}
