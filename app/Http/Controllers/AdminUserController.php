<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Hash;

class AdminUserController extends Controller
{
   
    public function index()
    {
       return view('admin.user.index',[
           'admins' => Admin::orderBy('id','desc')->get()
       ]);
    }

   
    public function create()
    {
       return view('admin.user.create');
    }

    
    public function store(Request $request)
    {       
            $this->validate($request , [
                'email' => 'required|unique:admins',
                'name' => 'required',
                'role' => 'required',
                'password' => 'required|min:6',
                'password2' => 'required_with:password|same:password', 
            ]);

            $admin = new Admin();
            $admin->role = $request->role;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password);
            $admin->save();
            return redirect()->route('super-admin.index');

    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        return view('admin.user.edit',[
          'admin' => Admin::findOrFail($id)
        ]);
    }

   
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'role'=>'required',
            'name'=>'required',
            'email'=>'required'

        ]);
        $data = Admin::find($id);
        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        return redirect()->route('super-admin.index');
    }

   
    public function destroy($id)
    {   
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return redirect()->route('super-admin.index');
        
    }
}
