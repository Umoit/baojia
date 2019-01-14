<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class UserController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except' => ['getLogin','postLogin','getRegister','postRegister']]);
    }

    //登录
    public function getLogin(){
    	return view('frontend.userLogin');
    }

     public function postLogin(Request $request){

     	$this->validate($request,
    	[
            'email' => 'required',
            'password' => 'required',
            'captcha' => 'required|captcha',
        ],
     	[
            'email.required' => 'email不能为空',
            'password.required' => '密码不能为空',
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '验证码不正确',
        ]);
        
    	if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
   			return redirect()->intended(route('home'));
   		}else{
   			return redirect(route('login'))->with(['flash_danger' => '账号密码错误!']);
   		}
    }


    //注册
    public function getRegister(){
    	return view('frontend.userRegister');
    }

    public function postRegister(Request $request){
    	$this->validate($request,
    	[
            'name' => 'required|string|max:50|unique:users',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:5|confirmed',
            'captcha' => 'required|captcha',
        ],
     	[
            'name.required' => '用户名不能为空',
            'name.max' => '用户名不能超过50个字符',
            'name.unique' => '用户名已经被占用',
            'email.unique' => '邮箱已经被占用',
            'email.required' => '邮箱不能为空',
            'email.email' => '邮箱格式不正确',
            'password.min' => '密码最少六位数',
            'password.required' => '密码不能为空',
            'password.confirmed' => '两次密码不一致',
            'captcha.required' => '验证码不能为空',
            'captcha.captcha' => '验证码不正确',
        ]);

    	$request->all()['password'] = bcrypt($request->password);


    	//dd($request->all());exit();
      	$user = User::create($request->all());

        Auth::login($user, true);
        return redirect()->route('home');
    }


    public function logout(){
    	Auth::logout();
    	return redirect('login');
    }

    public function show(User $user){
        return view('frontend.userShow');
    }

    public function update(UserRequest $request)
    {

    }
}
