<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

class HeaderController extends Controller
{
    public function index(){
//        Header::create([
//            'image'    =>'hh',
//            'button_link'  =>'hh',
//            'button_type'  =>'2',
//            'ar'=>['title'    => '$request->title_ar',
//                'description' => '$request->description_ar',
//                'button_name' => '$request->button_name_ar'
//            ],
//            'en'=>['title'    => '$request->title_en',
//                'description' => '$request->description_en',
//                'button_name' => '$request->button_name_en'
//            ]
//        ]);
        $headers=Header::first();
        return view('admin.headers.index',compact('headers'));
    }

    public function update(Request $request,$id){
        $header=Header::first();
        if($request->file != '' ){
            $request->validate([
                'file' => '|mimes:csv,txt,xlx,xls,pdf,docx,pptx'
            ]);

            if($header->button_type=='1'){
                (File::exists($header->button_link)) ? File::delete($header->button_link) : Null;
            }

            $path = 'files/';

            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $filename = $path.$filename;
            $file->move($path, $filename);

            $header->update([
                'button_link'      =>$filename,
                'button_type'      =>1
            ]);

        }elseif ($request->link != '' ){
            if($header->button_type=='1'){
                (File::exists($header->button_link)) ? File::delete($header->button_link) : Null;
            }

            $header->update([
                'button_link'      =>$request->link,
                'button_type'      =>2
            ]);
        }

        if($request->image != '' ){
            $request->validate([
                'image'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);
            (File::exists($header->image)) ? File::delete($header->image) : Null;
            $path = 'images/headers/';

            $image = $request->image;
            $filename = $image->getClientOriginalName();
            $filename = $path.$filename;
            $image->move($path, $filename);

            $header->update([
                'image'      =>$filename
            ]);

        }

        $header->update([
            'ar'=>['title'    => $request->title_ar,
                'description' => $request->description_ar,
                'button_name' => $request->button_name_ar
            ],
            'en'=>['title'    => $request->title_en,
                'description' => $request->description_en,
                'button_name' => $request->button_name_en
            ]
        ]);

        return redirect()->back();
    }
    public function download()
    {
        $header=Header::first();
        $file_path = $header->button_link;
        return Response::download($file_path);
    }
}
