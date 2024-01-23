<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index(){
        $countries=Country::orderBy('created_at','desc')->paginate(15);
        return view ('admin.countries.index',['countries'=>$countries]);
    }

    public function create(){
        return view('admin.countries.create');
    }
    public function store(Request $request){

        $country=Country::create([
            'name'  => $request->name
        ]);

        return redirect(route('admin_panel.countries.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $country=Country::find($id);
        return view('admin.countries.edit',['country'=>$country]);
    }

    public function update(Request $request,$id){
        $country=Country::find($id);

        $country->update([
            'name'  => $request->name
        ]);

        return redirect(route('admin_panel.countries.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $country=Country::find($id);
        $country->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
