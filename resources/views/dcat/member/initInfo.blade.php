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


<div class="wrapper">
    <div class="app-content content">
        <div class="content-wrapper" id="pjax-container" style="top: 0;min-height: 900px;margin-left: 0px;">
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
                        <span class="text-capitalize">初始化用户信息</span>
                    </h1>

                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb float-right text-capitalize">
                            <li class="breadcrumb-item"><a href="/adminfour/index/index"><i
                                        class="fa fa-dashboard"></i>首页</a></li>
                            <li class="breadcrumb-item">
                                初始化用户信息
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

                            <div class="tab-content" style="">
                                <div class="tab-pane active" id="tab_1193484141">
                                    <div id="form-add" style='padding:10px 8px'>
                                        <form
                                            class="form-horizontal" accept-charset="UTF-8" pjax-container="1"
                                            id="form-oOPpetRL">
                                            <div class="form-group row form-field">

                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>用戶名</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">

                                                        <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="feather icon-edit-2"></i></span></span>
                                                        <input required="1" type="text" name="username" value="{{$user->username}}" class="form-control field_form1_text_ _normal_" placeholder="Input text"></div>


                                                </div>
                                            </div>
                                            <div class="form-group row form-field">

                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>企业名称</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">

                                                        <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="feather icon-edit-2"></i></span></span>
                                                        <input required="1" type="text" name="company_name" value="{{$user->company_name}}" class="form-control field_form1_text_ _normal_" placeholder="Input text"></div>


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
                                                        <input required="1" type="text" name="email" value="{{$user->email}}" class="form-control field_form1_text_ _normal_" placeholder="Input text"></div>


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
                                                            <input value="3" name="gender" class="field_sex _normal_" type="radio"  checked >
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
                                                    <span>密码</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">

                                                        <span class="input-group-prepend"><span class="input-group-text bg-white"><i class="feather icon-eye"></i></span></span>
                                                        <input required="1" type="password" name="password" value="" class="form-control field_form1_password_ _normal_" placeholder="Input password"></div>
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





<script>Dcat.boot();</script>
<script>

    $(".tj").click(function(){
        $('form').ajaxSubmit({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
            type: 'post',
            url: "" ,//自己提交给自己可以不写url
            success: function(data){
                if(data.code == 200){
                    layer.msg('修改成功!',{icon:1,time:1000},function(){
                        window.location.href = '/';
                    });
                }else{
                    layer.msg(data.message,{icon:2,time:2000},function () {
                        // window.location.reload();
                    });
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






</script>

</body>

</html>
