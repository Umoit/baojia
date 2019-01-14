<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use QL\QueryList;

class IndexController extends Controller
{

    public function __construct(){
        $this->middleware('check.admin', ['except' => ['getLogin','postLogin']]);
    }

    //首页
    public function dashboard(){
      return  view('admin.dashboard');

    }

    public function getLogin(){
    	return view('admin.login');
    }

    public function postLogin(Request $request){
               $this->validate($request,
            [
            'captcha' => 'required|captcha',
            ],
            [
            'captcha.captcha' => '验证码不正确',
            ]);
   		if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])) {
   			return redirect()->intended(route('admin.dashboard'));
   		}else{
   			//return back()->with(['error' => '账号密码错误!']);
        return back()->withErrors(['账号密码错误']);
   		}

   	}

    //退出
    public function logout(){
      Auth::guard('admin')->logout();
      return view('admin.login');

    }

    //测试
    public function test(){
      $aa = QueryList::get('http://www.dota2.com.cn/news/competition/index.htm')->find('.active>.item')->attrs('href');


      //采集规则
      $rules = [
          //采集a标签的href属性
          'title' => ['.news_main>.title>h1','text'],
          //采集a标签的text文本
          'content' => ['.content','html','-a']
      ];
      $html = file_get_contents('http://www.dota2.com.cn/article/details/20180605/199581.html');
      $ql = QueryList::html($html)->rules($rules)->query();
      $data = $ql->getData();

      print_r($data->all());
    }
}
