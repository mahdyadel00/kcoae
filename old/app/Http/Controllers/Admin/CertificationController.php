<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CertificationController extends Controller
{
    public function index(){
        $certifications=Certification::orderBy('created_at','desc')->paginate(15);
        return view ('admin.certifications.index',['certifications'=>$certifications]);
    }

    public function create(){
        return view('admin.certifications.create');
    }
    public function store(Request $request){
        if($request->file != ''){
            $path = 'images/certifications/';
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);



        }
        $certification=Certification::create([
            'name'      =>$request->name,
            'file'      =>$filename,
        ]);


        return redirect(route('admin_panel.certifications.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $certification=Certification::find($id);
        return view('admin.certifications.edit',['certification'=>$certification]);
    }

    public function update(Request $request,$id){
        $certification=Certification::find($id);
        if($request->file != ''){
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);
            (File::exists($certification->file)) ? File::delete($certification->file) : Null;
            $path = 'images/certifications/';

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);

            $certification->update([
                'file'      =>$filename
            ]);
        }

        $certification->update([
            'name'      =>$request->name
        ]);

        return redirect(route('admin_panel.certifications.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $certification=Certification::find($id);
        (File::exists($certification->file)) ? File::delete($certification->file) : Null;
        $certification->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
