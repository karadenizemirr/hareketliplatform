<?php

namespace App\Http\Controllers;

use App\Models\SliderModel;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function base(){
        $sliders = SliderModel::all()->sortByDesc('created_at');
        return view('admin.pages.user.slider.slider', compact('sliders'));

    }

    public function adminAdd(){

        if(\request()->isMethod('POST')){
            // Add Slider
            $req_data = \request()->only('title', 'slogan', 'button_text', 'button_link', 'image');
            $this->validate(\request(), [
               'title' => 'required',
               'slogan' => 'required',
               'image' => 'required'
            ]);

            if(\request()->hasFile('image')){
                $image = \request()->file('image');

                $this->validate(\request(), [
                    'image' => 'image|mimes:jpg,jpeg,png'
                ]);

                if($image->isValid()){
                    $image_name = time() . "-". str_slug($req_data['title']) . "." . $image->extension();
                    $image->move('uploads/slider', $image_name);
                    $req_data['image'] = $image_name;
                }

                SliderModel::create($req_data);
                return redirect()->route('slider-list');
            }
        }
        return view("admin.pages.user.slider.add");
    }

    public function adminDelete($vid){
        SliderModel::destroy($vid);

        return redirect()->route('slider-list');
    }
}
