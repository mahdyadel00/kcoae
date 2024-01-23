<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(){
        $calendar=About::where('name','calendar')->first();
        return view('admin.calendar',['calendar'=>$calendar]);
    }

    public function update(Request $request){
        $calendar=About::where('name','calendar')->first();
        $calendar->update([
            'description'  =>$request->description
        ]);
        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
