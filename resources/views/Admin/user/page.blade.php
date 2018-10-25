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
                        <h6 class="panel-title">ویرایش اطلاعات</h6>
                        <div class="heading-elements">

                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <p style="padding-bottom: 20px">ابتدا ایمیل و رمز عبور فعلی خود را وارد کنید</p>

                        <form action="/Admin/user/page" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="display-block">ایمیل</label>
                                        <input type="email" class="form-control" name="email" placeholder="ایمیل خود را وارد کنید..." required>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="display-block">رمز عبور</label>
                                        <input type="password" class="form-control" name="password" placeholder="رمز ورود خود را وارد کنید..." required>

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
