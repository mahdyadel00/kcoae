<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index(){
        $items=Slider::orderBy('created_at','desc')->paginate(15);
        return view ('admin.sliders.index',['items'=>$items]);
    }

    public function create(){
        return view('admin.sliders.create');
    }
    public function store(Request $request){
        if($request->file != ''){
            $request->validate([
                'file'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);
            $path = 'images/sliders/';


            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);



        }
        $item=Slider::create([
            'image'      =>$filename
        ]);


        return redirect(route('admin_panel.sliders.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $item=Slider::find($id);
        return view('admin.sliders.edit',['item'=>$item]);
    }

    public function update(Request $request,$id){
        $item=Slider::find($id);
        if($request->file != ''){
            $request->validate([
                'file'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);
            (File::exists($item->image)) ? File::delete($item->image) : Null;
            $path = 'images/sliders/';

            $file = $request->file;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);

            $item->update([
                'image'      =>$filename
            ]);
        }


        return redirect(route('admin_panel.sliders.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $item=Slider::find($id);
        (File::exists($item->image)) ? File::delete($item->image) : Null;
        $item->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
