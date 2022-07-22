<?php

namespace App\Http\Controllers;

use App\Models\FaultMedicine;
use Illuminate\Http\Request;

class FaultMedicineController extends Controller
{
    public function add(){

        if(\request()->isMethod('POST')){
            $this->validate(\request(), [
               'name' => 'required'
            ]);
            $req_data = \request()->only('name');

            FaultMedicine::create($req_data);
            return redirect()->route('fault-medicine-add');
        }

        $fault_medicine = FaultMedicine::all();
        return view('admin.pages.user.fault_medicine.add', compact('fault_medicine'));
    }

    public function delete($vid){
        FaultMedicine::destroy($vid);
        return redirect()->route('fault-medicine-add');
    }
}
