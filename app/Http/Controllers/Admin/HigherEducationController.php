<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class HigherEducationController extends Controller
{
    public function index(){
        $higher_education=About::where('name','higher_education')->first();
        return view('admin.higher_education',['higher_education'=>$higher_education]);
    }

    public function update(Request $request){
        $higher_education=About::where('name','higher_education')->first();
        $higher_education->update([
            'description'  =>$request->description
        ]);
        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
