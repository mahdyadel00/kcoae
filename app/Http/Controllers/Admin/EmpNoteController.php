<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class EmpNoteController extends Controller
{
    public function index(){
        $emp_note=About::where('name','emp_note')->first();
        return view('admin.employees.emp_note',['emp_note'=>$emp_note]);
    }

    public function update(Request $request){
        $emp_note=About::where('name','emp_note')->first();
        $emp_note->update([
            'description'  =>$request->description
        ]);
        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
