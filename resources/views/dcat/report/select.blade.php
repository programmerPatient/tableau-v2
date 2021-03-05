<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">

    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{$system->web_title}}</title>

    <meta name="referrer" content="no-referrer"/>


    <script src="/dcat-admin/static/dcat-admin/dcat/plugins/vendors.min.js?v2.0.18-beta"></script>
    <script src="/dcat-admin/static/dcat-admin/dcat/js/dcat-app.js?v2.0.18-beta"></script>
    <script id="-cdnjs-cloudflare-com-ajax-libs-KaTeX-0-3-0-katex-min" type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/KaTeX/0.3.0/katex.min.js"></script>
    <script type="text/javascript" src="/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/adminlte/adminlte.css?v2.0.18-beta">
    <link rel="stylesheet" href=/dcat-admin/static/dcat-admin/dcat/plugins/editor-md/css/editormd.preview.min.css?v2.0.18-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/vendors.min.css?v2.0.18-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/extensions/toastr.css?v2.0.18-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/tables/datatable/datatables.min.css?v2.0.18-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/dcat-app.css?v2.0.18-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/nunito.css?v2.0.18-beta">
    <link rel="stylesheet" href=/dcat-admin/static/dcat-admin/dcat/plugins/select/select2.min.css?v2.0.18-beta">
    <link rel="stylesheet" href=/dcat-admin/static/dcat-admin/dcat/plugins/switchery/switchery.min.css?v2.0.18-beta">
    <link rel="stylesheet" href=/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css?v2.0.18-beta">
</head>


<body
    class="dcat-admin-body sidebar-mini layout-fixed
        navbar-fixed-top ">


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
                            <a  href="/adminfour/index/index" class="nav-link">
                                <i class="fa fa-fw feather icon-bar-chart-2"></i>
                                <p>
                                    首页
                                </p>
                            </a>
                        </li>
                        @if(Session::get('user_type') == '1')
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
                                        <a  href="/adminfour/sms/update" class="nav-link ">
                                            &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                            <p>
                                                短信SDK配置
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link">
                                <i class="fa fa-fw feather icon-grid"></i>
                                <p>
                                    列表
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                @if(!Session::get('isVisitor'))
                                    <li class="nav-item">
                                        <a  href="/adminfour/report/collection/index" class="nav-link ">
                                            &nbsp;<i class="fa fa-fw feather icon-menu"></i>
                                            <p>
                                                收藏列表
                                            </p>
                                        </a>
                                    </li>
                                @endif
                                @if(Session::get('user_type') == '1')
                                    <li class="nav-item">
                                        <a  href="/adminfour/member/index" class="nav-link ">
                                            &nbsp;<i class="fa fa-fw feather icon-menu"></i>
                                            <p>
                                                会员列表
                                            </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a  href="/adminfour/apply/index" class="nav-link ">
                                            &nbsp;<i class="fa fa-fw feather icon-menu"></i>
                                            <p>
                                                用户申请列表
                                            </p>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        </li>
                        @if(Session::get('user_type') == '1')
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
                                        <a  href="/adminfour/user/group" class="nav-link ">
                                            &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                            <p>
                                                权限组
                                            </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a  href="/adminfour/report/index" class="nav-link ">
                                            &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                            <p>
                                                权限控制
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if(Session::get('isVisitor'))
                            <li class="nav-item">
                                <a  href="/register" class="nav-link">
                                    <i class="fa fa-fw feather icon-sidebar "></i>
                                    <p>
                                        前往注册
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Session::get('user_type') == '1')
                            <li class="nav-item">
                                <a  href="#" class="nav-link" onclick="cacheUpdate()">
                                    <i class="fa fa-fw feather icon-sidebar "></i>
                                    <p>
                                        更新缓存
                                    </p>
                                </a>
                            </li>
                        @endif
                        @if(Session::get('execl') =='1')
                            <li class="nav-item">
                                <a  href="/adminfour/excel/insert" class="nav-link ">
                                    <i class="fa fa-fw feather icon-server"></i>
                                    <p>
                                        数据导入
                                    </p>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a  href="/adminfour/report/select" class="nav-link active">
                                <i class="fa fa-fw feather icon-codepen"></i>
                                <p>
                                    报表查询
                                </p>
                            </a>
                        </li>
                        @if(Session::get('user_type') == '2' && !Session::get('isVisitor'))
                            <li class="nav-item">
                                <a  href="/adminfour/member/info" class="nav-link ">
                                    <i class="fa fa-fw feather icon-codepen"></i>
                                    <p>
                                        个人信息
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  href="/adminfour/member/apply" class="nav-link ">
                                    <i class="fa fa-fw feather icon-codepen"></i>
                                    <p>
                                        权限申请
                                    </p>
                                </a>
                            </li>
                        @endif
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link">
                                <i class="fa fa-fw feather icon-grid"></i>
                                <p>
                                    报表
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            @if(Session::get('p'))
                                @foreach(Session::get('p') as $val)
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                                &nbsp;<i class="fa fa-fw feather icon-list"></i>
                                                <p>
                                                    {{$val['name']}}
                                                    <i class="right fa fa-angle-left"></i>
                                                </p>
                                            </a>
                                            @foreach($val["project"] as $value)
                                                <ul class="nav nav-treeview">
                                                    <li class="nav-item has-treeview">
                                                        <a href="#" class="nav-link " style="margin-left: 6px;">
                                                            &nbsp;<i class="fa fa-fw feather icon-menu"></i>
                                                            <p>
                                                                {{$value['name']}}
                                                                <i class="right fa fa-angle-left"></i>
                                                            </p>
                                                        </a>
                                                        @foreach($value['views'] as $vieVule)
                                                            <ul class="nav nav-treeview">
                                                                <li class="nav-item">
                                                                    <a @if(Session::get('user_type') == '1') href="/adminfour/table/index?contentUrl={{$vieVule->contentUrl}}&filter=iframeSizedToWindow=true&id={{$vieVule->id}}" @else href="/adminfour/table/index?contentUrl={{$vieVule->contentUrl}}&filter={{$vieVule->filter}}&id={{$vieVule->id}}" @endif class="nav-link " style="margin-left: 12px;">
                                                                    &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                                                    <p>
                                                                        {{$vieVule->name}}
                                                                    </p>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        @endforeach
                                                    </li>
                                                </ul>
                                            @endforeach
                                        </li>
                                    </ul>
                                @endforeach
                            @endif
                        </li>

                    </ul>
                </div>
            </aside>
        </div>
    </div>
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-light navbar-shadow "
         style="top: 0;">
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
                                    <a class="dropdown-toggle nav-link dropdown-user-link" href="#"
                                       data-toggle="dropdown">
                                        <div class="user-nav d-sm-flex d-none">
                                            <span class="user-name text-bold-600">站点切换</span>
                                            @foreach(Session::get('allSites') as $value)
                                                @if($value->id == Session::get('credentials'))
                                                    <span class="user-status"><i class="fa fa-circle text-success"></i>{{$value->name}}</span>
                                                @endif
                                            @endforeach
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        @foreach(Session::get('allSites') as $value)
                                            <a href="javascript:;" onclick="update('{{$value->id}}')" class="dropdown-item"
                                               @if($value->id == Session::get('credentials')) style="color: #586cb1" @endif>
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
                                    <span class="user-name text-bold-600">{{Session::get('user_name')}}</span>
                                    <span class="user-status"><i class="fa fa-circle text-success"></i> Online</span>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="http://103.39.211.179:8080/admin/auth/setting" class="dropdown-item">
                                    <i class="feather icon-user"></i> Setting
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="javascript:;" onClick="Logout()">
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
        <div class="content-wrapper" id="pjax-container" style="top: 0;min-height: 900px;">
            <style>.main-sidebar .nav-sidebar .nav-item > .nav-link {
                    border-radius: .1rem;
                }</style>

            <div class="content-header">
                <section class="content-header breadcrumbs-top">
                    <h1 class=" float-left">
                        <span class="text-capitalize">报表查询</span>
                    </h1>

                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb float-right text-capitalize">
                            <li class="breadcrumb-item"><a href="/adminfour/index/index"><i
                                        class="fa fa-dashboard"></i>首页</a></li>
                            <li class="breadcrumb-item">
                                报表查询
                            </li>
                        </ol>
                    </div>

                    <div class="clearfix"></div>

                </section>
            </div>

            <div class="content-body" id="app">


                <div class="row ">
                    <div class="col-md-12">
                        <div class="dcat-box">

                            <div class="d-block pb-0">
                                <div class="custom-data-table-header">
                                    <div class="table-responsive">
                                        <div class="top d-block clearfix p-0">
                                            <button data-action="refresh"
                                                    class="btn btn-primary grid-refresh btn-mini btn-outline refresh"
                                                    style="margin-right:3px">
                                                <i class="feather icon-refresh-cw"></i><span class="d-none d-sm-inline">&nbsp; 刷新</span>
                                            </button>
                                            <div class="table-filter">
                                                <label style="width: 18rem">
                                                    <input type="search" class="form-control form-control-sm quick-search-input" placeholder="Search" name="_search_" onchange="InstantSearch(this)" value="" auto="1">
                                                </label>
                                            </div>

                                            <div class="pull-right" data-responsive-table-toolbar="grid-table">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="page-container"></div>
                            <div class="table-responsive  table-wrapper complex-container table-middle mt-1 remove">
                                <table class="table custom-data-table data-table table-bordered complex-headers"
                                       id="grid-table">
                                    <thead>
                                    <tr>
                                        <th>
                                            <div
                                                class="vs-checkbox-con vs-checkbox-primary checkbox-grid checkbox-grid-header">
                                                <input type="checkbox" class="select-all grid-select-all">
                                                <span class="vs-checkbox"><span class="vs-checkbox--check"><i
                                                            class="vs-icon feather icon-check"></i></span></span>
                                            </div>
                                        </th>
                                        <th>项目名</th>
                                        <th>工作簿名</th>
                                        <th>报表名</th>
                                        <th>跳转到该页面</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($p as $value)
                                        <tr>
                                            <td>
                                                <div
                                                    class="vs-checkbox-con vs-checkbox-primary checkbox-grid checkbox-grid-column">
                                                    <input type="checkbox" class="grid-row-checkbox" data-id="1"
                                                           data-label="Mrs. Sadye Bahringer Jr." value="{{$value->id}}" name="ids">
                                                    <span class="vs-checkbox"><span class="vs-checkbox--check"><i
                                                                class="vs-icon feather icon-check"></i></span></span>
                                                </div>
                                            </td>
                                            <td>{{$value['project']}}</td>
                                            <td>{{$value['workBook']}}</td>
                                            <td>{{$value['view']->name}}</td>
                                            <td>
                                                <a href="/adminfour/table/index?contentUrl={{$value['view']->contentUrl}}&filter={{$value['filter']}}" data-title="{{$value->name}}">
                                                    <input type="button" class="btn btn-primary " value="跳转">
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>


                    </div>
                </div>


            </div>
            <div id="admin-setting-config" class="modal fade" role="dialog">
                <div class="modal-dialog   modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="feather icon-edit" style="font-size: 1.5rem"></i> 网站设置
                            </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body"></div>

                    </div>
                </div>
            </div>
            <div id="modal-xnr0llIB" class="modal fade" role="dialog">
                <div class="modal-dialog   modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">映射tablau用户</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body"></div>

                    </div>
                </div>
            </div>
            <div id="modal-JgWf6oat" class="modal fade" role="dialog">
                <div class="modal-dialog   modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">弹窗标题</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="async-table"
                                 data-url="http://103.39.211.179:8080/admin/dcat-api/render?key=1&amp;_simple_=1&amp;renderable=App_Admin_Renderable_UserTable"
                                 style="min-height: 200px"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="main-footer pt-1">
    <p class="clearfix blue-grey lighten-2 mb-0 text-center">
            <span class="text-center d-block d-md-inline-block mt-25">
                Powered by
                <a target="_blank" href="https://github.com/jqhph/dcat-admin">Dcat Admin</a>
                <span>&nbsp;·&nbsp;</span>
                v2.0.18-beta
            </span>

        <button class="btn btn-primary btn-icon scroll-top pull-right"
                style="position: fixed;bottom: 2%; right: 10px;display: none">
            <i class="feather icon-arrow-up"></i>
        </button>
    </p>
</footer>


<script src="/dcat-admin/static/dcat-admin/adminlte/adminlte.js?v2.0.18-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/extensions/toastr.min.js?v2.0.18-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/jquery-pjax/jquery.pjax.min.js?v2.0.18-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-validator/validator.min.js?v2.0.18-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/layer/layer.js?v2.0.18-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/jquery.initialize/jquery.initialize.min.js?v2.0.18-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/extra/grid-extend.js?v2.0.18-beta"></script>
<script src=/dcat-admin/static/dcat-admin/dcat/plugins/editor-md/editormd.min.js?v2.0.18-beta"></script>
<script src=/dcat-admin/static/dcat-admin/dcat/plugins/editor-md/lib/jquery.flowchart.min.js?v2.0.18-beta"></script>
<script src=/dcat-admin/static/dcat-admin/dcat/plugins/editor-md/lib/flowchart.min.js?v2.0.18-beta"></script>
<script src=/dcat-admin/static/dcat-admin/dcat/plugins/editor-md/lib/sequence-diagram.min.js?v2.0.18-beta"></script>
<script src=/dcat-admin/static/dcat-admin/dcat/plugins/editor-md/lib/underscore.min.js?v2.0.18-beta"></script>
<script src=/dcat-admin/static/dcat-admin/dcat/plugins/editor-md/lib/prettify.min.js?v2.0.18-beta"></script>
<script src=/dcat-admin/static/dcat-admin/dcat/plugins/editor-md/lib/marked.min.js?v2.0.18-beta"></script>
<script src=/dcat-admin/static/dcat-admin/dcat/plugins/editor-md/lib/raphael.min.js?v2.0.18-beta"></script>

<script type="text/javascript" src="/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>


{{--<script>Dcat.boot();</script>--}}
<script>

    function update(v) {
        window.location.href = '/adminfour/index/index?'+'?siteId='+v
    };

    function member_auth(title,url,id,w,h){
        layer_show(title,url,w,h);
    }
    $('.refresh').click(function () {
        window.location.reload();
    });
    function execlStatus(that,id) {
        var isExec = $(that).attr("value");
        if(isExec == 0)
            var excel = 1;
        else
            var excel = 0;
        $.ajax({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
            type: 'post',
            url: "/adminfour/member/excel/"+id,//自己提交给自己可以不写url
            data: {"excel":excel},
            success: function(data){
                if(data.code == 200){
                    if(isExec == 0){
                        $(that).css({"background-color": "rgb(88, 108, 177)", "border-color": "rgb(88, 108, 177)", "box-shadow": "rgb(88, 108, 177) 0px 0px 0px 11px inset", "transition": "border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s"});
                        $(that).children('small').css({"left": "13px", "background-color": "rgb(255, 255, 255)", "transition": "background-color 0.4s ease 0s, left 0.2s ease 0s"});
                        $(that).attr("value",1);
                        layer.msg('开启成功!',{icon:1,time:1000});
                    }else{
                        $(that).css({"background-color": "rgb(255, 255, 255)", "border-color": "rgb(223, 223, 223)", "box-shadow": "rgb(223, 223, 223) 0px 0px 0px 0px inset", "transition": "border 0.4s ease 0s, box-shadow 0.4s ease 0s"});
                        $(that).children('small').css({"left": "0px", "transition": "background-color 0.4s ease 0s, left 0.2s ease 0s"});
                        $(that).attr("value",0);
                        layer.msg('关闭成功!',{icon:1,time:1000});
                    }

                }else{
                    layer.msg('修改失败,以下名字重复',{icon:2,time:2000});
                }
            },
            error: function(xhr, textis_nav, errorThrown){
                xhr = JSON.parse(xhr.responseText)
                var msg = '';
                for (let key in xhr['errors']) {
                    msg += xhr['errors'][key][0];
                    break;
                }
                layer.msg(msg,{icon:2,time:1000});
            }
        });

    }

    function Status(that,id) {
        var isExec = $(that).attr("value");
        if(isExec == 1)
            var excel = 2;
        else
            var excel = 1;
        $.ajax({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
            type: 'post',
            url: "/adminfour/table/status",//自己提交给自己可以不写url
            data: {"type":excel,"id":id},
            success: function(data){
                if(data.code == 200){
                    if(isExec == 1){
                        $(that).css({"background-color": "rgb(88, 108, 177)", "border-color": "rgb(88, 108, 177)", "box-shadow": "rgb(88, 108, 177) 0px 0px 0px 11px inset", "transition": "border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s"});
                        $(that).children('small').css({"left": "13px", "background-color": "rgb(255, 255, 255)", "transition": "background-color 0.4s ease 0s, left 0.2s ease 0s"});
                        $(that).attr("value",2);
                        layer.msg('开启成功!',{icon:1,time:1000});
                    }else{
                        $(that).css({"background-color": "rgb(255, 255, 255)", "border-color": "rgb(223, 223, 223)", "box-shadow": "rgb(223, 223, 223) 0px 0px 0px 0px inset", "transition": "border 0.4s ease 0s, box-shadow 0.4s ease 0s"});
                        $(that).children('small').css({"left": "0px", "transition": "background-color 0.4s ease 0s, left 0.2s ease 0s"});
                        $(that).attr("value",1);
                        layer.msg('关闭成功!',{icon:1,time:1000});
                    }

                }else{
                    layer.msg('修改失败',{icon:2,time:2000});
                }
            },
            error: function(xhr, textis_nav, errorThrown){
                xhr = JSON.parse(xhr.responseText)
                var msg = '';
                for (let key in xhr['errors']) {
                    msg += xhr['errors'][key][0];
                    break;
                }
                layer.msg(msg,{icon:2,time:1000});
            }
        });

    }

    /*用户-编辑*/
    function member_edit(title,url,id,w,h){
        layer_show(title,url,w,h);
    }
    /*用户-删除*/
    function member_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            $.ajax({
                headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
                type: 'delete',
                url: '/adminthree/member/delete',
                data:{'id':id},
                dataType: 'json',
                success: function(data){
                    if(data == '1')
                    {
                        $(obj).parents("tr").remove();
                        layer.msg('已删除!',{icon:1,time:1000});
                    }else{
                        layer.msg('删除失败!',{icon:1,time:1000});
                    }
                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }
    /*用户批量删除*/
    function datadel(){
        var ids =[];
        $("input[name='ids']:checked").each(function(){
            ids.push($(this).val());
        });
        if(ids == false){
            layer.msg('请选择要批量删除的对象!',{icon:1,time:1000});
        }else{
            layer.confirm('确认要删除吗？',function(index){
                $.ajax({
                    headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
                    type: 'delete',
                    url: '/adminfour/members/delete',
                    data:{'ids':ids},
                    dataType: 'json',
                    success: function(data){
                        if(data == '1')
                        {
                            layer.msg('批量删除成功!',{icon:2,time:1000},function () {
                                window.location = window.location;
                            });
                        }else{
                            layer.msg('批量删除失败，请注意查看!',{icon:1,time:1000});
                        }
                    },
                    error:function(data) {
                        console.log(data.msg);
                    },
                });
            });
        }
    }
    /*用户批量授权*/
    function auth(){
        var ids =[];
        $("input[name='ids']:checked").each(function(){
            ids.push($(this).val());
        });
        if(ids == false){
            layer.msg('请选择要批量授权的对象!',{icon:1,time:1000});
        }else{
            member_auth('批量授权','/adminfour/table/auths/'+ids,'4','','510');
        }
    }
    /*用户批量映射*/
    function mapping(){
        var ids =[];
        $("input[name='ids']:checked").each(function(){
            ids.push($(this).val());
        });
        if(ids == false){
            layer.msg('请选择要批量授权的对象!',{icon:1,time:1000});
        }else{
            member_auth('映射tableau用户','/adminfour/table/users/'+ids,'4','','510');
        }
    }

    /*用户-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }
    /*批量用户-添加*/
    function members_add(title,url,w,h){
        layer_show(title,url,w,h);
    }

    function Logout() {
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'GET',
            url: '/adminfour/public/logout',
            dataType: 'json',
            success: function(data){
                if(data == '1'){
                    top.location.href = top.location.href;
                }else{
                    layer.msg('停用失败!',{icon:2,time:2000});
                }
            },
            error:function(data) {
                alert('停用失败，请联系管理员是否已经授权');
            },
        });
    }

    function cacheUpdate() {
        $.ajax({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
            type: 'post',
            url: "/adminfour/cache/update" ,//自己提交给自己可以不写url
            success: function(data){
                if(data['code'] == 200){
                    layer.msg(data['message'],{icon:1,time:1000},function(){
                        window.location.reload();
                    });
                }else if(data['code'] == -100){
                    layer.msg(data['message'],{icon:2,time:2000});
                }else if(data['code'] == 300){
                    window.location.href = '/adminfour/index/index';
                }
            },
            error: function(xhr, textis_nav, errorThrown){
                xhr = JSON.parse(xhr.responseText)
                var msg = '';
                for (let key in xhr['errors']) {
                    msg += xhr['errors'][key][0];
                    break;
                }
                layer.msg(msg,{icon:2,time:1000});
            },
        });
    }

    function InstantSearch(obj){
        var conditions = obj.value;
        $.ajax({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
            type: 'POST',
            url: '/adminfour/search/report',
            data:{'conditions':conditions,},
            dataType: 'json',
            success: function(data){
                $('.remove').remove();
                var num = '';
                var c = false;
                for (i=0;i<data.length;i++){
                    var imgurl = data[i]['img'];
                    console.log(data[i]);
                    num += '<div class="col-md-3 " style="text-align:center;height:250px;padding:15px;display:block;float: left"><a href="/adminfour/table/index?contentUrl='+data[i].contentUrl+'&filter='+data[i].filter+'"><img data-action="preview-img" src="'+imgurl+'" style="width:100%;height:80%;cursor:pointer" class="img img-thumbnail"><p style="line-height:50px;">'+data[i].report_name+'</p></a></div>';
                    c = true;
                }
                if(!c){
                    if(data.report_name){
                        var imgurl = data['img'];
                        num = '<div class="col-md-3 " style="text-align:center;height:250px;padding:15px;display:block;float: left"><a href="/adminfour/table/index?contentUrl='+data.contentUrl+'&filter='+data.filter+'"><img data-action="preview-img" src="'+imgurl+'" style="width:100%;height:80%;cursor:pointer" class="img img-thumbnail"><p style="line-height:50px;">'+data.report_name+'</p></a></div>';
                    }
                }
                $('.page-container').append('<div id="addindex" class="col-md-12 remove" style="float: left">'+num+'</div>');

            },
            error:function(data) {
                alert('error');
            },
        });
    }

</script>

</body>

</html>
