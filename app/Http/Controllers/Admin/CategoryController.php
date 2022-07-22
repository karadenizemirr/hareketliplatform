<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ModelsCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function base(){
        $categories = ModelsCategory::all()->sortByDesc('created_at');

        return view('admin.pages.user.category.index', compact('categories'));
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function add(){

        if(request()->isMethod('POST')){
            // Form Validate
            $this->validate(request(), [
                'name' => 'required|min:3|max:20'
            ]);

            $data = request()->only('name', 'slug');

            if(request('slug') == null){
                $data['slug'] = str_slug(request('name'));
            }

            ModelsCategory::create($data);


            return redirect()->route('category-list');
        }

        return view('admin.pages.user.category.add');
    }

    public function delete($id){
        ModelsCategory::destroy($id);
        return redirect()->route('category-list');
    }

    public function update(){

    }
}
