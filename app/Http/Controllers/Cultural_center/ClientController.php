<?php

namespace App\Http\Controllers\Cultural_center;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Auth\RegisterRequestClient;
use App\Http\Requests\Frontend\Profile\UpdateRequestProfile;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class ClientController extends Controller
{
    public function register_form()
    {
        return view('client.register');
    }

    public function register(RegisterRequestClient $request)
    {
        try{
            DB::beginTransaction();

            $client = Client::create([
                'name'      =>$request->name,
                'email'     =>$request->email,
                'mobile'    =>$request->mobile,
                'ID_number' =>$request->ID_number,
                'password'  =>Hash::make($request->password),
            ]);

            DB::commit();
            //mail
            $code=random_int(1000, 9999);
            $details = [
                'title' => 'المكتب الثقافي الكويتي',
                'body' => 'رمز التأكيد الخاص بك '.$code
            ];
            Mail::to($request->email)->send(new \App\Mail\MyMail($details));
            $client->update(['code'=>$code]);
            session()->flash('success', 'تم التسجيل بنجاح');
            return view('client.code');
        }catch (\Exception $e){
            DB::rollBack();
            Log::channel('custom')->error($e->getMessage());
            return redirect()->back()->withErrors(['msg'=>'حدث خطأ ما']);
        }
    }

    protected function loginView()
    {
        return view('client.login');
    }

    public function verify_code(Request $request){
        try{
            DB::beginTransaction();
            $client = Client::where('code', $request->code)->first();

            if(!$client){
                return redirect()->back()->withErrors(['msg'=>'هذا الحساب غير موجود']);
            }

            $client->update(['is_verify'=>1]);
            
            DB::commit();
            session()->flash('success', 'تم التحقق بنجاح');
            return redirect('/');

        }catch (\Exception $e){
            DB::rollBack();
            Log::channel('custom')->error($e->getMessage());
            return redirect()->back()->withErrors(['msg'=>'حدث خطأ ما']);

        }

    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'ID_number' => ['required'],
            'password' => ['required'],
        ]);

        if (auth('client')->attempt($credentials)) {
            $user=Client::where('ID_number',$request->ID_number)->first();
            if($user->is_verify=='1'){
                $request->session()->regenerate();
                return redirect('/');
            }

        }

        return back()->withErrors([
            'ID_number' => 'كلمة المرور او البريد الالكتروني غير صحيح',
        ]);
    }

    public function logout(Request $request)
    {
        auth('client')->logout();

        return redirect('/');
    }

    public function reset_code(Request $request){
        $user=Client::where('email',$request->email)->first();
        if($user!=null){
            //send email
            $code=random_int(1000, 9999);

            $details = [
                'title' => 'المكتب الثقافي الكويتي',
                'body' => 'رمز التأكيد الخاص بك '.$code
            ];

            Mail::to($request->email)->send(new \App\Mail\MyMail($details));
            $user->update(['code'=>$code]);
            return view('client.reset_code',['client_id'=>$user->id]);
        }
        return redirect()->back()->withErrors(['msg'=>'البريد الالكتروني غير صحيح ']);
    }

    public function con_code(Request $request){
        $client=Client::find($request->client_id);
        if($client->code==$request->code){
            $client->update(['is_verify'=>1]);
            return view('client.reset_password',['client_id'=>$client->id]);
        }else{
            return redirect()->back()->with(['errors'=>' الرجاء التأكد من صحة الكود المدخل ']);
        }
    }

    public function forgetPassword()
    {
        return view('client.forget_password');
    }
    public function reset_password(Request $request){
        $client=Client::find($request->client_id);
        $rules = [
            'password'                       => ['required', 'confirmed', Password::min(8)->numbers()->symbols()],
        ];
        $customMessages = [
            'password.required' => 'حقل كلمة المورو لا يجب أن يكون فارغا',
            'password.confirmed' => ' تأكيد كلمة المرور غير مطابق',
            'password.min'   => 'يجب ان تكون كلمة المرور على الأقل مكونة من ثماني محارف',
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

        $client->update([
            'password'  =>Hash::make($request->password),
        ]);
        auth('client')->login($client);
        return redirect('/');
    }
    function showProfile () {
        $client=auth('client')->user();
        return view ('client.myprofile',['client'=>$client]);
    }
    protected function updateProfile(updaterequestProfile $request)
    {
        try{
            DB::beginTransaction();

            $client = Client::where('id', $request->user('client')->id)->first();
            if(!$client){
                return redirect()->back()->withErrors(['msg'=>'هذا الحساب غير موجود']);
            }
                $client->update($request->safe()->except(['password' , 'passport_image']));
                if($request->hasFile('passport_image')){
                    $image = $request->file('passport_image');
                    $name = time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('/uploads/clients');
                    $image->move($destinationPath, $name);
                    $client->update([
                        'passport_image'          => $name
                    ]);
                }
                if($request->has('password')){
                    $client->update([
                        'password'          => Hash::make($request->password),
                        'passport_image'    => $name ?? $client->passport_image

                ]);
            }

            DB::commit();
                session()->flash('success', 'تم تعديل البيانات بنجاح');
                return redirect()->back();
        }catch (\Exception $e){
            DB::rollBack();
            dd($e->getMessage());
            Log::channel('custom')->error($e->getMessage());
            return redirect()->back()->withErrors(['msg'=>'حدث خطأ ما']);
        }

    }

 public function edit_password(Request $request){
     $client = $request->user('client');
     if (!auth('client')->attempt(['ID_number'=>$client->ID_number,'password'=>$request->old_password])) {
         return redirect()->back()->withErrors(['msg'=>'كلمة المرور القديمة غير صحيحة']);
     }
     else{
         $rules = [
             'password'                       => ['required', 'confirmed', Password::min(8)->numbers()->symbols()],
         ];
         $customMessages = [
             'password.required' => 'حقل كلمة المورو لا يجب أن يكون فارغا',
             'password.confirmed' => ' تأكيد كلمة المرور غير مطابق',
             'password.min'   => 'يجب ان تكون كلمة المرور على الأقل مكونة من ثماني محارف',

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

         $client->update([
             'password'          => Hash::make($request->password)
         ]);

         return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
     }


    }

}
