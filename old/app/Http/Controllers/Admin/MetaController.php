<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class MetaController extends Controller
{
    public function index(){
        $meta=Meta::first();
        return view('admin.metas.index',compact('meta'));
    }

    public function update(Request $request,$id){
        $meta=Meta::first();

        if($request->og_image != '' ){
            $request->validate([
                'og_image'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);
            (File::exists($meta->og_image)) ? File::delete($meta->og_image) : Null;
            $path = 'images/metas/';

            $image = $request->og_image;
            $imageExtension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $image->move($path, $filename);


            $meta->update([
                'og_image'      =>$filename
            ]);

        }
        if($request->header_logo != '' ){
            $request->validate([
                'header_logo'       => 'image|mimes:jpg,jpeg,png,gif,webp,svg',
            ]);
            (File::exists($meta->header_logo)) ? File::delete($meta->header_logo) : Null;
            $path = 'images/metas/';

            $image = $request->header_logo;
            $imageExtension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $image->move($path, $filename);

            $meta->update([
                'header_logo'      =>$filename
            ]);

        }  if($request->footer_logo != '' ){
            $request->validate([
                'footer_logo'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);
            (File::exists($meta->footer_logo)) ? File::delete($meta->footer_logo) : Null;
            $path = 'images/metas/';

            $image = $request->footer_logo;
            $imageExtension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $image->move($path, $filename);

            $meta->update([
                'footer_logo'      =>$filename
            ]);

        } if($request->icon != '' ){
            $request->validate([
                'icon'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);
            (File::exists($meta->icon)) ? File::delete($meta->icon) : Null;
            $path = 'images/metas/';

            $image = $request->icon;
            $imageExtension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $image->move($path, $filename);

            $meta->update([
                'icon'      =>$filename
            ]);

        }
        $meta->update([
            'web_color'     =>$request->web_color,
            'link'          =>$request->link,
            'title'         => $request->title,
            'description'   => $request->description,
            'keywords'      => $request->keywords,
            'footer'        => $request->footer,
            'og_title'      => $request->og_title,
            'web_name'      => $request->web_name,
        ]);

        return redirect()->back();
    }

}
