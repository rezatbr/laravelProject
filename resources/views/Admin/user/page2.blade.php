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

                            <form action="/Admin/user/page2/{{$user->id}}" method="post" enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                {{csrf_field()}}

                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label class="display-block">رمز عبور جدید</label>
                                            <input type="password" class="form-control" name="password"
                                                    placeholder=" رمز عبور جدید">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                         <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                            @endif
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group has-feedback  {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label class="display-block"> تکرار رمز عبور جدید</label>

                                            <input type="password" class="form-control"
                                                   placeholder="تکرار رمز عبور جدید" name="password_confirmation"
                                                   >

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
