@extends('layouts.admin')
@section('meta_ajax')

@stop
@section('script')

@stop
@section('content')
    {{--style="padding: 2% 1%"--}}
    <div class="content">
        <div class="col-lg-12" id="response">
            <div class="row">
                <div class="panel panel-flat">
                    <label style="padding: 10px 10px 0 0">جدول دسته بندی ها</label>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>عنوان</th>
                                <th>تصویر</th>
                                @can('edit_cat')
                                <th>ویرایش</th>
                                @endcan
                                @can('delete_cat')
                                <th>حذف</th>
                                    @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $val)
                                <tr role="row" class="odd">
                                    <td>{{ $val->title }}</td>
                                    <td><img src="{{ url('/public'.$val->image )}}" width="50" height="50"  onerror="this.onerror=null;this.src='/admin/assets/images/notfound.png';"></td>
                                    @can('edit_cat')
                                    <td>
                                        <a class="btn btn-primary btn-xs"
                                           href="{{ route('category.edit',['id'=>$val->id ])}}">
                                            <i class="icon-pencil7"></i>
                                        </a>
                                    </td>
                                    @endcan
                                    @can('delete_cat')
                                    <td>
                                        <form action="{{ route('category.destroy',['id'=>$val->id ])}}"
                                              method="post">
                                            {{ method_field('delete') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-xs"
                                                    onclick="return confirm('آیا مطمئن هستید؟')">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                        @endcan
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" style="text-align: center">{{$categories->links()}}</div>
            </div>
        </div>
    </div>
            <script>
                //pagination in category list
            $(document).on('click','.pagination a',function(e){
                    e.preventDefault();
                    var page=$(this).attr('href').split('page=')[1];
                    getRecords(page,'Category');
            });
                //end pagination in category list
            </script>
@stop