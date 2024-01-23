<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class FinancialDueController extends Controller
{
    public function index(){
        $financial_dues=About::where('name','financial_dues')->first();
        return view('admin.financial_dues',['financial_dues'=>$financial_dues]);
    }

    public function update(Request $request){
        $financial_dues=About::where('name','financial_dues')->first();
        $financial_dues->update([
            'description'  =>$request->description
        ]);
        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
    }
}
