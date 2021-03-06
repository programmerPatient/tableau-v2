<!-- _meta 作为公共模版分离出去 -->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>用户映射</title>
<meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
    <form action="" method="post" class="form form-horizontal" id="form-admin-role-add">
        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3" style="float:right;">
                <button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 提交</button>
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-2">

                <h4>tableau用户列表</h4>
            </label>
            <div class="formControls col-xs-8 col-sm-9">
                <dl class="permission-list">
                    <dd>
                        <dl class="cl permission-list2">
                            <dd>

                                    <label id="checkboxarr">
                                        @foreach($tsResponse as $key=>$val)
                                        <input id="check{{$key}}" style="display: inline;" type="checkbox" value="{{$val->name}}" name="tableauid" @if($val->name == $mamber->tableau_id) checked @endif>
                                        {{$val->name}}
                                        </br>
                                        @endforeach
                                    </label>

                            </dd>
                        </dl>
                    </dd>
                </dl>
            </div>
        </div>
        {{csrf_field()}}
    </form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/admin/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/admin/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript">

//多个checkbox只能选择一个

$(function(){
    $('#checkboxarr').find('input[type=checkbox]').bind('click', function(){

        //当前的checkbox是否选中
        if(this.checked){
            $('input[type="checkbox"]').prop("checked",false)
            $(this).prop("checked",true)
        // //除当前的checkbox其他的都不选中
        // $("#checkboxarr").find('input[type=checkbox]').not(this).attr("checked", false);
        console.log("点击");
         //选中的checkbox数量
         var selectleng = $("input[type='checkbox']:checked").length;
         console.log("选中的checkbox数量"+selectleng);
        }
         else{
         //未选中的处理
          console.log("未选中的处理");
          }
    });

    $('.skin-minimal input').iCheck({
        checkboxClass: 'icheckbox-blue',
        radioClass: 'iradio-blue',
        increaseArea: '20%'
    });

    $("#form-admin-role-add").validate({
        onkeyup:false,
        focusCleanup:true,
        success:"valid",
        submitHandler:function(form){
            $(form).ajaxSubmit({
                type: 'post',
                url: "" ,//自己提交给自己可以不写url
                success: function(data){
                    if(data == '1'){
                        layer.msg('映射成功!',{icon:1,time:1000},function(){
                            var index = parent.layer.getFrameIndex(window.name);
                            //刷新
                            parent.window.location = parent.window.location;
                            parent.layer.close(index);
                        });
                    }else{
                        layer.msg('映射失败!',{icon:2,time:2000});
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
    });
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>
