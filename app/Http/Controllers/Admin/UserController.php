<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Support\Facades\Gate;


class UserController extends Controller
{   

    public function __construct(){
        $this->middleware(['check.admin','role:admin'], ['except' => ['show','index','test']]);

    }

    public function index(){
        $users = User::all();

    	return view('admin.userList',compact('users'));
    }

    public function store(Request $request){

        //dd($request['tags']);
        
        $data = $this->validate($request, [
            'name'=>'required',
            'email'=> 'required',
            'password'=> 'required',

        ]);

        $data['password'] = bcrypt($request->post('password'));

         User::create($data);



    	
        return redirect()->back()->with(['flash_success' => '添加成功!']);


    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        //return redirect('admin/product')->with(['flash_success' => '删除产品成功!']);
        
        //return response()->json(['data'=>'删除成功！']);
        return redirect()->back()->with(['flash_success' => '删除成功!']);


    }

    public function edit(User $user){
        $role = Role::get()->pluck('name', 'name');
        //$user->assignRole('writer');
       
        //dd($user->roles()->pluck('name')[0]);
        $roles = Role::all();
        return view('admin.userEdit',compact('user','roles'));
    }

    public function update(Request $request,$id){

      
        $user = User::findOrFail($id);
        $data = $this->validate($request, [
            'name'=>'required',
            'email'=> 'required'

        ]);
        $user->update($data);

        $user->syncRoles($request['role']);

        return redirect()->back()->with(['flash_success' => '删除成功!']);

    }

    public function test(){
        $role = Role::create(['guard_name' => 'admin','name' => 'writer']);
        $permission = Permission::create(['name' => 'edit articles']);
        echo "888";
    }

}
