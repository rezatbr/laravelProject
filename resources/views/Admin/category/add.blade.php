@extends('layouts.admin')
@section('script')

@stop
@section('content')
    <div class="content">

        <!-- Default grid -->

            <div class="col-lg-12">
               <div class="row">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">افزودن دسته بندی</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" name="description" placeholder="محتوا">
                                    </div>
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
@stop
