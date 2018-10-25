@extends('layouts.admin') @section('script') <script type="text/javascript" src="/admin/assets/js/plugins/pickers/color/spectrum.js"></script> <script type="text/javascript" src="/admin/assets/js/pages/picker_color.js"></script> <script type="text/javascript" src="/admin/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script> <script type="text/javascript" src="/admin/assets/js/pages/form_multiselect.js"></script> <script type="text/javascript" src="/admin/assets/js/plugins/notifications/pnotify.min.js"></script> <script type="text/javascript" src="/admin/assets/js/plugins/forms/styling/uniform.min.js"></script> @stop @section('content') <div class="content">

        <!-- Default grid -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">ویرایش پست</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="{{route('article.update',['id'=>$article->id])}}" method="post" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="display-block">عنوان</label>
                                        <input type="text" class="form-control" name="title" value="{{ $article->title }}" placeholder="عنوان">
                                    </div>
                                </div>

                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label class="display-block">محتوا</label>
                                        <input type="text" class="form-control" name="description" value="{{ $article->description }}"  placeholder="محتوا">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>دسته بندی ها</label>
                                    <div class="multi-select-full">
                                        <select class="multiselect" multiple="multiple" name="cat[]">
                                            @foreach($categories as $cats)
                                            <option {{in_array($cats->id,$article->categories()->get()->pluck('id')->toArray())? 'selected' : ''}} value="{{ $cats->id }}">{{ $cats->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="display-block">انتخاب رنگ</label>
                                    <input type="text" class="form-control colorpicker-palette" name="color"
                                           value="{{ $article->color }}">
                                </div>
                            </div>
                            <div class="form-group">

                                <label class="display-block col-lg-2">انتخاب عکس</label>
                                <div class="col-lg-10">
                                    <div class="uploader">
                                        <input type="file" name="image" class="file-styled">
                                        <span
                                                class="action btn btn-default legitRipple" style="user-select: none;">
                                            انتخاب فایل</span>
                                        <img width="80" height="80" src="{{ url('public'.$article->image) }}" onerror="this.onerror=null;this.src='/admin/assets/images/notfound.png';">
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

