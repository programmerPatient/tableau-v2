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

<div class="wrapper" style="margin-top:-50px;">
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
                                            <div class="box-body fields-group pl-0 pr-0 pt-1"
                                                 style="padding: 0 0 .5rem" id="tab-system">
                                                @if(isset($project_group))
                                                        @foreach($project_group as $val)
                                                            <div class="form-group row form-field">

                                                                <div class="col-md-2 text-capitalize asterisk control-label">
                                                                    <span>用户名</span>
                                                                </div>

                                                                <div class="col-md-8 ">

                                                                    <div class="help-block with-errors"></div>
                                                                    <div class="input-group">

                                                            <span class="input-group-prepend"><span
                                                                    class="input-group-text bg-white"><i
                                                                        class="feather icon-edit-2"></i></span></span>
                                                                        <input required="1" type="text" name="project_group[]"
                                                                               class="form-control field_form1_text_ _normal_"
                                                                               placeholder="Input text" value="{{$val}}"></div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                @else
                                                    <div class="form-group row form-field">

                                                        <div class="col-md-2 text-capitalize asterisk control-label">
                                                            <span>用户名</span>
                                                        </div>

                                                        <div class="col-md-8 ">

                                                            <div class="help-block with-errors"></div>
                                                            <div class="input-group">

                                                            <span class="input-group-prepend"><span
                                                                    class="input-group-text bg-white"><i
                                                                        class="feather icon-edit-2"></i></span></span>
                                                                <input required="1" type="text" name="project_group[]" value=""
                                                                       class="form-control field_form1_text_ _normal_"
                                                                       placeholder="Input text"></div>


                                                        </div>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="box-footer row d-flex">
                                                <div class="col-md-2"> &nbsp;</div>
                                                <div class="col-md-8">
                                                    <input type="button" id="bt1" onclick="add()" class="btn btn-primary pull-left" value="添加节点">
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
    function add(){
        $("#tab-system").append('<div class="form-group row form-field">\n' +
            '\n' +
            '                                                    <div class="col-md-2 text-capitalize asterisk control-label">\n' +
            '                                                        <span></span>\n' +
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
            '                                                            <input required="1" type="text" id="project_group" name="project_group[]"\n' +
            '                                                                   class="form-control field_form1_text_ _normal_"\n' +
            '                                                                   placeholder="Input text"></div>\n' +
            '\n' +
            '\n' +
            '                                                    </div>\n' +
            '                                                </div>');
    }
    $('#toolbar').find('input[type=checkbox]').bind('click', function(){

        //当前的checkbox是否选中
        if(this.checked){
            $('#toolbar input[type="checkbox"]').prop("checked",false)
            $(this).prop("checked",true)
        }
    });

    $('#same_tableau').find('input[type=checkbox]').bind('click', function(){

        //当前的checkbox是否选中
        if(this.checked){
            $('#same_tableau input[type="checkbox"]').prop("checked",false)
            $(this).prop("checked",true)
        }
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

    $(".tj").click(function(){
        $('form').ajaxSubmit({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
            type: 'post',
            url: "" ,//自己提交给自己可以不写url
            success: function(data){
                console.log(data)
                if(data.code == 200){
                    layer.msg('添加成功!',{icon:1,time:1000},function(){
                        // parent.layer.close(index);
                        parent.location.reload();
                    });
                }else{
                    layer.msg(data.message,{icon:2,time:2000});
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
