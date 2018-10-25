<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    @include('layouts.head')
</head>

<body class="login-container">

<!-- Main navbar -->
<div class="navbar navbar-inverse bg-indigo-400">
    <div class="navbar-header" style="padding-right: 10px">
        <img src="{{url('public/uploads/wishkey.png')}}" alt="">

    </div>

</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Registration form -->
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6 col-lg-offset-3">
                            <div class="panel registration-form">
                                <div class="panel-body">
                                    <div class="text-center">
                                        <div class=""><img src="{{url('public/uploads/wishkey.png')}}" height="60" width="60" alt=""></div>
                                        <h5 class="content-group-lg">ثبت نام <small class="display-block">ابتدا تمامی فیلدها را تکمیل کرده و سپس دکمه ی ثبت را فشار دهید</small></h5>
                                    </div>

                                    <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <input type="text" class="form-control" placeholder="نام و نام خانوادگی"  name="name" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                        <div class="form-control-feedback">
                                            <i class="icon-user-plus text-muted"></i>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input type="email" class="form-control" placeholder="ایمیل" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                        <div class="form-control-feedback">
                                            <i class="icon-mention text-muted"></i>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                                                <input type="password" class="form-control" placeholder="رمزعبور" name="password" required>
                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                         <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group has-feedback">
                                                <input type="password" class="form-control" placeholder="تکرار رمز عبور"  name="password_confirmation" required>
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <a href="/login" class="btn btn-link legitRipple"><i class="icon-arrow-left13 position-left"></i> بازگشت به فرم لاگین</a>
                                        <button type="submit" class="btn bg-blue btn-labeled btn-labeled-right ml-10"><b><i class="icon-plus3"></i></b> ثبت</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /registration form -->


                <!-- Footer -->
                <div class="footer text-muted text-center">
                   تمامی حقوق مادی و معنوی این پنل متعلق به ویشکی می باشد
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>


