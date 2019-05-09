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
        <div class="panel-heading ">添加货单详细</div>
        <div class="panel-body">
          <form class="form-horizontal"  action="{{route('wbitem.store')}}" method="post" admin="form">

            <div class="form-group">
                <label class="col-sm-3 control-label">时间</label>
                <div class="col-sm-9">
                    <input type="text" name="time" class="form-control" value="">
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-3 control-label">国家</label>
                <div class="col-sm-9">
                    <input type="text" name="country" class="form-control" value="">
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-3 control-label">城市</label>
                <div class="col-sm-9">
                    <input type="text" name="city" class="form-control" value="">
                </div>
            </div>

             <div class="form-group">
                <label class="col-sm-3 control-label">Q of places</label>
                <div class="col-sm-9">
                    <input type="text" name="qofp" class="form-control" value="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">注意/详细</label>
                <div class="col-sm-9">
                    <input type="text" name="notice" class="form-control" value="">
                </div>
            </div>
            
            <input type="hidden" name="wb_id" value="{{$waybill->id}}">
      
         

            


    



            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary ">添加</button>
                    <button type="reset" class="btn btn-default">重置</button>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

        </form>
        </div>
      </div>


        
      </div>

       <div class="col-xs-12 col-md-7" >

      <div class="bs-example" data-example-id="bordered-table">
        <table class="table table-bordered table-striped" >
              
          <thead>
          <tr><th  colspan="5">货单号:{{$waybill->track_no}}</th></tr>
            <tr>
              <th>时间</th>
              <th>国家</th>
              <th>城市</th>
              <th>Q of P</th>
              <th>注意</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody >
            
            @foreach($wbitems as $data)

            <tr>
              <td>{{$data->time}}</td>
              <td>{{$data->country}}</td>
              <td>{{$data->city}}</td>
              <td>{{$data->qofp}}</td>
              <td>{{$data->notice}}</td>
              <td> <a href="{{route('wbitem.edit',$data->id)}}"><button type="button" class="btn btn-info btn-xs">编辑</button></a>
                 <a onclick="showDeleteModal(this)"  data="{{route('wbitem.delete',$data->id)}}"><button type="button" class="btn btn-danger btn-xs">删除</button></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
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