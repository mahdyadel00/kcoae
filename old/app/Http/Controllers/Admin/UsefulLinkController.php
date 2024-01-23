<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UsefulLink;
use Illuminate\Http\Request;

class UsefulLinkController extends Controller
{
    public function index(){
        $useful_links=UsefulLink::orderBy('created_at','desc')->paginate(15);
        return view ('admin.useful_links.index',['useful_links'=>$useful_links]);
    }

    public function create(){
        return view('admin.useful_links.create');
    }
    public function store(Request $request){

        $useful_link=UsefulLink::create([
            'icon'      =>$request->icon,
            'title'     =>$request->title,
            'link'      =>$request->link
        ]);

        return redirect(route('admin_panel.useful_links.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $useful_link=UsefulLink::find($id);
        return view('admin.useful_links.edit',['useful_link'=>$useful_link]);
    }

    public function update(Request $request,$id){
        $useful_link=UsefulLink::find($id);
        if($request->icon !='empty'){
            $useful_link->update([
                'icon'  =>$request->icon
            ]);
        }
        $useful_link->update([
            'title'     =>$request->title,
            'link'  =>$request->link,
        ]);

        return redirect(route('admin_panel.useful_links.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $useful_link=UsefulLink::find($id);
        $useful_link->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
