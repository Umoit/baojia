@extends('frontend.global')

@section('content')

<div class="layui-container fly-marginTop">
  <div class="fly-panel" pad20="" style="padding-top: 5px;">
    <!--<div class="fly-none">没有权限</div>-->
   
      <div class="layui-tab layui-tab-brief" lay-filter="user">
        <ul class="layui-tab-title">
          <li class="layui-this">发表新帖(文本)</li>
          <li >发表新帖(链接)</li>
          <li >发表新帖(图片)</li>
        </ul>
        <div class="layui-tab-content"  style="padding: 20px 0;">

            <div class="layui-tab-item layui-show">
            <form class="layui-form"" action="{{route('topic.store')}}" method="post">
              <div class="layui-row layui-col-space15 layui-form-item">
                <div class="layui-col-md4">
                  <label class="layui-form-label">所在专栏</label>
                  <div class="layui-input-block">
                    <select lay-verify="required" name="category_id" lay-filter="column"> 
                      <option></option> 
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                  </div>
                </div>
                <div class="layui-col-md12">
                  <label for="title" class="layui-form-label">标题</label>
                  <div class="layui-input-block">
                    <input type="text" id="title" name="title"  lay-verify="required" autocomplete="off" class="layui-input">
                    {{ csrf_field() }}
                    <input type="hidden" name="type" value="0">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                  </div>
                </div>
              </div>
              <div class="layui-form-item layui-form-text">
                <div class="layui-input-block">
                 <textarea class="layui-textarea layui-hide"  name="content" id="content_area" lay-verify="content"></textarea>


                </div>
              </div>
              
              <div class="layui-form-item">
                <label for="L_vercode" class="layui-form-label">人类验证</label>
                <div class="layui-input-inline">
                  <input type="text"  name="captcha" required lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input">
                </div>
                
                  <img style="vertical-align:middle;cursor:pointer;" id="captcha_img" src="{{captcha_src()}}" onclick="this.src ='/captcha/default?'+Math.random() ">
                
              </div>

              <div class="layui-form-item">
              <label for="L_vercode" class="layui-form-label"></label>
                <button class="layui-btn" lay-filter="topic1" lay-submit >立即发布</button>
              </div>
            </form>
          </div>


          <div class="layui-tab-item ">
                    <form class="layui-form"" action="{{route('topic.store')}}" method="post">
                      <div class="layui-row layui-col-space15 layui-form-item">
                        <div class="layui-col-md4">
                          <label class="layui-form-label">所在专栏</label>
                          <div class="layui-input-block">
                            <select lay-verify="required" name="category_id" lay-filter="column"> 

                            @foreach ($categories as $category)
                               <option value="{{$category->id}}">{{ $category->name }}</option>
                                
                            @endforeach
                            </select>
                          </div>
                        </div>
                        <div class="layui-col-md12">
                          <label for="title" class="layui-form-label">标题</label>
                          <div class="layui-input-block">
                            <input type="text" id="title" name="title"  lay-verify="required" autocomplete="off" class="layui-input">
                            {{ csrf_field() }}
                            <input type="hidden" name="type" value="1">
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                          </div>
                        </div>
                      </div>
                      <div class="layui-form-item ">

                       <div class="layui-col-md12">
                          <label for="title" class="layui-form-label">链接</label>
                          <div class="layui-input-block">
                            <input type="text" id="link" name="content"  lay-verify="required|url" autocomplete="off" class="layui-input">
                          </div>
                        </div>
                        
                      </div>
                      <div class="layui-form-item">
                        <label for="L_vercode" class="layui-form-label">人类验证</label>
                        <div class="layui-input-inline">
                          <input type="text"  name="captcha" required lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input">
                        </div>
                        <img style="vertical-align:middle;cursor:pointer;" id="captcha_img" src="{{captcha_src()}}" onclick="this.src ='/captcha/default?'+Math.random() ">
                      </div>
                      <div class="layui-form-item">
                      <label  class="layui-form-label"></label>

                        <button class="layui-btn" lay-filter="topic2" lay-submit >立即发布</button>
                      </div>
                    </form>

          </div>




        </div>
      </div>
    </div>
  </div>



@endsection

@section('after-body')


<script>
// layui.cache.user = {
//   username: '游客'
//   ,uid: -1
//   ,avatar: '../../res/images/avatar/00.jpg'
//   ,experience: 83
//   ,sex: '男'
// };
// layui.config({
//   base: '{{asset("layui/mods")}}/' //你存放新模块的目录，注意，不是layui的模块目录
// }).use('index'); //加载入口
 





layui.use(['layer','form','layedit'], function(){
  var layer = layui.layer;
  var form = layui.form;
  var layedit = layui.layedit;
  var rel = layedit.build('content_area'); 
  form.verify({
      content: function(value){
        value = layedit.getContent(rel)
        layedit.sync(rel)
        if(value.replace(/[\s|&nbsp;]/g,'')==''){
          return '必填项不能为空';
        }
      }
  })


  // layedit.build('content_area'); 
  form.on('submit(topic2)', function(data){

    console.log(data.field)
    return false;
  });
});



</script> 


@endsection