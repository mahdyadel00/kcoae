<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use App\Models\SubSpecialty;
use Illuminate\Http\Request;

class SubSpecialtyController extends Controller
{
    public function index(){
        $sub_specialties=SubSpecialty::orderBy('created_at','desc')->paginate(15);
        return view ('admin.sub_specialties.index',['sub_specialties'=>$sub_specialties]);
    }

    public function create(){
        $specialties=Specialty::orderBy('created_at','desc')->get();
        return view('admin.sub_specialties.create',['specialties'=>$specialties]);
    }
    public function store(Request $request){

        $sub_specialty=SubSpecialty::create([
            'specialty_id' => $request->specialty_id,
            'name'         => $request->name
        ]);

        return redirect(route('admin_panel.sub_specialties.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $sub_specialty=SubSpecialty::find($id);
        $specialties=Specialty::orderBy('created_at','desc')->get();
        return view('admin.sub_specialties.edit',['sub_specialty'=>$sub_specialty,'specialties'=>$specialties]);
    }

    public function update(Request $request,$id){
        $sub_specialty=SubSpecialty::find($id);

        $sub_specialty->update([
            'specialty_id' => $request->specialty_id,
            'name'  => $request->name
        ]);

        return redirect(route('admin_panel.sub_specialties.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $sub_specialty=SubSpecialty::find($id);
        $sub_specialty->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
