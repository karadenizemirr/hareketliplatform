<?php

namespace App\Http\Controllers;

use App\Models\ModelsCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function base($slug){
        $category = ModelsCategory::query()->where('slug', $slug)->firstOrFail();
        $products = $category->products;

        return view('home.pages.category', compact('products', 'category'));
    }
}
