@extends('admin.global')

@section('content')

@section('before-body')

  <link rel="stylesheet" href="/admin/select/bootstrap-select.min.css"  media="all">

@endsection




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
@media (min-width: 768px){
.modal-dialog {
    width: 1200px;
    margin: 30px auto;
}
.table_input input{
  width: 50px;
}

.inner .active .active .check-mark{
  display: inline-block;
}
.inner .active .active .text{
  display: inline-block!important;
}

</style>

<div class="bg-light lter b-b wrapper-md">
    
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="m-n font-thin h3">报价管理</h1>
        </div>
           <div class="col-sm-6 text-right hidden-xs">
                <button type="button" class="btn btn-success " data-toggle="modal" data-target="#addModal">添加报价</button>
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
          <select name ="country_id" class="input-sm form-control w-sm  selectpicker inline v-middlec" data-live-search="true">
            @foreach($countries as $country)

              <option  data-tokens="{{$country->name}}" value="{{$country->id}}" @if($country->id == Request::get('country_id'))  selected = "selected" @endif >{{$country->code}}_{{$country->name}}</option>
                
            @endforeach

            </select>


        </div>



        <div class="col-md-3"> <input type="number" name="weight" class="input-sm form-control" placeholder="重量">
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
        <th colspan="2">文件</th>
        <th colspan="13">小包裹</th>
        <th colspan="8">大包裹</th>
        </tr></thead>
      @foreach ($sections as $key => $sec)
              <tr><th>{{$key}}</th></tr>
        <thead>

     
        @if(is_null($sections))
         <tr><th>没有找到对应报价</th></tr>
         @endif

         

               @foreach ($sec as $key => $data)
            
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
          
                  @foreach ($sec as  $data)
      
                      <tr>

                       <td >{{App\Country::getName($data[0]->country_id)[0]}}</td>
                      
                      @foreach($data as $item)
                         
                          <td>{{$item->price}}</td>
                         
                        
                      @endforeach

                      </tr>
                    @endforeach
         
         

         
        </tbody>
              @endforeach

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
      <div class="modal-footer bulkCreateOffer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="button" class="btn btn-primary submit" >提交</button>
      </div>
    </div>
  </div>
</div>


<!-- add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">填写</h4>
      </div>
      <div class="modal-body">
        <form enctype="multipart/form-data"  id="offerAdd" class="form-horizontal" method="post" action="{{route('offer.store')}}">
          

        
      
            <div class="form-group">
  <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>

        <tr>
        <th></th>
        <th colspan="2">文件</th>
        <th colspan="13">小包裹</th>
        <th colspan="7">大包裹</th>
        </tr>
                       

        <tr>
        <th>国家</th>
        <th>首_0.5kg</th>
        <th>续_0.5kg</th>
        <th>1kg</th>
        <th>1.5kg</th>
        <th>2kg</th>
        <th>2.5kg</th>
        <th>3kg</th>
        <th>3.5kg</th>
        <th>4kg</th>
        <th>4.5kg</th>
        <th>5kg</th>
        <th>首_5.5kg</th>
        <th>续_6_10kg</th>
        <th>首_10.5kg</th>
        <th>续_11_20.5kg </th>
        <th>21_30kg</th>
        <th>31_49kg</th>
        <th>50_69kg</th>
        <th>70_100kg</th>
        <th>101_200kg</th>
        <th>201_299kg</th>
        <th>300_500kg</th>

        </tr>
        </thead>
        
        <tbody>
                        
        <tr class="table_input">
        <td>
            <select name ="country_id" class="input-sm form-control w-sm inline v-middlec">
            @foreach($countries as $country)

              <option   value="{{$country->id}}" @if($country->id == Request::get('country_id'))  selected = "selected" @endif >{{$country->code}}_{{$country->name}}</option>
                
            @endforeach

            </select>
        </td>
        <td><input type="text" name="first_0.5kg"></td>
        <td><input type="text" name="con_0.5kg"></td>
        <td><input type="text" name="1kg"></td>
        <td><input type="text" name="1.5kg"></td>
        <td><input type="text" name="2kg"></td>
        <td><input type="text" name="2.5kg"></td>
        <td><input type="text" name="3kg"></td>
        <td><input type="text" name="3.5kg"></td>
        <td><input type="text" name="4kg"></td>
        <td><input type="text" name="4.5kg"></td>
        <td><input type="text" name="5kg"></td>
        <td><input type="text" name="first_5.5kg"></td>
        <td><input type="text" name="con_6_10kg"></td>
        <td><input type="text" name="first_10.5kg"></td>
        <td><input type="text" name="con_11_20.5kg"></td>
        <td><input type="text" name="21_30kg"></td>
        <td><input type="text" name="31_49kg"></td>
        <td><input type="text" name="50_69kg"></td>
        <td><input type="text" name="70_100kg"></td>
        <td><input type="text" name="101_200kg"></td>
        <td><input type="text" name="201_299kg"></td>
        <td><input type="text" name="300_500kg"></td>

        </tr>

                             
          

        </tbody>
      </table>
    </div>
            </div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            
            
        </form>
      </div>
      <div class="modal-footer offerAdd">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <button type="submit" class="btn btn-primary" form="offerAdd" >提交</button>

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


    
    $('.bulkCreateOffer .submit').click(function(){
      $("#bulkCreateOffer").submit();
    })
    $('.offerCheck.submit').click(function(){
      $("#offerCheck").submit();
    })



  </script>
  <script src="{{asset('admin/select/bootstrap-select.min.js') }}"></script>

@endsection 