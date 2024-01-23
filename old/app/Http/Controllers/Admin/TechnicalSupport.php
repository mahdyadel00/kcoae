<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class TechnicalSupport extends Controller
{
    public function index(){
        $technical_support=About::where('name','technical_support')->first();
        return view('admin.technical_support',['technical_support'=>$technical_support]);
    }

    public function update(Request $request){
        $technical_support=About::where('name','technical_support')->first();
        $technical_support->update([
            'description'  =>$request->description
        ]);
        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
