<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albums;
use App\Models\Images;

use DB;

class HomeController extends Controller
{
    public function home(){

        $albums = Albums::all();
        $images = Images::all();
        return view('home',compact('albums','images'));
    }

    public function single_album($id){
    $albums = Albums::all();
    $albums_eloguent = Albums::find($id);
     return view('single_album',compact('albums','albums_eloguent'));
    }
     
}
