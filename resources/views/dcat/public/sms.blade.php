
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">

    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title> {{$system->web_title}}</title>

    <meta name="referrer" content="no-referrer"/>




    <script src="/dcat-admin/static/dcat-admin/dcat/plugins/vendors.min.js?v2.0.17-beta"></script>
    <script src="/dcat-admin/static/dcat-admin/dcat/js/dcat-app.js?v2.0.17-beta"></script>

    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/adminlte/adminlte.css?v2.0.17-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/vendors.min.css?v2.0.17-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/extensions/toastr.css?v2.0.17-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/plugins/tables/datatable/datatables.min.css?v2.0.17-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/dcat-app.css?v2.0.17-beta">
    <link rel="stylesheet" href="/dcat-admin/static/dcat-admin/dcat/css/nunito.css?v2.0.17-beta">
</head>

<body class="dcat-admin-body full-page ">

<script>
    var Dcat = CreateDcat({"pjax_container_selector":"#pjax-container","token":"jihQwQQtdYii3Z9kWi0oRSkUSkFwyTBiisP6GsGh","lang":{"delete_confirm":"Are you sure to delete this item ?","confirm":"Confirm","cancel":"Cancel","refresh_succeeded":"Refresh succeeded !","close":"Close","selected_options":":num options selected","exceed_max_item":"Maximum items exceeded.","500":"Internal server error !","403":"Permission deny !","401":"Unauthorized !","419":"Page expired !"},"colors":{"info":"#3085d6","success":"#21b978","danger":"#ea5455","warning":"#dda451","indigo":"#5c6bc6","blue":"#3085d6","red":"#ea5455","orange":"#dda451","green":"#21b978","cyan":"#7367f0","purple":"#5b69bc","custom":"#59a9f8","pink":"#ff8acc","dark":"#22292f","white":"#fff","white50":"hsla(0,0%,100%,.5)","blue1":"#007ee5","blue2":"#3d97dd","orange1":"#ffcc80","orange2":"#F99037","yellow":"#edc30e","indigo-darker":"#495abf","red-darker":"#bd4147","blue-darker":"#236bb0","cyan-darker":"#6355ee","gray":"#b9c3cd","light":"#f7f7f9","tear":"#01847f","tear1":"#00b5b5","dark20":"#f6fbff","dark30":"#f4f7fa","dark35":"#e7eef7","dark40":"#ebf0f3","dark50":"#d3dde5","dark60":"#bacad6","dark70":"#b3b9bf","dark80":"#7c858e","dark85":"#5c7089","dark90":"#252d37","font":"#414750","gray-bg":"#f1f1f1","border":"#ebeff2","input-border":"#d9d9d9","background":"#eff3f8","dark-mode-bg":"#2c2c43","dark-mode-color":"#222233","dark-mode-color2":"#1e1e2d","dark-mode-font":"##a8a9bb","primary":"#586cb1","primary-darker":"#4c60a3","link":"#4c60a3"},"dark_mode":false,"sidebar_dark":false,"sidebar_light_style":"sidebar-light-primary"});
</script>




<div class="app-content content">
    <div class="wrapper" id="pjax-container">
        <style>.main-sidebar .nav-sidebar .nav-item>.nav-link {
                border-radius: .1rem;
            }</style>

        <div class="content-body" id="app">



            <section class="content">

                <div class="row"><div class="col-md-12"><style>
                            .row {
                                margin: 0;
                            }
                            .col-md-12,
                            .col-md-3 {
                                padding: 0;
                            }
                            @media  screen and (min-width: 1000px) and (max-width: 1150px) {
                                .col-lg-3,
                                .col-lg-9 {
                                    flex: 0 0 50%;
                                    max-width: 50%;
                                }
                            }
                            @media  screen and (min-width: 1151px) and (max-width: 1300px) {
                                .col-lg-3 {
                                    flex: 0 0 40%;
                                    max-width: 40%;
                                }
                                .col-lg-9 {
                                    flex: 0 0 60%;
                                    max-width: 60%;
                                }
                            }
                            @media  screen and (min-width: 1301px) and (max-width: 1700px) {
                                .col-lg-3 {
                                    flex: 0 0 35%;
                                    max-width: 35%;
                                }
                                .col-lg-9 {
                                    flex: 0 0 65%;
                                    max-width: 65%;
                                }
                            }

                            .login-page {
                                height: auto;
                            }
                            .login-main {
                                position: relative;
                                display: flex;
                                min-height: 100vh;
                                flex-direction: row;
                                align-items: stretch;
                                margin: 0;
                            }

                            .login-main .login-page {
                                background-color: #fff;
                            }

                            .login-main .card {
                                box-shadow: none;
                            }

                            .login-main .auth-brand {
                                margin: 4rem 0 4rem;
                                font-size: 26px;
                                width: 325px;
                            }

                            @media (max-width: 576px) {
                                .login-main .auth-brand {
                                    width: 90%;
                                    margin-left: 24px
                                }
                            }

                            .login-main .login-logo {
                                font-size: 2.1rem;
                                font-weight: 300;
                                margin-bottom: 0.9rem;
                                text-align: left;
                                margin-left: 20px;
                            }

                            .login-main .login-box-msg {
                                margin: 0;
                                padding: 0 0 20px;
                                font-size: 0.9rem;
                                font-weight: 400;
                                text-align: left;
                            }

                            .login-main .btn {
                                width: 100%;
                            }

                            .login-page-right {
                                padding: 6rem 3rem;
                                flex: 1;
                                position: relative;
                                color: #fff;
                                background-color: rgba(0, 0, 0, 0.3);
                                text-align: center !important;
                                background: url({{$system->background_url}}) center;
                                background-size: cover;
                            }

                            .login-description {
                                position: absolute;
                                margin: 0 auto;
                                padding: 0 1.75rem;
                                bottom: 3rem;
                                left: 0;
                                right: 0;
                            }

                            .content-front {
                                position: absolute;
                                left: 0;
                                right: 0;
                                height: 100vh;
                                background: rgba(0,0,0,.1);
                                margin-top: -6rem;
                            }

                            body.dark-mode .content-front {
                                background: rgba(0,0,0,.3);
                            }

                            body.dark-mode .auth-brand {
                                color: #cacbd6
                            }
                        </style>

                        <div class="row login-main">
                            <div class="col-lg-3 col-12 bg-white">
                                <div class="login-page">
                                    <div class="auth-brand text-lg-left">
                                        <img src="/dcat-admin/static/dcat-admin/images/logo.png" width="35"> &nbsp;{{$system->web_title}}
                                    </div>

                                    <div class="login-box">
                                        {{--                                        <div class="login-logo mb-2">--}}
                                        {{--                                            <h4 class="mt-0">让后台开发更简单</h4>--}}
                                        {{--                                            <p class="login-box-msg mt-1 mb-1">Welcome back, please login to your account.</p>--}}
                                        {{--                                        </div>--}}
                                        <div class="card">
                                            <div class="card-body login-card-body">

                                                <form id="login-form" method="POST" action="/sms/login">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input
                                                            type="text"
                                                            class="form-control mobile"
                                                            name="mobile"
                                                            placeholder="手机号"
                                                            value=""
                                                            required
                                                            autofocus
                                                        >

                                                        <div class="form-control-position">
                                                            <i class="feather icon-phone"></i>
                                                        </div>

                                                        <label for="email">phone</label>

                                                        <div class="help-block with-errors"></div>
                                                    </fieldset>
                                                    <button type="button" id="sms" class="btn btn-primary" style="margin-bottom: 20px;">

                                                        获取验证码

                                                    </button>
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input
                                                            minlength="5"
                                                            maxlength="20"
                                                            id="password"
                                                            type="text"
                                                            class="form-control "
                                                            name="captch"
                                                            placeholder="验证码"
                                                            required
                                                            value=""
                                                            autocomplete="current-password"
                                                        >

                                                        <div class="form-control-position">
                                                            <i class="feather icon-edit-1"></i>
                                                        </div>
                                                        <label for="text">验证码</label>

                                                        <div class="help-block with-errors"></div>

                                                    </fieldset>
                                                    <button type="submit" class="btn btn-primary float-right login-btn">

                                                        登录
                                                        &nbsp;
                                                        <i class="feather icon-arrow-right"></i>
                                                    </button>

                                                    <a href="/">
                                                        <button type="button" class="btn btn-primary float-right login-btn" style="margin-top: 20px;">

                                                            账号密码登录

                                                            <i class="feather icon-arrow-right"></i>
                                                        </button>
                                                    </a>
                                                    <a href="">
                                                        <button type="button" id="isVisitor" class="btn btn-primary float-right login-btn" style="margin-top: 20px;">

                                                            游客登录

                                                            <i class="feather icon-arrow-right"></i>
                                                        </button>
                                                    </a>

                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-9 col-12 login-page-right">
                                <div class="content-front"></div>
                                <div class="login-description">
                                    <p class="lead">
                                        {{$system->company}}
                                    </p>
                                </div>
                            </div>
                        </div>


                        <script>
                            // Dcat.ready(function () {
                            //     // ajax表单提交
                            //     $('#login-form').form({
                            //         validate: true,
                            //         success: function () {
                            //             alert('sss');
                            //         }
                            //     });
                            // });
                        </script>
                    </div></div>

            </section>



        </div>

        <script data-exec-on-popstate>
            (function () {
                try {

                } catch (e) {
                    console.error(e)
                }
            })();
            Dcat.ready(function () {
                try {
                    (function () {
                        var target = $('#admin-setting-config'), body = target.find('.modal-body');
                        target.on('modal:load', function () {
                            Dcat.helpers.asyncRender('http://103.39.211.179:8080/admin/dcat-api/render?_current_=http%3A%2F%2F103.39.211.179%3A8080%2Fadmin%2Fauth%2Flogin%3F&renderable=App_Admin_Forms_AdminSetting', function (html) {
                                body.html(html);



                                target.trigger('modal:loaded');
                            });
                        });
                        target.on('show.bs.modal', function (event) {
                            body.html('<div style="min-height:150px"></div>').loading();

                            setTimeout(function () {
                                target.trigger('modal:load')
                            }, 10);
                        });
                    })();;
                    Dcat.token = "jihQwQQtdYii3Z9kWi0oRSkUSkFwyTBiisP6GsGh";
                } catch (e) {
                    console.error(e)
                }
            })
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



<script src="/dcat-admin/static/dcat-admin/adminlte/adminlte.js?v2.0.17-beta"></script><script src="/dcat-admin/static/dcat-admin/dcat/plugins/extensions/toastr.min.js?v2.0.17-beta"></script><script src="/dcat-admin/static/dcat-admin/dcat/plugins/jquery-pjax/jquery.pjax.min.js?v2.0.17-beta"></script><script src="/dcat-admin/static/dcat-admin/dcat/plugins/bootstrap-validator/validator.min.js?v2.0.17-beta"></script><script src="/dcat-admin/static/dcat-admin/dcat/plugins/layer/layer.js?v2.0.17-beta"></script><script src="/dcat-admin/static/dcat-admin/dcat/plugins/jquery.initialize/jquery.initialize.min.js?v2.0.17-beta"></script>

<script>Dcat.boot();</script>
<script>
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
            t.html("重新获取验证码");
            return;
        } else {
            t.attr("disabled","disabled");
            t.html("重新发送(" + countdown + ")");
            countdown--;
        }
        setTimeout(function() {
            settime(countdown)
        },1000)
    }

    //以javascript弹窗形式输出错误的内容
        @if(count($errors) > 0)
    var allError = '';
    @foreach ($errors->all() as $error)
        allError+="{{ $error}}</br>";
    @endforeach
    //使用alert会很丑，可以使用layer插件进行美化，需要引入layer.js文件
    layer.alert(allError,{title:'错误提示',icon:5});
    @endif

    $('#isVisitor').click(function () {
        $.ajax({
            headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"},
            type: 'post',
            data: {'isVisitor':'1'},
            url: "/admin/public/check" ,//自己提交给自己可以不写url
            success: function(data){
                if(data['code'] == 200){
                    layer.msg(data['message'],{icon:1,time:1000},function(){
                        window.location.href = data['data'];
                    });
                }else{
                    layer.msg(data['message'],{icon: 2,time:1000});
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
