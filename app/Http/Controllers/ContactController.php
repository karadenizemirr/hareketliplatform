<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function base(){
        return view('home.pages.contact');
    }
}
