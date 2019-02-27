<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware(['check.admin','check.permission']);

    }

    public function index(){
        $admins = Admin::all();

    	return view('admin.adminList',compact('admins'));
    }

    public function store(Request $request){

        //dd($request);
        
        $data = $this->validate($request, [
            'name'=>'required',
            'email'=> 'required',
            'phone'=> 'required',
            'password'=> 'required'

        ]);

        $data['password'] = bcrypt($request['password']);
        
       
        try{
            
            Admin::create($data);

        }catch (\Exception $e){
        
            return redirect()->back()->with(['flash_error' => $e]);
         
        }



    	
        return redirect()->back()->with(['flash_success' => '添加成功!']);


    }


    public function edit(Admin $admin){

        //$admin->assignRole('admin');
       	
        //dd($admin->roles()->pluck('name')[0]);
        $roles = Role::all();
        return view('admin.adminEdit',compact('admin','roles'));
    }

    public function update(Request $request,$id){

      
        $admin = Admin::findOrFail($id);
        $data = $this->validate($request, [
            'name'=>'required',
            'email'=> 'required',
            'phone'=>'required'

        ]);
        $admin->update($data);

        $admin->syncRoles($request['role']);

        return redirect()->back()->with(['flash_success' => '更新成功!']);

    }

    public function delete($id){

        $admin = Admin::findOrFail($id);
        $admin->delete();
        //return redirect('admin/product')->with(['flash_success' => '删除产品成功!']);
        
        //return response()->json(['data'=>'删除成功！']);
        return redirect()->back()->with(['flash_success' => '删除成功!']);


    }

    public function test(){
        $admin->assignRole('admin');
        exit();
        $role = Role::create(['guard_name' => 'admin','name' => 'writer']);
        $permission = Permission::create(['name' => 'edit articles']);
        echo "888";
    }
}
