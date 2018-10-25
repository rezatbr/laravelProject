<template>
    <div class="navbar navbar-inverse bg-indigo-400">
        <div class="navbar-header" style="padding-right: 5px">
            <a class="" href="/home"><img :src="Laravel.url" alt=""></a>

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
                <p class="navbar-text" v-text="Laravel.name"></p>
                <p class="navbar-text"><span class="label bg-success-400" v-text="Laravel.role"></span></p>
            </div>
        </div>
    </div>
</template>
<script>
    export  default {
        data(){
            return {
                Laravel: window.Laravel
            }
        }
    }
</script>