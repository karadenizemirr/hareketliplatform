<?php

namespace App\Http\Controllers;

use App\Models\ProjectModel;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function base(){

    }

    public function getAll(){
        $projects = ProjectModel::all()->sortByDesc('created_at');
        return view('admin.pages.user.project.project', compact('projects'));
    }

    public function add(){
        if(\request()->isMethod('POST')){
            $req_data = \request()->only('title', 'contractor','machine_type', 'stock', 'height', 'jop');
            $this->validate(\request(), [
                'title' => 'required',
                'contractor' => 'required',
                'machine_type' => 'required',
                'stock' => 'required',
                'height' => 'required',
                'jop' => 'required'
            ]);

            ProjectModel::create($req_data);
            return redirect()->route('project-list');
        }
        return view('admin.pages.user.project.add');
    }
    public function delete($vid){
        ProjectModel::destroy($vid);

        return redirect()->route('project-list');
    }
}
