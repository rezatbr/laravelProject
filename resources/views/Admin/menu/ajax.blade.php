
 <label style="padding: 10px 10px 0 0">جدول منو ها</label>

                        <div class="table-responsive">
                            <table class="table table-dynamic">
                                <thead>
                                <tr>
                                    <th>عنوان</th>
                                    <th>مادر</th>
                                    <th>وضعیت</th>
                                    <th>ویرایش</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>

                                    <tbody id="sss">

                                @foreach($menus as $val)


                                    <tr role="row" class="odd" style="background-color: {{empty($val->menu->name)?'rgba(255, 255, 255, 0.5)':'#f003'}}" id="menu_{{$val->id}}">
                                        <td style="text-align: {{empty($val->menu->name)?'center':'left'}}">{{ $val->name }}</td>
                                        <td>{{ !empty($val->menu->name)?$val->menu->name:'منوی مادر' }}</td>
                                        <td>
                                            <div class="checkbox checkbox-switchery switchery-lg">
                                                <label>
                                                    <input type="checkbox" class="switchery status" value="{{$val->status}}"
                                                           {{$val->status==1 ? "checked":""}} id="s{{$val->id}}"
                                                           onchange="update_status({{$val->id}},'menu')">
                                                </label>
                                            </div>
         

                                        </td>
                                            <td>
                                                <a class="btn btn-primary btn-xs"
                                                   href="{{ route('menu.edit',['id'=>$val->id ])}}">
                                                    <i class="icon-pencil7"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('menu.destroy',['id'=>$val->id ])}}"
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
                                    @foreach($val->subs as $val2)
                                    <tr style="background-color: rgba(63, 59, 225, 0.35)"  id="menu_{{$val2->id}}">
                                        <td style="text-align: left">{{ $val2->name }}</td>
                                        <td>{{$val2->menu->name}}</td>
                                        <td>
                                            <div class="checkbox checkbox-switchery switchery-lg">
                                                <label>
                                                    <input type="checkbox" class="switchery status" value="{{$val2->status}}"
                                                           {{$val2->status==1 ? "checked":""}} id="s{{$val2->id}}"
                                                           onchange="update_status({{$val2->id}},'menu')">
                                                </label>
                                            </div>
                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-xs"
                                               href="{{ route('menu.edit',['id'=>$val2->id ])}}">
                                                <i class="icon-pencil7"></i>
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{ route('menu.destroy',['id'=>$val2->id ])}}"
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
                                @endforeach

                                </tbody>


                            </table>
                        </div>







 <script type="text/javascript" src="/admin/assets/js/core/libraries/jquery.min.js"></script>
 <script type="text/javascript" src="/admin/assets/js/pages/form_checkboxes_radios.js"></script>
 <script>
     var $b = jQuery.noConflict(true);
     $('#sss').sortable({
         update : function () {
             var serial= $('#sss').sortable('serialize');
             var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
             $.ajax({
                 url: '/sortablemenu',
                 type: "post",
                 dataType: 'JSON',
                 data: {_token: CSRF_TOKEN,serial:serial},
                 beforeSend: function(){
                     $("#wait").css("display", "block");
                     $('.panel').css('filter','blur(1px)');
//                     $('.panel').css('display','none');
                 },
                 complete: function(data){
                     $("#wait").css("display", "none");
                     setTimeout(function(){
                         $('.row').css('display','block');
                     },1);
                 },
                 success:function(data){
                     $b("#res").html(data.view);
//                     setTimeout(function(){
//                         $('.panel').css('display','block');
//                     },1);
                     setTimeout(function(){
                         $('.panel').css('filter','blur(0)');
                     },700);
                 }
             });
         }
     });
 </script>