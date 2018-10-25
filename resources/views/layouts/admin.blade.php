<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
@include('layouts.head')

</head>


<body>
<div id="app">
  @if(Session::has('status'))
  <button type="button" class="btn btn-danger btn-sm" id="sweet_auto_closer" style="display:none">Launch <i class="icon-play3 position-right"></i></button>
      <style>
          #wait{
              display: none;
          }
      </style>
@endif
  @if(Session::has('error'))
      <button type="button" class="btn btn-danger btn-sm" id="sweet_error" style="display: none">{{Session::get('error')}} <i class="icon-play3 position-right"></i></button>
      <style>
          #wait{
              display: none;
          }
      </style>
  @endif
<!-- Main navbar -->
  @include('layouts.navbar')
      {{--<my-header></my-header>--}}
<!-- /main navbar -->
  <div id="wait"
       style="top:40%;right:55%;position: absolute;position: fixed;z-index: 8888;color:black;font-width: 400;">
      <img src='{{url("public/uploads/loader.gif")}}' width="60" height="60"/><br>
  </div>

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
@include('layouts.aside')
        {{--<my-sidebar></my-sidebar>--}}
        <!-- /main sidebar -->
        <!-- Main content -->
        <div class="content-wrapper">
@yield('content')
        </div>
        <!-- /main content -->
    </div>
    <!-- /page content -->
</div>
<!-- /page container -->
</div>
{{--<script>--}}
    {{--window.Laravel={}--}}
    {{--window.Laravel.url='{{url("public/uploads/wishkey.png")}}'--}}
    {{--window.Laravel.name='{{'وقت بخیر '.Auth()->user()->name}}'--}}
    {{--window.Laravel.role='{{ auth()->user()->roles()->first()->title }}'--}}
    {{--window.Laravel.logout='{{ route('logout') }}'--}}
    {{--window.Laravel.Tk='{{ csrf_token()}}'--}}
    {{--window.Laravel.userindex='{{route('user.index')}}'--}}
    {{--window.Laravel.usercreate='{{route('user.create')}}'--}}
    {{--window.Laravel.roleindex='{{route('role.index')}}'--}}
    {{--window.Laravel.rolecreate='{{route('role.create')}}'--}}
    {{--window.Laravel.permissionindex='{{route('permission.index')}}'--}}
    {{--window.Laravel.permissioncreate='{{route('permission.create')}}'--}}
    {{--window.Laravel.articleindex='{{route('article.index')}}'--}}
    {{--window.Laravel.articlecreate='{{route('article.create')}}'--}}
    {{--window.Laravel.canarticleadd="{{Gate::check('add_article')?true:false}}"--}}
    {{--window.Laravel.canarticleindex="{{Gate::check('list_article')?true:false}}"--}}
    {{--window.Laravel.categoryadd='{{route('category.create')}}'--}}
    {{--window.Laravel.categorylist='{{route('category.index')}}'--}}
    {{--window.Laravel.cancategoryadd="{{Gate::check('add_cat')?true:false}}"--}}
    {{--window.Laravel.cancategorylist="{{Gate::check('list_cat')?true:false}}"--}}
    {{--window.Laravel.slideradd='{{route('slider.create')}}'--}}
    {{--window.Laravel.sliderlist='{{route('slider.index')}}'--}}
    {{--window.Laravel.canslideradd="{{Gate::check('add_slider')?true:false}}"--}}
    {{--window.Laravel.cansliderlist="{{Gate::check('list_slider')?true:false}}"--}}
    {{--window.Laravel.code='{{route('code.index')}}'--}}
    {{--window.Laravel.setting='{{route('setting.edit',['id'=>'1'])}}'--}}
{{--</script>--}}
{{--<script type="text/javascript" src="/public/js/app.js"></script>--}}
</body>
</html>

