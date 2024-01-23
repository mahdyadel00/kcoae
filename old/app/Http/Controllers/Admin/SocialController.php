<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SocialController extends Controller
{
    public function index(){
        $socials=Social::orderBy('created_at','desc')->paginate(15);
        return view ('admin.social.index',['socials'=>$socials]);
    }

    public function create(){
        return view('admin.social.create');
    }
    public function store(Request $request){

         $social=Social::create([
            'icon'      =>$request->icon,
            'link'      =>$request->link
        ]);

        return redirect(route('admin_panel.social.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $social=Social::find($id);
        return view('admin.social.edit',['social'=>$social]);
    }

    public function update(Request $request,$id){
        $social=Social::find($id);
        if($request->icon !='empty'){
            $social->update([
                'icon'  =>$request->icon
            ]);
        }
        $social->update([
           'link'  =>$request->link,
        ]);

        return redirect(route('admin_panel.social.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $social=Social::find($id);
        $social->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
