<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees=Employee::orderBy('created_at', 'DESC')->paginate(15);
        return view('admin.employees.index',['employees'=>$employees]);
    }

    public function create()
    {

        return view('admin.employees.create');

    }
    public function store(Request $request)
    {

        $employee = Employee::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'role'             => $request->role,
        ]);

        if($request->file('image')) {
            $request->validate([
                'image'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);
            $path = 'images/employees/';

            //upload new file
            $file = $request->image;
            $filename = $file->getClientOriginalName();
            $filename = $path.$filename;
            $file->move($path, $filename);

            $employee->update([
                'image'  => $filename,
            ]);
        }


        return redirect(route('admin_panel.employees.index'))->with(['message'=>'تمت الإضافة بنجاح']);

    }
    public function edit($id){
        $employee = Employee::find($id);
        return view('admin.employees.edit',['employee'=>$employee]);
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->update([
            'name'              => $request->name,
            'email'             => $request->email,
            'role'             => $request->role,
        ]);

        if($request->file('image')){
            $request->validate([
                'image'       => 'image|mimes:jpg,jpeg,png,gif,webp',
            ]);

            if( preg_match("/\b(" . "avatar" . ")\b/i", $employee->image) ){

                $path = 'images/employees/';

                //upload new file
                $file = $request->image;
                $filename = $file->getClientOriginalName();
                $filename = $path.$filename;
                $file->move($path, $filename);

                $employee->update([
                    'image'  => $filename,
                ]);
            } else {
                $request->validate([
                    'image'       => 'image|mimes:jpg,jpeg,png,gif,webp',
                ]);
                (File::exists($employee->image)) ? File::delete($employee->image) : Null;
                $path = 'images/employees/';

                //upload new file
                $file = $request->image;
                $filename = $file->getClientOriginalName();
                $filename = $path.$filename;
                $file->move($path, $filename);

                $employee->update([
                    'image'  => $filename,
                ]);
            }

        }

        return redirect(route('admin_panel.employees.index'))->with(['message'=>'تم التعديل بنجاح']);

    }

    public function destroy($id)
    {
        $employee = Employee::find($id);
        if( !preg_match("/\b(" . "avatar" . ")\b/i", $employee->image) ) {
            (File::exists($employee->image)) ? File::delete($employee->image) : Null;
        }
        $employee->delete();

        return redirect()->back()->with(['message'=>'تم الحذف بنجاح']);
    }

}
