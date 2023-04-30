<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function contact() {
        return view('contact');
    }

    public function send(Request $request){


        Mail::to('slavko.slave1989@gmail.com')->send(new Contact($request));
        return redirect()->back();

     
    }
}
