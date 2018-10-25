<template>
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
                        <a href="/logout"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-switch2"></i>
                            <span>خروج</span>
                        </a>

                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" :value="Laravel.Tk"/>
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
                        <li class="navigation-header"><span v-text="Laravel.role"></span> <i class="icon-menu" title="Main pages"></i></li>
                        <li class="active"><a href="/home"><i class="icon-home4"></i> <span>داشبورد</span></a></li>
                        <li>
                            <a href="#"><i class="fa fa-users"></i> <span>مدیریت کاربران</span></a>
                            <ul>
                                <li><a :href="Laravel.userindex">لیست کاربران</a></li>
                                <li><a :href="Laravel.usercreate">افزودن کاربر جدید</a></li>

                                <li><a :href="Laravel.rolecreate">افزودن سطح دسترسی جدید</a></li>
                                <li><a :href="Laravel.roleindex">لیست سطوح دسترسی</a></li>


                                <li><a :href="Laravel.permissioncreate">افزودن دسترسی جدید</a></li>
                                <li><a :href="Laravel.permissionindex">لیست دسترسی ها</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file"></i> <span>پست ها</span></a>
                            <ul>
                                <li v-if="Laravel.canarticleadd"><a :href="Laravel.articlecreate">افزودن پست جدید</a></li>
                                <li v-if="Laravel.canarticleindex"><a :href="Laravel.articleindex">لیست پست ها</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap"></i> <span>دسته بندی ها</span></a>
                            <ul>
                                <li v-if="Laravel.cancategoryadd"><a :href="Laravel.categoryadd">افزودن دسته بندی جدید</a></li>
                                <li v-if="Laravel.cancategorylist"><a :href="Laravel.categorylist">لیست دسته بندی ها</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-images"></i> <span>اسلایدرها</span></a>
                            <ul>

                                <li v-if="Laravel.canslideradd"><a :href="Laravel.slideradd">افزودن اسلایدر جدید</a></li>
                                <li v-if="Laravel.cansliderlist"><a :href="Laravel.sliderlist">لیست اسلایدر ها</a></li>
                            </ul>
                        </li>

                        <li class="active"><a href="/Admin/user/page"><i class="fa fa-key"></i> <span>تنظیمات رمز عبور</span></a></li>
                        <li class="active"><a href="Laravel.code"><i class="fa fa-user-secret"></i> <span>کد عضویت</span></a></li>
                        <li>
                            <a :href="Laravel.setting"><i class="fa fa-cog"></i> <span>درباره ما </span></a>
                        </li>

                        <!-- /page kits -->

                    </ul>
                </div>
            </div>
            <!-- /main navigation -->

        </div>
    </div>
</template>
<script>
    export  default {
        data(){
            return{
                Laravel:window.Laravel
            }
        }
    }
</script>