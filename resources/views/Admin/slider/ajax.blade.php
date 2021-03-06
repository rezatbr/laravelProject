
<script type="text/javascript" src="/admin/assets/js/core/libraries/jquery.min.js"></script>
<script type="text/javascript" src="/admin/assets/js/pages/form_checkboxes_radios.js"></script>
<div class="row">
                <div class="panel panel-flat">
                    <label style="padding: 10px 10px 0 0">جدول اسلایدر ها</label>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>عنوان</th>
                                <th>تصویر</th>
                                <th>وضعیت</th>
                                @can('edit_slider')
                                <th>ویرایش</th>
                                @endcan
                                @can('delete_slider')
                                <th>حذف</th>
                                    @endcan
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $val)
                                <tr role="row" class="odd">
                                    <td>{{ $val->title }}</td>
                                    <td><img src="{{ url('/public'.$val->image) }}" width="50" height="50" onerror="this.onerror=null;this.src='/admin/assets/images/notfound.png';"></td>
                                    <td>
                                        <div class="checkbox checkbox-switchery switchery-lg">
                                            <label>
                                                <input type="checkbox" class="switchery status" value="{{$val->status}}"
                                                       {{$val->status==1 ? "checked":""}} id="s{{$val->id}}"
                                                       onclick="update_status({{$val->id}},'slider')">
                                            </label>
                                        </div>
                                    </td>
                                    @can('edit_slider')
                                    <td>
                                        <a class="btn btn-primary btn-xs"
                                           href="{{ route('slider.edit',['id'=>$val->id ])}}">
                                            <i class="icon-pencil7"></i>
                                        </a>
                                    </td>
                                    @endcan
                                    @can('delete_slider')
                                    <td>
                                        <form action="{{ route('slider.destroy',['id'=>$val->id ])}}"
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
                <div class="row" style="text-align: center">{{$sliders->links()}}</div>
            </div>