<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WorkingDays;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class WorkingDaysController extends Controller
{
    public function index(){
        $days=WorkingDays::get();
        return view ('admin.working_days.index',['days'=>$days]);
    }

    public function edit(Request $request,$id){
        $day=WorkingDays::find($id);
        return view('admin.working_days.edit',['day'=>$day]);
    }

    public function update(Request $request,$id){
        $day=WorkingDays::find($id);
        if($request->status == '1'){

            $day->update([
                'start'       =>null,
                'end'         =>null,
                'status'      =>$request->status
            ]);
        }else{
            $day->update([
                'start'       =>$request->start,
                'end'         =>$request->end,
                'status'      =>$request->status
            ]);
        }

        return redirect(route('admin_panel.working_days.index'))->with('message', 'تم التعديل بنجاح');
    }

}
