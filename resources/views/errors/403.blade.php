@extends('admin.global')



@section('content')


      

<div class="container  w-auto-xs" ng-init="app.settings.container = false;">
  <div class="text-center m-b-lg" style="padding-top:150px;">
    <h2 class="text-shadow text-white" style="font-size:4em;">{{ $exception->getMessage() }}</h2>
  </div>
  <div class="text-center" ng-include="'tpl/blocks/page_footer.html'">
    <p>
</p>
  </div>
</div>



  

@endsection
