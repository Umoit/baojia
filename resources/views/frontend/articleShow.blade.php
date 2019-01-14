@extends('frontend.global')

@section('content')




<div class="wrap">

<div class="banner banner-white j-lazy" style="background-image: url(&quot;//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/05/wx.jpg?imageMogr2/format/webp&quot;); height: 300px; display: table;" data-original="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/05/wx.jpg"><div class="banner-inner"><h1>用户体验</h1><div class="page-description"><p>用户体验（User Experience，简称UE/UX）是一种纯主观在用户使用产品过程中建立起来的感受。</p></div></div></div>

  
   <div class="main container">
    <div class="content card">
   
     <article id="post-856" class="post-856 post type-post status-publish format-standard has-post-thumbnail hentry category-1">
      <div class="entry">
       <div class="entry-head">
        <h1 class="entry-title">{{$article->title}}</h1>
        <div class="entry-info"> 
         <a class="nickname" href="http://demo.wpcom.cn/justnews/user/306">{{$article->admin->name}}</a> 
         <span class="dot">•</span> 
         <span>{{$article->created_at}}</span> 
         <span class="dot">•</span> 
         <a href="http://demo.wpcom.cn/justnews/category/%e5%88%9b%e4%b8%9a%e5%88%86%e4%ba%ab" rel="category tag">{{$article->category->name}}</a> 
         <span class="dot">•</span> 
         <span>阅读 2252</span>
        </div>
       </div>
       <div class="entry-excerpt">
        <p>熊掌号相信大家已经都不陌生了，目前是百度重点推广的产品，而且未来将会把80%的搜索流量都分发给优质熊掌号。前段时间熊掌号推出了一个产品企业权威问答，企业权威问答对本企业自己的品牌保护有非常好的效果，今天我就用自己申请企业权威问答的“坎坷”经历来和大家聊一聊，如何提交熊掌号企业权威问答。</p>
       </div>
       <div class="entry-content clearfix">
          {!!$article->content!!}

       </div>
       <div class="entry-footer">
        <div class="entry-tag"></div>
        <div class="entry-action">
         <div class="btn-zan" data-id="856">
          <i class="fa fa-thumbs-up"></i> 赞 
          <span class="entry-action-num">(53)</span>
         </div>
         <div class="btn-dashang"> 
          <i class="fa fa-usd"></i> 打赏 
          <span class="dashang-img"> <span> <img src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/05/wx.png" alt="微信扫一扫" /> 微信扫一扫 </span> </span>
         </div>
        </div>
        <div id="xhz-render-body"></div>
        <div class="entry-bar">
         <div class="entry-bar-inner clearfix">
          <div class="author pull-left"> 
           <a data-user="306" target="_blank" href="http://demo.wpcom.cn/justnews/user/306" class="avatar"> <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/349035754953b57a.1533216858.jpg" class="avatar avatar-60 photo" height="60" width="60" /> 圣人 </a> 
           <span class="author-title">普通用户</span>
          </div>
          <div class="info pull-right">
           <div class="info-item meta"> 
            <a class="meta-item j-heart" href="javascript:;" data-id="856"><i class="fa fa-heart"></i> <span class="data">13</span></a> 
            <a class="meta-item" href="#comments"><i class="fa fa-comment"></i> <span class="data">17</span></a>
           </div>
           <div class="info-item share"> 
            <a class="meta-item mobile j-mobile-share" href="javascript:;" data-id="856"><i class="fa fa-share-alt"></i> 生成分享图片</a> 
            <a class="meta-item wechat" href="javascript:;"> <i class="fa fa-wechat"></i> <span class="wx-wrap"> <span class="j-qrcode" data-text="http://demo.wpcom.cn/justnews/856.html"></span> <span>扫码分享到微信</span> </span> </a> 
            <a class="meta-item weibo" href="http://share.baidu.com/s?type=text&amp;searchPic=1&amp;sign=on&amp;to=tsina&amp;key=&amp;url=http%3A%2F%2Fdemo.wpcom.cn%2Fjustnews%2F856.html&amp;title=%E3%80%90%E5%A4%A7%E6%8B%BF%E5%88%86%E4%BA%AB%E3%80%91%E8%81%8A%E4%B8%80%E8%81%8A%E5%A6%82%E4%BD%95%E6%8F%90%E4%BA%A4%E7%86%8A%E6%8E%8C%E5%8F%B7%E4%BC%81%E4%B8%9A%E6%9D%83%E5%A8%81%E9%97%AE%E7%AD%94&amp;pic=http%3A%2F%2Fdemo.wpcom.cn%2Fjustnews%2Fwp-content%2Fuploads%2Fsites%2F8%2F2018%2F06%2F098501527231971-8.png" target="_blank"><i class="fa fa-weibo"></i></a> 
            <a class="meta-item qq" href="http://share.baidu.com/s?type=text&amp;searchPic=1&amp;sign=on&amp;to=qzone&amp;key=&amp;url=http%3A%2F%2Fdemo.wpcom.cn%2Fjustnews%2F856.html&amp;title=%E3%80%90%E5%A4%A7%E6%8B%BF%E5%88%86%E4%BA%AB%E3%80%91%E8%81%8A%E4%B8%80%E8%81%8A%E5%A6%82%E4%BD%95%E6%8F%90%E4%BA%A4%E7%86%8A%E6%8E%8C%E5%8F%B7%E4%BC%81%E4%B8%9A%E6%9D%83%E5%A8%81%E9%97%AE%E7%AD%94&amp;pic=http%3A%2F%2Fdemo.wpcom.cn%2Fjustnews%2Fwp-content%2Fuploads%2Fsites%2F8%2F2018%2F06%2F098501527231971-8.png" target="_blank"><i class="fa fa-qq"></i></a>
           </div>
           <div class="info-item act"> 
            <a href="javascript:;" id="j-reading"><i class="fa fa-file-text"></i></a>
           </div>
          </div>
         </div>
        </div>
        <div class="entry-page">
         <div class="entry-page-prev" style="background-image:url('//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/05/4I2Ds2whCDszXsI2Ujnt-480x300.jpeg');"> 
          <a href="http://demo.wpcom.cn/justnews/341.html" title="2017年UX设计的3大预测"> <span>2017年UX设计的3大预测</span> </a>
          <div class="entry-page-info"> 
           <span class="pull-left">&laquo; 上一篇</span> 
           <span class="pull-right">2017年11月27日 15:59</span>
          </div>
         </div>
         <div class="entry-page-next" style="background-image:url('//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2018/06/new_20180519182013_word_5afffa5d041c7_html_775137228c7ed542-480x300.jpg');"> 
          <a href="http://demo.wpcom.cn/justnews/855.html" title="第六届“艾舍奖”设计峰会第一轮评审工作圆满落幕"> <span>第六届“艾舍奖”设计峰会第一轮评审工作圆满落幕</span> </a>
          <div class="entry-page-info"> 
           <span class="pull-right">下一篇 &raquo;</span> 
           <span class="pull-left">2018年6月1日 17:10</span>
          </div>
         </div>
        </div>
        <div class="wpcom_ad_wrap">
         <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> 
         <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-0090527370200684" data-ad-slot="7012151636" data-ad-format="auto"></ins> 
         <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
        </div>
        <h3 class="entry-related-title">相关推荐</h3>
        <ul class="entry-related-img clearfix p-list">
         <li class="col-xs-6 col-md-4 col-sm-6 p-item">
          <div class="p-item-wrap"> 
           <a class="thumb" href="http://demo.wpcom.cn/justnews/282.html" title="设计“即时+持久”激励，让用户对产品上瘾" target="_blank"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/themes/justnews/themer/assets/images/lazy.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image j-lazy" alt="设计“即时+持久”激励，让用户对产品上瘾" data-original="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/hq7Qe6KkRIgDFTzw7l5I-480x300.jpg" /> </a>
           <h2 class="title"> <a href="http://demo.wpcom.cn/justnews/282.html" title="设计“即时+持久”激励，让用户对产品上瘾" target="_blank">设计“即时+持久”激励，让用户对产品上瘾</a></h2>
          </div></li>
         <li class="col-xs-6 col-md-4 col-sm-6 p-item">
          <div class="p-item-wrap"> 
           <a class="thumb" href="http://demo.wpcom.cn/justnews/291.html" title="未来交互设计师的5种转型方式" target="_blank"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/themes/justnews/themer/assets/images/lazy.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image j-lazy" alt="未来交互设计师的5种转型方式" data-original="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/1129133-480x300.jpg" /> </a>
           <h2 class="title"> <a href="http://demo.wpcom.cn/justnews/291.html" title="未来交互设计师的5种转型方式" target="_blank">未来交互设计师的5种转型方式</a></h2>
          </div></li>
         <li class="col-xs-6 col-md-4 col-sm-6 p-item">
          <div class="p-item-wrap"> 
           <a class="thumb" href="http://demo.wpcom.cn/justnews/312.html" title="下一个万亿风口？阿里，京东，苏宁开始竞逐这个市场！" target="_blank"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/themes/justnews/themer/assets/images/lazy.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image j-lazy" alt="下一个万亿风口？阿里，京东，苏宁开始竞逐这个市场！" data-original="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/05/1f8e000477fab7494320-480x300.jpeg" /> </a>
           <h2 class="title"> <a href="http://demo.wpcom.cn/justnews/312.html" title="下一个万亿风口？阿里，京东，苏宁开始竞逐这个市场！" target="_blank">下一个万亿风口？阿里，京东，苏宁开始竞逐这个市场！</a></h2>
          </div></li>
         <li class="col-xs-6 col-md-4 col-sm-6 p-item">
          <div class="p-item-wrap"> 
           <a class="thumb" href="http://demo.wpcom.cn/justnews/46.html" title="被夸大了的失败经验，无非是变相的成功学" target="_blank"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/themes/justnews/themer/assets/images/lazy.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image j-lazy" alt="被夸大了的失败经验，无非是变相的成功学" data-original="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/133106107172-480x300.jpg" /> </a>
           <h2 class="title"> <a href="http://demo.wpcom.cn/justnews/46.html" title="被夸大了的失败经验，无非是变相的成功学" target="_blank">被夸大了的失败经验，无非是变相的成功学</a></h2>
          </div></li>
         <li class="col-xs-6 col-md-4 col-sm-6 p-item">
          <div class="p-item-wrap"> 
           <a class="thumb" href="http://demo.wpcom.cn/justnews/419.html" title="羊皮卷之二：我要用全身心的爱来迎接今天" target="_blank"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/themes/justnews/themer/assets/images/lazy.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image j-lazy" alt="羊皮卷之二：我要用全身心的爱来迎接今天" data-original="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/07/Aus-480x300.jpeg" /> </a>
           <h2 class="title"> <a href="http://demo.wpcom.cn/justnews/419.html" title="羊皮卷之二：我要用全身心的爱来迎接今天" target="_blank">羊皮卷之二：我要用全身心的爱来迎接今天</a></h2>
          </div></li>
         <li class="col-xs-6 col-md-4 col-sm-6 p-item">
          <div class="p-item-wrap"> 
           <a class="thumb" href="http://demo.wpcom.cn/justnews/272.html" title="用户留存：谈谈那些让用户欲罢不能的心理套路" target="_blank"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/themes/justnews/themer/assets/images/lazy.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image j-lazy" alt="用户留存：谈谈那些让用户欲罢不能的心理套路" data-original="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/04/TTmka9qbysKlUWGDoGxS-480x300.jpg" /> </a>
           <h2 class="title"> <a href="http://demo.wpcom.cn/justnews/272.html" title="用户留存：谈谈那些让用户欲罢不能的心理套路" target="_blank">用户留存：谈谈那些让用户欲罢不能的心理套路</a></h2>
          </div></li>
        </ul>
       </div>
       <div id="comments" class="entry-comments">
        <div id="respond" class="comment-respond">
         <h3 id="reply-title" class="comment-reply-title">发表评论 <small><a rel="nofollow" id="cancel-comment-reply-link" href="/justnews/856.html#respond" style="display:none;">取消回复</a></small></h3>
         <div class="comment-form">
          <div class="comment-must-login">
           请登录后评论...
          </div>
          <div class="form-submit">
           <div class="form-submit-text pull-left">
            <a href="http://demo.wpcom.cn/justnews/login">登录</a>后才能评论
           </div> 
           <input name="submit" type="submit" id="must-submit" class="submit" value="发表" />
          </div>
         </div>
        </div>
        <h3 class="comments-title"> 评论列表（17条）</h3>
        <ul class="comments-list">
         <li class="comment byuser comment-author-iewzx bypostauthor even thread-even depth-1" id="comment-230">
          <div id="div-comment-230" class="comment-inner">
           <div class="comment-author vcard"> 
            <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/349035754953b57a.1533216858.jpg" class="avatar avatar-60 photo" height="60" width="60" />
           </div>
           <div class="comment-body">
            <div class="nickname">
             <a href="http://demo.wpcom.cn/justnews/user/306" target="_blank">iewzx</a> 
             <span class="comment-time">2018年6月4日 15:47</span>
            </div>
            <div class="comment-text">
             <p>自己回复一下把</p>
            </div>
           </div>
           <div class="reply"> 
            <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
           </div>
          </div></li>
         <li class="comment byuser comment-author-wechato7ipp0blafdvcwnjgegeod-fihd0 odd alt thread-odd thread-alt depth-1 parent" id="comment-232">
          <div id="div-comment-232" class="comment-inner">
           <div class="comment-author vcard"> 
            <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/f89a8143a28a1d60.1527997045.jpg" class="avatar avatar-60 photo" height="60" width="60" />
           </div>
           <div class="comment-body">
            <div class="nickname">
             <a href="http://demo.wpcom.cn/justnews/user/856" target="_blank">Ivan Li</a> 
             <span class="comment-time">2018年6月8日 00:23</span>
            </div>
            <div class="comment-text">
             <p>回复</p>
            </div>
           </div>
           <div class="reply"> 
            <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
           </div>
          </div>
          <ul class="comment-children">
           <li class="comment byuser comment-author-wechato7ipp0blafdvcwnjgegeod-fihd0 even depth-2 parent" id="comment-233">
            <div id="div-comment-233" class="comment-inner">
             <div class="comment-author vcard"> 
              <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/f89a8143a28a1d60.1527997045.jpg" class="avatar avatar-60 photo" height="60" width="60" />
             </div>
             <div class="comment-body">
              <div class="nickname">
               <a href="http://demo.wpcom.cn/justnews/user/856" target="_blank">Ivan Li</a> 回复 
               <a href="#comment-232">Ivan Li</a> 
               <span class="comment-time">2018年6月8日 00:24</span>
              </div>
              <div class="comment-text">
               <p>回复我</p>
              </div>
             </div>
             <div class="reply"> 
              <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
             </div>
            </div></li>
           <li class="comment byuser comment-author-iewzx bypostauthor odd alt depth-3" id="comment-234">
            <div id="div-comment-234" class="comment-inner">
             <div class="comment-author vcard"> 
              <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/349035754953b57a.1533216858.jpg" class="avatar avatar-60 photo" height="60" width="60" />
             </div>
             <div class="comment-body">
              <div class="nickname">
               <a href="http://demo.wpcom.cn/justnews/user/306" target="_blank">一个人的幸福</a> 回复 
               <a href="#comment-233">Ivan Li</a> 
               <span class="comment-time">2018年6月8日 00:26</span>
              </div>
              <div class="comment-text">
               <p>收到回复</p>
              </div>
             </div>
             <div class="reply"> 
              <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
             </div>
            </div></li>
           <li class="comment byuser comment-author-shunwei even depth-3" id="comment-252">
            <div id="div-comment-252" class="comment-inner">
             <div class="comment-author vcard"> 
              <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/335cca9f340bde65.1531416710.jpg" class="avatar avatar-60 photo" height="60" width="60" />
             </div>
             <div class="comment-body">
              <div class="nickname">
               <a href="http://demo.wpcom.cn/justnews/user/1018" target="_blank">shunwei</a> 回复 
               <a href="#comment-233">Ivan Li</a> 
               <span class="comment-time">2018年7月13日 03:16</span>
              </div>
              <div class="comment-text">
               <p>8888888888</p>
              </div>
             </div>
             <div class="reply"> 
              <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
             </div>
            </div></li>
           <li class="comment byuser comment-author-shunwei odd alt depth-2" id="comment-253">
            <div id="div-comment-253" class="comment-inner">
             <div class="comment-author vcard"> 
              <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/335cca9f340bde65.1531416710.jpg" class="avatar avatar-60 photo" height="60" width="60" />
             </div>
             <div class="comment-body">
              <div class="nickname">
               <a href="http://demo.wpcom.cn/justnews/user/1018" target="_blank">shunwei</a> 回复 
               <a href="#comment-232">Ivan Li</a> 
               <span class="comment-time">2018年7月13日 03:16</span>
              </div>
              <div class="comment-text">
               <p>66666</p>
              </div>
             </div>
             <div class="reply"> 
              <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
             </div>
            </div></li>
          </ul></li>
         <li class="comment byuser comment-author-qq80c510afac001bd6bf6533f0bb0f7fbf even thread-even depth-1 parent" id="comment-242">
          <div id="div-comment-242" class="comment-inner">
           <div class="comment-author vcard"> 
            <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/02ddb981e6bcfbec.1530684889.jpg" class="avatar avatar-60 photo" height="60" width="60" />
           </div>
           <div class="comment-body">
            <div class="nickname">
             <a href="http://demo.wpcom.cn/justnews/user/976" target="_blank">方块李</a> 
             <span class="comment-time">2018年7月4日 14:17</span>
            </div>
            <div class="comment-text">
             <p>点赞不能取消？<br /> 这个喜欢和点赞有啥区别？</p>
            </div>
           </div>
           <div class="reply"> 
            <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
           </div>
          </div>
          <ul class="comment-children">
           <li class="comment byuser comment-author-iewzx bypostauthor odd alt depth-2" id="comment-243">
            <div id="div-comment-243" class="comment-inner">
             <div class="comment-author vcard"> 
              <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/349035754953b57a.1533216858.jpg" class="avatar avatar-60 photo" height="60" width="60" />
             </div>
             <div class="comment-body">
              <div class="nickname">
               <a href="http://demo.wpcom.cn/justnews/user/306" target="_blank">一个人的幸福</a> 回复 
               <a href="#comment-242">方块李</a> 
               <span class="comment-time">2018年7月4日 14:19</span>
              </div>
              <div class="comment-text">
               <p>评论 就会收到邮件 提示 蛮有意思的啊</p>
              </div>
             </div>
             <div class="reply"> 
              <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
             </div>
            </div></li>
          </ul></li>
         <li class="comment byuser comment-author-fanjielin even thread-odd thread-alt depth-1" id="comment-246">
          <div id="div-comment-246" class="comment-inner">
           <div class="comment-author vcard"> 
            <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/4786c3abca69fa09.1526789403.jpg" class="avatar avatar-60 photo" height="60" width="60" />
           </div>
           <div class="comment-body">
            <div class="nickname">
             <a href="http://demo.wpcom.cn/justnews/user/204" target="_blank">fanjielin</a> 
             <span class="comment-time">2018年7月7日 14:18</span>
            </div>
            <div class="comment-text">
             <p>df</p>
            </div>
           </div>
           <div class="reply"> 
            <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
           </div>
          </div></li>
         <li class="comment byuser comment-author-qqadce8d9058fb6dd747a252d90254ea70 odd alt thread-even depth-1 parent" id="comment-516">
          <div id="div-comment-516" class="comment-inner">
           <div class="comment-author vcard"> 
            <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/a78ec59337587f6a.1533055388.jpg" class="avatar avatar-60 photo" height="60" width="60" />
           </div>
           <div class="comment-body">
            <div class="nickname">
             <a href="http://demo.wpcom.cn/justnews/user/1088" target="_blank">discuz</a> 
             <span class="comment-time">2018年8月3日 11:37</span>
            </div>
            <div class="comment-text">
             <p>看看。。。。。</p>
            </div>
           </div>
           <div class="reply"> 
            <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
           </div>
          </div>
          <ul class="comment-children">
           <li class="comment byuser comment-author-qqc6d671d6b1443aa4b74070cfff08c7a4 even depth-2 parent" id="comment-517">
            <div id="div-comment-517" class="comment-inner">
             <div class="comment-author vcard"> 
              <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/625bdb0393992c9d.1533267518.jpg" class="avatar avatar-60 photo" height="60" width="60" />
             </div>
             <div class="comment-body">
              <div class="nickname">
               <a href="http://demo.wpcom.cn/justnews/user/1101" target="_blank">‭</a> 回复 
               <a href="#comment-516">discuz</a> 
               <span class="comment-time">2018年8月3日 11:38</span>
              </div>
              <div class="comment-text">
               <p>。。。。。。。。</p>
              </div>
             </div>
             <div class="reply"> 
              <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
             </div>
            </div></li>
           <li class="comment byuser comment-author-iewzx bypostauthor odd alt depth-3" id="comment-518">
            <div id="div-comment-518" class="comment-inner">
             <div class="comment-author vcard"> 
              <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/349035754953b57a.1533216858.jpg" class="avatar avatar-60 photo" height="60" width="60" />
             </div>
             <div class="comment-body">
              <div class="nickname">
               <a href="http://demo.wpcom.cn/justnews/user/306" target="_blank">一个人的幸福</a> 回复 
               <a href="#comment-517">‭</a> 
               <span class="comment-time">2018年8月3日 12:11</span>
              </div>
              <div class="comment-text">
               <p>回复</p>
              </div>
             </div>
             <div class="reply"> 
              <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
             </div>
            </div></li>
          </ul></li>
         <li class="comment byuser comment-author-wechato7ipp0ezpzt2oanolij3vow0ox1y even thread-odd thread-alt depth-1" id="comment-551">
          <div id="div-comment-551" class="comment-inner">
           <div class="comment-author vcard"> 
            <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/cea16a9824023ee1.1535401549.jpg" class="avatar avatar-60 photo" height="60" width="60" />
           </div>
           <div class="comment-body">
            <div class="nickname">
             <a href="http://demo.wpcom.cn/justnews/user/1205" target="_blank">拥抱。</a> 
             <span class="comment-time">2018年8月28日 04:26</span>
            </div>
            <div class="comment-text">
             <p>很棒</p>
            </div>
           </div>
           <div class="reply"> 
            <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
           </div>
          </div></li>
         <li class="comment byuser comment-author-wechato7ipp0v940ntyx8piujlhgvz0i5q odd alt thread-even depth-1 parent" id="comment-558">
          <div id="div-comment-558" class="comment-inner">
           <div class="comment-author vcard"> 
            <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/b956a6521b28495f.1526691719.jpg" class="avatar avatar-60 photo" height="60" width="60" />
           </div>
           <div class="comment-body">
            <div class="nickname">
             <a href="http://demo.wpcom.cn/justnews/user/772" target="_blank">鱼子非</a> 
             <span class="comment-time">2018年9月2日 18:32</span>
            </div>
            <div class="comment-text">
             <p>测试下</p>
            </div>
           </div>
           <div class="reply"> 
            <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
           </div>
          </div>
          <ul class="comment-children">
           <li class="comment byuser comment-author-wechato7ipp0v940ntyx8piujlhgvz0i5q even depth-2" id="comment-559">
            <div id="div-comment-559" class="comment-inner">
             <div class="comment-author vcard"> 
              <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/b956a6521b28495f.1526691719.jpg" class="avatar avatar-60 photo" height="60" width="60" />
             </div>
             <div class="comment-body">
              <div class="nickname">
               <a href="http://demo.wpcom.cn/justnews/user/772" target="_blank">鱼子非</a> 回复 
               <a href="#comment-558">鱼子非</a> 
               <span class="comment-time">2018年9月2日 18:32</span>
              </div>
              <div class="comment-text">
               <p>留言测试</p>
              </div>
             </div>
             <div class="reply"> 
              <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
             </div>
            </div></li>
          </ul></li>
         <li class="comment byuser comment-author-qq83b32623440cb89d6e6cdf7caf200d69 odd alt thread-odd thread-alt depth-1" id="comment-588">
          <div id="div-comment-588" class="comment-inner">
           <div class="comment-author vcard"> 
            <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/b47468396569a906.1537810885.jpg" class="avatar avatar-60 photo" height="60" width="60" />
           </div>
           <div class="comment-body">
            <div class="nickname">
             <a href="http://demo.wpcom.cn/justnews/user/1306" target="_blank">阳光虫草</a> 
             <span class="comment-time">2018年9月25日 01:55</span>
            </div>
            <div class="comment-text">
             <p>这个评论可不可以转为问答，是不是转由管理员决定或者发布者自己决定，并且回答也可以在这里调用，发现很多评论也很精彩，百度又不收录评论。</p>
            </div>
           </div>
           <div class="reply"> 
            <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
           </div>
          </div></li>
         <li class="comment byuser comment-author-qqb3b7fc398b1b38969eb861acd7811acf even thread-even depth-1" id="comment-594">
          <div id="div-comment-594" class="comment-inner">
           <div class="comment-author vcard"> 
            <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/4aa0048b187f7182.1525943391.jpg" class="avatar avatar-60 photo" height="60" width="60" />
           </div>
           <div class="comment-body">
            <div class="nickname">
             <a href="http://demo.wpcom.cn/justnews/user/737" target="_blank">赞博文化</a> 
             <span class="comment-time">2018年9月28日 15:47</span>
            </div>
            <div class="comment-text">
             <p>123</p>
            </div>
           </div>
           <div class="reply"> 
            <a rel="nofollow" class="comment-reply-login" href="javascript:;">回复</a>
           </div>
          </div></li>
        </ul>
        <div class="pagination clearfix"></div>
       </div>
      </div> 
     </article>
    </div> 
    <aside class="sidebar">
     <div id="post-thumb-3" class="widget widget_post_thumb card">
      <h3 class="widget-title"><span>最新文章</span></h3>
      <ul>
       <li class="item">
        <div class="item-img"> 
         <a href="http://demo.wpcom.cn/justnews/855.html" title="第六届“艾舍奖”设计峰会第一轮评审工作圆满落幕"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2018/06/new_20180519182013_word_5afffa5d041c7_html_775137228c7ed542-480x300.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="第六届“艾舍奖”设计峰会第一轮评审工作圆满落幕" /> </a>
        </div>
        <div class="item-content">
         <p class="item-title"><a href="http://demo.wpcom.cn/justnews/855.html" title="第六届“艾舍奖”设计峰会第一轮评审工作圆满落幕">第六届“艾舍奖”设计峰会第一轮评审工作圆满落幕</a></p>
         <p class="item-date">2018年6月1日</p>
        </div></li>
       <li class="item">
        <div class="item-img"> 
         <a href="http://demo.wpcom.cn/justnews/856.html" title="【大拿分享】聊一聊如何提交熊掌号企业权威问答"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2018/06/098501527231971-8-480x300.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="【大拿分享】聊一聊如何提交熊掌号企业权威问答" /> </a>
        </div>
        <div class="item-content">
         <p class="item-title"><a href="http://demo.wpcom.cn/justnews/856.html" title="【大拿分享】聊一聊如何提交熊掌号企业权威问答">【大拿分享】聊一聊如何提交熊掌号企业权威问答</a></p>
         <p class="item-date">2018年6月1日</p>
        </div></li>
       <li class="item">
        <div class="item-img"> 
         <a href="http://demo.wpcom.cn/justnews/341.html" title="2017年UX设计的3大预测"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/05/4I2Ds2whCDszXsI2Ujnt-480x300.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="2017年UX设计的3大预测" /> </a>
        </div>
        <div class="item-content">
         <p class="item-title"><a href="http://demo.wpcom.cn/justnews/341.html" title="2017年UX设计的3大预测">2017年UX设计的3大预测</a></p>
         <p class="item-date">2017年11月27日</p>
        </div></li>
       <li class="item">
        <div class="item-img"> 
         <a href="http://demo.wpcom.cn/justnews/537.html" title="哈维：梅西续约巴萨已经完成 巴萨还能踢得更好"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/11/Q0hx-fynwnwt8092239-480x300.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="哈维：梅西续约巴萨已经完成 巴萨还能踢得更好" /> </a>
        </div>
        <div class="item-content">
         <p class="item-title"><a href="http://demo.wpcom.cn/justnews/537.html" title="哈维：梅西续约巴萨已经完成 巴萨还能踢得更好">哈维：梅西续约巴萨已经完成 巴萨还能踢得更好</a></p>
         <p class="item-date">2017年11月23日</p>
        </div></li>
       <li class="item">
        <div class="item-img"> 
         <a href="http://demo.wpcom.cn/justnews/499.html" title="如何让优质内容自涌现？"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/10/timg-1-480x300.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="如何让优质内容自涌现？" /> </a>
        </div>
        <div class="item-content">
         <p class="item-title"><a href="http://demo.wpcom.cn/justnews/499.html" title="如何让优质内容自涌现？">如何让优质内容自涌现？</a></p>
         <p class="item-date">2017年10月18日</p>
        </div></li>
       <li class="item">
        <div class="item-img"> 
         <a href="http://demo.wpcom.cn/justnews/419.html" title="羊皮卷之二：我要用全身心的爱来迎接今天"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/07/Aus-480x300.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="羊皮卷之二：我要用全身心的爱来迎接今天" /> </a>
        </div>
        <div class="item-content">
         <p class="item-title"><a href="http://demo.wpcom.cn/justnews/419.html" title="羊皮卷之二：我要用全身心的爱来迎接今天">羊皮卷之二：我要用全身心的爱来迎接今天</a></p>
         <p class="item-date">2017年7月31日</p>
        </div></li>
       <li class="item">
        <div class="item-img"> 
         <a href="http://demo.wpcom.cn/justnews/364.html" title="谷歌正在开发自动驾驶卡车 计划今年就要上路测试"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/06/641-480x300.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="谷歌正在开发自动驾驶卡车 计划今年就要上路测试" /> </a>
        </div>
        <div class="item-content">
         <p class="item-title"><a href="http://demo.wpcom.cn/justnews/364.html" title="谷歌正在开发自动驾驶卡车 计划今年就要上路测试">谷歌正在开发自动驾驶卡车 计划今年就要上路测试</a></p>
         <p class="item-date">2017年6月9日</p>
        </div></li>
       <li class="item">
        <div class="item-img"> 
         <a href="http://demo.wpcom.cn/justnews/376.html" title="京东无人机可把一吨货物送到偏远农村，未来要覆盖中国10个省份"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/06/s5w1kuhprmc77k64-480x300.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="京东无人机可把一吨货物送到偏远农村，未来要覆盖中国10个省份" /> </a>
        </div>
        <div class="item-content">
         <p class="item-title"><a href="http://demo.wpcom.cn/justnews/376.html" title="京东无人机可把一吨货物送到偏远农村，未来要覆盖中国10个省份">京东无人机可把一吨货物送到偏远农村，未来要覆盖中国10个省份</a></p>
         <p class="item-date">2017年6月9日</p>
        </div></li>
       <li class="item">
        <div class="item-img"> 
         <a href="http://demo.wpcom.cn/justnews/353.html" title="MediaWiki"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/05/50-480x300.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="MediaWiki" /> </a>
        </div>
        <div class="item-content">
         <p class="item-title"><a href="http://demo.wpcom.cn/justnews/353.html" title="MediaWiki">MediaWiki</a></p>
         <p class="item-date">2017年5月29日</p>
        </div></li>
       <li class="item">
        <div class="item-img"> 
         <a href="http://demo.wpcom.cn/justnews/312.html" title="下一个万亿风口？阿里，京东，苏宁开始竞逐这个市场！"> <img width="480" height="300" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/2017/05/1f8e000477fab7494320-480x300.jpeg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="下一个万亿风口？阿里，京东，苏宁开始竞逐这个市场！" /> </a>
        </div>
        <div class="item-content">
         <p class="item-title"><a href="http://demo.wpcom.cn/justnews/312.html" title="下一个万亿风口？阿里，京东，苏宁开始竞逐这个市场！">下一个万亿风口？阿里，京东，苏宁开始竞逐这个市场！</a></p>
         <p class="item-date">2017年5月16日</p>
        </div></li>
      </ul>
     </div>
     <div id="comments-5" class="widget widget_comments card">
      <h3 class="widget-title"><span>最新评论</span></h3>
      <ul>
       <li>
        <div class="comment-info"> 
         <a href="http://demo.wpcom.cn/justnews/user/1275" target="_blank"> <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/f0f7ecaee4aae620.1537109129.jpg" class="avatar avatar-60 photo" height="60" width="60" /> </a> 
         <a class="comment-author" href="http://demo.wpcom.cn/justnews/user/1275" target="_blank"> 我❤️苗子 </a> 
         <span>10月14日</span>
        </div>
        <div class="comment-excerpt">
         <p>感觉评论提交有点慢啊，还能优化一下吗</p>
        </div><p class="comment-post"> 评论于 <a href="http://demo.wpcom.cn/justnews/207.html" target="_blank">诺基亚近日推出6款新产品，将增强和16家公司合作，VR领域发力明显</a></p></li>
       <li>
        <div class="comment-info"> 
         <a href="http://demo.wpcom.cn/justnews/user/1275" target="_blank"> <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/f0f7ecaee4aae620.1537109129.jpg" class="avatar avatar-60 photo" height="60" width="60" /> </a> 
         <a class="comment-author" href="http://demo.wpcom.cn/justnews/user/1275" target="_blank"> 我❤️苗子 </a> 
         <span>10月14日</span>
        </div>
        <div class="comment-excerpt">
         <p>顶你</p>
        </div><p class="comment-post"> 评论于 <a href="http://demo.wpcom.cn/justnews/207.html" target="_blank">诺基亚近日推出6款新产品，将增强和16家公司合作，VR领域发力明显</a></p></li>
       <li>
        <div class="comment-info"> 
         <a href="http://demo.wpcom.cn/justnews/user/1275" target="_blank"> <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/f0f7ecaee4aae620.1537109129.jpg" class="avatar avatar-60 photo" height="60" width="60" /> </a> 
         <a class="comment-author" href="http://demo.wpcom.cn/justnews/user/1275" target="_blank"> 我❤️苗子 </a> 
         <span>10月14日</span>
        </div>
        <div class="comment-excerpt">
         <p>哈哈</p>
        </div><p class="comment-post"> 评论于 <a href="http://demo.wpcom.cn/justnews/207.html" target="_blank">诺基亚近日推出6款新产品，将增强和16家公司合作，VR领域发力明显</a></p></li>
       <li>
        <div class="comment-info"> 
         <a href="http://demo.wpcom.cn/justnews/user/1275" target="_blank"> <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/f0f7ecaee4aae620.1537109129.jpg" class="avatar avatar-60 photo" height="60" width="60" /> </a> 
         <a class="comment-author" href="http://demo.wpcom.cn/justnews/user/1275" target="_blank"> 我❤️苗子 </a> 
         <span>10月14日</span>
        </div>
        <div class="comment-excerpt">
         <p>呵呵</p>
        </div><p class="comment-post"> 评论于 <a href="http://demo.wpcom.cn/justnews/207.html" target="_blank">诺基亚近日推出6款新产品，将增强和16家公司合作，VR领域发力明显</a></p></li>
       <li>
        <div class="comment-info"> 
         <a href="http://demo.wpcom.cn/justnews/user/1275" target="_blank"> <img alt="" src="//demo-src.wpcom.cn/justnews/wp-content/uploads/sites/8/member/avatars/f0f7ecaee4aae620.1537109129.jpg" class="avatar avatar-60 photo" height="60" width="60" /> </a> 
         <a class="comment-author" href="http://demo.wpcom.cn/justnews/user/1275" target="_blank"> 我❤️苗子 </a> 
         <span>10月14日</span>
        </div>
        <div class="comment-excerpt">
         <p>火星五号趣闻，有你好看的！http://www.marswu.com</p>
        </div><p class="comment-post"> 评论于 <a href="http://demo.wpcom.cn/justnews/207.html" target="_blank">诺基亚近日推出6款新产品，将增强和16家公司合作，VR领域发力明显</a></p></li>
      </ul>
     </div> 
    </aside>
   </div>
   <div class="modal" id="login-modal">
    <div class="modal-dialog modal-sm">
     <div class="modal-content">
      <div class="modal-header"> 
       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title">请登录</h4>
      </div>
      <div class="modal-body login-modal-body">
       <p>您还未登录，请登录后再进行相关操作！</p>
       <div class="login-btn"> 
        <a class="btn btn-login" href="http://demo.wpcom.cn/justnews/login">登 录</a> 
        <a class="btn btn-register" href="http://demo.wpcom.cn/justnews/register">注 册</a>
       </div>
      </div>
     </div>
    </div>
   </div>
  

</div>

@endsection


