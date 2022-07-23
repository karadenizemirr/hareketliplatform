<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function base(){
        $posts = NewsModel::all()->sortByDesc('created_at');
        return view('home.pages.news.index', compact('posts'));
    }

    public function adminAll(){
        $posts = NewsModel::all();
        return view('admin.pages.user.news.news', compact('posts'));
    }
    public function addOrUpdate($vid = 0){

        if(request()->isMethod('POST')){
            $req_data = request()->only('title', 'content', 'description','slug', 'image', 'keyword', 'video');
            $this->validate(\request(), [
               'title' => 'required',
               'content' => 'required',
            ]);

            if(request('slug') == null){
                $req_data['slug'] = str_slug(request('title'));
            }

            if(\request()->hasFile('image')){
                $this->validate(\request(), [
                   'image' => 'image|mimes:jpg,png,jpeg'
                ]);
            }

            $image = \request()->file('image');
            $image_name = time() . "-" . $req_data['slug'] . "-". rand(1, 200). ".". $image->extension();

            if($image->isValid()){
                $image->move('uploads/news', $image_name);
                $req_data['image'] = $image_name;
            }

            $add_news = NewsModel::create($req_data);
            return redirect()->route('news-list');

        }
        else if (\request()->isMethod('GET')){
            $posts = 'null';

            if($vid > 0){
                $posts = NewsModel::find($vid);
            }

            return view('admin.pages.user.news.add', compact('posts'));
        }else if ($vid > 0){
            // Update Opeartions
            $posts = NewsModel::find($vid);
            $req_data = request()->only('title', 'content', 'description','slug', 'image', 'keyword', 'video');
            if(request()->isMethod('POST')){
                $update_news = NewsModel::where('id', $vid)->fistOrFail();
                $update_news->update($req_data);
            }

            return redirect()->route('news-list');
        }else{
            return view('admin.pages.user.news.add');
        }
    }

    public function adminDelete($vid){
        NewsModel::destroy($vid);
        return redirect()->route('news-list');
    }

    public function getWithId($slug){
        $item = NewsModel::query()->where('slug', $slug)->firstOrFail();
        return view('home.pages.news.detail', compact('item'));
    }
}
