<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class OrderNoteController extends Controller
{
    public function index(){
        $order_note=About::where('name','order_note')->first();
        return view('admin.orders.order_note',['order_note'=>$order_note]);
    }

    public function update(Request $request){
        $order_note=About::where('name','order_note')->first();
        $order_note->update([
            'description'  =>$request->description
        ]);
        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
