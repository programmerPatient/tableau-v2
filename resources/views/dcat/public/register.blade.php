<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">

    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{$system->web_title}}</title>

    <meta name="referrer" content="no-referrer"/>


    <script src="/dcat-admin/static/dcat-admin/dcat/plugins/vendors.min.js"></script>
    <script src="/dcat-admin/static/dcat-admin/dcat/js/dcat-app.js"></script>

    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/adminlte/adminlte.css">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/vendors.min.css">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/extensions/toastr.css">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/tables/datatable/datatables.min.css">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/dcat-app.css">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/nunito.css">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/select/select2.min.css">
    <link rel="stylesheet"
          href="/dcat-admin/static/dcat-admin/dcat/plugins/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css">
    <link rel="stylesheet"
          href="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet"
          href="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/switchery/switchery.min.css">
    <link rel="stylesheet"
          href="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
</head>


<body class="dcat-admin-body sidebar-mini layout-fixed navbar-fixed-top ">

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
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link">
                                    <i class="fa fa-fw feather icon-settings"></i>
                                    <p>
                                        设置
                                        <i class="right fa fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">

                                    <li class="nav-item">
                                        <a  href="/adminfour/system/update" class="nav-link">
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
                                <a  href="/register" class="nav-link active">
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
                            <a  href="/adminfour/report/select" class="nav-link ">
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
                                                                    <a @if(Session::get('user_type') == '1')href="/adminfour/table/index?contentUrl={{$vieVule->contentUrl}}&filter=iframeSizedToWindow=true&id={{$vieVule->id}}" @else href="/adminfour/table/index?contentUrl={{$vieVule->contentUrl}}&filter={{$vieVule->filter}}&id={{$vieVule->id}}" @endif class="nav-link " style="margin-left: 12px;">
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
                @if(Session::get('user_type') == '1')
                    <div class="navbar-collapse">
                        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        </div>
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

                                        <a class="dropdown-item" href="javascript:;" onclick="Logout()">
                                            <i class="feather icon-power"></i> Logout
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>


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
            <style>
                .main-sidebar .nav-sidebar .nav-item > .nav-link {
                    border-radius: .1rem;
                }

                .popover {
                    z-index: 29891015
                }

                .number-group .input-group {
                    flex-wrap: nowrap
                }

                .table-has-many .fields-group .form-group {
                    margin-bottom: 0;
                }

                .table-has-many .fields-group .form-group .remove {
                    margin-top: 10px;
                }

                .table-has-many .input-group {
                    flex-wrap: nowrap !important
                }
            </style>

            <div class="content-header">
                <section class="content-header breadcrumbs-top">
                    <h1 class=" float-left">
                        <span class="text-capitalize">注册</span>
                        <small></small>
                    </h1>

                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb float-right text-capitalize">
                            <li class="breadcrumb-item">
                                <a href="/adminfour/index/index">
                                    <i class="fa fa-dashboard"></i>
                                    首页
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                注册
                            </li>
                        </ol>
                    </div>

                    <div class="clearfix"></div>

                </section>
            </div>

            <div class="content-body" id="app">
                <div class="row ">
                    <div class="col-md-12">
                        <div class=" card" style=";padding:.25rem .4rem .4rem">
                            <ul class="nav nav-tabs " role="tablist">
                                <li class="nav-item">
                                    <a href="#tab_1193484141" class=" nav-link  active" data-toggle="tab">表单</a>
                                </li>

                                <li class="nav-item pull-right header"></li>
                            </ul>

                            <div class="tab-content" style="">
                                <div class="tab-pane active" id="tab_1193484141">
                                    <div style='padding:10px 8px'>
                                        <form
                                            class="form-horizontal" accept-charset="UTF-8" pjax-container="1"
                                            id="form-oOPpetRL">
                                            <div class="form-group row form-field">

                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>企业名称</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">

                                                        <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="feather icon-edit-2"></i></span></span>
                                                        <input required="1" type="text" name="company_name" value="" class="form-control field_form1_text_ _normal_" placeholder="Input text"></div>


                                                </div>
                                            </div>
                                            <div class="form-group row form-field">

                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>用户名</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">

                                                        <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="feather icon-edit-2"></i></span></span>
                                                        <input required="1" type="text" name="username" value="" class="form-control field_form1_text_ _normal_" placeholder="Input text"></div>


                                                </div>
                                            </div>

                                            <div class="form-group row form-field">

                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>手机号</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">

                                                        <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="feather icon-smartphone"></i></span></span>
                                                        <input style="width: 160px;flex:none" type="text" name="mobile" value="" class="form-control field_form1_mobile_ _normal_ mobile" placeholder="Input mobile" initialized="1" id="_987a1bb6236ba67">
                                                        <input type="button" class="btn btn-primary pull-right" id="sms" value="获取验证码">
                                                        <input style="width: 160px;flex:none;margin-left: 80px;" type="text" name="captch" value="输入验证码" class="form-control field_form1_mobile_ _normal_" placeholder="Input mobile" initialized="1" id="_987a1bb6236ba67">

                                                    </div>


                                                </div>
                                            </div>
                                            <div class="form-group row form-field">

                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>性别</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="d-flex flex-wrap">

                                                        <div class="vs-radio-con vs-radio-successprimary" style="margin-right: 16px">
                                                            <input value="3" name="gender" class="field_sex _normal_" type="radio" checked >
                                                            <span class="vs-radio vs-radio-">
                                                              <span class="vs-radio--border"></span>
                                                              <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span>保密</span>
                                                        </div>
                                                        <div class="vs-radio-con vs-radio-successprimary" style="margin-right: 16px">
                                                            <input value="1" name="gender" class="field_sex _normal_" type="radio">
                                                            <span class="vs-radio vs-radio-">
                                                              <span class="vs-radio--border"></span>
                                                              <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span>男</span>
                                                        </div>
                                                        <div class="vs-radio-con vs-radio-successprimary" style="margin-right: 16px">
                                                            <input value="2" name="gender" class="field_sex _normal_" type="radio">
                                                            <span class="vs-radio vs-radio-">
                                                              <span class="vs-radio--border"></span>
                                                              <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span>女</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <div class="form-group row form-field">

                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>邮箱</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">

                                                        <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="feather icon-edit-2"></i></span></span>
                                                        <input required="1" type="text" name="email" value="" class="form-control field_form1_text_ _normal_" placeholder="Input text"></div>


                                                </div>
                                            </div>
                                            <div class="form-group row form-field">

                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>密码</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">

                                                        <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="feather icon-eye"></i></span></span>
                                                        <input required="1" type="password" name="password" value="" class="form-control field_form1_password_ _normal_" placeholder="Input password"></div>
                                                </div>
                                            </div>
                                            <div class="form-group row form-field">

                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>确认密码</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">

                                                        <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="feather icon-eye"></i></span></span>
                                                        <input required="1" type="password" name="password_confirmation" value="" class="form-control field_form1_password_ _normal_" placeholder="Input password"></div>
                                                </div>
                                            </div>

                                            <div class="box-footer row d-flex">
                                                <div class="col-md-2"> &nbsp;</div>
                                                <div class="col-md-8">
                                                    <input type="button" class="btn btn-primary pull-right tj" value="提交">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane " id="tab_1202817055">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <script data-exec-on-popstate>
                (function () {
                    try {

                    } catch (e) {
                        console.error(e)
                    }
                })();
            </script>
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


<script src="/dcat-admin/static/dcat-admin/adminlte/adminlte.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/extensions/toastr.min.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/jquery-pjax/jquery.pjax.min.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-validator/validator.min.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/layer/layer.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/jquery.initialize/jquery.initialize.min.js"></script>
<script
    src="/dcat-admin/static/dcat-admin/dcat/plugins/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/moment/moment-with-locales.min.js"></script>
<script
    src="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/input-mask/jquery.inputmask.bundle.min.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/extra/grid-extend.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/extra/select-table.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/number-input/bootstrap-number-input.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/switchery/switchery.min.js"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/moment/moment-with-locales.min.js"></script>
<script
    src="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>

<script>
    Dcat.boot();
</script>

<script>
    $(".tj").click(function(){
        $('form').ajaxSubmit({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
            type: 'post',
            url: "/register" ,//自己提交给自己可以不写url
            success: function(data){
                if(data['code'] == 200){
                    layer.msg('注册成功!',{icon:1,time:1000},function(){
                        window.location.href = '/'
                    });
                }else if(data['code'] == -100){
                    layer.msg(data['message'],{icon:2,time:2000});
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
    });
    $("#sms").click(function () {
        var mobile = $(".mobile").val();
        $.ajax({
            headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
            url:'/sms/send',
            type:'POST',  // 默认为GET
            data:{
                'mobile':mobile
            },
            dataType:"json",
            jsonp:"callback",
            timeout:5000, // 超时时间
            beforeSend:function(xhr){
            },
            success:function(result){
                if(result == '1'){
                    layer.msg("发送成功",{icon:1,time:1000});
                    settime(60);
                }else{
                    layer.msg("发送失败，请重试！",{icon:2,time:1000});
                }
            },
            error:function(xhr,textStatus){
                xhr = JSON.parse(xhr.responseText)
                var msg = '';
                for (let key in xhr['errors']) {
                    msg += xhr['errors'][key][0];
                    break;
                }
                layer.msg(msg,{icon:2,time:1000});
            }
        });
    });
    function settime(countdown) {
        var t = $("#sms");
        if (countdown == 0) {
            t.removeAttr("disabled");
            t.val("重新获取验证码");
            return;
        } else {
            t.attr("disabled","disabled");
            t.val("重新发送(" + countdown + ")");
            countdown--;
        }
        setTimeout(function() {
            settime(countdown)
        },1000)
    }

    function update(v) {
        window.location.href = window.location.pathname+'?siteId='+v
    };
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

</script>

</body>

</html>



