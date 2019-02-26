<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
	 public function __construct(){
        $this->middleware(['check.admin','role:admin'], ['except' => ['show','index','test']]);

    }
    public function index(){
    	$permissions = Permission::all();
    	return view('admin.permissionList',compact('permissions'));
    }


    public function store(Request $request){
    	$data = $this->validate($request, [
            'name'=>'required',
            'guard_name'=> 'required',

        ]);

    	Permission::create($data);
        return redirect()->back()->with(['flash_success' => '添加成功!']);



    }

    public function edit(Permission $permission){
        return view('admin.permissionEdit',compact('permission'));
    }

    public function update(Request $request,$id){
        //dd($request['permissions']);
        $permission = Permission::find($id);
        $data = $this->validate($request, [
            'name'=>'required',
            'guard_name'=> 'required',

        ]);
        $permission->update($data);
        return redirect()->back()->with(['flash_success' => '更新成功!']);

    }


    public function delete($id){
        $data = Permission::findOrFail($id);
        $data->delete();
        //return redirect('admin/product')->with(['flash_success' => '删除产品成功!']);
        
        //return response()->json(['data'=>'删除成功！']);
        return redirect()->back()->with(['flash_success' => '删除成功!']);


    }

}
