<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>layout 后台大布局 - Layui</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="apple-mobile-web-app-status-bar-style" content="black"> 
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="format-detection" content="telephone=no">
  
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
    
            @include('admin.header')
            @include('admin.sidebar')
    
            <!-- content -->
         <div id="content" class="app-content" role="main">
            <div class="app-content-body ">
              @yield('content')
            </div>
              
          </div>

           @include('admin.footer')


            

  </div>


    

  


<script src="{{asset('admin/js/jquery.min.js') }}"></script>
<script src="{{asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{asset('admin/js/bootstrap-notify.min.js') }}"></script>

  @include('admin.notify')

<script type="text/javascript">

   // nav
      $(document).on('click', '#left-nav a', function (e) {
        var $this = $(e.target), $active;
        $this.is('a') || ($this = $this.closest('a'));
        
        $active = $this.parent().siblings( ".active" );
        $active && $active.toggleClass('active').find('> ul:visible').slideUp(200);
        
        ($this.parent().hasClass('active') && $this.next().slideUp(200)) || $this.next().slideDown(200);
        $this.parent().toggleClass('active');
        
        $this.next().is('ul') && e.preventDefault();
      });

</script>

  @yield('after-body')


  

</body>
  
</html>