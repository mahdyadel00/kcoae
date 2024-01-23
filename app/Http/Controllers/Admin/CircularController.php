<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Circular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CircularController extends Controller
{
    public function index(){
        $circulars=Circular::orderBy('created_at','desc')->paginate(15);
        return view ('admin.circulars.index',['circulars'=>$circulars]);
    }

    public function create(){
        return view('admin.circulars.create');
    }
    public function store(Request $request){
        if($request->file){
            $path = 'circulars/';
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);



        }
        $circular=Circular::create([
            'name'      =>$request->name,
            'file'      =>$filename,
        ]);


        return redirect(route('admin_panel.circulars.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $circular=Circular::find($id);
        return view('admin.circulars.edit',['circular'=>$circular]);
    }

    public function update(Request $request,$id){
        $circular=Circular::find($id);
        if($request->file){
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);
            (File::exists($circular->file)) ? File::delete($circular->file) : Null;
            $path = 'circulars/';

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);

            $circular->update([
                'file'      =>$filename
            ]);
        }

        $circular->update([
            'name'      =>$request->name
        ]);

        return redirect(route('admin_panel.circulars.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $circular=Circular::find($id);
        (File::exists($circular->file)) ? File::delete($circular->file) : Null;
        $circular->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
