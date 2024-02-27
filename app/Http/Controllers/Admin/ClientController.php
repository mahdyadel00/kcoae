<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::orderBy('created_at', 'DESC')->paginate(15);

        return view('admin.clients.index',['clients'=>$clients]);
    }


    public function show($id)
    {
     try{
         DB::beginTransaction();
            $client = Client::find($id);

            if(!$client){
                return redirect()->back()->withErrors(['msg'=>'هذا العميل غير موجود']);
            }

            DB::commit();
            return view('admin.clients.show', compact('client'));

        }catch(\Exception $ex){
            DB::rollback();
            Log::channel('custom')->error($ex->getMessage());
            return redirect()->back()->withErrors(['msg'=>'حدث خطأ ما']);
        }
    }

    public function edit($id){
        $client = Client::find($id);
        return view('admin.clients.edit',['client'=>$client]);
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $id=Client::where('id','!=',$client->id)
            ->where('ID_number',$request->ID_number)->first();
        if($id!=null){
            return redirect()->back()->withErrors(['msg'=>"الرقم الوطني تم أخذه مسبقا"]);
        }
        $mobile=Client::where('id','!=',$client->id)
            ->where('mobile',$request->mobile)->first();
        if($mobile!=null){
            return redirect()->back()->withErrors(['msg'=>"رقم الهاتف  تم أخذه مسبقا"]);
        }
        $email=Client::where('id','!=',$client->id)
            ->where('email',$request->email)->first();
        if($email!=null){
            return redirect()->back()->withErrors(['msg'=>"البريد الاكتروني  تم أخذه مسبقا"]);
        }

        $rules = [
            'name'                           => 'required|string',
            'email'                          => 'required|email',
            'ID_number'                      => 'required|integer',
            'mobile'                         => 'required',
        ];
        $update=1;

        $customMessages = [
            'email.required' => 'حقل البريد الالكتروني لا يجب أن يكون فارغا',
            'mobile.required' => 'حقل رقم الهاتف لا يجب أن يكون فارغا',
            'name.required' => 'حقل الاسم لا يجب أن يكون فارغا',
            'ID_number.integer' => 'الرقم الوطني يجب ان يتكون من أرقام فقط',
        ];

        $this->validate($request, $rules, $customMessages);

        if(Str::length($request->ID_number)!=12){
            return  redirect()->back()->withErrors(['msg' => 'الرقم الوطني يجب أن يتكون من 12 خانة ']);

        }
        $client->update([
            'name'              => $request->name,
            'email'             => $request->email,
            'mobile'            => $request->mobile,
            'ID_number'         => $request->ID_number,
        ]);

        return redirect(route('admin_panel.clients.index'))->with(['message'=>'تم التعديل بنجاح']);

    }
}
