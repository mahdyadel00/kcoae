<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index(){
        $news=News::orderBy('created_at','desc')->paginate(15);
        return view ('admin.news.index',['news'=>$news]);
    }

    public function create(){
        return view('admin.news.create');
    }
    public function store(Request $request){
        if($request->file != ''){
            $path = 'images/news/';
            $request->validate([
                'file'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);



        }
        $news=News::create([
            'image'        =>$filename,
            'title'        =>$request->title,
            'description'  => $request->description
        ]);


        return redirect(route('admin_panel.news.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $news=News::find($id);
        return view('admin.news.edit',['news'=>$news]);
    }

    public function update(Request $request,$id){
        $news=News::find($id);
        if($request->file != ''){
            $request->validate([
                'file'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);
            (File::exists($news->image)) ? File::delete($news->image) : Null;
            $path = 'images/news/';

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);

            $news->update([
                'image'      =>$filename
            ]);
        }

        $news->update([
            'title'        =>$request->title,
            'description'  => $request->description
        ]);

        return redirect(route('admin_panel.news.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $news=News::find($id);
        (File::exists($news->image)) ? File::delete($news->image) : Null;
        $news->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }

}
