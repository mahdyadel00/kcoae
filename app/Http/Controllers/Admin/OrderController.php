<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use function Nette\Utils\data;
//use PDF;
use Elibyy\TCPDF\Facades\TCPDF as PDF;
class OrderController extends Controller
{
    public function index(){
        $orders=Order::orderBy('created_at','desc')->paginate(15);
        return view ('admin.orders.index',['orders'=>$orders]);
    }


    public function show(Request $request,$id){
        $order=Order::find($id);
        return view('admin.orders.item',['order'=>$order]);
    }

    public function accept(Request $request,$id){
        $order=Order::find($id);
        $order->update(['status'=>2]);
        $details = [
            'title' => 'المكتب الثقافي الكويتي',
            'body' => 'تم قبول الطلب الخاص بك',
        ];
        Mail::to($order->client->email)->send(new \App\Mail\AcceptMail($details));
        return redirect(route('admin_panel.orders.index'))->with(['message'=>'تم قبول الطلب بنجاح']);
    }

    public function sent(Request $request,$id){
        $order=Order::find($id);
        $order->update(['status'=>3]);
        return redirect(route('admin_panel.orders.index'))->with(['message'=>'تم تغيير حالة الطلب بنجاح']);
    }

    public function reject(Request $request,$id){
        $order=Order::find($id);
        $order->update(['status'=>4]);
        return redirect(route('admin_panel.orders.index'))->with(['message'=>'تم رفض الطلب بنجاح']);
    }

    public function toPDF($id){
        $order = Order::find($id);
        $name = 'كتاب إلى من يهمه الأمر من ' . $order->client->name.'.pdf';
        PDF::SetTitle($name);
        // set some language dependent data:
        $lg = array();
        $lg['a_meta_charset'] = 'UTF-8';
        $lg['a_meta_dir'] = 'rtl';
        $lg['a_meta_language'] = 'fa';
        $lg['w_page'] = 'page';

        // set some language-dependent strings (optional)
        PDF::setLanguageArray($lg);
        PDF::AddPage();

        PDF::setRTL(true);

        // set font
        PDF::SetFont('aealarabiya', '', 14);

        // print newline
        PDF::Ln();

        // Arabic and English content
         PDF::WriteHTML(view('admin.orders.pdf', compact('order')), true, 0, true, 0);

      //  PDF::Output($name . '.pdf');
        PDF::Output(public_path($name), 'F');
        //dd(public_path($name));

         return response()->download(public_path($name));
    }
}
