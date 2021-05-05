<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\photographies;
use Auth;

class uploadController extends Controller
{   
    public function index() {
        $images = photographies::all();
        return view('subblog') -> with('images', $images);
    }
    
    public function post(Request $request) {
        $this->validate($request, [
            'image' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'origin' => 'required'
        ]);

        $images = $request->image;
        $origin = $request->origin;
        $desc = $request->desc;
        $title = $request->name;

        foreach($images as $image) {
            $image_name = time() . $image->getClientOriginalName();
            $image->move('public/Image', $image_name);
            $post = new photographies;
            $post->uploader_id = Auth::user()->id;
            $post->title = $title;
            $post->copyright = json_encode($request->input());
            $post->source = $origin;
            $post->description = $desc;
            $post->path = 'public/Image/'.$image_name;
            $post->save();
        }
        return redirect('/home');
    }
}
