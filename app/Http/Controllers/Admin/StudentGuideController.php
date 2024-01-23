<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentGuideController extends Controller
{
    public function index(){
        $guides=StudentGuide::orderBy('created_at','desc')->paginate(15);
        return view ('admin.student_guide.index',['guides'=>$guides]);
    }

    public function create(){
        return view('admin.student_guide.create');
    }
    public function store(Request $request){

        $guide=StudentGuide::create([
            'icon'      =>$request->icon,
            'title'     =>$request->title,
            'link'      =>$request->link
        ]);

        return redirect(route('admin_panel.student_guide.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $guide=StudentGuide::find($id);
        return view('admin.student_guide.edit',['guide'=>$guide]);
    }

    public function update(Request $request,$id){
        $guide=StudentGuide::find($id);
        if($request->icon !='empty'){
            $guide->update([
                'icon'  =>$request->icon
            ]);
        }
        $guide->update([
            'title'     =>$request->title,
            'link'  =>$request->link,
        ]);

        return redirect(route('admin_panel.student_guide.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $guide=StudentGuide::find($id);
        $guide->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
