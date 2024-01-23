<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index(){
        $notes=Note::orderBy('created_at','desc')->paginate(15);
        return view ('admin.notes.index',['notes'=>$notes]);
    }

    public function create(){
        return view('admin.notes.create');
    }
    public function store(Request $request){

        $note=Note::create([
            'description'  => $request->description
        ]);

        return redirect(route('admin_panel.notes.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $note=Note::find($id);
        return view('admin.notes.edit',['note'=>$note]);
    }

    public function update(Request $request,$id){
        $note=Note::find($id);

        $note->update([
            'description'  => $request->description
        ]);

        return redirect(route('admin_panel.notes.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $note=Note::find($id);
        $note->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
