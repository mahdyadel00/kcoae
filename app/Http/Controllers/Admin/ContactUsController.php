<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(){
        $contact_us=About::where('name','contact_us')->first();
        return view('admin.contact_us',['contact_us'=>$contact_us]);
    }

    public function update(Request $request){
        $contact_us=About::where('name','contact_us')->first();
        $contact_us->update([
            'description'  =>$request->description
        ]);
        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
