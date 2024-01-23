<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;


class QuestionController extends Controller
{
    public function index(){
        $questions=Question::orderBy('created_at','desc')->paginate(15);
        return view ('admin.questions.index',['questions'=>$questions]);
    }

    public function create(){
        return view('admin.questions.create');
    }
    public function store(Request $request){

        $question=Question::create([
            'title'=>$request->title,
            'description' => $request->description
        ]);

        return redirect(route('admin_panel.questions.index'))->with('message', 'تمت الإضافة بنجاح');
    }

    public function edit(Request $request,$id){
        $question=Question::find($id);
        return view('admin.questions.edit',['question'=>$question]);
    }

    public function update(Request $request,$id){
        $question=Question::find($id);

        $question->update([
            'title'=>$request->title,
            'description' => $request->description
        ]);

        return redirect(route('admin_panel.questions.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $question=Question::find($id);
        $question->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
