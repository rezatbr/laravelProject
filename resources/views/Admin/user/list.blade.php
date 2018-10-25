@extends('layouts.admin')
@section('meta_ajax')

@stop
@section('script')

@stop
@section('content')
    <div class="content">
        <div class="col-lg-12">
            <div class="row">

                <div class="panel panel-flat">
                    <label style="padding: 10px 10px 0 0">لیست کاربران</label>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>نام</th>
                                <th>ایمیل</th>
                                <th>نقش</th>
                                <th>ویرایش</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $val)
                                <tr role="row" class="odd">
                                    <td>{{ $val->name }}</td>
                                    <td>{{ $val->email }}</td>
                                    <td>
                                        @foreach($val->roles()->get() as $index => $value)
                                            @if($index == count($val->roles()->get())-1)
                                                {{$value->title}}
                                            @else
                                                {{$value->title.","}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-xs"
                                           href="{{ route('user.edit',['id'=>$val->id ])}}">
                                            <i class="icon-pencil7"></i>
                                        </a>
                                    </td>

                                    <td>
                                        <form action="{{ route('user.destroy',['id'=>$val->id ])}}"
                                              method="post">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-xs"
                                                    onclick="return confirm('آیا مطمئن هستید؟')">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" style="text-align: center">{{$users->links()}}</div>
            </div>
@stop
