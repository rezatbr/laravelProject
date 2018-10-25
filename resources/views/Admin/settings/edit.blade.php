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
                        <h6 class="panel-title">ویرایش درباره ما و تماس با ما</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="{{route('setting.update',['id'=>'1'])}}" method="post" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label class="display-block" >آدرس</label>
                                        <input type="text" class="form-control" name="address" value="{{ $setting->address }}" placeholder="آدرس">
                                    </div>
                                </div>

                                <div class="col-md-11">
                                    <div class="form-group">
                                        <label class="display-block">درباره ما</label>
                                        <textarea class="form-control" rows="8" name="about_us">{{ $setting->about_us }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="display-block">تلفن</label>
                                        <input type="text" class="form-control" name="phone" value="{{ $setting->phone }}" placeholder="تلفن">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="display-block">ایمیل</label>
                                        <input type="email" class="form-control" name="email" value="{{ $setting->email }}" placeholder="ایمیل">
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

