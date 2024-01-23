<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about=About::where('name','about')->first();
        return view('admin.about',['about'=>$about]);
    }

    public function update(Request $request){
        $about=About::where('name','about')->first();
        $about->update([
            'description'  =>$request->description
        ]);
        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
