<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InstructionsController extends Controller
{

    public function index(){
        $instructions=About::where('name','instructions')->first();
        return view('admin.instructions',['instructions'=>$instructions]);
    }

    public function update(Request $request){
        $instructions=About::where('name','instructions')->first();
        if($request->file != ''){
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);

            (File::exists($instructions->description)) ? File::delete($instructions->description) : Null;
            $path = 'pdf/';
            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);

            $instructions->update([
                'description'  =>$filename
            ]);

        }

        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
