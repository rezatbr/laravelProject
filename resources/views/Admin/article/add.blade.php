@extends('layouts.admin')
@section('meta_ajax')
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
@stop
@section('script')
    <script type="text/javascript" src="/admin/assets/js/plugins/pickers/color/spectrum.js"></script>
    <script type="text/javascript" src="/admin/assets/js/pages/picker_color.js"></script>
    <script type="text/javascript" src="/admin/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="/admin/assets/js/pages/form_multiselect.js"></script>
    <script type="text/javascript" src="/admin/assets/js/plugins/notifications/pnotify.min.js"></script>
    <script type="text/javascript" src="/admin/assets/js/plugins/forms/styling/uniform.min.js"></script>
    
@stop
@section('content')

    <div class="content">

        <!-- Default grid -->

            <div class="col-lg-12">
               <div class="row">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">افزودن پست</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="{{route('article.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="display-block">عنوان</label>
                                        <input type="text" class="form-control" name="title" placeholder="عنوان">
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="display-block">محتوا</label>
                                        <input type="text" class="form-control" name="description"  placeholder="محتوا">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>دسته بندی ها</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><a type="button"  data-toggle="modal" data-target="#modal_backdrop"><i class="fa fa-plus-circle text-blue" ></i></a></span>
                                       
                                            <div class="multi-select-full">

                                            <select class="multiselect" multiple="multiple" name="cat[]" id="category">

                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                                                @endforeach

                                            </select>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="display-block" id="as">انتخاب رنگ</label>
                                    <input type="text" class="form-control colorpicker-palette" name="color" value="#27ADCA">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="display-block col-lg-2">انتخاب عکس</label>
                                <div class="col-lg-10">
                                    <div class="uploader"><input type="file" name="image" class="file-styled"><span
                                                class="action btn btn-default legitRipple" style="user-select: none;">انتخاب فایل</span>
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
    <div id="modal_backdrop" class="modal fade" data-backdrop="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title">افزودن دسته بندی</h5>
                </div>

                <div class="modal-body">

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="display-block">عنوان</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="عنوان">
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="form-group">
                                    <label class="display-block">محتوا</label>
                                    <input type="text" class="form-control" name="description" id="description" placeholder="محتوا">
                                </div>
                            </div>
                        </div>
                </div>

                <div class="modal-footer">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="" style="margin-top:20px">
                                <button type="button" id="btn" onclick="create_cat()" class="btn btn-primary">ثبت <i
                                            class="icon-arrow-left13 position-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@stop
