@extends('layouts.admin')
@section('meta_ajax')

@stop
@section('script')
    <script type="text/javascript" src="/admin/assets/js/pages/form_select2.js"></script>
@stop
@section('content')
    <div class="content">

        <!-- Default grid -->

        <div class="col-lg-12">
            <div class="row">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">ویرایش منو</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="{{route('menu.update',['id'=>$menu->id])}}" method="post" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="display-block">نام</label>
                                        <input type="text" class="form-control" name="name" placeholder="نام منو" required value="{{$menu->name}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="display-block">لینک</label>
                                        <input type="text" class="form-control" name="link" placeholder="لینک" required value="{{$menu->link}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>منوی مادر</label>
                                            <select class="select" name="parent">
                                                <option value="0" {{$menu->parent_id==0?'selected':''}}>مادر</option>
                                                @foreach($menus as $val)
                                                    <option value="{{$val->id}}" {{$menu->parent_id==$val->id?'selected':''}}>{{$val->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="" style="margin-top:20px">
                                            <button type="submit" class="btn btn-primary">ثبت <i
                                                        class="icon-arrow-left13 position-right"></i></button>
                                        </div>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@stop
