@extends('frontend.global')

@section('content')


<div id="wrap">
     <div class="main container">
   <div class="content">
    <div class="slider-wrap clearfix">
     <div class="main-slider flexslider pull-left">
      <div class="flex-viewport" style="overflow: hidden; position: relative;">
       <ul class="slides" style="width: 1000%; margin-left: -1720.46px;">
        <li class="slide-item clone" aria-hidden="true" style="width: 670px; float: left; display: block;"> <a href="http://demo.wpcom.cn/justnews/" target="_blank"> <img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/s3.jpg" alt="这是幻灯滑块的标题3" draggable="false" /> </a><h3 class="slide-title"> <a href="http://demo.wpcom.cn/justnews/" target="_blank">这是幻灯滑块的标题3</a></h3></li>
        <li class="slide-item" style="width: 670px; float: left; display: block;"> <a href="http://demo.wpcom.cn/justnews/" target="_blank"> <img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/s2.jpg" alt="这是幻灯滑块的标题1" draggable="false" /> </a><h3 class="slide-title"> <a href="http://demo.wpcom.cn/justnews/" target="_blank">这是幻灯滑块的标题1</a></h3></li>
        <li class="slide-item" style="width: 670px; float: left; display: block;"> <a href="http://demo.wpcom.cn/justnews/" target="_blank"> <img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/s1.jpg" alt="这是幻灯滑块的标题2" draggable="false" /> </a><h3 class="slide-title"> <a href="http://demo.wpcom.cn/justnews/" target="_blank">这是幻灯滑块的标题2</a></h3></li>
        <li class="slide-item flex-active-slide" style="width: 670px; float: left; display: block;"> <a href="http://demo.wpcom.cn/justnews/" target="_blank"> <img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/s3.jpg" alt="这是幻灯滑块的标题3" draggable="false" /> </a><h3 class="slide-title"> <a href="http://demo.wpcom.cn/justnews/" target="_blank">这是幻灯滑块的标题3</a></h3></li>
        <li class="slide-item clone" style="width: 670px; float: left; display: block;" aria-hidden="true"> <a href="http://demo.wpcom.cn/justnews/" target="_blank"> <img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/s2.jpg" alt="这是幻灯滑块的标题1" draggable="false" /> </a><h3 class="slide-title"> <a href="http://demo.wpcom.cn/justnews/" target="_blank">这是幻灯滑块的标题1</a></h3></li>
       </ul>
      </div>
      <ol class="flex-control-nav flex-control-paging">
       <li><a class="">1</a></li>
       <li><a class="">2</a></li>
       <li><a class="flex-active">3</a></li>
      </ol>
      <ul class="flex-direction-nav">
       <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
       <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
      </ul>
     </div>
     <ul class="feature-post pull-right">

      @foreach (App\Article::getArticleByCat(1,3) as $article1)
      <li> <a href="http://demo.wpcom.cn/justnews/author/Lomu" target="_blank"> <img src="{{$article1->img}}" alt="前端用户中心" /> </a> <span>{{$article1->title}}</span></li>
      @endforeach

     </ul>
    </div>
    <div class="sec-panel topic-recommend  card">
     <div class="sec-panel-head">
      <h2>专题介绍 <small>专题模块标题旁边的描述文字</small> <a href="http://demo.wpcom.cn/justnews/special" target="_blank" class="more">全部专题</a></h2>
     </div>
     <div class="sec-panel-body">
      <ul class="list topic-list">
       <li class="topic"> <a class="topic-wrap" href="http://demo.wpcom.cn/justnews/special/%e5%90%8d%e4%bc%81%e7%bb%8f%e9%aa%8c" target="_blank">
         <div class="cover-container"> 
          <img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/11-16110415221c21-1.png" alt="名企经验" />
         </div> <span>名企经验</span> </a></li>
       <li class="topic"> <a class="topic-wrap" href="http://demo.wpcom.cn/justnews/special/%e4%ba%a7%e5%93%81%e7%bb%8f%e7%90%86" target="_blank">
         <div class="cover-container"> 
          <img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/zhenshichanpim.png" alt="产品经理" />
         </div> <span>产品经理</span> </a></li>
       <li class="topic"> <a class="topic-wrap" href="http://demo.wpcom.cn/justnews/special/%e4%ba%92%e8%81%94%e7%bd%91" target="_blank">
         <div class="cover-container"> 
          <img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/4z9irvpunaznabmq.png" alt="互联网" />
         </div> <span>互联网</span> </a></li>
       <li class="topic"> <a class="topic-wrap" href="http://demo.wpcom.cn/justnews/special/%e7%94%a8%e6%88%b7%e4%bd%93%e9%aa%8c" target="_blank">
         <div class="cover-container"> 
          <img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/ux.png" alt="用户体验" />
         </div> <span>用户体验</span> </a></li>
      </ul>
     </div>
    </div>
    <div class="sec-panel main-list card">
     <div class="sec-panel-head">
      <ul class="list tabs" id="j-newslist">
       <li class="tab active"><a data-id="0" href="javascript:;">最新文章</a></li>
       <li class="tab"><a data-id="5" href="javascript:;">产品设计</a></li>
       <li class="tab"><a data-id="1" href="javascript:;">创业分享</a></li>
       <li class="tab"><a data-id="7" href="javascript:;">行业动态</a></li>
       <li class="tab"><a data-id="6" href="javascript:;">用户体验</a></li>
      </ul>
     </div>
     <ul class="article-list tab-list active">

     @foreach (App\Article::getArticleByCat(1) as $article1)


      <li class="item">
       <div class="item-img"> 
        <a href="http://demo.wpcom.cn/justnews/207.html" title="{{$article1->title}}" target="_blank"> 
        <img width="480" height="300" src="{{$article1->img}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image j-lazy" alt="{{$article1->title}}" /> </a> 
        <a class="item-category" href="http://demo.wpcom.cn/justnews/category/%e8%a1%8c%e4%b8%9a%e5%8a%a8%e6%80%81" target="_blank">行业动态</a>
       </div>
       <div class="item-content">
        <h2 class="item-title"> <a href="http://demo.wpcom.cn/justnews/207.html" title="{{$article1->title}}" target="_blank">
         <span class="sticky-post">置顶</span> {{$article1->title}}</a></h2>
        <div class="item-excerpt">{!!$article1->content!!}</div>
        <div class="item-meta">
         <div class="item-meta-li author"> 
          <a data-user="4" target="_blank" href="http://demo.wpcom.cn/justnews/user/4" class="avatar"> <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/679a2f3e71d9181a.1536314653.jpg" class="avatar avatar-60 photo" height="60" width="60" /> </a> 
          <a class="nickname" href="http://demo.wpcom.cn/justnews/user/4" target="_blank">{{$article1->admin->name}}</a>
         </div> 
         <span class="item-meta-li date">{{$article1->created_at}}</span>
         <span class="item-meta-li hearts" title="喜欢数"><i class="fa fa-heart"></i> 24</span>
         <span class="item-meta-li likes" title="点赞数"><i class="fa fa-thumbs-up"></i> 505</span>
         <a class="item-meta-li comments" href="http://demo.wpcom.cn/justnews/207.html#comments" target="_blank" title="评论数"><i class="fa fa-comments"></i> 41</a>
         <span class="item-meta-li views" title="阅读数"><i class="fa fa-eye"></i> 6.61K</span>
        </div>
       </div></li>

       @endforeach


      <li class="load-more-wrap"> <a class="load-more j-load-more" href="javascript:;">点击查看更多</a></li>
     </ul>
     <ul class="article-list tab-list"></ul>
     <ul class="article-list tab-list"></ul>
     <ul class="article-list tab-list"></ul>
     <ul class="article-list tab-list"></ul>
    </div>
   </div> 
   <aside class="sidebar">

   <div  class="widget widget_views card">
     <h3 class="widget-title">最近赛事</h3>
      <div class="table-responsive">
      <table class="table table-hover table-standings">
        <thead>
          <tr>
          <th>赛事</th>
          <th>队伍 A</th>
          <th>比分</th>
          <th>队伍 B</th>
          <th>观看</th>

          </tr>
        </thead>
        <tbody>
             <tr>
             <td>好汉杯</td>
            <td>LGD</td>
            <td>2-1</td>
            <td>VP</td>
            <td>回放</td>
          </tr>

           <tr>
             <td>好汉杯</td>
            <td>LGD</td>
            <td>2-1</td>
            <td>VP</td>
            <td>回放</td>
          </tr>
        </tbody>
        </table>
      </div>


    </div>

    <div class="widget widget_views card">
     <h3 class="widget-title">热门阅读</h3>
     <ul>
        @foreach (App\Article::getArticleByCat(1) as $article1)

      <li><a href="{{route('articleShow',$article1->id)}}" title="{{$article1->title}}">{{$article1->title}}</a></li>

        @endforeach
    
     </ul>
    </div>

    <div class="widget widget_lastest_products card">
     <h3 class="widget-title">产品设计</h3>
     <ul class="p-list clearfix">
     @foreach (App\Article::getArticleByCat(1,2) as $article1)

      <li class="col-xs-12 col-md-6 p-item">
       <div class="p-item-wrap"> 
        <a class="thumb" href="http://demo.wpcom.cn/justnews/353.html"> <img width="480" height="300" src=" {{$article1->img}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image j-lazy" alt="{{$article1->title}}"  style="display: inline;" /> </a>
        <h4 class="title"> <a href="http://demo.wpcom.cn/justnews/353.html" title="{{$article1->title}}"> {{$article1->title}} </a></h4>
       </div></li>
      @endforeach

     </ul>
    </div> 
   </aside>
  </div>


</div>





@endsection