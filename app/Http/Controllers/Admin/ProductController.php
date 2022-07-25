<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ModelsCategory;
use App\Models\ModelsProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function base(){
        $products = ModelsProduct::all()->sortByDesc('created_at');
        return view('admin.pages.user.product.index',compact('products'));
    }

    public function add($vid=0)
    {
        $categories = ModelsCategory::all()->sortByDesc('created_at');


        if($vid > 0){
            $product = ModelsProduct::find($vid);
            $product_categories = $product->categories()->pluck('models_category_id')->all();
            // Update Operations

            if (request()->isMethod('POST')){
                $request_data = request()->only('name', 'slug', 'description', 'technique_detail', 'platform_detail',
                    'safety_features', 'configuration', 'components','other_detail', 'product_image');

                if(\request()->hasFile('product_image')){
                    $this->validate(request(), [
                        'product_image' => 'image|mimes:jpg,png,jpeg,gif'
                    ]);

                    $product_image = request()->file('product_image');
                    $image_name = str_slug(request('name')) . ".". $product_image->extension();

                    if($product_image->isValid()){
                        $product_image->move('uploads/product', $image_name);
                        $request_data['product_image'] = $image_name;
                    }
                }

                #redirect()->route('product-list');
                $add_product = ModelsProduct::where('id', $vid)->firstOrFail();
                $add_product->update($request_data);
                $add_product->categories()->sync(request()->categories);

                return redirect()->route('product-list');

            }
            return view('admin.pages.user.product.add', compact('product', 'product_categories'));
        }

        if(request()->isMethod('POST')){
            $request_data = request()->only('name', 'slug', 'description', 'technique_detail', 'platform_detail',
                'safety_features', 'configuration', 'components','other_detail', 'product_image');
            // Validate
            $this->validate(request(), [
               'name' => 'required|unique:product',
               'description' => 'required|min:20',
               'categories' => 'required'
            ]);

            if (\request('slug') == null){
                $request_data['slug'] = str_slug(request('name'));
            }
            if(\request()->hasFile('product_image')){
                $this->validate(request(), [
                   'product_image' => 'image|mimes:jpg,png,jpeg,gif'
                ]);

                $product_image = request()->file('product_image');
                $image_name = str_slug(request('name')) . ".". $product_image->extension();

                if($product_image->isValid()){
                    $product_image->move('uploads/product', $image_name);
                    $request_data['product_image'] = $image_name;
                }
            }

            $add_product = ModelsProduct::create($request_data);
            $add_product->categories()->attach(request('categories'));
            return redirect()->route('product-list');
        }

        $product = 'null';
        return view('admin.pages.user.product.add', compact('categories', 'product'));
    }

    public function delete($vid){
        ModelsProduct::destroy($vid);
        return redirect()->route('product-list');
    }

    public function getWithId($slug){
        $product = ModelsProduct::where('slug', $slug)->firstOrFail();
        $category = $product->categories()->distinct()->get();
        return view('home.pages.product.detail', compact('product', 'category'));
    }
}
