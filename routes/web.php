<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ApplicationFormController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\CertificationController;
use App\Http\Controllers\Admin\CircularController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\FinancialDueController;
use App\Http\Controllers\Admin\GovernmentContactController;
use App\Http\Controllers\Admin\HeaderController;
use App\Http\Controllers\Admin\HealthInsuranceController;
use App\Http\Controllers\Admin\HigherEducationController;
use App\Http\Controllers\Admin\InstructionController;
use App\Http\Controllers\Admin\MediaController;
use App\Http\Controllers\Admin\MetaController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\NoteController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ShortNewsController;
use App\Http\Controllers\Admin\SliderController;


use App\Http\Controllers\Admin\SocialController;
use App\Http\Controllers\Admin\SpecialtyController;
use App\Http\Controllers\Admin\SubSpecialtyController;
use App\Http\Controllers\Admin\TechnicalSupport;
use App\Http\Controllers\Admin\UniversityController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\UsefulLinkController;
use App\Http\Controllers\Admin\WorkingDaysController;
use App\Http\Controllers\Cultural_center\ClientController;
use App\Http\Controllers\Cultural_center\HomeController;
use App\Http\Controllers\Cultural_center\ListController;
use App\Http\Controllers\Admin\StudentGuideController;
use App\Http\Controllers\Cultural_center\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin_login', [AuthController::class, 'loginView'])->name('admin_login');
Route::post('/login', [AuthController::class, 'login']);
Route::group(['prefix' => 'admin_panel','as' => 'admin_panel.'], function () {

    Route::group(['middleware' => 'auth'], function () {
        ## About us Routes
        Route::resource('about', AboutController::class);

        ## Admins Routes
        Route::resource('admins', AdminController::class);
        Route::get('/admin_del/{id}', [AdminController::class, 'destroy']);

        //Route Logout
        Route::get('/logout', [AuthController::class, 'logout']);
        ## Admins Routes
        Route::get('/users', [AdminController::class, 'users']);
        Route::get('/create_user', [AdminController::class, 'create_user']);

        ## Technical support Routes
        Route::resource('technical_support', TechnicalSupport::class);

        ## higher education Routes
        Route::resource('higher_education', HigherEducationController::class);

        ## health insurance Routes
        Route::resource('health_insurance', HealthInsuranceController::class);

        ## financial dues Routes
        Route::resource('financial_dues', FinancialDueController::class);

        ## government contacts Routes
        Route::resource('government_contacts', GovernmentContactController::class);

        ## calendar Routes
        Route::resource('calendar',CalendarController::class);

        ## student guide Routes
        Route::resource('student_guide', StudentGuideController::class);
        Route::get('/del_student_guide/{id}', [StudentGuideController::class, 'destroy']);

        ## application form Routes
        Route::resource('application_form', ApplicationFormController::class);

        ## instructions  Routes
        Route::resource('instructions', InstructionController::class);
        Route::get('/del_instruction/{id}', [InstructionController::class, 'destroy']);

        ## circulars  Routes
        Route::resource('circulars', CircularController::class);
        Route::get('/del_circular/{id}', [CircularController::class, 'destroy']);

        ## ُEmployees Routes
        Route::resource('employees', EmployeeController::class);
        Route::get('/del_employee/{id}', [EmployeeController::class, 'destroy']);
        Route::resource('emp_notes', \App\Http\Controllers\Admin\EmpNoteController::class);

        ## clients Routes
        Route::resource('clients', \App\Http\Controllers\Admin\ClientController::class);
        //change client status
//        Route::get('/change_status/{id}', [\App\Http\Controllers\Admin\ClientController::class, 'changeStatus'])->name('clients.change_status');


        ## News Routes
        Route::resource('news', NewsController::class);
        Route::get('/del_news/{id}', [NewsController::class, 'destroy']);

        ## Short News Routes
        Route::resource('short_news', ShortNewsController::class);
        Route::get('/del_short_news/{id}', [ShortNewsController::class, 'destroy']);

        ## Missions Routes
        Route::resource('missions', MissionController::class);
        Route::get('/del_mission/{id}', [MissionController::class, 'destroy']);

        ## Missions Routes
        Route::resource('certifications', CertificationController::class);
        Route::get('/del_certification/{id}', [CertificationController::class, 'destroy']);

        ## questions Routes
        Route::resource('questions', QuestionController::class);
        Route::get('/del_question/{id}', [QuestionController::class, 'destroy']);

        ## Countries Routes
        Route::resource('countries', CountryController::class);
        Route::get('/del_country/{id}', [CountryController::class, 'destroy']);

        ## Specialty Routes
        Route::resource('specialties', SpecialtyController::class);
        Route::get('/del_specialty/{id}', [SpecialtyController::class, 'destroy']);
        Route::post('subSpe',  [SpecialtyController::class, 'subSpe'])->name('subSpe');


        ## Sub Specialty Routes
        Route::resource('sub_specialties', SubSpecialtyController::class);
        Route::get('/del_sub_specialty/{id}', [SubSpecialtyController::class, 'destroy']);

        ## Notes Routes
        Route::resource('notes', NoteController::class);
        Route::get('/del_note/{id}', [NoteController::class, 'destroy']);

        ## University Routes
        Route::resource('universities', UniversityController::class);
        Route::get('/del_university/{id}', [UniversityController::class, 'destroy']);


        ## University Notes Routes
        Route::resource('university_notes', NoteController::class);
        Route::get('/del_university_note/{id}', [NoteController::class, 'destroy']);

        ## Orders Routes
        Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);
        Route::get('/accept_order/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'accept']);
        Route::get('/sent_order/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'sent']);
        Route::get('/reject_order/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'reject']);
        Route::get('/toPDF/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'toPDF']);
        Route::resource('order_notes', \App\Http\Controllers\Admin\OrderNoteController::class);

        ## settings
        Route::resource('metas', MetaController::class);

        ## working days
        Route::resource('working_days', WorkingDaysController::class);

        ## Social Routes
        Route::resource('social', SocialController::class);
        Route::get('/del_social/{id}', [SocialController::class, 'destroy']);

        ## call  Routes
        Route::post('/update_call', [MediaController::class, 'updateCall']);
        Route::get('/edit_call', [MediaController::class, 'editCall']);

        ## sliders Routes
        Route::resource('sliders', SliderController::class);
        Route::get('/del_slider/{id}', [SliderController::class, 'destroy']);

        ## mail Routes
        Route::post('/update_mail', [MediaController::class, 'updateMail']);
        Route::get('/edit_mail', [MediaController::class, 'editMail']);

        ## whatsApp Routes
        Route::post('/update_whatsapp', [MediaController::class, 'updateWhatsapp']);
        Route::get('/edit_whatsapp', [MediaController::class, 'editWhatsapp']);

        ## useful links Routes
        Route::resource('useful_links', UsefulLinkController::class);
        Route::get('/del_useful_link/{id}', [UsefulLinkController::class, 'destroy']);

        ## contact us Routes
        Route::resource('contact_us', ContactUsController::class);
});
});

## Client Routs
Route::get('/register', [ClientController::class, 'register_form'])->name('register_form');
Route::post('/register', [ClientController::class, 'register'])->name('register');
Route::get('/login', [ClientController::class, 'loginView'])->name('login_form');
Route::post('/client_login', [ClientController::class, 'login'])->name('client_login');
Route::get('/register_code', [ClientController::class, 'register_code'])->name('register_code');
Route::post('/verify_code', [ClientController::class, 'verify_code'])->name('verify_code');
Route::post('/con_code', [ClientController::class, 'con_code'])->name('con_code');
Route::post('/reset_code', [ClientController::class, 'reset_code'])->name('reset_code');
Route::get('/forget_password', [ClientController::class, 'forgetPassword'])->name('forget_password');
Route::post('/reset_password', [ClientController::class, 'reset_password'])->name('reset_password');

Route::group(['middleware' => 'auth:client'], function () {

    Route::get('/profile', [ClientController::class,'showProfile']);
//    Route::post('/edit_profile', [ClientController::class,'edit_profile']);
    Route::put('/edit_profile', [ClientController::class,'updateProfile'])->name('edit_profile');
    Route::post('/edit_password', [ClientController::class,'edit_password']);
    //Route My File
    Route::get('/my_files', [ClientController::class, 'showMyFiles'])->name('my_files');
    ## Orders Routes
    Route::resource('orders', \App\Http\Controllers\Cultural_center\OrderController::class);
    //Route Order Data
    Route::get('/order_data', [ClientController::class, 'orderData'])->name('order_data');

    //Route Search
    Route::get('/search', [OrderController::class, 'search'])->name('search');
    //Route Add Search
    Route::get('/add_search', [OrderController::class, 'addSearch'])->name('add_search');

    //Route Add Order University
    Route::post('/add_order_university', [OrderController::class, 'addOrderUniversity'])->name('add_order_university');

    Route::get('/logout', [ClientController::class, 'logout']);
});

## All Routs
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class,'showAbout']);
Route::get('/electronic-gate', [HomeController::class, 'showGate']);
Route::get('/office', [HomeController::class, 'showOffice']);
Route::get('/worker', [HomeController::class,'showWorker']);
Route::get('/paper', [HomeController::class, 'showPaper'])->name('paper');
Route::get('/contact', [HomeController::class, 'showContact']);

## home page
Route::get('/technical_support', [HomeController::class,'showTechnicalSupport']);
Route::get('/higher_education', [HomeController::class,'showHigherEducation']);
Route::get('/health_insurance', [HomeController::class,'showHealthInsurance']);
Route::get('/financial_dues', [HomeController::class,'showFinancialDues']);
Route::get('/government_contacts', [HomeController::class,'showGovernmentContacts']);
Route::get('/calendar', [HomeController::class,'showCalendar']);
Route::get('/faq', [HomeController::class, 'showFaq']);
Route::get('/useful_links', [HomeController::class, 'showUsefulLinks']);
Route::get('/order-forms', [HomeController::class, 'showOrderForms']);
Route::get('/student_guides', [HomeController::class, 'showStudentGuide']);
Route::get('/get_instructions', [HomeController::class, 'showInstructions']);
Route::get('/get_circulars', [HomeController::class, 'showCirculars']);


## Lists Routes
Route::get('/list', [HomeController::class, 'showList']);
Route::get('/mission_list', [ListController::class,'mission_list']);
Route::get('/certificate_list', [ListController::class,'certificate_list']);

## News Routes
Route::get('/news', [\App\Http\Controllers\Cultural_center\NewsController::class,'index']);
Route::get('/news-details/{id}', [\App\Http\Controllers\Cultural_center\NewsController::class,'showNewdetails']);

## University Routes
Route::get('/university', [\App\Http\Controllers\Cultural_center\UniversityController::class, 'index']);
Route::get('/search_university', [\App\Http\Controllers\Cultural_center\UniversityController::class, 'search']);
//Route Add Search
Route::get('/add_search_university', [\App\Http\Controllers\Cultural_center\UniversityController::class, 'addSearch'])->name('add_search_university');
## get universities belongs to specific country
Route::post('country',  [\App\Http\Controllers\Cultural_center\UniversityController::class, 'country'])->name('country');


