@extends('layouts.admin')
@section('meta_ajax')

@stop
@section('script')

@stop
@section('content')
    {{--style="padding: 2% 1%"--}}
    <div class="content">
        <div class="col-lg-12">
            <div class="row">

                <div class="panel panel-flat">
                    <label style="padding: 10px 10px 0 0">جدول کدهای عضویت</label><br>
                    <a class="btn btn-primary" href="{{route('code.generate')}}" onclick="return confirm('آیا می خواهید تعداد ۲۰ عدد کد عضویت بسازید؟')" style="margin-right: 5px">ساخت کد عضویت</a>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>شماره</th>
                                <th>کد</th>
                                <th>وضعیت</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($codes as $val)
                                <tr role="row" class="odd">
                                    <td>{{ $val->id }}</td>
                                    <td>{{ $val->code}}</td>
                                    <td><button class="btn btn-{{$val->status==0 ?'success':'danger'}}">{{$val->status==0 ?'فعال':$val->user}}</button></td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" style="text-align: center">{{$codes->links()}}</div>
            </div>
@stop
