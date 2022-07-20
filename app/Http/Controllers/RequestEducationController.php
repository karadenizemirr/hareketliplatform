<?php

namespace App\Http\Controllers;

use App\Mail\EducationRequestMail;
use App\Models\RequestEducation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RequestEducationController extends Controller
{
    public function base(){
        return "education request";
    }

    public function add(){

        if(request()->isMethod('POST')){
            $this->validate(request(), [
                'name' => 'required|min:3|max:15',
                'surname' => 'required',
                'phone_number' => 'required',
                'email' => 'required|email',
                'ident_no' => 'required',
                'degree' => 'required',
                'worksite' => 'required',
                'education_date' => 'required'
            ]);
            $data = \request()->only(['name', 'surname', 'phone_number', 'email', 'ident_no', 'degree', 'worksite', 'education_date']);
            RequestEducation::create($data);

            return redirect()->route('request-education');
        }
        return view('home.pages.request-education');
    }
}
