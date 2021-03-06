@extends('admin.global')


@section('before-body')
    
   <link href="{{asset('admin/css/fileinput.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/file-upload/themes/explorer-fa/theme.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="bg-light lter b-b wrapper-md">
    <div class="row">
         <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3">会员管理</h1>
          </div>


      
    </div>


    <div class="wrapper-md">
   

    <div class="row">
      <div class="col-xs-12 col-md-12">

        <div class="panel panel-default">
        <div class="panel-heading ">编辑角色</div>
        <div class="panel-body">
          <form class="form-horizontal"  action="{{route('role.update',$role->id)}}" method="post" role="form">

            <div class="form-group">
                <label class="col-sm-2 control-label">名称</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" value="{{$role->name}}">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">分类</label>
                <div class="col-sm-10">
                    <input type="text" name="guard_name" class="form-control" value="{{$role->guard_name}}">
                </div>
            </div>

            <div class="form-group">
                  <label class="col-sm-2 control-label">权限</label>
                        <div class="col-sm-10">


                            @foreach($permissions as $data)

                              <label class="checkbox-inline i-checks">
                                <input type="checkbox" name="permissions[]"  
                                @if (isset($permissions)) 
                                  @if(in_array($data->name,$role->permissions()->pluck('name')->toArray())) checked @endif
                                @endif
                                   value="{{$data->name}}"><i></i> {{$data->name}}
                              </label>

                            @endforeach
                       
                        </div>
                </div>


    



            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary ">更新</button>
                    <button type="reset" class="btn btn-default">重置</button>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="put">

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