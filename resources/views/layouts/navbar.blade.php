<div class="navbar navbar-inverse bg-indigo-400">
    <div class="navbar-header" style="padding-right: 5px">
        <a class="" href="/home"><img src="{{url('public/uploads/wishkey.png')}}" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>


        </ul>

        <div class="navbar-right">
            <p class="navbar-text">وقت بخیر {{Auth()->user()->name}}</p>
            <p class="navbar-text"><span style="font-size: 14px" class="label bg-success-400">{{parsinum(jdate(time())->format('date'))}}</span></p>

        </div>
    </div>
</div>