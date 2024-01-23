<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class GovernmentContactController extends Controller
{
    public function index(){
        $government_contacts=About::where('name','government_contacts')->first();
        return view('admin.government_contacts',['government_contacts'=>$government_contacts]);
    }

    public function update(Request $request){
        $government_contacts=About::where('name','government_contacts')->first();
        $government_contacts->update([
            'description'  =>$request->description
        ]);
        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
