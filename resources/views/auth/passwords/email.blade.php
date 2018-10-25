
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    @include('layouts.head')
</head>
<div class="navbar navbar-inverse bg-indigo-400">
    <div class="navbar-header">
        <img src="{{url('public/uploads/wishkey.png')}}" alt="">

    </div>


</div>
 <div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">بازیابی رمز عبور</div>

                            <div class="panel-body">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label text-center">ایمیل</label>

                                        <div class="col-md-12">
                                            <input id="email" type="email" placeholder="ایمیل خود را وارد کنید" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">
                                                بازیابی رمز عبور
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
 </div>