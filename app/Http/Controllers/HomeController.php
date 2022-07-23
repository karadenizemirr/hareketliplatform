<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use App\Models\SliderModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function base(){
        // Slider data
        $sliders = SliderModel::all();
        // end post
        $end_post = NewsModel::all()->sortByDesc('created_at')->take(5);
        return view('home.pages.home', compact('sliders', 'end_post'));
    }
}
