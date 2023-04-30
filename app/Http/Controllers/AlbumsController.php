<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AlbumRequest;
use App\Models\Albums;


class AlbumsController extends Controller
{
    

	public function create(){

		return view('gallery.add_album');
	}

	public function store(AlbumRequest $request){

		$request->validated();

		if($album = new Albums){
		$album->album_name = $request->input('album_name');
		$album->save();

		return redirect()->back()->with('message','New album is added');
	}
		else{

			return redirect()->back()->with('error_mess','New album not added');
		}
	}

	

}
