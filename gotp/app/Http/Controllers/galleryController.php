<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photography;
use Auth;

class galleryController extends Controller
{   
    public function index() {
        $images = photography::all();
        return view('subblog') -> with('images', $images);
    }
    
    public function post(Request $request) {
        $this->validate($request, [
            'image' => 'required'
        ]);

        $images = $request->image;
        foreach($images as $image) {
            $image_name = time() . $image->getClientOriginalName();
            $image->move('Image', $image_name);
            $post = new photography;
            $post->user_id = Auth::user()->id;
            $post->image = 'Image/'.$image_name;
            $post->save();
        }
        return redirect('/home');
    }
}
