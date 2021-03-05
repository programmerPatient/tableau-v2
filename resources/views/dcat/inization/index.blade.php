
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">

    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">


    <meta name="referrer" content="no-referrer"/>




    <script src="/dcat-admin/static/dcat-admin/dcat/plugins/vendors.min.js?v2.0.18-beta"></script>
    <script src="/dcat-admin/static/dcat-admin/dcat/js/dcat-app.js?v2.0.18-beta"></script>

    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/adminlte/adminlte.css?v2.0.18-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/vendors.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/extensions/toastr.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/tables/datatable/datatables.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/dcat-app.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/nunito.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/select/select2.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/switchery/switchery.min.css?v2.0.18-beta"><link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css?v2.0.18-beta">
</head>


<body
    class="dcat-admin-body sidebar-mini layout-fixed
        navbar-fixed-top " >


<div class="wrapper" style="">
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
                        <span class="text-capitalize">初始化管理员信息</span>
                    </h1>

                    <div class="breadcrumb-wrapper col-12">
                    </div>

                    <div class="clearfix"></div>

                </section>
            </div>
            <div class="content-body" id="app">
                <div class="row ">
                    <div class="col-md-12">
                        <div class=" card" style=";padding:4rem .4rem .4rem">

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
                                                        <input required="1" type="text" name="username" value="" class="form-control field_form1_text_ _normal_" placeholder="Input text"></div>


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
    $(".tj").click(function(){
        $('form').ajaxSubmit({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
            type: 'post',
            url: "/admin/manager/initzation" ,//自己提交给自己可以不写url
            success: function(data){
                if(data.code == 200){
                    layer.msg('成功!',{icon:1,time:1000},function(){
                        window.location.href="/";
                    });
                }else{
                    layer.msg(data.message,{icon:2,time:2000},function () {
                        window.location.reload();
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
