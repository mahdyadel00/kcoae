<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InstructionController extends Controller
{
    public function index(){
        $instructions=Instruction::orderBy('created_at','desc')->paginate(15);
        return view ('admin.instructions.index',['instructions'=>$instructions]);
    }

    public function create(){
        return view('admin.instructions.create');
    }
    public function store(Request $request){
        if($request->file){
            $path = 'instructions/';
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);



        }
        $instruction=Instruction::create([
            'name'      =>$request->name,
            'file'      =>$filename,
        ]);


        return redirect(route('admin_panel.instructions.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $instruction=Instruction::find($id);
        return view('admin.instructions.edit',['instruction'=>$instruction]);
    }

    public function update(Request $request,$id){
        $instruction=Instruction::find($id);
        if($request->file){
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);
            (File::exists($instruction->file)) ? File::delete($instruction->file) : Null;
            $path = 'instructions/';

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);

            $instruction->update([
                'file'      =>$filename
            ]);
        }

        $instruction->update([
            'name'      =>$request->name
        ]);

        return redirect(route('admin_panel.instructions.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $instruction=Instruction::find($id);
        (File::exists($instruction->file)) ? File::delete($instruction->file) : Null;
        $instruction->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
