@extends('admin.global')

@section('content')

<style type="text/css">
.table > thead > tr > th{

    text-align: center;
    border-left: 1px solid #eaeff0;
    width:100%;
word-break:keep-all;             /* 不换行 */
white-space:nowrap;            /* 不换行 */
overflow:hidden;                  /* 内容超出宽度时隐藏超出部分的内容 */
text-overflow:ellipsis;            /* 当对象内文本溢出时显示省略标记(...) ；需与overflow:hidden;一起使用。*/
}
.table > tbody > tr > th, .table > tfoot > tr > th, .table > tbody > tr > td, .table > tfoot > tr > td{
  border-left: 1px solid #eaeff0;
}
</style>

<div class="bg-light lter b-b wrapper-md">
    
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3">报价管理</h1>
        </div>
           <div class="col-sm-6 text-right hidden-xs">
                <a class="btn btn-success" href="{{route('offer.create')}}">添加报价</a>
                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">批量添加报价</button>
              <button type="button" class="btn  btn-info  "><a target="_blank" href="">导出报价</a></button>

            </div>
      </div>
    



</div>
<div class="wrapper-md">
  
  <div class="panel panel-default">
    <div class="panel-heading">报价列表</div>
    <div class="row wrapper">


      <div class="col-sm-5 m-b-xs">

        <form  id="offerCheck"  method="get" class="form-horizontal" action="{{route('offer.check')}}">
        <div class="col-md-3">
          <select name ="country_id" class="input-sm form-control w-sm inline v-middlec">
            @foreach($countries as $country)

              <option   value="{{$country->id}}" @if($country->id == Request::get('country_id'))  selected = "selected" @endif >{{$country->code}}_{{$country->name}}</option>
                
            @endforeach

            </select>
        </div>
        <div class="col-md-3"> 
        <input type="number" name="weight" value="@if(Request::get('weight')){{Request::get('weight')}}@endif" class="input-sm form-control" placeholder="重量">
        </div>
        <div class="col-md-3"><button class="btn btn-sm btn-default submit" >查询</button></div>
        
          


      

            
            
        </form>
        

        

      </div>
      




    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>

        <tr>
        <th></th>
        <th colspan="3">文件</th>
        <th colspan="12">小包裹</th>
        <th colspan="8">大包裹</th>
        </tr>
        @if(is_null($sections))
         <tr><th>没有找到对应报价</th></tr>
         @endif
               @foreach ($sections as  $data)


                      <tr>
                        <th >
                            <div style="width:120px;">
                              国家
                            </div>
                        </th>
                      
                      @foreach($data as $item)
                        <th>

                        
                        @if( strstr($item->weight, '_', TRUE)=="first")
                        首{{strstr($item->weight, '_')}}

                        @elseif( strstr($item->weight, '_', TRUE)=="con")
                        续{{strstr($item->weight, '_')}}
                          
                        @else()
                        {{$item->weight}}
                        @endif

                        </th>
                     
                        
                      @endforeach
                      @break

                      </tr>
                    @endforeach
         
        </thead>
        <tbody>

                  @foreach ($sections as $data)
      
                      <tr>

                      <td >{{App\Country::getName($data[0]->country_id)[0]}}</td>
                      
                      @foreach($data as $item)
                        <td>{{$item->price}}</td>
                     
                        
                      @endforeach

                      </tr>
                    @endforeach
         
          

         
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row"></div>
    </footer>
  </div>
</div>




<!-- delete Modal -->
    <div class="modal fade" id="delcfmOverhaul">
      <div class="modal-dialog">
          <div class="modal-content message_align">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"
                      aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title">提示</h4>
              </div>
              <div class="modal-body">
                  <!-- 隐藏需要删除的id -->
                  <input type="hidden" id="deleteHaulId" />
                  <p>您确认要删除该条信息吗？</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default"
                      data-dismiss="modal">取消</button>
                  <a type="button" class="btn btn-primary" id="deleteHaulBtn" href="">确认</a>
              </div>
          </div>
          <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>




<!-- exl Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">批量导入</h4>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data" id="bulkCreateOffer" class="form-horizontal" method="post" action="{{route('offer.import')}}">
          

        
        <div class="form-group">
                  <label name="img" class="col-sm-2 control-label">Excel文件</label>
                  <div class="col-sm-10">
                    <input type="file"  class="file" id="img_url" name="import_file"  accept="/*" multiple>
  
                  </div>
               
                </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary submit" >提交</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('after-body')


  <script>

  // 打开询问是否删除的模态框并设置需要删除的大修的ID
    function showDeleteModal(obj) {
        var $tds = $(obj).parent().parent().children();// 获取到所有列
        var delete_id = $($tds[0]).children("input").val();// 获取隐藏的ID
        var ss = $(obj).attr('data');
 
        $("#deleteHaulBtn").attr('href',ss); 
        $("#delcfmOverhaul").modal({
            backdrop : 'static',
            keyboard : false
        });
    }


    
    $('.modal-footer .submit').click(function(){
      $("#bulkCreateOffer").submit();
    })
    $('.offerCheck.submit').click(function(){
      $("#offerCheck").submit();
    })



  </script>
@endsection 