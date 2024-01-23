<?php

namespace App\Http\Controllers\cultural_center;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Specialty;
use App\Models\SubSpecialty;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index () {
        $news=News::orderBy('created_at','desc')->paginate(10);
        $specialties=Specialty::orderBy('created_at','desc')->get();
        $sub_specialties=SubSpecialty::orderBy('created_at','desc')->get();
        return view ('cultural_center.news',['news'=>$news]);
    }

    function showNewdetails ($id) {
        $news=News::find($id);
        return view ('cultural_center.news-details',['news'=>$news]);
    }
}
