
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
                        <span class="text-capitalize">短信SDK配置</span>
                        <small></small>
                    </h1>


                    <div class="clearfix"></div>

                </section>
            </div>

            <div class="content-body" id="app">
                <div class="row ">
                    <div class="col-md-12">
                        <div class=" card" style=";padding:.25rem .4rem .4rem">
                            <ul class="nav nav-tabs " role="tablist">
                                <li class="nav-item">
                                    <a href="#tab_1193484141" class=" nav-link  active" data-toggle="tab">短信SDK配置</a>
                                </li>

                                <li class="nav-item pull-right header"></li>
                            </ul>

                            <div class="tab-content" style="">
                                <div class="tab-pane active" id="tab_1193484141">
                                    <div id="form-add" style='padding:10px 8px'>
                                        <form
                                            class="form-horizontal" accept-charset="UTF-8" pjax-container="1"
                                            id="form-oOPpetRL">
                                            <div class="form-group row form-field">
                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>配置名称</span>
                                                </div>
                                                <div class="col-md-8 ">
                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text bg-white">
                                                                <i class="feather icon-edit-2"></i>
                                                            </span>
                                                        </span>
                                                        <input required="1" type="text" name="name" value="" class="form-control field_form1_text_ _normal_" placeholder="Input text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row form-field">
                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>短信签名名称</span>
                                                </div>
                                                <div class="col-md-8 ">
                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text bg-white">
                                                                <i class="feather icon-edit-2"></i>
                                                            </span>
                                                        </span>
                                                        <input required="1" type="text" name="sign_name" value="" class="form-control field_form1_text_ _normal_" placeholder="Input text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row form-field">
                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>模版CODE</span>
                                                </div>
                                                <div class="col-md-8 ">
                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text bg-white">
                                                                <i class="feather icon-edit-2"></i>
                                                            </span>
                                                        </span>
                                                        <input required="1" type="text" name="template_code" value="" class="form-control field_form1_text_ _normal_"  placeholder="Input text">
                                                    </div>
                                                </div>
                                           </div>

                                            <div class="form-group row form-field">
                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>Access_key</span>
                                                </div>
                                                <div class="col-md-8 ">
                                                    <div class="help-block with-errors"></div>
                                                    <div class="input-group">
                                                        <span class="input-group-prepend">
                                                            <span class="input-group-text bg-white">
                                                                <i class="feather icon-edit-2"></i>
                                                            </span>
                                                        </span>
                                                        <input required="1" type="text" name="access_key" value="" class="form-control field_form1_text_ _normal_" placeholder="Input text">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group row form-field">
                                            <div class="col-md-2 text-capitalize asterisk control-label">
                                                <span>Access_secret</span>
                                            </div>
                                            <div class="col-md-8 ">
                                                <div class="help-block with-errors"></div>
                                                <div class="input-group">
                                                    <span class="input-group-prepend">
                                                        <span class="input-group-text bg-white">
                                                            <i class="feather icon-edit-2"></i>
                                                        </span>
                                                    </span>
                                                    <input required="1" type="password" name="access_secret" value="" class="form-control field_form1_text_ _normal_" placeholder="Input text">
                                                </div>
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

    $(".tj").click(function(){
        $('form').ajaxSubmit({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
            type: 'post',
            url: "/admin/sms/inization" ,//自己提交给自己可以不写url
            success: function(data){
                if(data.code == 200){
                    layer.msg('添加成功!',{icon:1,time:1000},function(){
                        window.location.reload();
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
