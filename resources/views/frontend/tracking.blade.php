<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>管理员登录</title>
  <meta name="renderer" content="webkit">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


  <meta name="description" content="@yield('meta_description', 'Default Description')">
  <meta name="author" content="@yield('meta_author', 'Anthony Rappa')">
  @yield('meta')
  <link rel="stylesheet" href="/admin/css/animate.css"  media="all">
  <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/admin/css/bootstrap.css"  media="all">
  <link rel="stylesheet" href="/admin/css/app.css"  media="all">

   @yield('before-body')


</head>

<body>
<div class="app app-header-fixed ">
  

<div class="container  w-auto-xs">
  <a href class="navbar-brand block m-t">货单追踪</a>
  <div class="col-md-6 col-md-offset-3 col-xs-12">
   
    <form method="post">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-addon">Track No</div>
          <input type="text" name="track_no" class="form-control">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <span class="input-group-btn">
                <button type="submit" class="btn btn-primary" width="50%;">Check</button>
              </span>
        </div>

        

      </div>
      
    </form>


  </div>

  <div class="col-md-12">
      @if ($errors->any())
         @foreach ($errors->all() as $error)
            

        {!! $error !!}


        @endforeach
      @endif
  </div>
  
  @isset($waybill)
  <div class="col-xs-12 col-md-12"  >

      <div class="bs-example" data-example-id="bordered-table">
        <table class="table table-bordered " style="background:#fff" >
              
          <thead>
          <tr><th  colspan="5">货单号:{{$waybill->track_no}}</th></tr>
            <tr>
              <th>时间</th>
              <th>国家</th>
              <th>城市</th>
              <th>Q of P</th>
              <th>注意</th>
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
              
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      </div>
      @endisset

</div>


</div>

<style type="text/css">
.w-auto-xs .btn ,  .w-auto-xs .form-control{
  line-height: 2;
  height: auto;
}

</style>

</body>


  
</html>