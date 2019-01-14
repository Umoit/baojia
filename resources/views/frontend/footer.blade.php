




  <footer class="footer">



  <div class="footer-widgets">

    <div class="container">
     <div class="row">
      <div class="col-12 col-lg-6">
       <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
         <div class="footer-col-inner">
          <!-- Widget: Links -->
          <aside class=" widget--footer widget_nav_menu">
           <h4 class="widget__title">快速链接</h4>
           <div class="widget__content">
             <div class="col">
              <ul class="widget__list">
               <li><a href="_esports_index.html">Home</a></li>
               <li><a href="_esports_blog-1.html">News Page</a></li>
               <li><a href="_esports_blog-post-1.html">Post Page</a></li>
               <li><a href="_esports_team-overview.html">Teams</a></li>
               <li><a href="_esports_team-last-results.html">Team Stats</a></li>
               <li><a href="_esports_team-roster.html">Roster</a></li>
               <li><a href="_esports_event-tournament.html">Tournament</a></li>
              </ul>
             </div>
             <div class="col">
              <ul class="widget__list">
               <li><a href="_esports_team-player.html">Player Bio</a></li>
               <li><a href="_esports_event-overview-1a.html">Match Stats</a></li>
               <li><a href="_esports_event-overview-1a.html">Live Stream</a></li>
               <li><a href="_esports_team-gallery.html">Gallery</a></li>
               <li><a href="_esports_team-videos.html">Videos</a></li>
               <li><a href="_esports_shop-fullwidth.html">Merchandise</a></li>
               <li><a href="_esports_features-shortcodes.html">Shortcodes</a></li>
              </ul>
             </div>
           </div>
          </aside>
          <!-- Widget: Links / End -->
         </div>
        </div>
        <div class="col-6 col-sm-3 col-md-3">
         <div class="footer-col-inner">
          <!-- Widget: Links -->
          <aside class=" widget--footer widget_nav_menu">
           <h4 class="widget__title">Streams</h4>
           <div class="widget__content">
            <ul class="widget__list">
             <li><a href="_esports_team-player.html">The Destroy</a></li>
             <li><a href="_esports_team-player.html">FayeDaBebop</a></li>
             <li><a href="_esports_team-player.html">Crazzzy_80</a></li>
             <li><a href="_esports_team-player.html">Game Huntress</a></li>
             <li><a href="_esports_team-player.html">Logan-X</a></li>
             <li><a href="_esports_team-player.html">Kelly_Spiegel9</a></li>
            </ul>
           </div>
          </aside>
          <!-- Widget: Links / End -->
         </div>
        </div>
        <div class="col-6 col-sm-3 col-md-3">
         <div class="footer-col-inner">
          <!-- Widget: Pages -->
          <aside class=" widget--footer widget_pages">
           <h4 class="widget__title">关于我们</h4>
           <div class="widget__content">
            <ul class="widget__list">
             <li><a href="_esports_page-contacts.html">Contact</a></li>
             <li><a href="_esports_page-faqs.html">FAQs</a></li>
             <li><a href="_esports_page-sponsors.html">Sponsors</a></li>
             <li><a href="_esports_team-schedule.html">Next Events</a></li>
             <li><a href="_esports_blog-post-3.html">Guides</a></li>
             <li><a href="_esports_shop-login.html">Register/Login</a></li>
             <li><a href="#">Privacy Policy</a></li>
            </ul>
           </div>
          </aside>
          <!-- Widget: Pages / End -->
         </div>
        </div>
       </div>
      </div>
      <div class="col-sm-6 col-lg-3">
       <div class="footer-col-inner">
        <!-- Widget: Popular Posts / End -->
        <div class=" widget--footer widget-popular-posts">
         <h4 class="widget__title">Popular News</h4>
         <div class="widget__content">
          <ul class="posts posts--simple-list">

          @foreach (App\Article::getArticleByCat(1,2) as $article1)

           <li class="posts__item ">
            <div class="posts__thumb posts__thumb--hover">
             <a href="#"><img width="96px;" src="{{$article1->img}}" alt="" /></a>
             </div>
            <div class="posts__inner">
             <div class="posts__cat">
              <span class="label posts__cat-label posts__cat-label--category-4">aaosd</span>
             </div>
             <h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">{{$article1->title}}</a></h6>
             <time datetime="2017-08-21" class="posts__date">{{$article1->created_at}}</time>
            </div>
            </li>
          @endforeach
    
          </ul>
         </div>
        </div>
        <!-- Widget: Popular Posts / End -->
       </div>
      </div>
      <div class="col-sm-6 col-lg-3">
       <div class="footer-col-inner">
        <!-- Widget: Popular Posts / End -->
        <div class=" widget--footer widget-popular-posts">
         <h4 class="widget__title">Featured News</h4>
         <div class="widget__content">
          <ul class="posts posts--simple-list">
           <li class="posts__item posts__item--category-1 posts__item--category-3">
            <figure class="posts__thumb posts__thumb--hover">
             <a href="#"><img src="assets/images/esports/samples/post-img3-xs.jpg" alt="" /></a>
            </figure>
            <div class="posts__inner">
             <div class="posts__cat">
              <span class="label posts__cat-label posts__cat-label--category-1">The Team</span>
              <span class="label posts__cat-label posts__cat-label--category-3">Striker GO</span>
             </div>
             <h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">The Team defeated the L.A. Pirates 2-1 in the Pro League...</a></h6>
             <time datetime="2017-08-21" class="posts__date">September 24th, 2018</time>
            </div></li>
           <li class="posts__item posts__item--category-4">
            <figure class="posts__thumb posts__thumb--hover">
             <a href="#"><img src="assets/images/esports/samples/post-img13-xs.jpg" alt="" /></a>
            </figure>
            <div class="posts__inner">
             <div class="posts__cat">
              <span class="label posts__cat-label posts__cat-label--category-4">Xenowatch</span>
             </div>
             <h6 class="posts__title posts__title--color-hover"><a href="_esports_blog-post-1.html">New modes are coming in the April update</a></h6>
             <time datetime="2017-08-21" class="posts__date">June 18th, 2018</time>
            </div></li>
          </ul>
         </div>
        </div>
        <!-- Widget: Popular Posts / End -->
       </div>
      </div>
     </div>
    </div>
  </div> 


   <div class="container">
    <div class="clearfix">
     <div class="footer-col footer-col-logo"> 
      <img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/10/logo-footer.png" alt="JustNews" />
     </div>
     <div class="footer-col footer-col-copy">
      <ul class="footer-nav hidden-xs">
       <li id="menu-item-152" class="menu-item menu-item-152"><a href="http://demo.wpcom.cn/justnews/contact">联系我们</a></li>
       <li id="menu-item-130" class="menu-item menu-item-130"><a href="http://demo.wpcom.cn/justnews/category/%e8%a1%8c%e4%b8%9a%e5%8a%a8%e6%80%81">行业动态</a></li>
       <li id="menu-item-157" class="menu-item menu-item-157"><a href="http://demo.wpcom.cn/justnews/special">专题列表</a></li>
       <li id="menu-item-129" class="menu-item menu-item-129"><a href="http://demo.wpcom.cn/justnews/members">用户列表</a></li>
      </ul>
      <div class="copyright">
        Copyright &copy; 2018 WPCOM 版权所有 
       <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow noopener noreferrer">粤ICP备000000000号</a> Powered by 
       <a href="https://www.wpcom.cn" target="_blank" rel="noopener noreferrer">WordPress</a> 
       <script>var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?44726c1d9839bf364c6699dd32896039";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();</script> 
      </div>
     </div>
     <div class="footer-col footer-col-sns">
      <div class="footer-sns"> 
       <a class="sns-wx" href="javascript:;"> <i class="fa fa-apple"></i> <span style="background-image:url(//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/下载.png);"></span> </a> 
       <a class="sns-wx" href="javascript:;"> <i class="fa fa-android"></i> <span style="background-image:url(//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/下载.png);"></span> </a> 
       <a class="sns-wx" href="javascript:;"> <i class="fa fa-weixin"></i> <span style="background-image:url(//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/qrcode_for_gh_d95d7581f6db_430-1.jpg);"></span> </a> 
       <a target="_blank" href="http://weibo.com/iztme" rel="nofollow"><i class="fa fa-weibo"></i></a>
      </div>
     </div>
    </div>
   </div> 




  </footer>
