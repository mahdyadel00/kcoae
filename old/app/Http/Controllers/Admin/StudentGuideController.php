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
        
        if($request->file){
            
            $path = 'student_guide/';
            /*$request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);*/

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);

        }
        
        $guide=StudentGuide::create([
            'name'      =>$request->name,
            'file'      =>$filename,
        ]);


        return redirect(route('admin_panel.student_guide.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $guide=StudentGuide::find($id);
        return view('admin.student_guide.edit',['guide'=>$guide]);
    }

    public function update(Request $request,$id){
        $guide=StudentGuide::find($id);
        if($request->file != ''){
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);
            (File::exists($guide->file)) ? File::delete($guide->file) : Null;
            $path = 'student_guide/';

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);

            $guide->update([
                'file'      =>$filename
            ]);
        }

        $guide->update([
            'name'      =>$request->name
        ]);

        return redirect(route('admin_panel.student_guide.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $guide=StudentGuide::find($id);
        (File::exists($guide->file)) ? File::delete($guide->file) : Null;
        $guide->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
