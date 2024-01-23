<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MediaController extends Controller
{

    public function editWhatsapp(){
        $media=Media::first();
        return view('admin.whatsapp',['media'=>$media]);
    }


    public function updateWhatsapp(Request $request){
        $media=Media::first();
        $media->update([
            'whatsapp'       =>$request->whatsapp
        ]);

        return redirect()->back();
    }

    public function editCall(){
        $media=Media::first();
        return view('admin.call',['media'=>$media]);
    }


    public function updateCall(Request $request){
        $media=Media::first();
        $media->update([
            'call'           =>$request->call,
        ]);

        return redirect()->back();
    }
    public function editMail(){
        $media=Media::first();
        return view('admin.mail',['media'=>$media]);
    }


    public function updateMail(Request $request){
        $media=Media::first();
        $media->update([
            'email'          =>$request->email
        ]);


        return redirect()->back();
    }
    public function editPhone(){
        $media=Media::first();
        return view('admin.phone',['media'=>$media]);
    }


    public function updatePhone(Request $request){
        $media=Media::first();
        $media->update([
            'phone'          =>$request->phone
        ]);


        return redirect()->back();
    }
}

