<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleController extends Controller
{
    
     public function __construct(){
        $this->middleware(['check.admin','role:admin'], ['except' => ['show','index','test']]);

    }



    public function index(){
    	$roles = Role::all();
    	return view('admin.roleList',compact('roles'));
    }


    public function store(Request $request){
    	$data = $this->validate($request, [
            'name'=>'required',
            'guard_name'=> 'required',

        ]);

    	Role::create($data);
        return redirect()->back()->with(['flash_success' => '添加成功!']);



    }

    public function edit(Role $role){
        $permissions = Permission::all()->toArray();
        return view('admin.roleEdit',compact('role','permissions'));
    }

    public function update(Request $request,$id){
        //dd($request['permissions']);
        $role = Role::find($id);
        $role->syncPermissions($request['permissions']);
        return redirect()->back()->with(['flash_success' => '更新成功!']);

    }

    public function delete($id){
        $data = Role::findOrFail($id);
        $data->delete();
        //return redirect('admin/product')->with(['flash_success' => '删除产品成功!']);
        
        //return response()->json(['data'=>'删除成功！']);
        return redirect()->back()->with(['flash_success' => '删除成功!']);


    }

}