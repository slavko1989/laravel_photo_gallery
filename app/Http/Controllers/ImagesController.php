<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImageRequest;
use App\Models\Images;
use App\Models\Albums;

class ImagesController extends Controller
{
    
    public function create(){
        $albums = Albums::all();
        return view('gallery.add_photo',compact('albums'));
    }

    public function store(ImageRequest $request){

        $request->validated();
        $photo = new Images;
        $photo->image_name = $request->input('image_name');
        $photo->album_id = $request->input('album_id');
        $image = $request->photo;
        if($image){
            $img_name = time(). '.' .$image->getClientOriginalExtension();
            $request->photo->move('gallery',$img_name);
            $photo->photo = $img_name;

        $photo->save();

        return redirect()->back()->with('photo_success','New photo are created');
    }else{
        return redirect()->back()->with('photo_error','New photo are not created');
    }

}
}