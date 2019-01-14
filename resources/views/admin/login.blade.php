<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layout 后台大布局 - Layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


  <meta name="description" content="@yield('meta_description', 'Default Description')">
  <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
  @yield('meta')
  <link rel="stylesheet" href="/admin/css/animate.css"  media="all">
  <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/admin/css/bootstrap.css"  media="all">
  <link rel="stylesheet" href="/admin/css/app.css"  media="all">

   @yield('before-body')


</head>

<body>
<div class="app app-header-fixed ">
  

<div class="container w-xxl w-auto-xs">
  <a href class="navbar-brand block m-t">{{ config('app.name')}}</a>
  <div class="m-b-lg">
    <div class="wrapper text-center">
      <strong>App后台管理系统</strong>
    </div>
    <form name="form" class="form-validation" method="post" action="{{route('admin.login')}}">
      <div class="text-danger wrapper text-center" >
          
      </div>
      <div class="list-group list-group-sm">
        <div class="list-group-item">
          <input type="email" placeholder="邮箱地址" class="form-control no-border" name="email" required>

        </div>

        <div class="list-group-item">
           <input type="password" placeholder="密码" class="form-control no-border" name="password" required>
        </div>

         <div class="list-group-item">

           <input type="text" placeholder="验证码" class="form-control no-border" name="captcha" required style="width:50%;display:inline-block">
           <img style="vertical-align:middle;cursor:pointer;float:right" id="captcha_img" src="{{captcha_src()}}" onclick="this.src ='/captcha/default?'+Math.random() ">
        </div>
  
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
  

        


      </div>
      <button type="submit" class="btn btn-lg btn-primary btn-block" >登录</button>


          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>

          @endif





      <div class="text-center m-t m-b"><a>忘记密码？</a></div>
      <div class="line line-dashed"></div>
     
      <a ui-sref="access.signup" class="btn btn-lg btn-default btn-block">申请账号</a>
    </form>
  </div>
  <div class="text-center">
    <p>
  <small class="text-muted">Web app framework base on Bootstrap and AngularJS<br>&copy; 2014</small>
</p>
  </div>
</div>


</div>


</body>


  
</html>