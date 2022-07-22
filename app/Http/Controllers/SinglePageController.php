<?php

namespace App\Http\Controllers;

use App\Models\SinglePage;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function base(){
        $pages = SinglePage::all();
        return view('admin.pages.user.page-builder.page-builder', compact('pages'));
    }

    public function add(){

        if(request()->isMethod('POST')){
            $req_data = request()->only('name', 'slug', 'title', 'description', 'content', 'is_active',
            'is_footer', 'is_topbar'
            );

            $this->validate(\request(), [
               'name' => 'required',
               'title' => 'required',
               'description' => 'required',
               'content' => 'required'
            ]);

            if(\request('slug') == null){
                $req_data['slug'] = str_slug(\request('name'));
            }
            SinglePage::create($req_data);
            return redirect()->route('single-page-list');
        }

        return view('admin.pages.user.page-builder.add');
    }

    public function delete(){
        return "delete single page";
    }

    public function getAll(){
        return "get all";
    }

    public function getWithId($vid){
        SinglePage::destroy($vid);
        return redirect()->route('single-page-list');
    }
}
