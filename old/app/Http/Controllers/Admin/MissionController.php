<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MissionController extends Controller
{
    public function index(){
        $missions=Mission::orderBy('created_at','desc')->paginate(15);
        return view ('admin.missions.index',['missions'=>$missions]);
    }

    public function create(){
        return view('admin.missions.create');
    }
    public function store(Request $request){
        if($request->file != ''){
            $path = 'images/missions/';
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);



        }
        $mission=Mission::create([
            'name'      =>$request->name,
            'file'      =>$filename,
        ]);


        return redirect(route('admin_panel.missions.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $mission=Mission::find($id);
        return view('admin.missions.edit',['mission'=>$mission]);
    }

    public function update(Request $request,$id){
        $mission=Mission::find($id);
        if($request->file != ''){
            $request->validate([
                'file' => 'mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);
            (File::exists($mission->file)) ? File::delete($mission->file) : Null;
            $path = 'images/missions/';

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);

            $mission->update([
                'file'      =>$filename
            ]);
        }

        $mission->update([
            'name'      =>$request->name
        ]);

        return redirect(route('admin_panel.missions.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $mission=Mission::find($id);
        (File::exists($mission->file)) ? File::delete($mission->file) : Null;
        $mission->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }

}
