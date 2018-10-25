@extends('layouts.admin')
@section('script')
<script type="text/javascript" src="/admin/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script type="text/javascript" src="/admin/assets/js/pages/form_multiselect.js"></script>
<script type="text/javascript" src="/admin/assets/js/plugins/forms/styling/uniform.min.js"></script>
@stop
@section('content')
    <div class="content">

        <!-- Default grid -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">ویرایش کاربر</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="{{route('user.update',['id'=>$user->id])}}" method="post" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label class="display-block">نام</label>
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                         <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label class="display-block">ایمیل</label>
                                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                         <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label class="display-block"> رمز عبور جدید</label>
                                        <input type="password" class="form-control" name="password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                         <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                              <div class="col-lg-4">


                                <div class="form-group">

                                    <div class="multi-select-full">
                                      <label>انتخاب سطح دسترسی</label>

                                        <select class="multiselect" multiple="multiple" name="permissions[]" required>

                                            @foreach($roles as $cat)
                                                <option @foreach($user->roles()->get() as $cats) @if($cat->id==$cats->id) selected @endif @endforeach value="{{ $cat->id }}">{{ $cat->title }}</option>
                                            @endforeach

                                        </select>
                                    </div>
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
