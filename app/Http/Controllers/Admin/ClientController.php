<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Client\UpdateRequestClient;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
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

    public function update(UpdateRequestClient $request, $id)
    {
        try {
            DB::beginTransaction();

            $client = Client::find($id);

            if(!$client){
                return redirect()->back()->withErrors(['msg'=>'هذا العميل غير موجود']);
            }

            $client->update($request->safe()->merge([
                'is_active' => $request->is_active ? true : false,
            ])->all());

            //send email to client
            Mail::to($request->email)->send(new \App\Mail\VerifyAccount($client));

            DB::commit();
            return redirect(route('admin_panel.clients.index'))->with(['message'=>'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
            DB::rollback();
            Log::channel('custom')->error($ex->getMessage());
            return redirect()->back()->withErrors(['msg'=>'حدث خطأ ما']);
        }
    }

    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $client = Client::find($id);

            if(!$client){
                return redirect()->back()->withErrors(['msg'=>'هذا العميل غير موجود']);
            }

            $client->delete();

            DB::commit();
            return redirect(route('admin_panel.clients.index'))->with(['message'=>'تم الحذف بنجاح']);
        } catch (\Exception $ex) {
            DB::rollback();
            Log::channel('custom')->error($ex->getMessage());
            return redirect()->back()->withErrors(['msg'=>'حدث خطأ ما']);
        }
    }

}
