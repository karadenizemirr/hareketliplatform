<?php

namespace App\Http\Controllers;

use App\Models\MeContactModel;
use App\Models\ModelsProduct;
use Illuminate\Http\Request;

class MeContactController extends Controller
{
    public function base(){
        return "base";
    }

    public function add($vid=0){
        $contacts = MeContactModel::all();

        if (\request()->isMethod('POST')){
            $contact_data = MeContactModel::all();
            if (count($contact_data) == 0){
                $req_data = \request()->only('phone_number', 'email', 'city', 'address');
                MeContactModel::create($req_data);
                return view('admin.pages.user.me-contact.add', compact('contacts'));
            }else{
                // update
                $me_contact = MeContactModel::find(1);
                $req_data = \request()->only('phone_number', 'email', 'city', 'address');

                $update_contact = ModelsProduct::where('id', 1)->firstOrFail();
                $update_contact->update($req_data);
                return view('admin.pages.user.me-contact.add', compact('contacts'));
            }
        }
        return view('admin.pages.user.me-contact.add', compact('contacts'));
    }

    public function delete($vid){
        MeContactModel::destroy($vid);
        $contacts = MeContactModel::all();
        return view('admin.pages.user.me-contact.add', compact('contacts'));
    }
}
