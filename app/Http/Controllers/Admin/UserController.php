<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{   

    public function __construct(){
        $this->middleware('check.admin', ['except' => ['show','index']]);
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

}
