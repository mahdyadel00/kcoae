<?php

namespace App\Http\Controllers\Cultural_center;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Note;
use App\Models\Order;
use App\Models\SearchUniversity;
use App\Models\Specialty;
use App\Models\SubSpecialty;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UniversityController extends Controller
{
    public function index()
    {
        $countries = Country::orderBy('created_at', 'desc')->get();
        $universities = University::orderBy('created_at', 'desc')->get();
        $specialties = Specialty::orderBy('created_at', 'desc')->get();
        $sub_specialties = SubSpecialty::orderBy('created_at', 'desc')->get();
        $notes = Note::orderBy('created_at', 'desc')->get();
        return view('cultural_center.university', ['notes' => $notes, 'countries' => $countries, 'universities' => $universities, 'specialties' => $specialties, 'sub_specialties' => $sub_specialties]);
    }

    public function country(Request $request)
    {
        $parent_id = $request->spe_id;

        $universities = Country::where('id', $parent_id)
            ->with('universities')
            ->get();
        return response()->json([
            'subcategories' => $universities
        ]);
    }

    public function search(Request $request){
        if($request->ajax())
        {
            $output="";

            $country_id         =   $request->search_country;
            $university_id      =   $request->search_university;
            $specialty_id       =   $request->search_specialty;
            $sub_specialty_id   =   $request->search_sub_specialty;
            $Bachelor           =   $request->search_Bachelor;
            $master             =   $request->search_master;
            $doctor             =   $request->search_doctor;


            $universities = University::where(function ($query) use ($country_id, $university_id, $specialty_id, $sub_specialty_id,$Bachelor,$master,$doctor) {

                // country.
                if (!empty($country_id)) {
                    $query->Where('country_id', $country_id);
                }

                // university.
                if (!empty($university_id)) {
                    $query->Where('id',$university_id);
                }

                // specialty.
                if (!empty($specialty_id)) {
                    $query->Where('specialty_id', $specialty_id);
                }
                // sub_specialty.
                if (!empty($sub_specialty_id)) {
                    $query->Where('sub_specialty_id', $sub_specialty_id);
                }
                // Bachelor.
                if ($Bachelor=='true') {
                    $query->Where('Bachelor', '1');
                }
                // master.
                if($master=='true'){
                    $query->Where('master','1');
                }
                // doctor.
                if ($doctor=='true') {
                    $query->Where('doctor', '1');
                }
            })->paginate(10);
            if($universities)
            {$counter=1;
                $output.='<button class="dt-button btn-button-1" type="submit">
                            <span class="print-button__content  js__action--print" title="Print this page">اضافة</span>
                        </button>';
                $output.=' <table>  <tr>
                                <th>#</th>
                                <th>الدولة </th>
                                <th>الجامعة </th>
                                <th>التخصص</th>
                                <th>التخصص الفرعي</th>
                                <th>بكالوريوس </th>
                                <th> ماجستير </th>
                                <th> دكتوراه </th>
                                <th>ملاحظات</th>
                                <th>آخر تحديث</th>
                            </tr>
                            ';

                $output.='<form action="'.route('add_order_university').'" method="post">';
                $output.='<input type="hidden" name="_token" value="'.csrf_token().'">';
                foreach ($universities as $university){

                    $output.='      <tr>
                                <td>
                                    <input type="checkbox" name="university_id[]" value="'.$university->id.'" id="university_id'.$counter.'" >
                                </td>
                                <td>'.$university->country->name.'
                                    <input type="hidden" name="country_id[]" value="'.$university->country->id.'">
                                </td>
                                <td>'.$university->name.'
                                    <input type="hidden" name="name[]" value="'.$university->name.'">
                                </td>
                                <td>'.$university->specialty->name.'
                                    <input type="hidden" name="specialty_id[]" value="'.$university->specialty->id.'">
                                </td>
                                <td>'.$university->sub_specialty->name.'
                                    <input type="hidden" name="sub_specialty_id[]" value="'.$university->sub_specialty->id.'">
                                </td>';
                    if($university->Bachelor==1){
                        $output.='<td><i class="fa fa-check-circle check green" aria-hidden="true"></i>
                                    <input type="hidden" name="Bachelor[]" value="1">
                                </td>';
                    }elseif ($university->Bachelor==0){
                        $output.='<td>
                                    <input type="hidden" name="Bachelor[]" value="0">
                                </td>';
                    }
                    if($university->master==1){
                        $output.='<td><i class="fa fa-check-circle check green" aria-hidden="true"></i>
                                    <input type="hidden" name="master[]" value="1">
                                </td>';
                    }elseif ($university->master==0){
                        $output.='<td>
                                    <input type="hidden" name="master[]" value="0">
                                </td>';
                    }
                    if($university->doctor==1){
                        $output.='<td><i class="fa fa-check-circle check green" aria-hidden="true"></i>
                                    <input type="hidden" name="doctor[]" value="1">
                                </td>';
                    }elseif ($university->doctor==0){
                        $output.='<td>
                                    <input type="hidden" name="doctor[]" value="0">
                                </td>';
                    }

                    $output.='     <td>'.$university->note.
                        '<input type="hidden" name="note[]" value="'.$university->note.'">
                                    </td>
                           <td>'.$university->updated_at->toDateString().'</td>
                            </tr>';
                }

                $output.='</table>';
                $output.='</form>';
                return Response($output);
            }

        }
    }
    public function destroySearch(Request $request , $id)
    {
        try {
            DB::beginTransaction();

            $search_university = SearchUniversity::find($id);

            if(!$search_university){
                return response()->json(['msg'=>'البحث غير موجود'], 404);
            }

            $search_university->delete();

            DB::commit();
            return response()->json(['msg'=>'تم الحذف بنجاح'], 200);
        } catch (\Exception $ex) {
            DB::rollback();
            Log::channel('custom')->error($ex->getMessage());
            return response()->json(['msg'=>'حدث خطأ ما'], 500);
        }
    }

}
