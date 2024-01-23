<?php

namespace App\Http\Controllers\Cultural_center;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\Mission;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function mission_list(){
        $missions=Mission::orderBy('created_at','desc')->get();
        return view('cultural_center.mission_list',['missions'=>$missions]);
    }

    public function certificate_list(){
        $certifications=Certification::orderBy('created_at','desc')->get();
        return view('cultural_center.certificate_list',['certifications'=>$certifications]);
    }
}
