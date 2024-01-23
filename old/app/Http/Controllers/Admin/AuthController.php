<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['login','loginView']]);
    }
    public function loginView()
    {
        return view('admin.signin');
    }
    public function home()
    {
        $admin=auth()->user();
        return redirect('/admin_panel/editWe');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

          if (auth()->attempt($credentials)) {
            $request->session()->regenerate();
            if(auth()->user()->type=='1'){
                return redirect('/admin_panel/about');
            }else{
                return redirect('/admin_panel/about');
            }


        }

        return back()->withErrors([
            'email' => 'كلمة المرور او البريد الالكتروني غير صحيح',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        auth()->logout();
        return redirect(route('admin_login'));
    }
//    public function switchLang($lang)
//    {
//        if (array_key_exists($lang, Config::get('languages'))) {
//            Session::put('applocale', $lang);
//        }
//        return redirect()->back();
//    }
}
