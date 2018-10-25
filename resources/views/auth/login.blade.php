
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

                <!-- Advanced login -->
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <div class=""><img src="{{url('public/uploads/wishkey.png')}}" height="60" width="60" alt=""></div>
                            <h5 class="content-group">ورود به پنل <small class="display-block">لطفا اطلاعات را وارد کنید</small></h5>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <div class="form-group has-feedback has-feedback-left">

                            <input id="email" type="email" class="form-control" placeholder="ایمیل" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>

                        </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="form-group has-feedback has-feedback-left">

                            <input id="password" type="password" placeholder="رمز عبور" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group login-options">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="styled" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        مرا به خاطر بسپار
                                    </label>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="{{ route('password.request') }}">فراموشی رمزعبور</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn bg-blue btn-block">ورود <i class="icon-arrow-left13 position-right"></i></button>
                        </div>


                        <div class="content-divider text-muted form-group"><span>آیا ثبت نام نکرده اید؟</span></div>
                        <a href="/register" class="btn bg-blue btn-block content-group">ثبت نام</a>
                    </div>
                </form>
                <!-- /advanced login -->


                <!-- Footer -->

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


