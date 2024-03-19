<?php

namespace App\Http\Controllers\Cultural_center;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Note;
use App\Models\Order;
use App\Models\OrderUniversity;
use App\Models\SearchUniversity;
use App\Models\Specialty;
use App\Models\SubSpecialty;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index(){

        $client =   auth('client')->user();
        $orders =   Order::where('client_id',$client->id)->orderBy('created_at','desc')->get();

        return view ('cultural_center.orders.index',['orders'=>$orders]);
    }

    public function show($id){
        $order  =   Order::find($id);

        $order_universities = OrderUniversity::where('order_id',$id)->get();

        return view('cultural_center.orders.item',compact('order','order_universities'));
    }

    public function create(){

        return view('cultural_center.orders.create');
    }
    public function store(Request $request){
        if($request->high_school_certificate != ''){
            $path = 'images/high_school_certificate/';
            $request->validate([
                'high_school_certificate'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);

            $file = $request->high_school_certificate;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);
            $data["high_school_certificate"]=$filename;
        }

        if($request->social_security != ''){
            $path = 'images/social_security/';
            $request->validate([
                'social_security'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);

            $file = $request->social_security;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);
            $data["social_security"]=$filename;
        }

        if($request->good_conduct_certificate != ''){
            $path = 'images/good_conduct_certificate/';
            $request->validate([
                'good_conduct_certificate'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);

            $file = $request->good_conduct_certificate;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);
            $data["good_conduct_certificate"]=$filename;
        }

        if($request->passport != ''){
            $path = 'images/passport/';
            $request->validate([
                'passport'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);

            $file = $request->passport;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);
            $data["passport"]=$filename;
        }

        if($request->national_ID != ''){
            $path = 'images/national_ID/';
            $request->validate([
                'national_ID'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);

            $file = $request->national_ID;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);
            $data["national_ID"]=$filename;
        }

        if($request->birth_certificate != ''){
            $path = 'images/birth_certificate/';
            $request->validate([
                'birth_certificate'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);

            $file = $request->birth_certificate;
            $imageExtension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $imageExtension;
            $filename = $path.$filename;
            $file->move($path, $filename);
            $data["birth_certificate"]=$filename;
        }

        $client =   auth('client')->user();
        $data["client_id"]  =   $client->id;
        $order              =   Order::create($data);

        return redirect()->route('search');
    }

    public function search(Request $request)
    {
        try{
            DB::beginTransaction();
            $countries          = Country::orderBy('created_at', 'desc')->get();
            $universities       = University::orderBy('created_at', 'desc')->get();
            $specialties        = Specialty::orderBy('created_at', 'desc')->get();
            $sub_specialties    = SubSpecialty::orderBy('created_at', 'desc')->get();
            $notes              = Note::orderBy('created_at', 'desc')->get();
            $search_universities = SearchUniversity::where('client_id', auth('client')->user()->id)->orderBy('created_at', 'desc')->get();

            DB::commit();
            return view('cultural_center.orders.search' , compact('countries', 'universities', 'specialties', 'sub_specialties', 'notes', 'search_universities'));
        }catch (\Exception $e){
            DB::rollback();
            Log::channel('custom')->error('Error in OrderController/search, Error: ['.$e->getMessage().'], Line: ['.$e->getLine().'], File: ['.$e->getFile().']');
            return redirect()->back()->with('error', 'Error, Please try again');
        }
    }

    public function addOrderUniversity(Request $request){
//        dd($request->all());
        try{
            DB::beginTransaction();
            $request->validate([
                'country_id'        => 'sometimes',
                'specialty_id'      => 'sometimes',
                'sub_specialty_id'  => 'sometimes',
                'name'              => 'sometimes',
                'master'            => 'sometimes',
                'Bachelor'          => 'sometimes',
                'doctor'            => 'sometimes',
                'note'              => 'sometimes',
            ], [
                'country_id.required'       => 'Country is required',
                'specialty_id.required'     => 'Specialty is required',
                'sub_specialty_id.required' => 'Sub Specialty is required',
                'name.required'             => 'University name is required',
                'master.required'           => 'Master is required',
                'Bachelor.required'         => 'Bachelor is required',
                'doctor.required'           => 'Doctor is required',
                'note.required'             => 'Note is required',
            ]);
            $order = Order::where('client_id', auth('client')->user()->id)->orderBy('created_at', 'desc')->first();
            foreach ($request->name as $key => $value){

                $data = [
                    'country_id'        => $request->country_id[$key] ?? null,
                    'specialty_id'      => $request->specialty_id[$key] ?? null,
                    'sub_specialty_id'  => $request->sub_specialty_id[$key] ?? null,
                    'name'              => $value,
                    'client_id'         => auth('client')->user()->id,
                    'order_id'          => $order->id,
                    'master'            => $request->master[$key] ?? null,
                    'Bachelor'          => $request->Bachelor[$key] ?? null,
                    'doctor'            => $request->doctor[$key] ?? null,
                    'note'              => $request->note[$key] ?? null,
                ];
                OrderUniversity::create($data);
            }
            DB::commit();
            session()->flash('success', 'Order added successfully');
            return redirect()->route('search');
        }catch (\Exception $e){
            DB::rollback();
            dd($e->getMessage());
            Log::channel('custom')->error('Error in OrderController/addSearch, Error: ['.$e->getMessage().'], Line: ['.$e->getLine().'], File: ['.$e->getFile().']');
            return redirect()->back()->with('error', 'Error, Please try again');
        }
    }

    public function addSearch(Request $request){
//        dd($request->all());
        try{
            DB::beginTransaction();
            $request->validate([
                'country_id'        => 'sometimes',
                'specialty_id'      => 'sometimes',
                'sub_specialty_id'  => 'sometimes',
                'name'              => 'sometimes',
                'master'            => 'sometimes',
                'Bachelor'          => 'sometimes',
                'doctor'            => 'sometimes',
                'note'              => 'sometimes',
            ], [
                'country_id.required'       => 'Country is required',
                'specialty_id.required'     => 'Specialty is required',
                'sub_specialty_id.required' => 'Sub Specialty is required',
                'name.required'             => 'University name is required',
                'master.required'           => 'Master is required',
                'Bachelor.required'         => 'Bachelor is required',
                'doctor.required'           => 'Doctor is required',
                'note.required'             => 'Note is required',
            ]);
            $order = Order::where('client_id', auth('client')->user()->id)->orderBy('created_at', 'desc')->first();
            $universities = University::whereIN('id', $request->university_id)->get();

                SearchUniversity::where('client_id', auth('client')->user()->id)->where('order_id', $order->id)->delete();

                SearchUniversity::insert($universities->map(function ($university) use ($order) {
                    return [
                        'country_id'        => $university->country_id ?? null,
                        'specialty_id'      => $university->specialty_id ?? null,
                        'sub_specialty_id'  => $university->sub_specialty_id ?? null,
                        'name'              => $university->name,
                        'client_id'         => auth('client')->user()->id,
                        'order_id'          => $order->id,
                        'master'            => $university->master ?? null,
                        'Bachelor'          => $university->Bachelor ?? null,
                        'doctor'            => $university->doctor ?? null,
                        'note'              => $university->note ?? null,
                    ];
                })->toArray());
            DB::commit();
            session()->flash('success', 'Order added successfully');
            return redirect()->back();
        }catch (\Exception $e){
            DB::rollback();
            Log::channel('custom')->error('Error in OrderController/addSearch, Error: ['.$e->getMessage().'], Line: ['.$e->getLine().'], File: ['.$e->getFile().']');
            return redirect()->back()->with('error', 'Error, Please try again');
        }
    }
}
