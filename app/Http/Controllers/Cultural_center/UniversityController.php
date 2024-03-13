<?php

namespace App\Http\Controllers\Cultural_center;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Note;
use App\Models\Specialty;
use App\Models\SubSpecialty;
use App\Models\University;
use Illuminate\Http\Request;

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
                foreach ($universities as $university){

                    $output.='      <tr>
                                <td>
                                    <input type="checkbox" name="university_id[]" value="'.$university->id.'" id="university_id'.$counter.'" class="mahdy">
                                </td>
                                <td>'.$university->country->name.'</td>
                                <td>'.$university->name.'</td>
                                <td>'.$university->specialty->name.'</td>
                                <td>'.$university->sub_specialty->name.'</td>';
                    if($university->Bachelor==1){
                        $output.='<td><i class="fa fa-check-circle check green" aria-hidden="true"></i></td>';
                    }elseif ($university->Bachelor==0){
                        $output.='<td></td>';
                    }
                    if($university->master==1){
                        $output.='<td><i class="fa fa-check-circle check green" aria-hidden="true"></i></td>';
                    }elseif ($university->master==0){
                        $output.='<td></td>';
                    }

                    if($university->doctor==1){
                        $output.='<td><i class="fa fa-check-circle check green" aria-hidden="true"></i></td>';
                    }elseif ($university->doctor==0){
                        $output.='<td></td>';
                    }

                    $output.='     <td>'.$university->note.'</td>
                           <td>'.$university->updated_at->toDateString().'</td>
                            </tr>';
                }

                $output.='</table>';
                return Response($output);

                //where clieck id store move data to another table id newResult when cecked class mahdy
                //if not checked remove from newResult

            }

        }
    }


    public function addSearch(Request $request)
    {
        if($request->ajax())
        {
            $output="";


            $universities = University::where('sub_specialty_id', $request->subcategory)
                ->get();
//            when($request->search_country, function ($query) use ($request) {
//                return $query->where('country_id', $request->country);
//            })
//                ->when($request->search_university, function ($query) use ($request) {
//                    return $query->where('id', $request->university);
//                })
//                ->when($request->search_specialty, function ($query) use ($request) {
//                    return $query->where('specialty_id', $request->category);
//                })
//                ->when($request->search_sub_specialty, function ($query) use ($request) {
//                    return $query->where('sub_specialty_id', $request->subcategory);
//                })
//                ->when($request->search_Bachelor, function ($query) use ($request) {
//                    return $query->where('Bachelor', $request->Bachelor);
//                })
//                ->when($request->search_master, function ($query) use ($request) {
//                    return $query->where('master', $request->master);
//                })
//                ->when($request->search_doctor, function ($query) use ($request) {
//                    return $query->where('doctor', $request->doctor);
//                })
//                ->get();
//            dd($universities);

            if($universities)
            {$counter=1;
                $output.=' <table>  <tr>
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
                foreach ($universities as $university){

                    $output.='      <tr>

                                <td>'.$university->country->name.'</td>
                                <td>'.$university->name.'</td>
                                <td>'.$university->specialty->name.'</td>
                                <td>'.$university->sub_specialty->name.'</td>';
                    if($university->Bachelor==1){
                        $output.='<td><i class="fa fa-check-circle check green" aria-hidden="true"></i></td>';
                    }elseif ($university->Bachelor==0){
                        $output.='<td></td>';
                    }
                    if($university->master==1){
                        $output.='<td><i class="fa fa-check-circle check green" aria-hidden="true"></i></td>';
                    }elseif ($university->master==0){
                        $output.='<td></td>';
                    }

                    if($university->doctor==1){
                        $output.='<td><i class="fa fa-check-circle check green" aria-hidden="true"></i></td>';
                    }elseif ($university->doctor==0){
                        $output.='<td></td>';
                    }

                    $output.='     <td>'.$university->note.'</td>
                           <td>'.$university->updated_at->toDateString().'</td>
                            </tr>';
                }

                $output.='</table>';
                return Response($output);

            }

        }
    }
}
