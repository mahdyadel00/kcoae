<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Specialty;
use App\Models\SubSpecialty;
use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index(){
        $universities=University::orderBy('created_at','desc')->paginate(15);
        return view ('admin.universities.index',['universities'=>$universities]);
    }

    public function create(){
        $specialties=Specialty::orderBy('created_at','desc')->get();
        $countries=Country::orderBy('created_at','desc')->get();
        return view('admin.universities.create',['specialties'=>$specialties,'countries'=>$countries]);
    }
    public function store(Request $request){
        $university=University::create([
            'name'              => $request->name,
            'country_id'        => $request->country_id,
            'specialty_id'      => $request->specialty_id,
            'sub_specialty_id'  => $request->sub_specialty_id,
            'master'            => ($request->master !='')? '1':'0' ,
            'Bachelor'          => ($request->Bachelor !='')? '1':'0' ,
            'doctor'            => ($request->doctor !='')? '1':'0' ,
            'note'              => $request->note
        ]);

        return redirect(route('admin_panel.universities.index'))->with('message', 'تمت الإضافة بنجاح');
    }
    public function edit(Request $request,$id){
        $university=University::find($id);
        $specialties=Specialty::orderBy('created_at','desc')->get();
        $countries=Country::orderBy('created_at','desc')->get();
        return view('admin.universities.edit',['university'=>$university,'specialties'=>$specialties,'countries'=>$countries]);
    }

    public function update(Request $request,$id){
        $university=University::find($id);

        $university->update([
            'name'              => $request->name,
            'country_id'        => $request->country_id,
            'specialty_id'      => $request->specialty_id,
            'sub_specialty_id'  => $request->sub_specialty_id,
            'master'            => ($request->master !='')? '1':'0' ,
            'Bachelor'          => ($request->Bachelor !='')? '1':'0' ,
            'doctor'            => ($request->doctor !='')? '1':'0' ,
            'note'              => $request->note
        ]);

        return redirect(route('admin_panel.universities.index'))->with('message', 'تم التعديل بنجاح');
    }
    public function destroy($id){
        $university=University::find($id);
        $university->delete();
        return redirect()->back()->with('message', 'تم الحذف بنجاح');
    }
}
