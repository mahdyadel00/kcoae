<?php

namespace App\Http\Controllers\Cultural_center;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Circular;
use App\Models\Employee;
use App\Models\Feature;
use App\Models\Gallery;
use App\Models\Header;
use App\Models\Instruction;
use App\Models\Media;
use App\Models\Meta;
use App\Models\Price;
use App\Models\PriceText;
use App\Models\Question;
use App\Models\Section;
use App\Models\Service;
use App\Models\Certification;
use App\Models\Setting;
use App\Models\ShortNews;
use App\Models\Slider;
use App\Models\Social;
use App\Models\News;
use App\Models\StudentGuide;
use App\Models\UsefulLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    function index () {
        $news=ShortNews::orderBy('created_at','desc')->get();
        $sliders=Slider::orderBy('created_at','desc')->get();
        $application_form=About::where('name','application_form')->first();
        $circulars=About::where('name','circulars')->first();
        $last_news=News::orderBy('created_at','desc')->take(3)->get();
        return view ('cultural_center.welcome',['news'=>$news,'last_news'=>$last_news,'sliders'=>$sliders,'application_form'=>$application_form,'circulars'=>$circulars]);
    }

    function showAbout () {
        $about=About::where('name','about')->first();
        return view ('cultural_center.about',['about'=>$about]);
    }

    function showGovernmentContacts () {
        $government_contacts=About::where('name','government_contacts')->first();
        return view ('cultural_center.government_contacts',['government_contacts'=>$government_contacts]);
    }
    function showCalendar () {
        $calendar=About::where('name','calendar')->first();
        return view ('cultural_center.calendar',['calendar'=>$calendar]);
    }
    function showFinancialDues () {
        $financial_dues=About::where('name','financial_dues')->first();
        return view ('cultural_center.financial_dues',['financial_dues'=>$financial_dues]);
    }
    function showHealthInsurance () {
        $health_insurance=About::where('name','health_insurance')->first();
        return view ('cultural_center.health_insurance',['health_insurance'=>$health_insurance]);
    }
     function showHigherEducation () {
        $higher_education=About::where('name','higher_education')->first();
        return view ('cultural_center.higher_education',['higher_education'=>$higher_education]);
    }

    function showTechnicalSupport () {
        $technical_support=About::where('name','technical_support')->first();
        return view ('cultural_center.technical_support',['technical_support'=>$technical_support]);
    }

    function showGate () {
        return view ('cultural_center.electronic-gate');
    }

    function showOrderForms () {
        return view ('cultural_center.order_forms');
    }

    function showFaq () {
        $questions=Question::orderBy('created_at','desc')->get();
        return view ('cultural_center.faq',['questions'=>$questions]);
    }

    function showUsefulLinks () {
        $useful_links=UsefulLink::orderBy('created_at','desc')->get();
        return view ('cultural_center.useful_links',['useful_links'=>$useful_links]);
    }

    function showList () {
        $certifications=Certification::orderBy('created_at','desc')->get();
        return view('cultural_center.certificate_list',['certifications'=>$certifications]);
    }

    function showOffice () {
        return view ('cultural_center.office');
    }


    function showWorker () {
        $employees=Employee::orderBy('created_at', 'DESC')->get();
        $emp_note=About::where('name','emp_note')->first();
        return view ('cultural_center.worker',['employees'=>$employees,'emp_note'=>$emp_note]);
    }

    function showPaper () {
        $order_note=About::where('name','order_note')->first();
        return view ('cultural_center.Papers-required',['order_note'=>$order_note]);
    }

    function showContact () {
        $contact_us=About::where('name','contact_us')->first();
        return view ('cultural_center.contact',['contact_us'=>$contact_us]);
    }

    function showStudentGuide () {
        $guides=StudentGuide::orderBy('created_at','desc')->paginate(15);
        return view ('cultural_center.student_guide',['guides'=>$guides]);
    }

    function showInstructions () {
        $instructions=Instruction::orderBy('created_at','desc')->paginate(15);
        return view ('cultural_center.instructions',['instructions'=>$instructions]);
    }


    function showCirculars () {
        $circulars=Circular::orderBy('created_at','desc')->paginate(15);
        return view ('cultural_center.circulars',['circulars'=>$circulars]);
    }




}
