<?php /*a:1:{s:60:"/Users/chenyouxi/Desktop/WWW/nyd/view/admin/login/index.html";i:1568374940;}*/ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--渲染器-->
    <meta name="renderer" content="webkit">
    <!--优先使用最新版本的IE 和 Chrome 内核-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>
        nenyes-后台管理
    </title>
    <link rel="stylesheet" href="/static/plugins/layui/css/layui.css">
    <link rel="stylesheet" href="/static/admin/css/style.css">
    <script src="/static/plugins/layui/layui.js">
    </script>
    <script src="/static/plugins/layui/js/jquery.min.js">
    </script>
    <script>
        layui.use('layer',
            function () {
                var $ = layui.jquery, layer = layui.layer;
            })
    </script>
</head>

<body>
<?php if($mobile==false): ?>
<div id="video_wrapper">
    <video autoplay muted loop>
        <source src="/static/admin/coverr/Nature-Sunset.mp4" type="video/mp4">
    </video>
</div>
<style>
    #video_wrapper {
        margin: 0px;
        padding: 0px;
    }

    #video_wrapper video {
        position: fixed;
        top: 50%;
        left: 50%;
        z-index: -100;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        transform: translate(-50%, -50%);
    }
</style>
<?php endif; ?>
<div class="layadmin-user-login layadmin-user-display-show" id="LAY-user-login">
    <div class="layadmin-user-login-main">
        <div class="layadmin-user-login-box layadmin-user-login-header">
            <h2>
                <?php echo htmlentities($system['name']); ?>
            </h2>
        </div>
        <div class="layadmin-user-login-box layadmin-user-login-body layui-form">
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-username"
                       for="LAY-user-login-username">
                </label>
                <input type="text" name="username" id="LAY-user-login-username" lay-verify="required"
                       placeholder="用户名" class="layui-input">
            </div>
            <div class="layui-form-item">
                <label class="layadmin-user-login-icon layui-icon layui-icon-password"
                       for="LAY-user-login-password">
                </label>
                <input type="password" name="password" id="LAY-user-login-password" lay-verify="required"
                       placeholder="密码" class="layui-input">
            </div>
            <?php if($system['code']): ?>
            <div class="layui-form-item">
                <div class="layui-row">
                    <div class="layui-col-xs5">
                        <label class="layadmin-user-login-icon layui-icon layui-icon-vercode"
                               for="LAY-user-login-vercode">
                        </label>
                        <input type="text" name="vercode" id="LAY-user-login-vercode" lay-verify="required"
                               placeholder="验证码" class="layui-input">
                    </div>
                    <div class="layui-col-xs7">
                        <div style="margin-left: 10px;">
                            <img src="<?php echo url('Login/captcha'); ?>" class="layadmin-user-login-codeimg"
                                 id="LAY-user-get-vercode">
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="layui-form-item">
                <input type="hidden" name="__token__" value="<?php echo token(); ?>"/>
                <button class="layui-btn layui-btn-fluid login" lay-submit lay-filter="LAY-user-login-submit">
                    登 录
                </button>
            </div>
            <div class="layui-trans layadmin-user-login-footer">
                <p>
                    nenyes ©
                </p>
                <p>
                    <span>
                        <a href="http://siyucms.com/" target="_blank">
                            获取授权
                        </a>
                    </span>
                    <span>
                        <a href="http://siyucms.com/" target="_blank">
                            前往官网
                        </a>
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).keyup(function (event) {
        if (event.keyCode == 13) {
            $(".login").trigger("click");
        }
    });
    $(function () {
        //刷新验证码操作
        $(".layadmin-user-login-codeimg").click(function () {
            $(this).attr("src", $(this).attr("src") + '?' + Math.random());
        })
        //后台登录
        $(".login").click(function () {
            var username = $("input[name='username']").val();
            var password = $("input[name='password']").val();
            var __token__ = $("input[name='__token__']").val();
            var vercode = $("input[name='vercode']").val();
            $.ajax({
                type: "post",
                url: "<?php echo url('checkLogin'); ?>",
                data: {
                    username: username,
                    password: password,
                    vercode: vercode,
                    __token__: __token__
                },
                dataType: "json",
                success: function (data) {
                    if (data.error == 1) {
                        layer.alert(data.msg, {
                            icon: 2
                        });
                    } else {
                        layer.load();
                        window.location.href = data.href;
                    }
                },
                error: function (xhr) {

                }
            });

        })
    })
</script>
</body>

</html>