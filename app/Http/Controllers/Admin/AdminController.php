<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{

    public function index()
    {
        $admin      =  auth()->user();
        $admins     =  User::where('type','1')->orderBy('created_at', 'DESC')->paginate(15);

        return view('admin.admins.index',['admin'=>$admin,'admins'=>$admins,'is_user'=>'0']);
    }
    public function users()
    {
        $admin  = auth()->user();
        $admins = User::where('type','2')->orderBy('created_at', 'DESC')->paginate(15);

        return view('admin.admins.index',['admin'=>$admin,'admins'=>$admins,'is_user'=>'1']);
    }

    public function create()
    {
        $admin = auth()->user();
        
        return view('admin.admins.create',['admin'=>$admin,'is_user'=>'0']);

    }
     public function create_user()
    {
        $admin=auth()->user();
        return view('admin.admins.create',['admin'=>$admin,'is_user'=>'1']);

    }
    public function store(Request $request)
    {
        $admin=auth()->user();
        $rules = [
            'password'                       => ['required', 'confirmed', Password::min(8)->numbers()->symbols()],
            'email'                          => 'required|email|unique:users,email',
            'name'                           => 'required|string',
        ];
        $lang = App::getLocale();
        if($lang=='ar'){
            $customMessages = [
                'password.required' => 'حقل كلمة المورو لا يجب أن يكون فارغا',
                'password.confirmed' => ' تأكيد كلمة المرور غير مطابق',
                'password.min'   => 'يجب ان تكون كلمة المرور على الأقل مكونة من ثماني محارف',
                'email.unique'   => 'البريد الالكتروني تم اخذه مسبقا  ',
                'email.required' => 'حقل البريد الالكتروني لا يجب أن يكون فارغا',
                'name.required' => 'حقل الاسم لا يجب أن يكون فارغا',
            ];
            if ( ! preg_match('/(\p{Ll}+.*\p{Lu})|(\p{Lu}+.*\p{Ll})/u', $request->password)) {
                return  redirect()->back()->withErrors(['msg' => 'كلمة المرور يجب ان تحوي محرف كبير و محرف صغير  ']);

            }

            if ( ! preg_match('/\pL/u', $request->password)) {
                return  redirect()->back()->withErrors(['msg' => 'كلمة المرور يجب ان تحوي حرف واحد على الاأقل ']);
            }

            if ( ! preg_match('/\p{Z}|\p{S}|\p{P}/u', $request->password)) {
                return  redirect()->back()->withErrors(['msg' => 'كلمة المرور يجب ان تحوي رمز واحد على الاأقل ']);
            }

            if (  ! preg_match('/\pN/u', $request->password)) {
                return  redirect()->back()->withErrors(['msg' => 'كلمة المرور يجب ان تحوي رقم واحد على الأقل ']);
            }

            $this->validate($request, $rules, $customMessages);

        }else{
            $request->validate($rules);
        }


            $admin = User::create([
                'name'              => $request->name,
                'email'             => $request->email,
                'password'          => Hash::make($request->password),
            ]);

        if($request->type != null){
            $admin->update(['type'=>$request->type]);
            if($request->type=='1'){
                return redirect(route('admin_panel.admins.index'));
            }

        }
        return redirect('admin_panel/users');


    }
    public function destroy($id)
    {
        $admin=User::find($id);
        $admin->delete();

        return redirect()->back();
    }

}
