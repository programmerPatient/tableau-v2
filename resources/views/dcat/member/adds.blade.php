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
                                            {{csrf_field()}}
                                            <div class="form-group row form-field">

                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                    <span>选择文件</span>
                                                </div>

                                                <div class="col-md-8">

                                                    <button type="button" class="btn btn-primary pull-left file-fr" onclick="openFile()">
                                                        <i class="feather icon-save"></i>文件上传
                                                    </button>
                                                    <span id="fileName" style="text-align:center;margin-left: 20px;"></span>
                                                    <input id="file" class="btn btn-primary pull-left file-fr" style="display: none" name="file" type="file" multiple value="图片上传">

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
        </div>
    </div>
</div>

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

    $("#file" ).on( "change", function (){
        var  filePath=$(this).val();
        if (filePath){
            $('#fileName').html(filePath);
        } else {
            layer.msg('请选择文件!',{icon:1,time:1000});
        }
    });
    function openFile(){
        $('#file').click();
    }
    $(".tj").click(function(){
        $('form').ajaxSubmit({
            type: 'post',
            url: "" ,//自己提交给自己可以不写url
            success: function(data){
                if(data['status'] == '1'){
                    layer.msg('添加成功!',{icon:1,time:1000},function(){
                        var index = parent.layer.getFrameIndex(window.name);
                        //刷新
                        parent.window.location = parent.window.location;
                        parent.layer.close(index);
                    });
                }else{
                    var cont = '';
                    for(var i=0;i<data['error'].length;i++){
                        cont += data['error'][i]+'、';
                    }
                    layer.msg('添加失败,以下名字出现重复：'+cont,{icon:2,time:2000});
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
