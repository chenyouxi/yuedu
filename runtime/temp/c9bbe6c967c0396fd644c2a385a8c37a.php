<?php /*a:4:{s:76:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/Login/login.html";i:1565149604;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/header.html";i:1561604652;s:78:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/foot.html";i:1565580169;s:86:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/right-navbar.html";i:1563782741;}*/ ?>
<!DOCTYPE html><html><head>    <meta charset="utf-8" />    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="format-detection" content="telephone=yes" />    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />    <meta name="keywords" content="91AMZ 简单选品 选品简单" />    <meta name="description" content="91AMZ 简单选品 选品简单" />    <title><?php echo htmlentities($title); ?></title>    <link rel="shortcut icon" href="/public/static/images/favicon.ico">    <!--<link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap.min.css" />-->    <link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap.css" />    <!--<link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap-theme.min.css" />-->    <link rel="stylesheet" type="text/css" href="/public/static/css/animate.min.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/common.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/doc-home.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/front.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/custom-front.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/fakeLoader.css" />    <link rel="stylesheet" type="text/css" href="/public/static/font-awesome/css/font-awesome.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/hs.megamenu.css" />    <!--[if lt IE 9]>    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>    <![endif]-->    <!--[if lte IE 8]>    <script>    (function(a){var c=document.createElement("div");c.className="g-alert-danger";c.innerHTML='您的浏览器实在<strong>太太太太太太太旧了</strong>,为保证良好的视觉体验，升级完浏览器再说<a href="https://browsehappy.com" target="_blank">立即升级</a>';var b=function(){var d=document.getElementsByTagName("body")[0];if("undefined"==typeof(d)){setTimeout(b,10)}else{d.insertBefore(c,d.firstChild)}};b()}(window));    </script>    <![endif]-->    <script src="/public/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>    <script src="/public/static/js/bootstrap.min.js" type="text/javascript"></script></head><body>
<script src="https://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
<style>
    .carousel-container {
        width: 780px;
    }

    .carousel-indicators li {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        margin: 0 5px;
    }

    .carousel-image {
        height: 560px;
    }

    .logo {
        width: 180px;
        height: 100px;
    }

    .form-container {
        margin-top: 15px;
        margin-bottom: 15px;
    }

    @media only screen and (min-width: 1200px) {
        .container-fluid {
            width: 1200px;
        }
    }

    .carousel-control-prev, .carousel-control-next {
        width: 10%;
    }



    .bg-white .toggle-head{
        height: 42px;
        width: 422px;
        position: absolute;
        top: 0rem;
        left: 0rem;
        border-bottom: 1px solid #EFF1F4;
    }

    .toggle-head a{
        color: #8C98A5;
        font-size: 14px;
        display: inline-block;
        height: 42px;
        line-height: 42px;
    }

    /*.qr-btn{*/
        /*float: left;*/
        /*margin-left: 69px;*/
    /*}*/

    /*.nr-btn{*/
        /*float: right;*/
        /*margin-right: 69px;*/
    /*}*/
    .qr-div{
        display: none;
    }


    .qr-div,.nr-div{
        margin-top: 32px;
    }
    body{
        background-image: url(/public/static/images/login-bg.png);
    }
    .qr-code iframe{
        height:290px;
    }


</style>


<div class="container-fluid form-container">
    <div class="row">
        <div class="carousel-container d-none d-lg-block">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <a href="" target="_blank">
                            <img class="carousel-image w-100" src="/public/static/images/login_body.jpg" alt="">
                        </a>
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col bg-white p-4 pt-lg-5 pb-lg-0 px-lg-7">

            <div class="toggle-head col-12">
                <a class="qr-btn col-6 col-sm-6" href="javascript:void(0)" style="color: rgb(140, 152, 165); text-align:center;">
                    <img src="/public/static/images/weixinMode.png" style="vertical-align: middle;padding-bottom: 1px;"/> 微信扫码登录
                </a>
                <a class="nr-btn col-5 col-sm-5" href="javascript:void(0)" style="color: #3377FF; border-bottom: 3px solid #3377FF;text-align:center;margin-left:20px;">
                    <img src="/public/static/images/accMode.png" style="vertical-align: middle;padding-bottom: 1px;" /> 账号登录
                </a>
            </div>

            <div class="nr-div" style="display: block;">

                <div class="d-flex flex-column align-items-center">
                    <img class="logo" src="/public/static/images/logo.svg" alt="logo">
                    <span class="text-muted mt-3">手机用户登录</span>
                </div>

                <form class="mt-7" name="loginform" id="loginform" action="/website/Login" method="post" >

                    <div class="input-group u-form">
                        <input type="text" name="mobile"  maxlength="11" id="mobile" value="<?php echo htmlentities(app('cookie')->get('userMobile')); ?>" onKeyPress="if (event.keyCode == 13) submits();"  class="form-control form-control-sm u-form__input" maxlength="50" placeholder="手机号" pattern="^(1[3|4|5|6|7|8|9]\d{9})|([\w\-\.]{2,30}@[0-9A-Za-z\-]{1,}\.[a-zA-Z]{2,}(\.[a-zA-Z]{2,})?)|([0-9a-zA-Z]*)$" required="" autofocus="">
                    </div>

                    <div class="input-group u-form mt-3">
                        <input type="password" name="password" id="password" class="form-control form-control-sm u-form__input" onKeyPress="if (event.keyCode == 13) submits();"  placeholder="密 码" value="<?php echo htmlentities(app('cookie')->get('userPassword')); ?>" required="">
                    </div>


                    <div class="mt-3 text-right" style="line-height:1rem;">
                        <div class="small u-link-ss-grey pull-left">
                            <label for="rememberme">
                                <input name="rememberme" type="checkbox" id="rememberme" onKeyPress="if (event.keyCode == 13) submits();" value="">记住我的登录信息
                            </label>
                        </div>
                        <a class="small u-link-ss-grey" href="/website/findPasswd" >忘记密码？</a>
                    </div>

                    <div class="pull-left mt-3">
                        <a href="/website/oauthLogin?type=QQLOGIN" class="u-link-ss-grey" title="使用QQ登录" style="margin-right:10px;">
                            <img src="/public/static/images/tl_qq.png">
                        </a>
                        <!--<a  href="/website/oauthLogin?type=WCHAT" class="u-link-ss-grey" title="使用微信登录"><img src="/public/static/images/tl_weixin.png"></a>-->
                        <a  href="javascript:void(0);" class="u-link-ss-grey wxlogin" title="使用微信登录"><img src="/public/static/images/tl_weixin.png"></a>
                    </div>

                    <p class="text-danger m-0 mt-3 small pull-right " style="line-height:2rem;" id="login_error_message"></p>


                    <button style="height: 2.5rem;" class="btn btn-sm u-btn-orange transition-3d-hover w-100 mt-5" type="button"  id="wp-submit" >
                        登录
                    </button>

                    <div class="text-center small mt-3">
                        <a class="u-link-ss" href="/website/register">注册新用户</a>
                        <span class="text-muted">&nbsp;|&nbsp;</span>
                        <a class="u-link-ss-grey" href="/">返回首页</a>
                    </div>

                </form>
            </div>

            <div class="qr-div" style="display: none;">
                <div class="d-flex flex-column align-items-center">
                    <img class="logo" src="/public/static/images/logo.svg" alt="logo">
                    <span class="text-muted mt-3">微信扫码登录</span>
                </div>
                <div class="qr-code" style="text-align: center;height: 290px;" id="login_container">

                    <img src="/public/static/img/wxloading.gif" style="display: inline-block; width: 184px;  margin-top: 10%;line-height: 1.6;text-align:center;" />

                    <p class="notice">打开 微信APP 扫一扫登录</p>
                </div>

                <div class="text-center small mt-3" style="margin-top: 20px">
                    <a class="u-link-ss" href="/website/register">注册新用户</a>
                    <span class="text-muted">&nbsp;|&nbsp;</span>
                    <a class="u-link-ss-grey" href="/">返回首页</a>
                </div>

            </div>

        </div>
    </div>
</div>





<script type="text/javascript">



    function wp_attempt_focus(){
        setTimeout( function(){
            try{
                d = document.getElementById('mobile');
                d.focus();
                d.select();
            } catch(e){}
        }, 200);
    }

    wp_attempt_focus();
    if(typeof wpOnload=='function')wpOnload();

    wp_attempt_focus();
    if(typeof wpOnload=='function')wpOnload();

    var buttom = document.getElementById('wp-submit');
    buttom.onclick = function (){
        submits();
    }

    //记住登录信息
    $('#rememberme').click(function(){
        if(this.checked){
            $("input[type=checkbox][name=rememberme]").prop('checked',true);
            $("input[type=checkbox][name=rememberme]").val('1');
        }else{
            $("input[type=checkbox][name=rememberme]").prop('checked',false);
            $("input[type=checkbox][name=rememberme]").val('');
        }
    })


    function submits(){
        var mobile = $("#mobile").val();

        var password = $("#password").val();

        var rememberme = $("#rememberme").val();

        if(!(/^1[34578]\d{9}$/.test(mobile)) || !mobile){
            //layer.msg("手机号码有误，请重填！");
            $("#login_error_message").html("手机号码格式有误，请重新输入！");
            $("#mobile").focus();
            return false;

        } else if ( !password ){
            //layer.msg("密码不能为空！");
            $("#login_error_message").html("密码不能为空！");
            $("#password").focus();
            return false;
        }
        // $.loading();
        $("#wp-submit").attr("disabled", "disabled");
        $("#wp-submit").html("<i class='fa fa-spin fa-circle-o-notch'></i> 登录中...");
        $.ajax({
            url: "/website/login",
            type: 'POST',
            dataType: 'json',
            data: {
                mobile: mobile,
                password: password,
                rememberme: rememberme
            },
            success: function (data) {
                console.log(data);
                // $.loaded();
                if (data.status == "success") {
                    layer.msg(data.msg);
                    setTimeout(window.location.href=data.data.url,3000);
                } else {
                    $("#login_error_message").html(data.msg);
                    //layer.msg(data.msg);
                    $("#wp-submit").prop("disabled", false);

                    $("#wp-submit").html("登录");

                }

            }
        });

    }



    $(function(){
        $(".qr-btn,.wxlogin").click(function(){

            $(".nr-div").hide();

            $(".qr-div").show();

            $(".qr-btn").css("color","#3377FF");

            $(".qr-btn").css("border-bottom","3px solid #3377FF");

            $(".nr-btn").css("color" , "rgb(140, 152, 165)");

            $(".nr-btn").css("border-bottom" , "");

            var state = "";
            //生成登录二维码
            // $.get("/website/createState", {}, function (res) {
            //
            //     state = res;
            //     var obj = new WxLogin
            //     ({
            //         id:"login_container",//div的id
            //         appid: "<?php echo htmlentities($loginConfig['wchat_login_config']['configValue']['APP_KEY']); ?>",
            //         scope: "snsapi_login",//写死
            //         redirect_uri:encodeURI("<?php echo htmlentities($loginConfig['wchat_login_config']['configValue']['CALLBACK']); ?>") ,
            //         state: state,
            //         style: "black",//二维码黑白风格
            //         href: "https://www.91amz.com/public/static/css/weixin-login.css"
            //     });
            // },false);
            bind();

        });

        $(".nr-btn").click(function(){

            $(".nr-div").show();

            $(".qr-div").hide();

            $(this).css("color","#3377FF");

            $(this).css("border-bottom","3px solid #3377FF");

            $(".qr-btn").css("color" , "rgb(140, 152, 165)");

            $(".qr-btn").css("border-bottom" , "");

        });

    })

    function bind(){
        //生成二维码
        $.get("/website/getQrCode", {}, function (data) {
            if(data.status == 'success'){
                var ticket = data.data.ticket;
                //微信
               // $("#login_container").html('<img src="'+data.data.showQrCodeUrl+'" style="display: inline-block; border: 1px solid #eee;width: 184px; height: 184px; margin-top: 35px;    line-height: 1.6;text-align:center;" />');
                $("#login_container img").attr('src',data.data.showQrCodeUrl);

                setTimeout(function(){
                    getQrState(ticket);
                },3000);
            }
        },'json');
    }

    function getQrState(ticket){
        $.post("/website/getQrState", {"ticket":ticket}, function (data) {
            if(data.status == 'success'){
                if(data.data.status == 1){
                    layer.msg("扫码登录成功");
                    //直接跳转到绑定
                    window.location.href="/website/perfectInfo?ticket="+ticket;
                } else if (data.data.status == 2){
                    //提示登录
                    window.location.href="/website/wxLogin?ticket="+ticket;
                }

            } else {
                //3s后再请求一次
                setTimeout(function(){
                    getQrState(ticket);
                },3000);

            }
        },'json');
    }




</script>



<!--footer--><!-- 侧面工具栏 -->
<div class="right-navbar">
    <ul>
        <li>
            <span id="gotop" data-toggle="tooltip" data-placement="left" data-title="返回顶部"></span>
        </li>
        <li>
        </li>

        <li>
            <span data-toggle="tooltip" data-style="white" data-placement="left" data-title="扫一扫，微信咨询" data-src="/public/static/images/91wechat.png"></span>
        </li>
        <li>
            <a href="tencent://message/?uin=676826691&Site=Sambow&Menu=yes" data-toggle="tooltip" data-placement="left" data-title="676826691"></a>
        </li>
        <li>
            <!--<a href="#" data-toggle="tooltip" data-placement="left" data-title="问题反馈" target="_blank" rel="nofollow"></a>-->
        </li>
    </ul>
</div>
<!-- /.侧面工具栏 --><script src="/public/static/js/entrance.js" data-args="manual=true" class="zhiCustomBtn" id="zhichiScript"></script><script src="/public/static/js/common.min.js" type="text/javascript" ></script><script src="/public/static/js/owl.carousel.min.js" type="text/javascript" ></script><script src="/public/static/js/doc-home.min.js" type="text/javascript" ></script><script src="/public/static/js/jquery.SuperSlide.2.1.2.js" type="text/javascript"></script><script src="/public/static/js/wow.min.js"></script><script src="/public/static/layer/layer.js"></script><script src="/public/static/js/page.js" type="text/javascript" charset="utf-8"></script><script src="/public/static/js/fakeLoader.js"></script><script src="/public/static/js/jquery.lazyload.js" type="text/javascript" charset="utf-8"></script><script src="/public/static/js/js.js" type="text/javascript" charset="utf-8"></script><!--<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>--><script type="text/javascript">    $(function() {        var wow = new WOW({            boxClass: 'wow',            animateClass: 'animated',            offset: 0,            mobile: true,            live: true        });        wow.init();    })</script><script>    var _hmt = _hmt || [];    (function() {        var hm = document.createElement("script");        hm.src = "https://hm.baidu.com/hm.js?e10236d029ca2107cedf036344fb3570";        var s = document.getElementsByTagName("script")[0];        s.parentNode.insertBefore(hm, s);    })();</script></body></html>