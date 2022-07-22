<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function base(){
        return view('home.pages.contact');
    }

    public function add(){

        if(request()->isMethod('POST')){
            $request_data = request()->only(['name', 'surname', 'subject', 'message', 'phone_number', 'email', 'phone_number']);
            $this->validate(request(), [
               'name' => 'required',
               'surname' => 'required',
               'phone_number' => 'required',
               'subject' => 'required',
               'message' => 'required'
            ]);

            ContactModel::create($request_data);

            return redirect()->route('contact');
        }
        return view("home.pages.contact");
    }

    public function adminAll(){
        $requests = ContactModel::all()->sortByDesc('created_at');

        return view('admin.pages.user.contact.index', compact('requests'));
    }

    public function adminDetail($vid){
        $mail = ContactModel::find($vid);
        return view('admin.pages.user.contact.detail', compact('mail'));
    }

    public function adminDelete($vid){
        ContactModel::destroy($vid);

        return redirect()->route('contact-list');
    }

}
