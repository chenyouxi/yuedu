<?php /*a:4:{s:79:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/Login/register.html";i:1564974529;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/header.html";i:1561604652;s:78:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/foot.html";i:1562900543;s:86:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/right-navbar.html";i:1563782741;}*/ ?>
<!DOCTYPE html><html><head>    <meta charset="utf-8" />    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="format-detection" content="telephone=yes" />    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />    <meta name="keywords" content="91AMZ 简单选品 选品简单" />    <meta name="description" content="91AMZ 简单选品 选品简单" />    <title><?php echo htmlentities($title); ?></title>    <link rel="shortcut icon" href="/public/static/images/favicon.ico">    <!--<link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap.min.css" />-->    <link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap.css" />    <!--<link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap-theme.min.css" />-->    <link rel="stylesheet" type="text/css" href="/public/static/css/animate.min.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/common.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/doc-home.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/front.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/custom-front.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/fakeLoader.css" />    <link rel="stylesheet" type="text/css" href="/public/static/font-awesome/css/font-awesome.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/hs.megamenu.css" />    <!--[if lt IE 9]>    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>    <![endif]-->    <!--[if lte IE 8]>    <script>    (function(a){var c=document.createElement("div");c.className="g-alert-danger";c.innerHTML='您的浏览器实在<strong>太太太太太太太旧了</strong>,为保证良好的视觉体验，升级完浏览器再说<a href="https://browsehappy.com" target="_blank">立即升级</a>';var b=function(){var d=document.getElementsByTagName("body")[0];if("undefined"==typeof(d)){setTimeout(b,10)}else{d.insertBefore(c,d.firstChild)}};b()}(window));    </script>    <![endif]-->    <script src="/public/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>    <script src="/public/static/js/bootstrap.min.js" type="text/javascript"></script></head><body>
<style>

    .bootbox-alert .modal-footer{display: none;}
    .logo {
        width: 220px;
        height: 70px;
    }
    .form-container {
        margin-top: 15px;
        margin-bottom: 15px;
    }
    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
    }
    body{
        background-image: url(/public/static/images/login-bg.png);
    }

    .modal-body::-webkit-scrollbar {
        display: none;
    }

</style>
<!--<link rel="stylesheet" type="text/css" href="/public/static/css/login.css" />-->

<!--<div id="login" class="col-sm-4">-->
    <!--<h1><a href="/" title="91AMZ" tabindex="-1">91AMZ</a></h1>-->
    <!--<h2>注册新用户</h2>-->
    <!--<form name="registerform" id="registerform"  method="post" novalidate="novalidate">-->
        <!--<p>-->
            <!--<input type="text" name="userMobile" id="userMobile" onkeyup="checkIsPhone(event)" class="form-control" maxlength="11" value=""  placeholder="输入手机号">-->
        <!--</p>-->
        <!--<p>-->
            <!--<input type="password" name="userPassword" id="userPassword" class="form-control" minlength="6" maxlength="50" value=""  placeholder="输入密码">-->
        <!--</p>-->
        <!--<p>-->
            <!--<div style="position:relative">-->
                <!--<input type="text" name="verificationCode" id="verificationCode" class="form-control pull-right" value="" size="20" placeholder="请输入验证码">-->
                <!--<input name="发送验证码" type="button" value="获取验证码" class="verification" />-->
            <!--</div>-->


        <!--</p>-->
        <!--<p class="forgetmenot">注册验证码将会以短信形式发送至你手机</p>-->
        <!--<input type="hidden" name="redirect_to" value="">-->
        <!--<p class="submit">-->
            <!--<input type="button" name="wp-submit" id="register-submit" class="button button-primary button-large" value="注册">-->
        <!--</p>-->
    <!--</form>-->
    <!--<p class="nav mt-2">-->
        <!--<a href="/website/Login">登陆</a> | <a href="/website/findPasswd">忘记密码？</a>-->
    <!--</p>-->
    <!--<p class="backtoblog mt-2">-->
        <!--<a href="/">← 返回到91AMZ</a>-->
    <!--</p>-->
<!--</div>-->

<div class="container" >
    <div class="row">
        <div class="col-md-8 col-lg-6 col-xl-5 mx-auto bg-white form-container p-4 p-lg-7">

            <div class="d-flex flex-column align-items-center">
                <img class="logo" src="/public/static/images/logo.svg" alt="logo" >
                <span class="text-muted mt-3 mb-3">新用户注册</span>
            </div>

            <form class="mt-4" name="form_signin" action="/website/register" method="post" onsubmit="return fPostSignup();">

                <div class="form-group u-form">
                    <input name="userMobile" id="userMobile" onkeyup="checkIsPhone(event)" maxlength="11" type="text" class="form-control form-control-sm u-form__input" placeholder="手机号，如: 13912345678" value="" required="" autocomplete="off" onKeyPress="if (event.keyCode == 13) registerSubmits();" pattern="^1[3|4|5|6|7|8|9]\d{9}$">
                    <small class="help-block help-text text-muted"></small>
                </div>
                <div class="input-group form-group u-form">
                    <input name="verificationCode" id="verificationCode"  autocomplete="off" pattern="^\d{4,8}$" minlength="4" maxlength="6" type="text" class="form-control form-control-sm u-form__input" placeholder="注册验证码将会以短信形式发送至你手机" required="" onKeyPress="if (event.keyCode == 13) registerSubmits();"  title="">
                    <div class="input-group-append">
                        <span class="btn btn-sm u-btn-orange verification" style="line-height:25px;background: rgb(214, 214, 214) none repeat scroll 0% 0%;color: rgb(102, 102, 102);" >获取验证码</span>
                    </div>
                </div>


                <div class="form-group u-form">
                    <input name="userPassword" id="userPassword"  type="password" pattern="^.{6,20}$" maxlength="20" class="form-control form-control-sm u-form__input" placeholder="密码(6-20位字母或数字)" required="" autocomplete="off" onKeyPress="if (event.keyCode == 13) registerSubmits();">
                </div>
                <div class="form-group u-form">
                    <input  id="passwordRepeat" type="password" pattern="^.{6,20}$" class="form-control form-control-sm u-form__input" maxlength="20" placeholder="请再次输入密码" autocomplete="off" required="" data-toggle="popover" data-placement="bottom" onKeyPress="if (event.keyCode == 13) registerSubmits();" data-trigger="click" data-content="请确保与上面的密码一致">
                </div>

                <div class="small u-link-ss-grey mt-1 mb-4">
                    <label for="rule">
                        <input name="rule" type="checkbox" id="rule" value="1">我已阅读并同意
                    </label>
                    <a data-toggle="modal" data-target="#registerRule-modal" style="border: none;color:#3377FF;font-size:12px;">《平台服务条款及使用规则》</a>
                </div>

                <div class="form-group u-form">
                    <button type="button"  id="register-submit" class="h-100 btn btn-sm u-btn-orange transition-3d-hover w-100">立即注册</button>
                </div>

                <p class="text-danger">
                    <small></small>
                </p>
            </form>

            <div class="text-center small mt-3">
                <a class="u-link-ss" href="/website/login">登录已有账号</a>
                <span class="text-muted">&nbsp;|&nbsp;</span>
                <a class="u-link-ss-grey" href="/">返回首页</a>
            </div>
        </div>
    </div>
</div>

<!-- 平台使用规则 -->
<div class="modal fade m-auto" id="registerRule-modal" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top: 10%;left:0;right:0;bottom:0;">
    <div class="modal-dialog">
        <div class="modal-content " style="width: 600px;min-height: 500px;box-shadow: 2px 2px 10px rgba(0, 0, 0, .3);">

            <div class="modal-header" style="border-bottom: none;height: 40px;line-height: 40px;padding: 0px 0px 0px 0px; border-bottom:1px solid #eee; ">
                <h5 class="modal-title" id="myModalLabel" style="margin-left: 230px;line-height:40px;">
                    平台服务条款及使用规则
                </h5>

                <button class="btn btn-xs u-btn--icon u-btn-text-secondary u-modal-window__close" type="button" data-dismiss="modal">
                    <span class="fas fa-times"></span>
                </button>
            </div>

            <div class="modal-body" style="clear:both;height:100%;    max-height: 500px;">
                <div class="mod-content" style="padding: 30px 30px 40px;">
                    <table width="100%">
                        <tbody><tr>
                            <td><!--[if gte mso 9]><xml> <o:OfficeDocumentSettings> <o:PixelsPerInch>120</o:PixelsPerInch> </o:OfficeDocumentSettings> </xml><![endif]--> <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;mso-outline-level: 5;background:white" align="center"><strong><span style="mso-bidi-font-size:10.5pt;font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;; mso-bidi-font-family:Arial;color:#333333;mso-font-kerning:0pt"><font size="5">91AMZ用户服务协议</font></span></strong></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;mso-outline-level: 5;background:white" align="left"><br><strong><span style="mso-bidi-font-size:10.5pt;font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;; mso-bidi-font-family:Arial;color:#333333;mso-font-kerning:0pt"><font size="5"></font></span><span style="mso-bidi-font-size:10.5pt;font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;; mso-bidi-font-family:Arial;color:#333333;mso-font-kerning:0pt"><span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">本协议是您与91AMZ网站（简称<span lang="EN-US">"</span>本站<span lang="EN-US">"</span>，网址：<span lang="EN-US">www.91amz.com</span>）所有者（以下简称为<span lang="EN-US">"</span>91AMZ<span lang="EN-US">"</span>）之间就91AMZ网站服务等相关事宜所订立的契约，请您仔细阅读本注册协议，您点击<span lang="EN-US">"</span>同意并继续<span lang="EN-US">"</span>按钮后，本协议即构成对双方有约束力的法律文件。</span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><br><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"><span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">第<span lang="EN-US">1</span>条 本站服务条款的确认和接纳<span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">1.1</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;本站的各项电子服务的所有权和运作权归91AMZ所有。用户同意所有注册协议条款并完成注册程序，才能成为本站的正式用户。用户确认：本协议条款是处理双方权利义务的契约，始终有效，法律另有强制性规定或双方另有特别约定的，依其规定。 <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">1.2</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;用户点击同意本协议的，即视为用户确认自己具有享受本站服务、下单购物等相应的权利能力和行为能力，能够独立承担法律责任。<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">1.3</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;如果您在<span lang="EN-US">18</span>周岁以下，您只能在父母或监护人的监护参与下才能使用本站。<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">1.4</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;91AMZ保留在中华人民共和国大陆地区法施行之法律允许的范围内独自决定拒绝服务、关闭用户账户、清除或编辑内容或取消订单的权利。</span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><br><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"><span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">第<span lang="EN-US">2</span>条 本站服务<span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">2.1</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;91AMZ通过互联网依法为用户提供互联网信息等服务，用户在完全同意本协议及本站规定的情况下，方有权使用本站的相关服务。<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">2.2</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;用户必须自行准备如下设备和承担如下开支：（<span lang="EN-US">1</span>）上网设备，包括并不限于电脑或者其他上网终端、调制解调器及其他必备的上网装置；（<span lang="EN-US">2</span>）上网开支，包括并不限于网络接入费、上网设备租用费、手机流量费等。 <br></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><br><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"><span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">第<span lang="EN-US">3</span>条 用户信息<span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">3.1</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;用户应自行诚信向本站提供注册资料，用户同意其提供的注册资料真实、准确、完整、合法有效，用户注册资料如有变动的，应及时更新其注册资料。如果用户提供的注册资料不合法、不真实、不准确、不详尽的，用户需承担因此引起的相应责任及后果，并且91AMZ保留终止用户使用91AMZ各项服务的权利。 <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">3.2</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;用户在本站进行浏览、下单购物等活动时，涉及用户真实姓名<span lang="EN-US">/</span>名称、通信地址、联系电话、电子邮箱等隐私信息的，本站将予以严格保密，除非得到用户的授权或法律另有规定，本站不会向外界披露用户隐私信息。 <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">3.3</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;用户注册成功后，将产生用户名和密码等账户信息，您可以根据本站规定改变您的密码。用户应谨慎合理的保存、使用其用户名和密码。用户若发现任何非法使用用户账号或存在安全漏洞的情况，请立即通知本站并向公安机关报案。 <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">3.4</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;用户同意，91AMZ拥有通过邮件、短信电话等形式，向在本站注册、购物用户、收货人发送订单信息、促销活动等告知信息的权利。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US"></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">3.5</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;用户不得将在本站注册获得的账户借给他人使用，否则用户应承担由此产生的全部责任，并与实际使用人承担连带责任。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US"></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">3.6</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;用户同意，91AMZ有权使用用户的注册信息、用户名、密码等信息，登录进入用户的注册账户，进行证据保全，包括但不限于公证、见证等。</span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><br><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"></span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US"></span></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">第<span lang="EN-US">4</span>条 用户依法言行义务<span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">本协议依据国家相关法律法规规章制定，用户同意严格遵守以下义务：<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">1</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;不得传输或发表：煽动抗拒、破坏宪法和法律、行政法规实施的言论，煽动颠覆国家政权，推翻社会主义制度的言论，煽动分裂国家、破坏国家统一的的言论，煽动民族仇恨、民族歧视、破坏民族团结的言论； <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">2</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;从中国大陆向境外传输资料信息时必须符合中国有关法规；<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">3</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;不得利用本站从事洗钱、窃取商业秘密、窃取个人信息等违法犯罪活动； <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">4</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;不得干扰本站的正常运转，不得侵入本站及国家计算机信息系统；<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">5</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;不得传输或发表任何违法犯罪的、骚扰性的、中伤他人的、辱骂性的、恐吓性的、伤害性的、庸俗的，淫秽的、不文明的等信息资料；<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">6</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;不得传输或发表损害国家社会公共利益和涉及国家安全的信息资料或言论；<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">7</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;不得教唆他人从事本条所禁止的行为；<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">8</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;不得利用在本站注册的账户进行牟利性经营活动；<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">9</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;不得发布任何侵犯他人著作权、商标权等知识产权或合法权利的内容；<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">用户应不时关注并遵守本站不时公布或修改的各类合法规则规定。<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">本站保有删除站内各类不符合法律政策或不真实的信息内容而无须通知用户的权利。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US"></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">若用户未遵守以上规定的，本站有权作出独立判断并采取暂停或关闭用户帐号等措施。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">用户须对自己在网上的言论和行为承担法律责任。</span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><br><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"><span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">本站上的商品价格、数量、是否有货等商品信息随时都有可能发生变动，本站不作特别通知。由于网站上商品信息的数量极其庞大，虽然本站会尽最大努力保证您所浏览商品信息的准确性，但由于众所周知的互联网技术因素等客观原因存在，本站网页显示的信息可能会有一定的滞后性或差错，对此情形您知悉并理解；91AMZ欢迎纠错，并会视情况给予纠错者一定的奖励。<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">为表述便利，商品和服务简称为<span lang="EN-US">"</span>商品<span lang="EN-US">"</span>或<span lang="EN-US">"</span>货物<span lang="EN-US">"</span>。</span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><br><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"><span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">第<span lang="EN-US">5</span>条 订单<span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">6.1</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">在您下订单时，请您仔细确认所购商品的名称、价格、数量、型号、规格、尺寸、联系地址、电话、收货人等信息。收货人与用户本人不一致的，收货人的行为和意思表示视为用户的行为和意思表示，用户应对收货人的行为及意思表示的法律后果承担连带责任。 <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">6.2</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">除法律另有强制性规定外，双方约定如下：本站上销售方展示的商品和价格等信息仅仅是交易信息的发布，您下单时须填写您希望购买的商品数量、价款及支付方式、收货人、联系方式、收货地址等内容；系统生成的订单信息是计算机信息系统根据您填写的内容自动生成的数据，仅是您向销售方发出的交易诉求；销售方收到您的订单信息后，只有在销售方将您在订单中订购的商品从仓库实际直接向您发出时（ 以商品出库为标志），方视为您与销售方之间就实际直接向您发出的商品建立了交易关系；如果您在一份订单里订购了多种商品并且销售方只给您发出了部分商品时，您与销售方之间仅就实际直接向您发出的商品建立了交易关系；只有在销售方实际直接向您发出了订单中订购的其他商品时，您和销售方之间就订单中该其他已实际直接向您发出的商品才成立交易关系。您可以随时登录您在本站注册的账户，查询您的订单状态。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"> <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">6.3</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">由于市场变化及各种以合理商业努力难以控制的因素的影响，本站无法保证您提交的订单信息中希望购买的商品都会有货；如您拟购买的商品，发生缺货，您有权取消订单。</span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"></span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"> <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"><br></span></strong></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">第<span lang="EN-US">6</span>条 配送<span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">7.1</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;销售方将会把商品（货物）送到您所指定的收货地址，所有在本站上列出的送货时间为参考时间，参考时间的计算是根据库存状况、正常的处理过程和送货时间、送货地点的基础上估计得出的。 <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">7.2</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;因如下情况造成订单延迟或无法配送等，销售方不承担延迟配送的责任：<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">1</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">用户提供的信息错误、地址不详细等原因导致的； <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">2</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">货物送达后无人签收，导致无法配送或延迟配送的；<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">3</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">情势变更因素导致的；<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">（<span lang="EN-US">4</span>）</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">不可抗力因素导致的，例如：自然灾害、交通戒严、突发战争等。</span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><br><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"><span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">第<span lang="EN-US">7</span>条 所有权及知识产权条款<span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">8.1</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;用户一旦接受本协议，即表明该用户主动将其在任何时间段在本站发表的任何形式的信息内容（包括但不限于客户评价、客户咨询、各类话题文章等信息内容）的财产性权利等任何可转让的权利，如著作权财产权（包括并不限于：复制权、发行权、出租权、展览权、表演权、放映权、广播权、信息网络传播权、摄制权、改编权、翻译权、汇编权以及应当由著作权人享有的其他可转让权利），全部独家且不可撤销地转让给91AMZ所有，用户同意91AMZ有权就任何主体侵权而单独提起诉讼。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"> <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">8.2</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;本协议已经构成《中华人民共和国著作权法》第二十五条（条文序号依照<span lang="EN-US">2011</span>年版著作权法确定）及相关法律规定的著作财产权等权利转让书面协议，其效力及于用户在91AMZ网站上发布的任何受著作权法保护的作品内容，无论该等内容形成于本协议订立前还是本协议订立后。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"> <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">8.3</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;用户同意并已充分了解本协议的条款，承诺不将已发表于本站的信息，以任何形式发布或授权其它主体以任何方式使用（包括但不限于在各类网站、媒体上使用）。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"> <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">8.4</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;91AMZ是本站的制作者<span lang="EN-US">,</span>拥有此网站内容及资源的著作权等合法权利<span lang="EN-US">,</span>受国家法律保护<span lang="EN-US">,</span>有权不时地对本协议及本站的内容进行修改，并在本站张贴，无须另行通知用户。在法律允许的最大限度范围内，91AMZ对本协议及本站内容拥有解释权。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"> <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">8.5</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;除法律另有强制性规定外，未经91AMZ明确的特别书面许可<span lang="EN-US">,</span>任何单位或个人不得以任何方式非法地全部或部分复制、转载、引用、链接、抓取或以其他方式使用本站的信息内容，否则，91AMZ有权追究其法律责任。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"> <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">8.6</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;本站所刊登的资料信息（诸如文字、图表、标识、按钮图标、图像、声音文件片段、数字下载、数据编辑和软件），均是91AMZ或其内容提供者的财产，受中国和国际版权法的保护。本站上所有内容的汇编是91AMZ的排他财产，受中国和国际版权法的保护。本站上所有软件都是91AMZ或其关联公司或其软件供应商的财产，受中国和国际版权法的保护。 <br></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><br><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"><span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">第<span lang="EN-US">8</span>条 责任限制及不承诺担保<span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">除非另有明确的书面说明<span lang="EN-US">,</span>本站及其所包含的或以其它方式通过本站提供给您的全部信息、内容、材料、产品（包括软件）和服务，均是在<span lang="EN-US">"</span>按现状<span lang="EN-US">"</span>和<span lang="EN-US">"</span>按现有<span lang="EN-US">"</span>的基础上提供的。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"> <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">除非另有明确的书面说明<span lang="EN-US">,</span>91AMZ不对本站的运营及其包含在本网站上的信息、内容、材料、产品（包括软件）或服务作任何形式的、明示或默示的声明或担保（根据中华人民共和国法律另有规定的以外）。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"> <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">91AMZ不担保本站所包含的或以其它方式通过本站提供给您的全部信息、内容、材料、产品（包括软件）和服务、其服务器或从本站发出的电子信件、信息没有病毒或其他有害成分。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US"></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">如因不可抗力或其它本站无法控制的原因使本站销售系统崩溃或无法正常使用导致网上交易无法完成或丢失有关的信息、记录等，91AMZ会合理地尽力协助处理善后事宜。</span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><br><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"></span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US"></span></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">第<span lang="EN-US">9</span>条 协议更新及用户关注义务<span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;background:white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">根据国家法律法规变化及网站运营需要，91AMZ有权对本协议条款不时地进行修改，修改后的协议一旦被张贴在本站上即生效，并代替原来的协议。用户可随时登录查阅最新协议； </span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;用户有义务不时关注并阅读最新版的协议及网站公告。如用户不同意更新后的协议，可以且应立即停止接受91AMZ网站依据本协议提供的服务；如用户继续使用本网站提供的服务的，即视为同意更新后的协议。91AMZ建议您在使用本站之前阅读本协议及本站的公告。</span><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"> 如果本协议中任何一条被视为废止、无效或因任何理由不可执行，该条应视为可分的且并不影响任何其余条款的有效性和可执行性。</span></p>
                                <p class="MsoNormal" style="text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;background:white" align="left"><br><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"> <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">第<span lang="EN-US">10</span>条 法律管辖和适用<span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;background:white" align="left"><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;本协议的订立、执行和解释及争议的解决均应适用在中华人民共和国大陆地区适用之有效法律（但不包括其冲突法规则）。 如发生本协议与适用之法律相抵触时，则这些条款将完全按法律规定重新解释，而其它有效条款继续有效。 如缔约方就本协议内容或其执行发生任何争议，双方应尽力友好协商解决；协商不成时，可向深圳市相关法院提起诉讼。 <br></span></p>
                                <p class="MsoNormal" style="text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;background:white" align="left"><br><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;"><span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="margin-top:7.5pt;margin-right:0cm; margin-bottom:7.5pt;margin-left:0cm;text-align:left;line-height:15.0pt; mso-pagination:widow-orphan;mso-outline-level:6;background:white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">第<span lang="EN-US">11</span>条 其他 <span lang="EN-US"></span></span></strong></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">12.1</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;91AMZ网站所有者是指在政府部门依法许可或备案的91AMZ网站经营主体。<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">12.2</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;91AMZ尊重用户和消费者的合法权利，本协议及本网站上发布的各类规则、声明等其他内容，均是为了更好的、更加便利的为用户和消费者提供服务。本站欢迎用户和社会各界提出意见和建议，91AMZ将虚心接受并适时修改本协议及本站上的各类规则。 <span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">12.3</span></strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;">&nbsp;本协议内容中以黑体、加粗、下划线、斜体等方式显著标识的条款，请用户着重阅读。<span lang="EN-US"></span></span></p>
                                <p class="MsoNormal" style="mso-margin-top-alt:auto;mso-margin-bottom-alt: auto;text-align:left;line-height:15.0pt;mso-pagination:widow-orphan;background: white" align="left"><strong><span style="font-family: &quot;微软雅黑&quot;,&quot;sans-serif&quot;;" lang="EN-US">12.4</span></strong><span style="mso-bidi-font-size:10.5pt;font-family:&quot;微软雅黑&quot;,&quot;sans-serif&quot;;mso-bidi-font-family: Arial;color:#666666;mso-font-kerning:0pt"><font color="#000000">您点击我已同意  <span lang="EN-US">"</span>《平台使用规则》<span lang="EN-US">"</span>按钮即视为您完全接受本协议，在点击之前请您再次确认已知悉并完全理解本协议的全部内容。</font><span lang="EN-US"></span></span></p>
                                <!--[if gte mso 9]><xml> <w:WordDocument> <w:View>Normal</w:View> <w:Zoom>0</w:Zoom> <w:TrackMoves/> <w:TrackFormatting/> <w:DoNotShowPropertyChanges/> <w:PunctuationKerning/> <w:DrawingGridVerticalSpacing>7.8 磅</w:DrawingGridVerticalSpacing> <w:DisplayHorizontalDrawingGridEvery>0</w:DisplayHorizontalDrawingGridEvery> <w:DisplayVerticalDrawingGridEvery>2</w:DisplayVerticalDrawingGridEvery> <w:ValidateAgainstSchemas/> <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid> <w:IgnoreMixedContent>false</w:IgnoreMixedContent> <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText> <w:DoNotPromoteQF/> <w:LidThemeOther>EN-US</w:LidThemeOther> <w:LidThemeAsian>ZH-CN</w:LidThemeAsian> <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript> <w:Compatibility> <w:SpaceForUL/> <w:BalanceSingleByteDoubleByteWidth/> <w:DoNotLeaveBackslashAlone/> <w:ULTrailSpace/> <w:DoNotExpandShiftReturn/> <w:AdjustLineHeightInTable/> <w:BreakWrappedTables/> <w:SnapToGridInCell/> <w:WrapTextWithPunct/> <w:UseAsianBreakRules/> <w:DontGrowAutofit/> <w:SplitPgBreakAndParaMark/> <w:DontVertAlignCellWithSp/> <w:DontBreakConstrainedForcedTables/> <w:DontVertAlignInTxbx/> <w:Word11KerningPairs/> <w:CachedColBalance/> <w:UseFELayout/> </w:Compatibility> <m:mathPr> <m:mathFont m:val="Cambria Math"/> <m:brkBin m:val="before"/> <m:brkBinSub m:val="&#45;-"/> <m:smallFrac m:val="off"/> <m:dispDef/> <m:lMargin m:val="0"/> <m:rMargin m:val="0"/> <m:defJc m:val="centerGroup"/> <m:wrapIndent m:val="1440"/> <m:intLim m:val="subSup"/> <m:naryLim m:val="undOvr"/> </m:mathPr></w:WordDocument> </xml><![endif]--><!--[if gte mso 9]><xml> <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="true" DefSemiHidden="true" DefQFormat="false" DefPriority="99" LatentStyleCount="267"> <w:LsdException Locked="false" Priority="0" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Normal"/> <w:LsdException Locked="false" Priority="9" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="heading 1"/> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 4"/> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 5"/> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 6"/> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 7"/> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 8"/> <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 9"/> <w:LsdException Locked="false" Priority="39" Name="toc 1"/> <w:LsdException Locked="false" Priority="39" Name="toc 2"/> <w:LsdException Locked="false" Priority="39" Name="toc 3"/> <w:LsdException Locked="false" Priority="39" Name="toc 4"/> <w:LsdException Locked="false" Priority="39" Name="toc 5"/> <w:LsdException Locked="false" Priority="39" Name="toc 6"/> <w:LsdException Locked="false" Priority="39" Name="toc 7"/> <w:LsdException Locked="false" Priority="39" Name="toc 8"/> <w:LsdException Locked="false" Priority="39" Name="toc 9"/> <w:LsdException Locked="false" Priority="35" QFormat="true" Name="caption"/> <w:LsdException Locked="false" Priority="10" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Title"/> <w:LsdException Locked="false" Priority="1" Name="Default Paragraph Font"/> <w:LsdException Locked="false" Priority="11" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Subtitle"/> <w:LsdException Locked="false" Priority="22" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Strong"/> <w:LsdException Locked="false" Priority="20" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Emphasis"/> <w:LsdException Locked="false" Priority="59" SemiHidden="false" UnhideWhenUsed="false" Name="Table Grid"/> <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Placeholder Text"/> <w:LsdException Locked="false" Priority="1" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="No Spacing"/> <w:LsdException Locked="false" Priority="60" SemiHidden="false" UnhideWhenUsed="false" Name="Light Shading"/> <w:LsdException Locked="false" Priority="61" SemiHidden="false" UnhideWhenUsed="false" Name="Light List"/> <w:LsdException Locked="false" Priority="62" SemiHidden="false" UnhideWhenUsed="false" Name="Light Grid"/> <w:LsdException Locked="false" Priority="63" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 1"/> <w:LsdException Locked="false" Priority="64" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 2"/> <w:LsdException Locked="false" Priority="65" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 1"/> <w:LsdException Locked="false" Priority="66" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 2"/> <w:LsdException Locked="false" Priority="67" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 1"/> <w:LsdException Locked="false" Priority="68" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 2"/> <w:LsdException Locked="false" Priority="69" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 3"/> <w:LsdException Locked="false" Priority="70" SemiHidden="false" UnhideWhenUsed="false" Name="Dark List"/> <w:LsdException Locked="false" Priority="71" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Shading"/> <w:LsdException Locked="false" Priority="72" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful List"/> <w:LsdException Locked="false" Priority="73" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Grid"/> <w:LsdException Locked="false" Priority="60" SemiHidden="false" UnhideWhenUsed="false" Name="Light Shading Accent 1"/> <w:LsdException Locked="false" Priority="61" SemiHidden="false" UnhideWhenUsed="false" Name="Light List Accent 1"/> <w:LsdException Locked="false" Priority="62" SemiHidden="false" UnhideWhenUsed="false" Name="Light Grid Accent 1"/> <w:LsdException Locked="false" Priority="63" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 1 Accent 1"/> <w:LsdException Locked="false" Priority="64" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 2 Accent 1"/> <w:LsdException Locked="false" Priority="65" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 1 Accent 1"/> <w:LsdException Locked="false" UnhideWhenUsed="false" Name="Revision"/> <w:LsdException Locked="false" Priority="34" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="List Paragraph"/> <w:LsdException Locked="false" Priority="29" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Quote"/> <w:LsdException Locked="false" Priority="30" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Intense Quote"/> <w:LsdException Locked="false" Priority="66" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 2 Accent 1"/> <w:LsdException Locked="false" Priority="67" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 1 Accent 1"/> <w:LsdException Locked="false" Priority="68" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 2 Accent 1"/> <w:LsdException Locked="false" Priority="69" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 3 Accent 1"/> <w:LsdException Locked="false" Priority="70" SemiHidden="false" UnhideWhenUsed="false" Name="Dark List Accent 1"/> <w:LsdException Locked="false" Priority="71" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Shading Accent 1"/> <w:LsdException Locked="false" Priority="72" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful List Accent 1"/> <w:LsdException Locked="false" Priority="73" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Grid Accent 1"/> <w:LsdException Locked="false" Priority="60" SemiHidden="false" UnhideWhenUsed="false" Name="Light Shading Accent 2"/> <w:LsdException Locked="false" Priority="61" SemiHidden="false" UnhideWhenUsed="false" Name="Light List Accent 2"/> <w:LsdException Locked="false" Priority="62" SemiHidden="false" UnhideWhenUsed="false" Name="Light Grid Accent 2"/> <w:LsdException Locked="false" Priority="63" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 1 Accent 2"/> <w:LsdException Locked="false" Priority="64" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 2 Accent 2"/> <w:LsdException Locked="false" Priority="65" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 1 Accent 2"/> <w:LsdException Locked="false" Priority="66" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 2 Accent 2"/> <w:LsdException Locked="false" Priority="67" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 1 Accent 2"/> <w:LsdException Locked="false" Priority="68" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 2 Accent 2"/> <w:LsdException Locked="false" Priority="69" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 3 Accent 2"/> <w:LsdException Locked="false" Priority="70" SemiHidden="false" UnhideWhenUsed="false" Name="Dark List Accent 2"/> <w:LsdException Locked="false" Priority="71" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Shading Accent 2"/> <w:LsdException Locked="false" Priority="72" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful List Accent 2"/> <w:LsdException Locked="false" Priority="73" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Grid Accent 2"/> <w:LsdException Locked="false" Priority="60" SemiHidden="false" UnhideWhenUsed="false" Name="Light Shading Accent 3"/> <w:LsdException Locked="false" Priority="61" SemiHidden="false" UnhideWhenUsed="false" Name="Light List Accent 3"/> <w:LsdException Locked="false" Priority="62" SemiHidden="false" UnhideWhenUsed="false" Name="Light Grid Accent 3"/> <w:LsdException Locked="false" Priority="63" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 1 Accent 3"/> <w:LsdException Locked="false" Priority="64" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 2 Accent 3"/> <w:LsdException Locked="false" Priority="65" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 1 Accent 3"/> <w:LsdException Locked="false" Priority="66" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 2 Accent 3"/> <w:LsdException Locked="false" Priority="67" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 1 Accent 3"/> <w:LsdException Locked="false" Priority="68" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 2 Accent 3"/> <w:LsdException Locked="false" Priority="69" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 3 Accent 3"/> <w:LsdException Locked="false" Priority="70" SemiHidden="false" UnhideWhenUsed="false" Name="Dark List Accent 3"/> <w:LsdException Locked="false" Priority="71" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Shading Accent 3"/> <w:LsdException Locked="false" Priority="72" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful List Accent 3"/> <w:LsdException Locked="false" Priority="73" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Grid Accent 3"/> <w:LsdException Locked="false" Priority="60" SemiHidden="false" UnhideWhenUsed="false" Name="Light Shading Accent 4"/> <w:LsdException Locked="false" Priority="61" SemiHidden="false" UnhideWhenUsed="false" Name="Light List Accent 4"/> <w:LsdException Locked="false" Priority="62" SemiHidden="false" UnhideWhenUsed="false" Name="Light Grid Accent 4"/> <w:LsdException Locked="false" Priority="63" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 1 Accent 4"/> <w:LsdException Locked="false" Priority="64" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 2 Accent 4"/> <w:LsdException Locked="false" Priority="65" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 1 Accent 4"/> <w:LsdException Locked="false" Priority="66" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 2 Accent 4"/> <w:LsdException Locked="false" Priority="67" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 1 Accent 4"/> <w:LsdException Locked="false" Priority="68" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 2 Accent 4"/> <w:LsdException Locked="false" Priority="69" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 3 Accent 4"/> <w:LsdException Locked="false" Priority="70" SemiHidden="false" UnhideWhenUsed="false" Name="Dark List Accent 4"/> <w:LsdException Locked="false" Priority="71" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Shading Accent 4"/> <w:LsdException Locked="false" Priority="72" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful List Accent 4"/> <w:LsdException Locked="false" Priority="73" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Grid Accent 4"/> <w:LsdException Locked="false" Priority="60" SemiHidden="false" UnhideWhenUsed="false" Name="Light Shading Accent 5"/> <w:LsdException Locked="false" Priority="61" SemiHidden="false" UnhideWhenUsed="false" Name="Light List Accent 5"/> <w:LsdException Locked="false" Priority="62" SemiHidden="false" UnhideWhenUsed="false" Name="Light Grid Accent 5"/> <w:LsdException Locked="false" Priority="63" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 1 Accent 5"/> <w:LsdException Locked="false" Priority="64" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 2 Accent 5"/> <w:LsdException Locked="false" Priority="65" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 1 Accent 5"/> <w:LsdException Locked="false" Priority="66" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 2 Accent 5"/> <w:LsdException Locked="false" Priority="67" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 1 Accent 5"/> <w:LsdException Locked="false" Priority="68" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 2 Accent 5"/> <w:LsdException Locked="false" Priority="69" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 3 Accent 5"/> <w:LsdException Locked="false" Priority="70" SemiHidden="false" UnhideWhenUsed="false" Name="Dark List Accent 5"/> <w:LsdException Locked="false" Priority="71" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Shading Accent 5"/> <w:LsdException Locked="false" Priority="72" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful List Accent 5"/> <w:LsdException Locked="false" Priority="73" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Grid Accent 5"/> <w:LsdException Locked="false" Priority="60" SemiHidden="false" UnhideWhenUsed="false" Name="Light Shading Accent 6"/> <w:LsdException Locked="false" Priority="61" SemiHidden="false" UnhideWhenUsed="false" Name="Light List Accent 6"/> <w:LsdException Locked="false" Priority="62" SemiHidden="false" UnhideWhenUsed="false" Name="Light Grid Accent 6"/> <w:LsdException Locked="false" Priority="63" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 1 Accent 6"/> <w:LsdException Locked="false" Priority="64" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Shading 2 Accent 6"/> <w:LsdException Locked="false" Priority="65" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 1 Accent 6"/> <w:LsdException Locked="false" Priority="66" SemiHidden="false" UnhideWhenUsed="false" Name="Medium List 2 Accent 6"/> <w:LsdException Locked="false" Priority="67" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 1 Accent 6"/> <w:LsdException Locked="false" Priority="68" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 2 Accent 6"/> <w:LsdException Locked="false" Priority="69" SemiHidden="false" UnhideWhenUsed="false" Name="Medium Grid 3 Accent 6"/> <w:LsdException Locked="false" Priority="70" SemiHidden="false" UnhideWhenUsed="false" Name="Dark List Accent 6"/> <w:LsdException Locked="false" Priority="71" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Shading Accent 6"/> <w:LsdException Locked="false" Priority="72" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful List Accent 6"/> <w:LsdException Locked="false" Priority="73" SemiHidden="false" UnhideWhenUsed="false" Name="Colorful Grid Accent 6"/> <w:LsdException Locked="false" Priority="19" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Subtle Emphasis"/> <w:LsdException Locked="false" Priority="21" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Intense Emphasis"/> <w:LsdException Locked="false" Priority="31" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Subtle Reference"/> <w:LsdException Locked="false" Priority="32" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Intense Reference"/> <w:LsdException Locked="false" Priority="33" SemiHidden="false" UnhideWhenUsed="false" QFormat="true" Name="Book Title"/> <w:LsdException Locked="false" Priority="37" Name="Bibliography"/> <w:LsdException Locked="false" Priority="39" QFormat="true" Name="TOC Heading"/> </w:LatentStyles> </xml><![endif]--><!--[if gte mso 10]>  <![endif]--></td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

    //注册获取验证码
    var wait = 60;

    function time() {
        if (wait == 0) {
            $(".verification").text("获取验证码");
            document.querySelector('.verification').style.background = '#4091EB';
            document.querySelector('.verification').style.color = '#FFF';
            $('.verification').removeClass("is_sending");
            wait = 60;
        } else {
            $(".verification").attr("disabled", true).text(wait + "s后重新发送");
            document.querySelector('.verification').style.background = '#d6d6d6';
            document.querySelector('.verification').style.color = '#666';
            wait--;
            setTimeout(function () {
                time()
            }, 1000);
        }
    }

    //判断是否是手机号
    function isPhoneAvailable ( phone) {
        var myreg = /^[1][3,4,5,7,8][0-9]{9}$/;
        if (!myreg.test(phone)) {
            return false;
        } else {
            return true;
        }
    }
    //按键抬起时验证是否为手机
    function checkIsPhone( event ){
        var phone = document.getElementById('userMobile').value;
        var verification = document.querySelector('.verification');

        if( wait < 60 ){
            return false;
        }

        if(isPhoneAvailable( phone )){
            verification.style.background = '#3377FF';
            verification.style.color = '#FFF';
        }else{
            verification.style.background = '#d6d6d6';
            verification.style.color = '#666';
        }
    }

    function wp_attempt_focus(){
        setTimeout( function(){ try{
            d = document.getElementById('userMobile');
            d.focus();
            d.select();
        } catch(e){}
        }, 200);
    }

    wp_attempt_focus();
    if(typeof wpOnload=='function')wpOnload();

    var buttom = document.getElementById('register-submit');
    //提交注册
    buttom.onclick = function (){
        registerSubmits();
    }
    function registerSubmits(){

        var userMobile = $("#userMobile").val();

        var password = $("#userPassword").val();

        var passwordRepeat = $("#passwordRepeat").val();

        var verifyCode = $("#verificationCode").val();

        //平台使用规则
        var isrule=$('#rule').is(':checked');

        if(!(/^1[34578]\d{9}$/.test(userMobile)) || !userMobile){

            layer.msg("手机号码有误，请重填！");
            $("#userMobile").focus();
            return false;

        } else if ( !verifyCode ){

            layer.msg("验证码不能为空！");
            $("#verificationCode").focus();
            return false;

        } else if ( !password || password.length<6){

            layer.msg("密码不能为空或不能小于6位！");
            $("#userPassword").focus();
            return false;

        } else if ( !passwordRepeat || passwordRepeat.length<6){

            layer.msg("确认密码不能为空或不能小于6位！");
            $("#passwordRepeat").focus();
            return false;

        } else if( password != passwordRepeat){

            layer.msg("两次密码不一致！");
            $("#userPassword").focus();
            $("#passwordRepeat").focus();
            return false;

        } else if (!isrule){
            layer.msg("请先阅读并同意服务条款！");
            $("#rule").focus();
            return false;
        }

        $.ajax({
            url: "/website/register",
            type: 'POST',
            dataType: 'json',
            data: {
                userMobile: userMobile,
                password: password,
                verifyCode:verifyCode
            },
            success: function (data) {
                if (data.status == "success") {
                    layer.msg(data.msg);
                    setTimeout(window.location.href='/',3000);
                } else {
                    layer.msg(data.msg);
                }
            }
        });

    }




        var cap_btn = $('.verification');
        cap_btn.click(function () {
            var mobile = $.trim($('#userMobile').val());

            if (!/1[3-8][0-9]{9}/.test(mobile)) {
                layer.msg('请输入正确手机号');
                return false;
            }

            if ($(this).hasClass('is_sending')) return false;
            cap_btn.addClass("is_sending");
            time();

            $.ajax({
                url: "/website/Sms",
                type: 'POST',
                dataType: 'json',
                beforeSend:function(){
                    $.loading();
                },
                data: {
                    mobile: mobile,
                    type: "register",
                    lock: "<?php echo htmlentities($lockSession); ?>"
                },
                success: function (data) {

                    $.loaded();

                    if (data.status == "success") {

                        layer.msg(data.msg);

                    } else {
                        $(".verification").text("获取验证码");
                        document.querySelector('.verification').style.background = '#4091EB';
                        document.querySelector('.verification').style.color = '#FFF';
                        $('.verification').removeClass("is_sending");
                        wait = 0;
                        layer.msg(data.msg);
                        $("#verificationCode").focus();
                    }
                }
            });
        });


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
<!-- /.侧面工具栏 --><script src="/public/static/js/entrance.js" data-args="manual=true" class="zhiCustomBtn" id="zhichiScript"></script><script src="/public/static/js/common.min.js" type="text/javascript" ></script><script src="/public/static/js/owl.carousel.min.js" type="text/javascript" ></script><script src="/public/static/js/doc-home.min.js" type="text/javascript" ></script><script src="/public/static/js/jquery.SuperSlide.2.1.2.js" type="text/javascript"></script><script src="/public/static/js/wow.min.js"></script><script src="/public/static/layer/layer.js"></script><script src="/public/static/js/page.js" type="text/javascript" charset="utf-8"></script><script src="/public/static/js/fakeLoader.js"></script><script src="/public/static/js/jquery.lazyload.js" type="text/javascript" charset="utf-8"></script><script src="/public/static/js/js.js" type="text/javascript" charset="utf-8"></script><!--<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>--><script type="text/javascript">    $(function() {        var wow = new WOW({            boxClass: 'wow',            animateClass: 'animated',            offset: 0,            mobile: true,            live: true        });        wow.init();    })</script></body></html>