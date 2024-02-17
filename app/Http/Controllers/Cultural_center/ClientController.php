<?php

namespace App\Http\Controllers\Cultural_center;

use App\Http\Controllers\Controller;
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

    public function register(Request $request)
    {
        $update=0;
        $clien      =Client::where('email',$request->email)->first();
        if($clien != null){

            $id = Client::where('id','!=',$clien->id)
                ->where('ID_number',$request->ID_number)->first();

            if($id != null){
                return redirect()->back()->withErrors(['msg'=>"الرقم الوطني تم أخذه مسبقا"]);
            }
            $mobile = Client::where('id','!=',$clien->id)
                ->where('mobile',$request->mobile)->first();

            if( $mobile != null){
                return redirect()->back()->withErrors(['msg'=>"رقم الهاتف  تم أخذه مسبقا"]);
            }

            $rules = [
                'password'                       => ['required', 'confirmed', Password::min(8)->numbers()->symbols()],
                'name'                           => 'required|string',
            ];
            $update=1;
        }else{
            $rules = [
                'password'                       => ['required', 'confirmed', Password::min(8)->numbers()->symbols()],
                'email'                          => 'required|email|unique:clients,email',
                'mobile'                         => 'required|unique:clients,mobile',
                'ID_number'                      => 'required|unique:clients,ID_number|integer',
                'name'                           => 'required|string',
            ];
        }

        $customMessages = [
            'password.required' => 'حقل كلمة المورو لا يجب أن يكون فارغا',
            'password.confirmed' => ' تأكيد كلمة المرور غير مطابق',
            'password.min'   => 'يجب ان تكون كلمة المرور على الأقل مكونة من ثماني محارف',
            'email.unique'   => 'البريد الالكتروني تم اخذه مسبقا  ',
            'email.required' => 'حقل البريد الالكتروني لا يجب أن يكون فارغا',
            'mobile.unique'   => 'رقم الهاتف تم اخذه مسبقا  ',
            'mobile.required' => 'حقل رقم الهاتف لا يجب أن يكون فارغا',
            'name.required' => 'حقل الاسم لا يجب أن يكون فارغا',
            'ID_number.integer' => 'الرقم الوطني يجب ان يتكون من أرقام فقط',
        ];

        if(Str::length($request->ID_number)!=12){
            return  redirect()->back()->withErrors(['msg' => 'الرقم الوطني يجب أن يتكون من 12 خانة ']);

        }
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

        //send email
        $code=random_int(1000, 9999);
//        $data=['code'=>$code];

        $details = [
            'title' => 'المكتب الثقافي الكويتي',
            'body' => 'رمز التأكيد الخاص بك '.$code
        ];

        Mail::to($request->email)->send(new \App\Mail\MyMail($details));

        //send data
        if($update=='1'){
            $clien->update([
                'name'      =>$request->name,
                'mobile'    =>$request->mobile,
                'ID_number' =>$request->ID_number,
                'password'  =>Hash::make($request->password),
                'code'      =>$code
            ]);
        }else{
            $client= Client::create([
                'name'      =>$request->name,
                'email'     =>$request->email,
                'mobile'    =>$request->mobile,
                'ID_number' =>$request->ID_number,
                'password'  =>Hash::make($request->password),
                'code'      =>$code
            ]);
        }


        return view('client.code');
    }

    protected function loginView()
    {
        return view('client.login');
    }

    public function verify_code(Request $request){
//        $client=Client::find($request->client_id);
//        if($client->code==$request->code){
//            $client->update(['is_verify'=>1]);
//            auth('client')->login($client);
//            return redirect('/');
//        }else{
//            return redirect()->back()->with(['errors'=>' الرجاء التأكد من صحة الكود المدخل ']);
//        }
        try{
            DB::beginTransaction();
            $client = Client::where('code', $request->code)->first();

            if(!$client){
                return redirect()->back()->withErrors(['msg'=>'هذا الحساب غير موجود']);
            }

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
//            auth('client')->login($client);
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

//    public function edit_profile(Request $request){
//        $client=auth('client')->user();
//        $id=Client::where('id','!=',$client->id)
//            ->where('ID_number',$request->ID_number)->first();
//        if($id!=null){
//            return redirect()->back()->withErrors(['msg'=>"الرقم الوطني تم أخذه مسبقا"]);
//        }
//        $mobile=Client::where('id','!=',$client->id)
//            ->where('mobile',$request->mobile)->first();
//        if($mobile!=null){
//            return redirect()->back()->withErrors(['msg'=>"رقم الهاتف  تم أخذه مسبقا"]);
//        }
//        $email=Client::where('id','!=',$client->id)
//            ->where('email',$request->email)->first();
//        if($email!=null){
//            return redirect()->back()->withErrors(['msg'=>"البريد الاكتروني  تم أخذه مسبقا"]);
//        }
//
//        $rules = [
//            'name'                           => 'required|string',
//            'email'                          => 'required|email',
//            'ID_number'                      => 'required|integer',
//            'mobile'                         => 'required',
//        ];
//        $update=1;
//
//        $customMessages = [
//            'email.required' => 'حقل البريد الالكتروني لا يجب أن يكون فارغا',
//            'mobile.required' => 'حقل رقم الهاتف لا يجب أن يكون فارغا',
//            'name.required' => 'حقل الاسم لا يجب أن يكون فارغا',
//            'ID_number.integer' => 'الرقم الوطني يجب ان يتكون من أرقام فقط',
//        ];
//
//        $this->validate($request, $rules, $customMessages);
//
//        if(Str::length($request->ID_number)!=12){
//            return  redirect()->back()->withErrors(['msg' => 'الرقم الوطني يجب أن يتكون من 12 خانة ']);
//
//        }
//
//        $client->update([
//            'name'      =>$request->name,
//            'email'     =>$request->email,
//            'mobile'    =>$request->mobile,
//            'ID_number' =>$request->ID_number
//        ]);
//
//        return redirect()->back()->with(['message'=>'تم التعديل بنجاح']);
//    }

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
