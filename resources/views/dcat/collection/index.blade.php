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
                                ??????
                            </p>
                        </a>
                    </li>
                    @if(Session::get('user_type') == '1')
                        <li class="nav-item has-treeview ">
                            <a href="#" class="nav-link">
                                <i class="fa fa-fw feather icon-settings"></i>
                                <p>
                                    ??????
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a  href="/adminfour/system/update" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                        <p>
                                            ????????????
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a  href="/adminfour/sms/update" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                        <p>
                                            ??????SDK??????
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item has-treeview menu-open">
                        <a href="#" class="nav-link">
                            <i class="fa fa-fw feather icon-grid"></i>
                            <p>
                                ??????
                                <i class="right fa fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @if(!Session::get('isVisitor'))
                                <li class="nav-item">
                                    <a  href="/adminfour/report/collection/index" class="nav-link active">
                                        &nbsp;<i class="fa fa-fw feather icon-menu"></i>
                                        <p>
                                            ????????????
                                        </p>
                                    </a>
                                </li>
                            @endif
                            @if(Session::get('user_type') == '1')
                                <li class="nav-item">
                                    <a  href="/adminfour/member/index" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-menu"></i>
                                        <p>
                                            ????????????
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a  href="/adminfour/apply/index" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-menu"></i>
                                        <p>
                                            ??????????????????
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
                                    ????????????
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a  href="/adminfour/user/group" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                        <p>
                                            ?????????
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a  href="/adminfour/report/index" class="nav-link ">
                                        &nbsp;<i class="fa fa-fw feather icon-circle"></i>
                                        <p>
                                            ????????????
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
                                    ????????????
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Session::get('user_type') == '1')
                        <li class="nav-item">
                            <a  href="#" class="nav-link" onclick="cacheUpdate()">
                                <i class="fa fa-fw feather icon-sidebar "></i>
                                <p>
                                    ????????????
                                </p>
                            </a>
                        </li>
                    @endif
                    @if(Session::get('execl') =='1')
                        <li class="nav-item">
                            <a  href="/adminfour/excel/insert" class="nav-link ">
                                <i class="fa fa-fw feather icon-server"></i>
                                <p>
                                    ????????????
                                </p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a  href="/adminfour/report/select" class="nav-link ">
                            <i class="fa fa-fw feather icon-codepen"></i>
                            <p>
                                ????????????
                            </p>
                        </a>
                    </li>
                    @if(Session::get('user_type') == '2' && !Session::get('isVisitor'))
                        <li class="nav-item">
                            <a  href="/adminfour/member/info" class="nav-link ">
                                <i class="fa fa-fw feather icon-codepen"></i>
                                <p>
                                    ????????????
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a  href="/adminfour/member/apply" class="nav-link ">
                                <i class="fa fa-fw feather icon-codepen"></i>
                                <p>
                                    ????????????
                                </p>
                            </a>
                        </li>
                    @endif
                    <li class="nav-item has-treeview ">
                        <a href="#" class="nav-link">
                            <i class="fa fa-fw feather icon-grid"></i>
                            <p>
                                ??????
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
                                    ???????????? &nbsp;
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
                                            <span class="user-name text-bold-600">????????????</span>
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
                        <span class="text-capitalize">????????????</span>
                    </h1>

                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb float-right text-capitalize">
                            <li class="breadcrumb-item"><a href="/adminfour/index/index"><i
                                        class="fa fa-dashboard"></i>??????</a></li>
                            <li class="breadcrumb-item">
                                ????????????
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
                                                <i class="feather icon-refresh-cw"></i><span class="d-none d-sm-inline">&nbsp; ??????</span>
                                            </button>

                                            <div class="pull-right" data-responsive-table-toolbar="grid-table">


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="table-responsive  table-wrapper complex-container table-middle mt-1">
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
                                        <th>ID</th>
                                        <th>?????????</th>
                                        <th>????????????</th>
                                        <th>?????????</th>
                                        <th>????????????</th>
                                        <th>????????????</th>
                                        <th>????????????</th>
                                    </tr>
                                    </thead>


                                    <tbody>
                                    @foreach($data as $value)
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
                                            <td>
                                                {{$value->id}}
                                            </td>
                                            <td>
                                                {{$value->project_name}}
                                            </td>
                                            <td>
                                                {{$value->workBook_name}}
                                            </td>
                                            <td>{{$value->report_name}}</td>
                                            <td>{{$value->created_at}}</td>
                                            <td>
                                                <a href="/adminfour/table/index?contentUrl={{$value->contentUrl}}&filter={{$value->filter}}" >
                                                    <input type="button" class="btn btn-primary " value="??????">
                                                </a>
                                            </td>

                                            <td>
                                                <i class="feather icon-trash-2" style="font-size: 2rem" onclick="member_del(this,'{{$value->report_id}}')"></i>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>


                            <div class="box-footer d-block clearfix ">
                                <ul class="pagination pagination-sm no-margin pull-right shadow-100"
                                    style="border-radius: 1.5rem">
                                    <!-- Previous Page Link -->
                                    @if($data->currentPage()-1 > 0)
                                        <li class="page-item previous">
                                            <a class="page-link" href="/adminfour/report/collection/index?per_page={{$data->perPage()}}&page={{$data->currentPage()-1}}"></a>
                                        </li>
                                    @else
                                        <li class="page-item previous disabled"><span class="page-link"></span></li>
                                    @endif


                                <!-- Pagination Elements -->
                                    <!-- "Three Dots" Separator -->

                                    <!-- Array Of Links -->
                                    @if($data->currentPage()-1 > 4)
                                        <li class="page-item">
                                            <a class="page-link" href="/adminfour/report/collection/index?per_page={{$data->perPage()}}&page=1">1</a>
                                        </li>
                                        <li class="page-item disabled"><span class="page-link">...</span></li>
                                    @endif
                                    @for($v=1;$v<= $data->lastPage();$v++)
                                        @if($data->currentPage() != $v)
                                            @if($v >= $data->currentPage() - 4 && $v <= $data->currentPage() + 4)
                                                <li class="page-item">
                                                    <a class="page-link" href="/adminfour/report/collection/index?per_page={{$data->perPage()}}&page={{$v}}">{{$v}}</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="page-item active"><span class="page-link">{{$v}}</span></li>
                                        @endif
                                    @endfor
                                    @if($data->lastPage() - $data->currentPage() > 4)
                                        <li class="page-item disabled"><span class="page-link">...</span></li>
                                        <li class="page-item">
                                            <a class="page-link" href="/adminfour/report/collection/index?per_page={{$data->perPage()}}&page={{$data->lastPage()}}">{{$data->lastPage()}}</a>
                                        </li>
                                    @endif

                                <!-- Array Of Links -->
                                    {{--                                    <li class="page-item"><a class="page-link"--}}
                                    {{--                                                             href="/adminfour/member/index?page=49">49</a>--}}
                                    {{--                                    </li>--}}
                                    {{--                                    <li class="page-item"><a class="page-link"--}}
                                    {{--                                         href="/adminfour/member/index?page=50">50</a>--}}
                                    {{--                                    </li>--}}
                                <!-- Next Page Link -->
                                    @if($data->currentPage()+1 <= $data->lastPage())
                                        <li class="page-item next">
                                            <a class="page-link" href="/adminfour/report/collection/index?per_page={{$data->perPage()}}&page={{$data->currentPage()+1}}" rel="next"></a>
                                        </li>
                                    @else
                                        <li class="page-item next disabled">
                                            <span class="page-link"></span>
                                        </li>
                                    @endif
                                </ul>
                                <label class="pull-right d-none d-sm-inline" style="margin-right: 10px">
                                    <span class="dropup" style="display:inline-block">
                                        <a id="" class="dropdown-toggle btn btn-sm btn-white waves-effect" data-toggle="dropdown"
                                           href="javascript:void(0)">
                                            <stub>{{$data->perPage()}}</stub><span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-item">
                                                <a href="/adminfour/report/collection/index?per_page=10">10</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="/adminfour/report/collection/index?per_page=20">20</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="/adminfour/report/collection/index?per_page=30">30</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="/adminfour/report/collection/index?per_page=50">50</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="/adminfour/report/collection/index?per_page=100">100</a>
                                            </li>
                                            <li class="dropdown-item">
                                                <a href="/adminfour/report/collection/index?per_page=200">200</a>
                                            </li>
                                        </ul>
                                    </span>
                                </label>
                            </div>
                        </div>


                    </div>
                </div>


            </div>
            <div id="admin-setting-config" class="modal fade" role="dialog">
                <div class="modal-dialog   modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><i class="feather icon-edit" style="font-size: 1.5rem"></i> ????????????
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
                            <h4 class="modal-title">??????tablau??????</h4>
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
                            <h4 class="modal-title">????????????</h4>
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
                <span>&nbsp;??&nbsp;</span>
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
<script type="text/javascript" src="/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer ??????????????????????????????-->
<script type="text/javascript" src="/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>


{{--<script>Dcat.boot();</script>--}}
<script>

    function update(v) {
        window.location.href = '/adminfour/index/index?'+'?siteId='+v
    };

    $('.refresh').click(function () {
        window.location.reload();
    });

    /*??????-??????*/
    function member_del(obj,report_id){
        layer.confirm('?????????????????????',function(index){
            $.ajax({
                headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
                type: 'POST',
                url: '/adminfour/report/collection',
                data:{'report_id':report_id,'co':false},
                dataType: 'json',
                success: function(data){
                    if(data == '1')
                    {
                        layer.msg('???????????????!',{icon:1,time:1000},function () {
                            window.location = window.location;
                        });
                    }else{
                        layer.msg('??????????????????!',{icon:1,time:1000});
                    }
                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }


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
                    layer.msg('????????????!',{icon:2,time:2000});
                }
            },
            error:function(data) {
                alert('???????????????????????????????????????????????????');
            },
        });
    }
    function cacheUpdate() {
        $.ajax({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
            type: 'post',
            url: "/adminfour/cache/update" ,//?????????????????????????????????url
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
