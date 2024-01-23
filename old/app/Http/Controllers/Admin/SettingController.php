<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Type;
use App\Models\YourProject;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        $settings=Setting::get();
//        Setting::create(['name'=>'header','status'=>1]);
//        Setting::create(['name'=>'services','status'=>1]);
//        Setting::create(['name'=>'gallery','status'=>1]);
//        Setting::create(['name'=>'features','status'=>1]);
//        Setting::create(['name'=>'awards','status'=>1]);
//        Setting::create(['name'=>'pricing ','status'=>1]);
//        Setting::create(['name'=>'questions ','status'=>1]);
        return view('admin.settings.index',['settings'=>$settings]);
    }

//    public function update(Request $request){
//        $settings=Setting::get();
//        foreach ($settings as $setting){
//            $name=$setting->name;
//            $status=$request->$name;
//            $setting->update(['status'=>$status]);
//        }
//        return redirect()->back();
//    }
    public function update (Request $request, $id)
    {
        $newPermLevel = $request->input('value');
        $override = (int) $newPermLevel;

        Setting::where('id',$id)->update([
                'status'=>$override,
        ]);
    }


}
