<?php

namespace App\Http\Controllers;

use App\photography;
use Illuminate\Http\Request;

class PhotoPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return photography::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $post = new photography;

            $file = $request->file('image');
            $name = time() . str_replace(' ', '', $file->getClientOriginalName());            
            $request->file('image')->move(public_path('Image'), $name);

            $post->uploader_id = $request->uploader;
            $post->title = $request->title;
            $post->copyright = $request->copyright;
            $post->description = $request->description;
            $post->path = 'http://localhost/webapp/public/Image/'.$name;
            $post->save();

            return response()->json(['message' => 'You have successfully uploaded "' . $name . '"'], 200);
        } catch(\Exception $e) {
            return response()->json(['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return photography::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
