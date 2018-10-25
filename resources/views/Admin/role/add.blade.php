@extends('layouts.admin')
@section('meta_ajax')

@stop
@section('script')
<script type="text/javascript" src="/admin/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
<script type="text/javascript" src="/admin/assets/js/pages/form_multiselect.js"></script>
<script type="text/javascript" src="/admin/assets/js/plugins/forms/styling/uniform.min.js"></script>

@stop
@section('content')
    <div class="content">

        <!-- Default grid -->

            <div class="col-lg-12">
               <div class="row">
                <div class="panel panel-flat">
                    <div class="panel-heading">
                        <h6 class="panel-title">افزودن سطح دسترسی</h6>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                                <li><a data-action="reload"></a></li>
                                <li><a data-action="close"></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="panel-body">
                        <form action="{{route('role.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="display-block">نام انگلیسی</label>
                                        <input type="text" class="form-control" name="en_name" placeholder="نام انگلیسی" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="display-block">نام فارسی</label>
                                        <input type="text" class="form-control" name="fa_name" placeholder="نام فارسی" required>
                                    </div>
                                </div>
                            <div class="row">
                              <div class="col-lg-4">


                                <div class="form-group">

                                    <div class="multi-select-full">
                                      <label>انتخاب دسترسی</label>

                                        <select class="multiselect" multiple="multiple" name="permissions[]" required>

                                            @foreach($permissions as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
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
