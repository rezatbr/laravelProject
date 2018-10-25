<div class="sidebar sidebar-main sidebar-default">
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user-material">
            <div class="category-content">
                <div class="sidebar-user-material-content">
                    <a href="#"><img src="/admin/assets/images/2552.jpg" class="img-circle img-responsive" alt=""></a>
                    <h6>گروه برنامه نویسان ویشکی</h6>
                    <span class="text-size-small">تهران،طرشت</span>
                </div>

                <div class="sidebar-user-material-menu">
                    <a href="#user-nav" data-toggle="collapse"><span>خروج از پنل</span> <i class="caret"></i></a>
                </div>
            </div>

            <div class="navigation-wrapper collapse" id="user-nav">
                <ul class="navigation" style="text-align: center">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                        <span>خروج</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>


                </ul>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-category sidebar-category-visible">
            <div class="category-content no-padding">
                <ul class="navigation navigation-main navigation-accordion">

                    <!-- Main -->
                    <li class="navigation-header"><span>{{auth()->user()->roles()->first()->title}}</span> <i class="icon-menu" title="Main pages"></i></li>
                    <li class="active"><a href="/home"><i class="icon-home4"></i> <span>داشبورد</span></a></li>
                    <li>
                        <a href="#"><i class="fa fa-users"></i> <span>مدیریت کاربران</span></a>
                        <ul>
                            <li><a href="{{route('user.index')}}">لیست کاربران</a></li>
                            <li><a href="{{route('user.create')}}">افزودن کاربر جدید</a></li>

                            <li><a href="{{route('role.create')}}">افزودن سطح دسترسی جدید</a></li>
                            <li><a href="{{route('role.index')}}">لیست سطوح دسترسی</a></li>


                            <li><a href="{{route('permission.create')}}">افزودن دسترسی جدید</a></li>
                            <li><a href="{{route('permission.index')}}">لیست دسترسی ها</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-file"></i> <span>پست ها</span></a>
                        <ul>
                            @can('add_article')
                            <li><a href="{{route('article.create')}}">افزودن پست جدید</a></li>
                            @endcan
                            @can('list_article')
                                <li><a href="{{route('article.index')}}">لیست پست ها</a></li>
                                @endcan

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bars"></i> <span>مدیریت فهرست ها</span></a>
                        <ul>
                                <li><a href="{{route('menu.create')}}">افزودن فهرست جدید</a></li>
                                <li><a href="{{route('menu.index')}}">لیست فهرست ها</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> <span>دسته بندی ها</span></a>
                        <ul>
                            @can('add_cat')
                            <li><a href="{{route('category.create')}}">افزودن دسته بندی جدید</a></li>
                            @endcan
                            @can('list_cat')
                            <li><a href="{{route('category.index')}}">لیست دسته بندی ها</a></li>
                                @endcan

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-images"></i> <span>اسلایدرها</span></a>
                        <ul>
                            @can('add_slider')
                            <li><a href="{{route('slider.create')}}">افزودن اسلایدر جدید</a></li>
                            @endcan
                            @can('list_slider')
                            <li><a href="{{route('slider.index')}}">لیست اسلایدر ها</a></li>
                                @endcan

                        </ul>
                    </li>

                    <li class="active"><a href="/Admin/user/page"><i class="fa fa-key"></i> <span>تنظیمات رمز عبور</span></a></li>
                    <li class="active"><a href="{{route('code.index')}}"><i class="fa fa-user-secret"></i> <span>کد عضویت</span></a></li>
                    <li>
                        <a href="{{route('setting.edit',['id'=>'1'])}}"><i class="fa fa-cog"></i> <span>درباره ما </span></a>
                    </li>

                    <!-- /page kits -->

                </ul>
            </div>
        </div>
        <!-- /main navigation -->

    </div>
</div>
