<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShortNews;
use Illuminate\Http\Request;

class ShortNewsController extends Controller
{
    public function index(){
        $news=ShortNews::orderBy('created_at','desc')->paginate(15);
        return view ('admin.short_news.index',['news'=>$news]);
    }

    public function create(){
        return view('admin.short_news.create');
    }
    public function store(Request $request){

        $news=ShortNews::create([
            'description'  => $request->description
        ]);

        return redirect(route('admin_panel.short_news.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $news=ShortNews::find($id);
        return view('admin.short_news.edit',['news'=>$news]);
    }

    public function update(Request $request,$id){
        $news=ShortNews::find($id);

        $news->update([
            'description'  => $request->description
        ]);

        return redirect(route('admin_panel.short_news.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $news=ShortNews::find($id);
        $news->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
