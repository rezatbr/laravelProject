@extends('layouts.admin')
@section('meta_ajax')

@stop
@section('script')
    <script type="text/javascript" src="/admin/assets/js/pages/form_select2.js"></script>
    <script type="text/javascript" src="/admin/assets/js/plugins/forms/selects/select2.min.js"></script>
@stop
@section('content')
    <div class="content">

        <!-- Default grid -->

        <div class="col-lg-12">
            <div class="row">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">افزودن منو</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="display-block">نام</label>
                                        <input type="text" class="form-control" name="name" placeholder="نام منو" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="display-block">لینک</label>
                                        <input type="text" class="form-control" name="link" placeholder="لینک" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>منوی مادر</label>
                                            <select class="select" name="parent">
                                                <option value="0">مادر</option>
                                                @foreach($menus as $menu)
                                                <option value="{{$menu->id}}">{{$menu->name}}</option>
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
