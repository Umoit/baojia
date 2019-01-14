

<header class="header"> 
   <div class="container clearfix">
    <div class="navbar-header"> 
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"> <span class="icon-bar icon-bar-1"></span> <span class="icon-bar icon-bar-2"></span> <span class="icon-bar icon-bar-3"></span> </button>
     <h1 class="logo"> <a href="{{route('home')}}" rel="home"><img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2018/05/justnews-logo.png" alt="JustNews" /></a></h1>
    </div>
    <div class="collapse navbar-collapse"> 
    
     <nav class="navbar-left primary-menu">
      <ul id="menu-justnews-menu" class="nav navbar-nav">
       <li class="menu-item active"><a href="/justnews">首页</a></li>
       <li class="menu-item dropdown"><a href="#" class="dropdown-toggle">文章分类</a>
        <ul class="dropdown-menu">
         <li class="menu-item"><a href="http://demo.wpcom.cn/justnews/category/%e5%88%9b%e4%b8%9a%e5%88%86%e4%ba%ab">创业分享</a></li>
         <li class="menu-item"><a href="http://demo.wpcom.cn/justnews/category/%e7%94%a8%e6%88%b7%e4%bd%93%e9%aa%8c">用户体验</a></li>
         <li class="menu-item"><a href="http://demo.wpcom.cn/justnews/category/%e4%ba%a7%e5%93%81%e8%ae%be%e8%ae%a1">产品设计</a></li>
         <li class="menu-item"><a href="http://demo.wpcom.cn/justnews/category/%e8%a1%8c%e4%b8%9a%e5%8a%a8%e6%80%81">行业动态</a></li>
        </ul></li>
       <li class="menu-item"><a href="http://demo.wpcom.cn/justnews/special">专题列表</a></li>
       <li class="menu-item"><a href="http://demo.wpcom.cn/justnews/members">用户列表</a></li>
       <li class="menu-item"><a href="http://demo.wpcom.cn/justnews/question">问答社区</a></li>
       <li class="menu-item"><a href="http://demo.wpcom.cn/justnews/kuaixun">快讯</a></li>
      </ul>
     </nav>
     <div class="navbar-action pull-right">
      <form class="navbar-search" action="http://demo.wpcom.cn/justnews" method="get" role="search"> 
       <input type="text" name="s" class="navbar-search-input" autocomplete="off" placeholder="输入关键词搜索..." value="" /> 
       <a class="navbar-search-icon j-navbar-search" href="javascript:;"></a>
      </form>

      @if (Auth::check())
       <div id="j-user-wrap">
       <ul class="profile">
        <li class="menu-item dropdown"><a class="menu-item-user" href="http://demo.wpcom.cn/justnews/account"> <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/71fda6892fbfd1c5.1536892386.jpg" class="avatar avatar-60 photo" height="60" width="60" />{{Auth::user()->name }}</a>
         <ul class="dropdown-menu">
          <li><a href="http://demo.wpcom.cn/justnews/user/1270">个人中心</a></li>
          <li><a href="http://demo.wpcom.cn/justnews/new-question">我要提问</a></li>
          <li><a href="http://demo.wpcom.cn/justnews/account">帐号设置</a></li>
          <li><a href="{{route('logout')}}">退出登录</a></li>
         </ul></li>
       </ul>
      </div>


       
      @else
        <div id="j-user-wrap"> 
         <a class="login cur" href="{{route('login')}}">登录</a> 
         <a class="login register cur" href="{{route('register')}}">注册</a>
        </div> 
      @endif

      <a class="publish" href="http://demo.wpcom.cn/justnews/tougao"> 投稿</a>
     </div>
    </div>
   </div> 
  </header>