@extends('admin.global')


@section('before-body')
    
   <link href="{{asset('admin/css/fileinput.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/file-upload/themes/explorer-fa/theme.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="bg-light lter b-b wrapper-md">
    <div class="row">
         <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3">货单跟踪</h1>
          </div>


      
    </div>


    <div class="wrapper-md">
   

    <div class="row">

     

      <div class="col-xs-12 col-md-5">

        <div class="panel panel-default">
        <div class="panel-heading ">编辑货单详细</div>
        <div class="panel-body">
          <form class="form-horizontal"  action="{{route('wbitem.update',$wbitem->id)}}" method="post" admin="form">

            <div class="form-group">
                <label class="col-sm-3 control-label">时间</label>
                <div class="col-sm-9">
                    <input type="text" name="time" class="form-control" value="{{$wbitem->time}}">
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-3 control-label">国家</label>
                <div class="col-sm-9">
                    <input type="text" name="country" class="form-control" value="{{$wbitem->country}}">
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-3 control-label">城市</label>
                <div class="col-sm-9">
                    <input type="text" name="city" class="form-control" value="{{$wbitem->city}}">
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-3 control-label">Q of places</label>
                <div class="col-sm-9">
                    <input type="text" name="qofp" class="form-control" value="{{$wbitem->qofp}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">注意/详细</label>
                <div class="col-sm-9">
                    <input type="text" name="notice" class="form-control" value="{{$wbitem->notice}}">
                </div>
            </div>
            
            <input type="hidden" name="wb_id" value="{{$wbitem->wb_id}}">
      
         

            


    



            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary ">更新</button>
                    <button type="reset" class="btn btn-default">重置</button>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </form>
        </div>
      </div>


        
      </div>

      

    
    </div>

    
</div>









@endsection

@section('after-body')
<script src="{{asset('admin/file-upload/js/fileinput.js') }}" ></script>
  <script src="{{asset('admin/file-upload/js/locales/zh.js') }}" ></script>
  <script src="{{asset('admin/file-upload/themes/explorer-fa/theme.js') }}" ></script>

<script type="text/javascript">





   $('.modal-footer .submit').click(function(){
      $("#bulkCreateArticle").submit();
    })

</script>

@endsection