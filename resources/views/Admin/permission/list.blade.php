@extends('layouts.admin')
@section('meta_ajax')

@stop
@section('script')

@stop
@section('content')
    <div class="content">
        <div class="col-lg-12" id="response">
            <div class="row">

                <div class="panel panel-flat">
                    <label style="padding: 10px 10px 0 0">دسترسی ها</label>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>نام انگلیسی</th>
                                <th>نام فارسی</th>
                                <th>ویرایش</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $val)
                            
                                <tr role="row" class="odd">
                                    <td>{{ $val->name }}</td>
                                    <td>{{ $val->title }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-xs"
                                           href="{{ route('permission.edit',['id'=>$val->id ])}}">
                                            <i class="icon-pencil7"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('permission.destroy',['id'=>$val->id ])}}"
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
                <div class="row" style="text-align: center">{{$permissions->links()}}</div>
            </div>
        </div>
    </div>

             <script>
                //pagination in permission list
                      $(document).on('click','.pagination a',function(e){
                          e.preventDefault();
                          var page=$(this).attr('href').split('page=')[1];
                          getRecords(page,'Permission');
            });      
                //end pagination in permission list
            </script>
@stop
