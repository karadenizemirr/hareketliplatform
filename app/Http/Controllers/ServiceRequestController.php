<?php

namespace App\Http\Controllers;

use App\Mail\ServiceRequestMail;
use App\Models\FaultMedicine;
use App\Models\ModelsCategory;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ServiceRequestController extends Controller
{
    public function add(){
        if (\request()->isMethod('GET')){
            $categories = ModelsCategory::all();
            $fault_medicine = FaultMedicine::all();
            return view('home.pages.request-service', compact('categories', 'fault_medicine'));
        }else if (\request()->isMethod('POST')){
            // Post Methot
            $request_data = request()->only('name', 'surname', 'phone_number', 'email', 'date', 'degree_or_project',
                'block_front', 'fault_type', 'fault_medicine', 'product_type', 'images'
                );

            $this->validate(request(), [
                'name' => 'required',
                'surname' => 'required',
                'phone_number' => 'required',
                'email' => 'email',
                'date' => 'required',
                'degree_or_project' => 'required',
                'block_front' => 'required',
                'fault_type' => 'required',
                'fault_medicine' => 'required',
                'product_type' => 'required'
            ]);

            // File Control
            if(request()->hasFile('images')){
                $this->validate(request(), [
                    'images' => 'image|mimes:jpg,png,jpg,gif'
                ]);

                // Get image
                $image = \request()->file('images');
                $image_name = time() . "-" . request('name') . "-" . \request('surname') . "." . rand(1,500) .$image->extension();

                if($image->isValid()){
                    $image->move('uploads/request/service', $image_name);
                    $request_data['images'] = $image_name;
                }
            }
            $serviceRequest = ServiceRequest::create($request_data);
            Mail::to("mert.taskinel@hareketliplatform.com")->cc('teknik@hareketliplatform.com')->send(new ServiceRequestMail($serviceRequest));
            return redirect()->route('request-service');
        }else{
            return null;
        }
    }

    public function adminAll(){
        $requests = ServiceRequest::all();
        return view('admin.pages.user.request-service.index', compact('requests'));
    }

    public function adminDetail($vid){
        // get service data
        $request = ServiceRequest::find($vid);
        return view('admin.pages.user.request-service.detail', compact('request'));
    }

    public function delete($vid){
        ServiceRequest::destroy($vid);

        return redirect()->route('request-service-list');
    }

}
