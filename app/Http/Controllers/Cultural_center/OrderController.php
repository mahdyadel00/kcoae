<?php

namespace App\Http\Controllers\Cultural_center;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Note;
use App\Models\Order;
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

        return view('cultural_center.orders.item',['order'=>$order]);
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
        $data["client_id"]  =$client->id;
        $order      =   Order::create($data);

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

            DB::commit();
            return view('cultural_center.orders.search' , compact('countries', 'universities', 'specialties', 'sub_specialties', 'notes'));
        }catch (\Exception $e){
            DB::rollback();
            Log::channel('custom')->error('Error in OrderController/search, Error: ['.$e->getMessage().'], Line: ['.$e->getLine().'], File: ['.$e->getFile().']');
            return redirect()->back()->with('error', 'Error, Please try again');
        }
    }


}
