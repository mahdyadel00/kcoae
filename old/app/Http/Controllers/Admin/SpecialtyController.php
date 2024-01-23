<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Specialty;
use App\Models\SubSpecialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    public function index(){
        $specialties=Specialty::orderBy('created_at','desc')->paginate(15);
        return view ('admin.specialties.index',['specialties'=>$specialties]);
    }
    public function subSpe(Request $request)
    {

        $parent_id = $request->spe_id;

        $subcategories = Specialty::where('id',$parent_id)
            ->with('subcategories')
            ->get();
        return response()->json([
            'subcategories' => $subcategories
        ]);
    }

    public function create(){
        return view('admin.specialties.create');
    }
    public function store(Request $request){

        $specialty=Specialty::create([
            'name'  => $request->name
        ]);

        return redirect(route('admin_panel.specialties.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $specialty=Specialty::find($id);
        return view('admin.specialties.edit',['specialty'=>$specialty]);
    }

    public function update(Request $request,$id){
        $specialty=specialty::find($id);

        $specialty->update([
            'name'  => $request->name
        ]);

        return redirect(route('admin_panel.specialties.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $specialty=Specialty::find($id);
        $specialty->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
