
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

    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/adminlte/adminlte.css?v2.0.18-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/vendors.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/extensions/toastr.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/tables/datatable/datatables.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/dcat-app.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/nunito.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/select/select2.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/switchery/switchery.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css?v2.0.18-beta">
</head>


<body
    class="dcat-admin-body sidebar-mini layout-fixed
        navbar-fixed-top " >


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
                                        <a  href="/adminfour/system/update" class="nav-link ">
                                            &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                            <p>
                                                系统设置
                                            </p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a  href="/adminfour/sms/update" class="nav-link active">
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
                                            @foreach(Session::get('allSites') as $value)
                                                @if($value->id == Session::get('credentials'))
                                                    <span class="user-status"><i class="fa fa-circle text-success"></i>{{$value->name}}</span>
                                                @endif
                                            @endforeach
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        @foreach(Session::get('allSites') as $value)
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
                .popover{z-index:29891015}

                .number-group .input-group{flex-wrap: nowrap}
                .table-has-many .fields-group .form-group {
                    margin-bottom:0;
                }
                .table-has-many .fields-group .form-group .remove {
                    margin-top: 10px;
                }
                .table-has-many .input-group{flex-wrap: nowrap!important}
            </style>

            <div class="content-header">
                <section class="content-header breadcrumbs-top">
                    <h1 class=" float-left">
                        <span class="text-capitalize">短信SDK配置</span>
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
                                短信SDK配置
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
                                    <div id="form-add" style='padding:10px 8px'>
                                        <div class="form-group row form-field">

                                            <div class="col-md-2 text-capitalize asterisk control-label">
                                                <span>短信SDK选择</span>
                                            </div>

                                            <div class="col-md-6 ">

                                                <div class="help-block with-errors"></div>
                                                <div class="input-group">
                                                    <span class="select-box">
                                                      <select id="conf" class="select input-group-text bg-white " name="publicMemberId" id="conf"  style="width: 200px;">
                                                          <option value="" >默认</option>
                                                          @foreach($sysConf as $key => $value)
                                                              <option value="{{$value}}" >{{$value['name']}}</option>
                                                          @endforeach
                                                      </select>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="button" class="btn btn-primary pull-right addNew" value="添加新的配置">
                                            </div>
                                        </div>

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
                // Dcat.ready(function () {
                //     try {
                //         (function () {
                //             var target = $('#admin-setting-config'), body = target.find('.modal-body');
                //             target.on('modal:load', function () {
                //                 Dcat.helpers.asyncRender('http://103.39.211.179:8080/admin/dcat-api/render?_current_=http%3A%2F%2F103.39.211.179%3A8080%2Fadmin%2Fform%3F&renderable=App_Admin_Forms_AdminSetting', function (html) {
                //                     body.html(html);
                //
                //
                //
                //                     target.trigger('modal:loaded');
                //                 });
                //             });
                //             target.on('show.bs.modal', function (event) {
                //                 body.html('<div style="min-height:150px"></div>').loading();
                //
                //                 setTimeout(function () {
                //                     target.trigger('modal:load')
                //                 }, 10);
                //             });
                //         })();;
                //         Dcat.token = "AMzAc4TE95LNBtleM6bkVnqZTVnGzeuFB3RImfJ6";;
                //         $('.preview-code').click(function () {
                //             layer.open({
                //                 type: 2,
                //                 title: '预览代码',
                //                 area: ['65%', '80%'],
                //                 content: '/admin/form/preview',
                //             });
                //         });;
                //         $('#form-oOPpetRL').form({
                //             validate: true,
                //             confirm: [],
                //             validationErrorToastr: true,
                //             success: function (data) {
                //
                //             },
                //             error: function (response) {
                //
                //             }
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_mobile_._normal_', function (self) {
                //             self.inputmask({"mask":"99999999999"});
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_ip_._normal_', function (self) {
                //             self.inputmask({"alias":"ip"});
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_color_._normal_', function ($this, id) { $this.colorpicker([]).on('colorpickerChange', function(event) {
                //             $(this).parents('.input-group').find('.input-group-prepend i').css('background-color', event.color.toString());
                //         });
                //         });;
                //         Dcat.init('.dialog-table-container', function ($this, id) { var area = screen.width <= 850 ? ['100%', '100%',] : '825px',
                //             offset = screen.width <= 850 ? 0 : '70px',
                //             _tb = '.async-table',
                //             _container = '.dialog-table',
                //             _id,
                //             _temp,
                //             _title,
                //             _event,
                //             _btnId;
                //
                //             setId(id);
                //
                //             function hidden(index) {
                //
                //
                //                 getLayer(index).find(_container).trigger('dialog:hidden');
                //             }
                //
                //             function open(btn) {
                //                 var index = layer.open({
                //                     type: 1,
                //                     title: $(_title).html(),
                //                     area: area,
                //                     offset: offset,
                //                     maxmin: false,
                //                     resize: false,
                //                     content: $(_temp).html(),
                //                     success: function(layero, index) {
                //                         var $c = getLayer(index).find(_container),
                //                             $t = getLayer(index).find(_tb);
                //
                //                         $c.attr('layer', index);
                //
                //                         setDataId($c);
                //                         setMaxHeight(index);
                //
                //                         eval($(_event).html());
                //
                //                         setTimeout(function () {
                //                             Dcat.grid.AsyncTable({container: $t});
                //
                //                             $t.trigger('table:load');
                //                         }, 100);
                //
                //                         $c.trigger('dialog:shown');
                //
                //                         $c.on('dialog:open', openDialog);
                //                         $c.on('dialog:close', closeDialog)
                //                     },
                //                     cancel: function (index) {
                //                         btn && btn.removeAttr('layer');
                //
                //                         hidden(index)
                //                     }
                //                 });
                //
                //                 btn && btn.attr('layer', index);
                //             }
                //
                //             function setDataId(obj) {
                //                 if (! obj.attr('data-id')) {
                //                     obj.attr('data-id', id);
                //                 }
                //             }
                //
                //             function setId(val) {
                //                 if (! val) return;
                //
                //                 _id = '#' + val;
                //                 _temp = _id + ' .content';
                //                 _title = _id + ' .title';
                //                 _event = _id + ' .event';
                //                 _btnId = _id + ' .switch-dialog';
                //             }
                //
                //             function openDialog () {
                //                 setId($(this).attr('data-id'));
                //                 setDataId($(this));
                //
                //                 if (! $(this).attr('layer')) {
                //                     open($(this));
                //                 }
                //             }
                //
                //             function getLayer(index) {
                //                 return $('#layui-layer'+index)
                //             }
                //
                //             function closeDialog() {
                //                 var index = $(this).attr('layer');
                //
                //                 getLayer(index).find(_container).removeAttr('layer');
                //                 $(_btnId).removeAttr('layer');
                //
                //                 if (index) {
                //                     layer.close(index);
                //                     hidden(index);
                //                 }
                //             }
                //
                //             function setMaxHeight(index) {
                //                 var maxHeight = ($(window).height() - 220);
                //                 if (maxHeight < 250) {
                //                     maxHeight = maxHeight + 120;
                //                 }
                //
                //                 getLayer(index).find('.layui-layer-content').css({'max-height': maxHeight});
                //             }
                //
                //             $(_btnId).on('click', openDialog);
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_select-table_._normal_', function ($this, id) { var dialogId = $this.parent().find('.dialog-table-container').attr('id');
                //
                //             Dcat.grid.SelectTable({
                //                 dialog: '[data-id="' + dialogId + '"]',
                //                 container: $this,
                //                 input: $(this).find('input'),
                //                 values: [],
                //             });
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_select-resource-multiple_._normal_', function ($this, id) { var dialogId = $this.parent().find('.dialog-table-container').attr('id');
                //
                //             Dcat.grid.SelectTable({
                //                 dialog: '[data-id="' + dialogId + '"]',
                //                 container: $this,
                //                 input: $(this).find('input'),
                //                 multiple: true,
                //                 max: 4,
                //                 values: [],
                //             });
                //         });;
                //         setTimeout(function () {
                //             var field = $('#form-oOPpetRL .field_form1_icon_._normal_'),
                //                 parent = field.parents('.form-field'),
                //                 showIcon = function (icon) {
                //                     parent.find('.input-group-prepend .input-group-text').html('<i class="' + icon + '"></i>');
                //                 };
                //
                //             field.iconpicker({placement:'bottomLeft', animation: false});
                //
                //             parent.find('.iconpicker-item').on('click', function (e) {
                //                 showIcon($(this).find('i').attr('class'));
                //             });
                //
                //             field.on('keyup', function (e) {
                //                 var val = $(this).val();
                //
                //                 if (val.indexOf('fa-') !== -1) {
                //                     if (val.indexOf('fa ') === -1) {
                //                         val = 'fa ' + val;
                //                     }
                //                 }
                //
                //                 showIcon(val);
                //             })
                //         }, 1);;
                //         Dcat.init('#form-oOPpetRL .field_form1_decimal_._normal_', function (self) {
                //             self.inputmask({"alias":"decimal","rightAlign":false});
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_number_._normal_', function ($this, id) { $this.bootstrapNumber({"upClass":"primary shadow-0","downClass":"light shadow-0","center":true});
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_currency_._normal_', function (self) {
                //             self.inputmask({"alias":"currency","radixPoint":".","prefix":"","removeMaskOnSubmit":true,"rightAlign":false});
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_switch_._normal_', function ($this, id) { $this.parent().find('.switchery').remove();
                //
                //             $this.each(function() {
                //                 new Switchery($(this)[0], $(this).data())
                //             })
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_date_._normal_', function (self) {
                //             self.datetimepicker({"format":"YYYY-MM-DD","locale":"en","allowInputToggle":true});
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_time_._normal_', function (self) {
                //             self.datetimepicker({"format":"HH:mm:ss","locale":"en","allowInputToggle":true});
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_datetime_._normal_', function (self) {
                //             self.datetimepicker({"format":"YYYY-MM-DD HH:mm:ss","locale":"en","allowInputToggle":true});
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_date-start_', function ($this, id) { var options = {"format":"YYYY-MM-DD","locale":"en"};
                //             var $end = $this.parents('.row').find('#form-oOPpetRL .field_form1_date-end_');
                //
                //             $this.datetimepicker(options);
                //             $end.datetimepicker($.extend(options, {useCurrent: false}));
                //             $this.on("dp.change", function (e) {
                //                 $end.data("DateTimePicker").minDate(e.date);
                //             });
                //             $end.on("dp.change", function (e) {
                //                 $this.data("DateTimePicker").maxDate(e.date);
                //             });
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_time-start_', function ($this, id) { var options = {"format":"HH:mm:ss","locale":"en"};
                //             var $end = $this.parents('.row').find('#form-oOPpetRL .field_form1_time-end_');
                //
                //             $this.datetimepicker(options);
                //             $end.datetimepicker($.extend(options, {useCurrent: false}));
                //             $this.on("dp.change", function (e) {
                //                 $('#form-oOPpetRL .field_form1_time-end_').data("DateTimePicker").minDate(e.date);
                //             });
                //             $end.on("dp.change", function (e) {
                //                 $this.data("DateTimePicker").maxDate(e.date);
                //             });
                //         });;
                //         Dcat.init('#form-oOPpetRL .field_form1_datetime-start_', function ($this, id) { var options = {"format":"YYYY-MM-DD HH:mm:ss","locale":"en"};
                //             var $end = $this.parents('.row').find('#form-oOPpetRL .field_form1_datetime-end_');
                //
                //             $this.datetimepicker(options);
                //             $end.datetimepicker($.extend(options, {useCurrent: false}));
                //             $this.on("dp.change", function (e) {
                //                 $end.data("DateTimePicker").minDate(e.date);
                //             });
                //             $end.on("dp.change", function (e) {
                //                 $this.data("DateTimePicker").maxDate(e.date);
                //             });
                //         });;
                //         (function () {var nestedIndex = 0,
                //             container = '.has-many-table';
                //
                //             function replaceNestedFormIndex(value) {
                //                 return String(value).replace(/__LA_KEY__/g, nestedIndex);
                //             }
                //
                //             $(container).on('click', '.add', function () {
                //                 var tpl = $('template.table-tpl');
                //
                //                 nestedIndex++;
                //
                //                 var template = replaceNestedFormIndex(tpl.html());
                //                 $('.has-many-table-forms').append(template);
                //             });
                //
                //             $(container).on('click', '.remove', function () {
                //                 $(this).closest('.has-many-table-form').hide();
                //                 $(this).closest('.has-many-table-form').find('[required]').prop('required', false);
                //                 $(this).closest('.has-many-table-form').find('.form-removed').val(1);
                //             });
                //         })();
                //     } catch (e) {
                //         console.error(e)
                //     }
                // })
            </script>
            <div id="admin-setting-config"class="modal fade" role="dialog">
                <div class="modal-dialog   modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="feather icon-edit" style="font-size: 1.5rem"></i> 网站设置</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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

        <button class="btn btn-primary btn-icon scroll-top pull-right" style="position: fixed;bottom: 2%; right: 10px;display: none">
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
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.js?v2.0.18-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/moment/moment-with-locales.min.js?v2.0.18-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js?v2.0.18-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/input-mask/jquery.inputmask.bundle.min.js?v2.0.18-beta"></script>
<script src="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js?v2.0.18-beta"></script><script src="/dcat-admin/static/dcat-admin/dcat/extra/grid-extend.js?v2.0.18-beta"></script><script src="/dcat-admin/static/dcat-admin/dcat/extra/select-table.js?v2.0.18-beta"></script><script src="/dcat-admin/static/dcat-admin/dcat/plugins/number-input/bootstrap-number-input.js?v2.0.18-beta"></script><script src="/dcat-admin/static/dcat-admin/dcat/plugins/switchery/switchery.min.js?v2.0.18-beta"></script><script src="/dcat-admin/static/dcat-admin/dcat/plugins/moment/moment-with-locales.min.js?v2.0.18-beta"></script><script src="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js?v2.0.18-beta"></script>

<script>Dcat.boot();</script>
<script>


    function update(v) {
        window.location.href = '/adminfour/index/index?'+'?siteId='+v
    };

    $('#conf').change(() => {
        var v = JSON.parse($('#conf').val());
        $('.tab-system').remove();
        $('.newTable').remove();
        $('#form-add').append('<form\n' +
            '                                              class="form-horizontal tab-system"  accept-charset="UTF-8" pjax-container="1"\n' +
            '                                              id="form-oOPpetRL">\n' +
            '                                            {{csrf_field()}}\n' +
            '            <input type="hidden" name="id" value="\n'+v.id+'\n">\n' +
            '                                            <div class="box-body fields-group pl-0 pr-0 pt-1"\n' +
            '                                                 style="padding: 0 0 .5rem" id="tab-system">\n' +
            '                                                <div class="form-group row form-field">\n' +
            '\n' +
            '                                                    <div class="col-md-2 text-capitalize asterisk control-label">\n' +
            '                                                        <span>配置名称</span>\n' +
            '                                                    </div>\n' +
            '\n' +
            '                                                    <div class="col-md-8 ">\n' +
            '\n' +
            '                                                        <div class="help-block with-errors"></div>\n' +
            '                                                        <div class="input-group">\n' +
            '\n' +
            '                                                            <span class="input-group-prepend"><span\n' +
            '                                                                    class="input-group-text bg-white"><i\n' +
            '                                                                        class="feather icon-edit-2"></i></span></span>\n' +
            '                                                            <input required="1" type="text" name="name" value="'+v.name+'"\n' +
            '                                                                   class="form-control field_form1_text_ _normal_"\n' +
            '                                                                   placeholder="Input text"></div>\n' +
            '\n' +
            '\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +

            '                                                <div class="form-group row form-field">\n' +
            '\n' +
            '                                                    <div class="col-md-2 text-capitalize asterisk control-label">\n' +
            '                                                        <span>短信签名名称</span>\n' +
            '                                                    </div>\n' +
            '\n' +
            '                                                    <div class="col-md-8 ">\n' +
            '\n' +
            '                                                        <div class="help-block with-errors"></div>\n' +
            '                                                        <div class="input-group">\n' +
            '\n' +
            '                                                            <span class="input-group-prepend"><span\n' +
            '                                                                    class="input-group-text bg-white"><i\n' +
            '                                                                        class="feather icon-edit-2"></i></span></span>\n' +
            '                                                            <input required="1" type="text" name="sign_name" value="'+v.sign_name+'"\n' +
            '                                                                   class="form-control field_form1_text_ _normal_"\n' +
            '                                                                   placeholder="Input text"></div>\n' +
            '\n' +
            '\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +

            '                                                <div class="form-group row form-field">\n' +
            '\n' +
            '                                                    <div class="col-md-2 text-capitalize asterisk control-label">\n' +
            '                                                        <span>模版CODE</span>\n' +
            '                                                    </div>\n' +
            '\n' +
            '                                                    <div class="col-md-8 ">\n' +
            '\n' +
            '                                                        <div class="help-block with-errors"></div>\n' +
            '                                                        <div class="input-group">\n' +
            '\n' +
            '                                                            <span class="input-group-prepend"><span\n' +
            '                                                                    class="input-group-text bg-white"><i\n' +
            '                                                                        class="feather icon-edit-2"></i></span></span>\n' +
            '                                                            <input required="1" type="text" name="template_code" value="'+v.template_code+'"\n' +
            '                                                                   class="form-control field_form1_text_ _normal_"\n' +
            '                                                                   placeholder="Input text"></div>\n' +
            '\n' +
            '\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +

            '                                                <div class="form-group row form-field">\n' +
            '\n' +
            '                                                    <div class="col-md-2 text-capitalize asterisk control-label">\n' +
            '                                                        <span>access_key</span>\n' +
            '                                                    </div>\n' +
            '\n' +
            '                                                    <div class="col-md-8 ">\n' +
            '\n' +
            '                                                        <div class="help-block with-errors"></div>\n' +
            '                                                        <div class="input-group">\n' +
            '\n' +
            '                                                            <span class="input-group-prepend"><span\n' +
            '                                                                    class="input-group-text bg-white"><i\n' +
            '                                                                        class="feather icon-edit-2"></i></span></span>\n' +
            '                                                            <input required="1" type="password" name="access_key" value="'+v.access_key+'"\n' +
            '                                                                   class="form-control field_form1_text_ _normal_"\n' +
            '                                                                   placeholder="Input text"></div>\n' +
            '\n' +
            '\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +

            '                                                <div class="form-group row form-field">\n' +
            '\n' +
            '                                                    <div class="col-md-2 text-capitalize asterisk control-label">\n' +
            '                                                        <span>access_secret</span>\n' +
            '                                                    </div>\n' +
            '\n' +
            '                                                    <div class="col-md-8 ">\n' +
            '\n' +
            '                                                        <div class="help-block with-errors"></div>\n' +
            '                                                        <div class="input-group">\n' +
            '\n' +
            '                                                            <span class="input-group-prepend"><span\n' +
            '                                                                    class="input-group-text bg-white"><i\n' +
            '                                                                        class="feather icon-edit-2"></i></span></span>\n' +
            '                                                            <input required="1" type="password" name="access_secret" value="'+v.access_secret+'"\n' +
            '                                                                   class="form-control field_form1_text_ _normal_"\n' +
            '                                                                   placeholder="Input text"></div>\n' +
            '\n' +
            '\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                            <div class="box-footer row d-flex">\n' +
            '                                                <div class="col-md-2"> &nbsp;</div>\n' +
            '                                                <div class="col-md-8">\n' +
            '                                                    <input type="button" class="btn btn-primary pull-right tj" value="提交">\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                        </form>');
    });

    $(".tab-content").on('click','.tj',function(){
        $('.tab-system').ajaxSubmit({
            type: 'post',
            url: "/adminfour/sms/confUpdate" ,//自己提交给自己可以不写url
            success: function(data){
                if(data.code == 200){
                    layer.msg('<p style="color:green;">更新成功！</p>',{icon:1,time:1000},function(){
                    });
                }else{
                    layer.msg('<p style="color:red;">更新失败!！</p>',{icon:2,time:2000});
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

    $(".tab-content").on('click','.newSub',function(){
        $('.newTable').ajaxSubmit({
            type: 'post',
            url: "/admin/sms/inization" ,//自己提交给自己可以不写url
            success: function(data){
                if(data.code == 200){
                    layer.msg('<p style="color:green;">提交成功！</p>',{icon:1,time:1000},function(){
                        //刷新
                        parent.window.location = parent.window.location;
                        parent.layer.close(index);
                    });
                }else{
                    layer.msg('<p style="color:red;">提交失败!</p>',{icon:2,time:2000});
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
    $('.addNew').click(function () {
        $('.tab-system').remove();
        $('#form-add').append('<form\n' +
            '                                              class="form-horizontal newTable"  accept-charset="UTF-8" pjax-container="1"\n' +
            '                                              id="form-oOPpetRL">\n' +
            '                                            {{csrf_field()}}\n' +
            '                                            <div class="box-body fields-group pl-0 pr-0 pt-1"\n' +
            '                                                 style="padding: 0 0 .5rem" id="tab-system">\n' +
            '                                                <div class="form-group row form-field">\n' +
            '\n' +
            '                                                    <div class="col-md-2 text-capitalize asterisk control-label">\n' +
            '                                                        <span>配置名称</span>\n' +
            '                                                    </div>\n' +
            '\n' +
            '                                                    <div class="col-md-8 ">\n' +
            '\n' +
            '                                                        <div class="help-block with-errors"></div>\n' +
            '                                                        <div class="input-group">\n' +
            '\n' +
            '                                                            <span class="input-group-prepend"><span\n' +
            '                                                                    class="input-group-text bg-white"><i\n' +
            '                                                                        class="feather icon-edit-2"></i></span></span>\n' +
            '                                                            <input required="1" type="text" name="name" value=""\n' +
            '                                                                   class="form-control field_form1_text_ _normal_"\n' +
            '                                                                   placeholder="Input text"></div>\n' +
            '\n' +
            '\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +

            '                                                <div class="form-group row form-field">\n' +
            '\n' +
            '                                                    <div class="col-md-2 text-capitalize asterisk control-label">\n' +
            '                                                        <span>短信签名名称</span>\n' +
            '                                                    </div>\n' +
            '\n' +
            '                                                    <div class="col-md-8 ">\n' +
            '\n' +
            '                                                        <div class="help-block with-errors"></div>\n' +
            '                                                        <div class="input-group">\n' +
            '\n' +
            '                                                            <span class="input-group-prepend"><span\n' +
            '                                                                    class="input-group-text bg-white"><i\n' +
            '                                                                        class="feather icon-edit-2"></i></span></span>\n' +
            '                                                            <input required="1" type="text" name="sign_name" value=""\n' +
            '                                                                   class="form-control field_form1_text_ _normal_"\n' +
            '                                                                   placeholder="Input text"></div>\n' +
            '\n' +
            '\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +

            '                                                <div class="form-group row form-field">\n' +
            '\n' +
            '                                                    <div class="col-md-2 text-capitalize asterisk control-label">\n' +
            '                                                        <span>模版CODE</span>\n' +
            '                                                    </div>\n' +
            '\n' +
            '                                                    <div class="col-md-8 ">\n' +
            '\n' +
            '                                                        <div class="help-block with-errors"></div>\n' +
            '                                                        <div class="input-group">\n' +
            '\n' +
            '                                                            <span class="input-group-prepend"><span\n' +
            '                                                                    class="input-group-text bg-white"><i\n' +
            '                                                                        class="feather icon-edit-2"></i></span></span>\n' +
            '                                                            <input required="1" type="text" name="template_code" value=""\n' +
            '                                                                   class="form-control field_form1_text_ _normal_"\n' +
            '                                                                   placeholder="Input text"></div>\n' +
            '\n' +
            '\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +

            '                                                <div class="form-group row form-field">\n' +
            '\n' +
            '                                                    <div class="col-md-2 text-capitalize asterisk control-label">\n' +
            '                                                        <span>access_key</span>\n' +
            '                                                    </div>\n' +
            '\n' +
            '                                                    <div class="col-md-8 ">\n' +
            '\n' +
            '                                                        <div class="help-block with-errors"></div>\n' +
            '                                                        <div class="input-group">\n' +
            '\n' +
            '                                                            <span class="input-group-prepend"><span\n' +
            '                                                                    class="input-group-text bg-white"><i\n' +
            '                                                                        class="feather icon-edit-2"></i></span></span>\n' +
            '                                                            <input required="1" type="password" name="access_key" value=""\n' +
            '                                                                   class="form-control field_form1_text_ _normal_"\n' +
            '                                                                   placeholder="Input text"></div>\n' +
            '\n' +
            '\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +

            '                                                <div class="form-group row form-field">\n' +
            '\n' +
            '                                                    <div class="col-md-2 text-capitalize asterisk control-label">\n' +
            '                                                        <span>access_secret</span>\n' +
            '                                                    </div>\n' +
            '\n' +
            '                                                    <div class="col-md-8 ">\n' +
            '\n' +
            '                                                        <div class="help-block with-errors"></div>\n' +
            '                                                        <div class="input-group">\n' +
            '\n' +
            '                                                            <span class="input-group-prepend"><span\n' +
            '                                                                    class="input-group-text bg-white"><i\n' +
            '                                                                        class="feather icon-edit-2"></i></span></span>\n' +
            '                                                            <input required="1" type="password" name="access_secret" value=""\n' +
            '                                                                   class="form-control field_form1_text_ _normal_"\n' +
            '                                                                   placeholder="Input text"></div>\n' +
            '\n' +
            '\n' +
            '                                                    </div>\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                            <div class="box-footer row d-flex">\n' +
            '                                                <div class="col-md-2"> &nbsp;</div>\n' +
            '                                                <div class="col-md-8">\n' +
            '                                                    <input type="button" class="btn btn-primary pull-right newSub" value="提交">\n' +
            '                                                    <input type="button" class="btn btn-primary pull-left removeSub" value="移除">\n' +
            '                                                </div>\n' +
            '                                            </div>\n' +
            '                                        </form>');
    });
    $('.tab-content').on('click','.removeSub',function () {
        this.parentNode.parentNode.parentNode.remove();
    });


    function Logout() {
        $.ajax({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
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
