@extends('layouts.admin')
@section('script')

@stop
@section('content')
    <div class="content">

        <!-- Default grid -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">ویرایش اسلایدر</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="{{route('slider.update',['id'=>$slider->id])}}" method="post" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="display-block">عنوان</label>
                                        <input type="text" class="form-control" name="title" value="{{ $slider->title }}" placeholder="عنوان">
                                    </div>
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
                                        <img width="80" height="80" src="{{ url('/public'.$slider->image )}}" onerror="this.onerror=null;this.src='/admin/assets/images/notfound.png';">
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

