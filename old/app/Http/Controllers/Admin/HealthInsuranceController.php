<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class HealthInsuranceController extends Controller
{
    public function index(){
        $health_insurance=About::where('name','health_insurance')->first();
        return view('admin.health_insurance',['health_insurance'=>$health_insurance]);
    }

    public function update(Request $request){
        $health_insurance=About::where('name','health_insurance')->first();
        $health_insurance->update([
            'description'  =>$request->description
        ]);
        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
