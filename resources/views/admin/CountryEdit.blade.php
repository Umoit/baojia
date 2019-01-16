@extends('admin.global')

@section('before-body')
    <link href="{{asset('admin/css/fileinput.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/file-upload/themes/explorer-fa/theme.min.css') }}" rel="stylesheet" type="text/css" />
    
    <link href="{{asset('summernote/summernote.css') }}" rel="stylesheet">
@endsection

@section('content')


<div class="bg-light lter b-b wrapper-md">
  <h1 class="m-n font-thin h3">报价管理</h1>
</div>
<div class="wrapper-md">




<div id="topicTabContent" >
 
   	<div class="panel panel-default">
   		<div class="panel-heading font-bold" >国家内容</div>
   		<div class="panel-body">
          <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{Request::is('*create')?route('country.store'):route('country.update',$country->id)}}" role="form" data-toggle="validator">

            <div class="form-group">
    	          <label class="col-sm-2 control-label" >名字</label>
    	          <div class="col-sm-10">
    	            <input type="text" name="name" value="{{isset($country->name)?$country->name:''}}" class="form-control">
    	          </div>
	           </div>
            <div class="line line-dashed b-b line-lg pull-in"></div>

	        <div class="form-group">

           <label class="col-sm-2 control-label" >代码简称</label>
                <div class="col-sm-10">
                  <input type="text" name="code" value="{{isset($country->code)?$country->code:''}}" class="form-control">
                </div>

          </div>



    
               


            	 <input type="hidden" name="_token" value="{{ csrf_token() }}">
             	 <input type="hidden" name="_method" value="{{Request::is('*create')?'POST': 'PUT' }}">
              	<input type="hidden" name="admin_id" value="0">



	            <div class="col-sm-10 col-sm-offset-2">
	                <button type="submit" class="btn btn-primary">提交</button>
	                <a href="{{ URL::previous() }}" class="btn btn-danger ">返回</a>
	            </div>

              
          </form>
        </div>

   	</div>
     

  
   
</div>


@endsection

@section('after-body')
  <script src="{{asset('admin/file-upload/js/fileinput.js') }}" ></script>
  <script src="{{asset('admin/file-upload/js/locales/zh.js') }}" ></script>
  <script src="{{asset('admin/file-upload/themes/explorer-fa/theme.js') }}" ></script>
  <script src="{{asset('summernote/summernote.min.js') }}"></script>
  <script src="{{asset('summernote/lang/summernote-zh-CN.min.js') }}"></script>


@endsection

