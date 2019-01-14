 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>
  
  <meta name="keywords" content="fly,layui,前端社区">
  <meta name="description" content="Fly社区是模块化前端UI框架Layui的官网社区，致力于为web开发提供强劲动力">
 
  
  <link rel="stylesheet" href="{{asset('frontend/css/global.css')}}"  />
	@yield('before-body')
</head>
<body>

@include('frontend.header')


@yield('content')

@include('frontend.footer')

@yield('after-content')


</body>

</html>