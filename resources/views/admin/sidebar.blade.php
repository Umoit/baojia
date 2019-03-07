
    <!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              <a href="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="img/a0.jpg" class="img-full" alt="...">
                </span>
              </a>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">John.Smith</strong> 
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                  <span class="arrow top hidden-folded arrow-info"></span>
                  <div>
                    <p>300mb of 500mb used</p>
                  </div>
                  <div class="progress progress-xs m-b-none dker">
                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                  </div>
                </li>
                <li>
                  <a href>Settings</a>
                </li>
                <li>
                  <a href="page_profile.html">Profile</a>
                </li>
                <li>
                  <a href>
                    <span class="badge bg-danger pull-right">3</span>
                    Notifications
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="page_signin.html">Logout</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

          <!-- nav -->
          <nav id="left-nav" class="navi clearfix">
            <ul class="nav">
              <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
              </li>
              <li class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                  </span>
                  <i class="fa fa-dashboard"></i>
                  <span class="font-bold">主面板</span>
                </a>
                
              </li>
              <li></li>
              <li class="line dk"></li>

        

              <li class="{{ Request::is('admin/offer*') ? 'active' : '' }} {{ Request::is('admin/country') ? 'active' : '' }}">
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="fa fa-list"></i>
                  <span>报价管理</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href="{{route('offer.index')}}">
                      <span>报价列表</span>
                    </a>
                  </li>
                   <li class="{{ Request::is('admin/offer') ? 'active' : '' }}">
                    <a href="{{route('offer.index')}}">
                      <span>报价列表</span>
                    </a>
                  </li>
                    <li class="{{ Request::is('admin/country') ? 'active' : '' }}">
                    <a href="{{route('country.index')}}">
                      <span>国家列表</span>
                    </a>
                  </li>
              
               

                      
                </ul>
              </li>


             

               <li class="{{ Request::is('admin/permission*') ? 'active' : '' }} {{ Request::is('admin/admin*') ? 'active' : '' }} {{ Request::is('admin/role*') ? 'active' : '' }}">
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="fa fa-list"></i>
                  <span>管理员系统</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href="">
                      <span>管理员系统</span>
                    </a>
                  </li>

                   <li class="{{ Request::is('admin/admin*') ? 'active' : '' }}">
                    <a href="{{route('admin.index')}}">
                      <span>管理员列表</span>
                    </a>
                  </li>

                    <li class="{{ Request::is('admin/role*') ? 'active' : '' }}">
                    <a href="{{route('role.index')}}">
                      <span>角色列表</span>
                    </a>
                  </li>

                    <li class="{{ Request::is('admin/permission*') ? 'active' : '' }}">
                    <a href="{{route('permission.index')}}">
                      <span>权限列表</span>
                    </a>
                  </li>
              
                      
                </ul>
              </li>
              




          

            </ul>
          </nav>
          <!-- nav -->

          <!-- aside footer -->
          <div class="wrapper m-t"></div>
          <!-- / aside footer -->
        </div>
      </div>
  </aside>
  <!-- / aside --> 