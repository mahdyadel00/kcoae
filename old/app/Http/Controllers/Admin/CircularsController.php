<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CircularsController extends Controller
{
    public function index(){
        $circulars=About::where('name','circulars')->first();
        return view('admin.circulars',['circulars'=>$circulars]);
    }

    public function update(Request $request){
        $circulars=About::where('name','circulars')->first();
        if($request->file != ''){
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);

            (File::exists($circulars->description)) ? File::delete($circulars->description) : Null;
            $path = 'pdf/';
            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);

            $circulars->update([
                'description'  =>$filename
            ]);

        }

        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
