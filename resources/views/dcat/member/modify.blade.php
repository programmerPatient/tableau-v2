
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


<div class="wrapper">
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
                                                    <span>性别</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="d-flex flex-wrap">

                                                        <div class="vs-radio-con vs-radio-successprimary" style="margin-right: 16px">
                                                            <input value="3" name="gender" class="field_sex _normal_" type="radio" @if($data->gender == 3) checked @endif>
                                                            <span class="vs-radio vs-radio-">
                                                              <span class="vs-radio--border"></span>
                                                              <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span>未知</span>
                                                        </div>
                                                        <div class="vs-radio-con vs-radio-successprimary" style="margin-right: 16px">
                                                            <input value="1" name="gender" class="field_sex _normal_" type="radio" @if($data->gender == 1) checked @endif>
                                                            <span class="vs-radio vs-radio-">
                                                              <span class="vs-radio--border"></span>
                                                              <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span>男</span>
                                                        </div>
                                                        <div class="vs-radio-con vs-radio-successprimary" style="margin-right: 16px">
                                                            <input value="2" name="gender" class="field_sex _normal_" type="radio" @if($data->gender == 2) checked @endif>
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
                                                        <input required="1" type="text" name="email" value="{{$data->email}}" class="form-control field_form1_text_ _normal_" placeholder="Input text"></div>


                                                </div>
                                            </div>
                                            <div class="form-group row form-field">

                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>账号状态</span>
                                                </div>

                                                <div class="col-md-8 ">

                                                    <div class="help-block with-errors"></div>
                                                    <div class="d-flex flex-wrap">

                                                        <div class="vs-radio-con vs-radio-successprimary" style="margin-right: 16px">
                                                            <input value="1" name="status" class="field_sex _normal_" type="radio" @if($data->status == 1) checked @endif>
                                                            <span class="vs-radio vs-radio-">
                                                              <span class="vs-radio--border"></span>
                                                              <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span>禁用</span>
                                                        </div>
                                                        <div class="vs-radio-con vs-radio-successprimary" style="margin-right: 16px">
                                                            <input value="2" name="status" class="field_sex _normal_" type="radio" @if($data->status == 2) checked @endif>
                                                            <span class="vs-radio vs-radio-">
                                                              <span class="vs-radio--border"></span>
                                                              <span class="vs-radio--circle"></span>
                                                            </span>
                                                            <span>启动</span>
                                                        </div>

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
            url: "" ,//自己提交给自己可以不写url
            success: function(data){
                if(data == '1'){
                    layer.msg('更新成功!',{icon:1,time:1000},function(){
                        parent.layer.close(index);
                    });
                }else{
                    layer.msg('更新失败!',{icon:2,time:2000},function () {
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
