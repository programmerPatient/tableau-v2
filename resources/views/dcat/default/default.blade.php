<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">

    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{$system->web_title}}</title>

    <meta name="referrer" content="no-referrer"/>




    <script src="/dcat-admin/static/dcat-admin/dcat/plugins/vendors.min.js?v2.0.17-beta"></script>
    <script src="/dcat-admin/static/dcat-admin/dcat/js/dcat-app.js?v2.0.17-beta"></script>

    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/adminlte/adminlte.css?v2.0.17-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/vendors.min.css?v2.0.17-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/extensions/toastr.css?v2.0.17-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/tables/datatable/datatables.min.css?v2.0.17-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/dcat-app.css?v2.0.17-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/nunito.css?v2.0.17-beta">
</head>


<body
    class="dcat-admin-body sidebar-mini layout-fixed
    navbar-fixed-top " >

<script>
    var Dcat = CreateDcat({"pjax_container_selector":"#pjax-container","token":"aYatgoV2Kxiw3EobZraDENOs1N48ShfTPegnPSFD","lang":{"delete_confirm":"Are you sure to delete this item ?","confirm":"Confirm","cancel":"Cancel","refresh_succeeded":"Refresh succeeded !","close":"Close","selected_options":":num options selected","exceed_max_item":"Maximum items exceeded.","500":"Internal server error !","403":"Permission deny !","401":"Unauthorized !","419":"Page expired !"},"colors":{"info":"#3085d6","success":"#21b978","danger":"#ea5455","warning":"#dda451","indigo":"#5c6bc6","blue":"#3085d6","red":"#ea5455","orange":"#dda451","green":"#21b978","cyan":"#7367f0","purple":"#5b69bc","custom":"#59a9f8","pink":"#ff8acc","dark":"#22292f","white":"#fff","white50":"hsla(0,0%,100%,.5)","blue1":"#007ee5","blue2":"#3d97dd","orange1":"#ffcc80","orange2":"#F99037","yellow":"#edc30e","indigo-darker":"#495abf","red-darker":"#bd4147","blue-darker":"#236bb0","cyan-darker":"#6355ee","gray":"#b9c3cd","light":"#f7f7f9","tear":"#01847f","tear1":"#00b5b5","dark20":"#f6fbff","dark30":"#f4f7fa","dark35":"#e7eef7","dark40":"#ebf0f3","dark50":"#d3dde5","dark60":"#bacad6","dark70":"#b3b9bf","dark80":"#7c858e","dark85":"#5c7089","dark90":"#252d37","font":"#414750","gray-bg":"#f1f1f1","border":"#ebeff2","input-border":"#d9d9d9","background":"#eff3f8","dark-mode-bg":"#2c2c43","dark-mode-color":"#222233","dark-mode-color2":"#1e1e2d","dark-mode-font":"##a8a9bb","primary":"#586cb1","primary-darker":"#4c60a3","link":"#4c60a3"},"dark_mode":false,"sidebar_dark":false,"sidebar_light_style":"sidebar-light-primary"});
</script>



<div class="wrapper">
    <div class="main-menu">
        <div class="main-menu-content">
            <aside class="main-sidebar sidebar-light-primary shadow">
                <div class="navbar-header">
                    <ul class="nav navbar-nav flex-row">
                        <li class="nav-item mr-auto">
                            <a href="/adminfour/index/index" class="navbar-brand waves-effect waves-light">
                                <span class="logo-mini"><img src="{{$system->logo_url}}"></span>
                                <span class="logo-lg"><img src="{{$system->logo_url}}" width="35"> &nbsp;{{$system->web_title}}</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="sidebar p-0 pb-3">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" style="padding-top: 10px">
                        <li class="nav-item">
                            <a  href="/adminfour/index/index" class="nav-link active">
                                <i class="fa fa-fw feather icon-bar-chart-2"></i>
                                <p>
                                    首页
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link">
                                <i class="fa fa-fw feather icon-settings"></i>
                                <p>
                                    设置
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a  href="/adminfour/system/update" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                        <p>
                                            系统设置
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a  href="http://103.39.211.179:8080/admin/auth/roles" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                        <p>
                                            短信SDK配置
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link">
                                <i class="fa fa-fw feather icon-grid"></i>
                                <p>
                                    列表
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a  href="http://103.39.211.179:8080/admin/components/grid" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-menu"></i>
                                        <p>
                                            收藏列表
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a  href="http://103.39.211.179:8080/admin/reports" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-menu"></i>
                                        <p>
                                            会员列表
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a  href="http://103.39.211.179:8080/admin/fixed-columns" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-menu"></i>
                                        <p>
                                            用户申请列表
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link">
                                <i class="fa fa-fw fa-film"></i>
                                <p>
                                    权限管理
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a  href="http://103.39.211.179:8080/admin/movies/in-theaters" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                        <p>
                                            权限组
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a  href="http://103.39.211.179:8080/admin/movies/coming-soon" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                        <p>
                                            权限控制
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a  href="http://103.39.211.179:8080/admin/full" class="nav-link ">
                                <i class="fa fa-fw fa-cut"></i>
                                <p>
                                    更新缓存
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="http://103.39.211.179:8080/admin/full" class="nav-link ">
                                <i class="fa fa-fw fa-cut"></i>
                                <p>
                                    数据导入
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="http://103.39.211.179:8080/admin/full" class="nav-link ">
                                <i class="fa fa-fw fa-cut"></i>
                                <p>
                                    报表查询
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-light navbar-shadow " style="top: 0;">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mr-auto">
                            <a class="nav-link menu-toggle" data-widget="pushmenu" style="cursor: pointer;">
                                <i class="fa fa-bars font-md-2"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="navbar-collapse">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    </div>
                    @if(Session::get('user_type') == '1')
                    <div class="float-right d-flex align-items-center">
                        <span style="cursor: pointer" data-toggle="modal" data-target="#admin-setting-config">
                            <ul class="nav navbar-nav">
                                <a href="/adminfour/system/update">
                                <li class="nav-item"> &nbsp;
                                    <i class="feather icon-edit" style="font-size: 1.5rem"></i>
                                    网站设置 &nbsp;
                                </li>
                                </a>
                            </ul>
                        </span>
                    </div>
                    @endif
                    <div class="float-right d-flex align-items-center">
                        <span style="cursor: pointer" data-toggle="modal" data-target="#admin-setting-config">
                            <ul class="nav navbar-nav">
                                <li class="dropdown dropdown-user nav-item">
                                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                        <div class="user-nav d-sm-flex d-none">
                                            <span class="user-name text-bold-600">站点切换</span>
                                            @foreach($allSites as $value)
                                                @if($value->id == Session::get('credentials'))
                                                    <span class="user-status"><i class="fa fa-circle text-success"></i>{{$value->name}}</span>
                                                @endif
                                            @endforeach
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        @foreach($allSites as $value)
                                            <a href="javascript:;" onclick="update('{{$value->id}}')" class="dropdown-item" @if($value->id == Session::get('credentials')) style="color: #586cb1" @endif>
                                                <i class="feather icon-user"></i>{{$value->name}}
                                            </a>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                        </span>
                    </div>

                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name text-bold-600">{{$name}}</span>
                                    <span class="user-status"><i class="fa fa-circle text-success"></i> Online</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="http://103.39.211.179:8080/admin/auth/setting" class="dropdown-item">
                                    <i class="feather icon-user"></i> Setting
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="http://103.39.211.179:8080/admin/auth/logout">
                                    <i class="feather icon-power"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <ul class="main-search-list-defaultlist d-none">
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer">
            <a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span>
                    <span>No results found.</span>
                </div>
            </a>
        </li>
    </ul>
    <script>
        $('.menu-toggle').on('click', function () {
            $(this).find('i').toggleClass('icon-circle icon-disc')
        })
    </script>
    <div class="app-content content">
        @yield('content')
    </div>
</div>

<footer class="main-footer pt-1">
    <p class="clearfix blue-grey lighten-2 mb-0 text-center">
            <span class="text-center d-block d-md-inline-block mt-25">
                Powered by
                <a target="_blank" href="https://github.com/jqhph/dcat-admin">Dcat Admin</a>
                <span>&nbsp;·&nbsp;</span>
                v2.0.17-beta
            </span>

        <button class="btn btn-primary btn-icon scroll-top pull-right" style="position: fixed;bottom: 2%; right: 10px;display: none">
            <i class="feather icon-arrow-up"></i>
        </button>
    </p>
</footer>



<script src="/dcat-admin/static/dcat-admin/adminlte/adminlte.js?v2.0.17-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/extensions/toastr.min.js?v2.0.17-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/jquery-pjax/jquery.pjax.min.js?v2.0.17-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-validator/validator.min.js?v2.0.17-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/layer/layer.js?v2.0.17-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/jquery.initialize/jquery.initialize.min.js?v2.0.17-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/charts/apexcharts.min.js?v2.0.17-beta"></script>

<script>Dcat.boot();</script>
<script>
    function update(v) {
        window.location.href = '/adminfour/index/index?'+'?siteId='+v
    };
</script>

</body>

</html>
