<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ApplicationFormController extends Controller
{
    public function index(){
        $application_form=About::where('name','application_form')->first();
        return view('admin.application_form',['application_form'=>$application_form]);
    }

    public function update(Request $request){
        $application_form=About::where('name','application_form')->first();
        if($request->file != ''){
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);

            (File::exists($application_form->description)) ? File::delete($application_form->description) : Null;
            $path = 'pdf/';
            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);

            $application_form->update([
                'description'  =>$filename
            ]);

        }

        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
