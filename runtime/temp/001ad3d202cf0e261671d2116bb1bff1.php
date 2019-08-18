<?php /*a:6:{s:89:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/Member/security_password.html";i:1562745937;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/header.html";i:1561604652;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/navbar.html";i:1564019336;s:85:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/member_menu.html";i:1563780742;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/footer.html";i:1563784405;s:86:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/right-navbar.html";i:1563782741;}*/ ?>
<!DOCTYPE html><html><head>    <meta charset="utf-8" />    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="format-detection" content="telephone=yes" />    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />    <meta name="keywords" content="91AMZ 简单选品 选品简单" />    <meta name="description" content="91AMZ 简单选品 选品简单" />    <title><?php echo htmlentities($title); ?></title>    <link rel="shortcut icon" href="/public/static/images/favicon.ico">    <!--<link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap.min.css" />-->    <link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap.css" />    <!--<link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap-theme.min.css" />-->    <link rel="stylesheet" type="text/css" href="/public/static/css/animate.min.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/common.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/doc-home.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/front.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/custom-front.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/fakeLoader.css" />    <link rel="stylesheet" type="text/css" href="/public/static/font-awesome/css/font-awesome.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/hs.megamenu.css" />    <!--[if lt IE 9]>    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>    <![endif]-->    <!--[if lte IE 8]>    <script>    (function(a){var c=document.createElement("div");c.className="g-alert-danger";c.innerHTML='您的浏览器实在<strong>太太太太太太太旧了</strong>,为保证良好的视觉体验，升级完浏览器再说<a href="https://browsehappy.com" target="_blank">立即升级</a>';var b=function(){var d=document.getElementsByTagName("body")[0];if("undefined"==typeof(d)){setTimeout(b,10)}else{d.insertBefore(c,d.firstChild)}};b()}(window));    </script>    <![endif]-->    <script src="/public/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>    <script src="/public/static/js/bootstrap.min.js" type="text/javascript"></script></head><body>
<header id="header" class="u-header u-header-left-aligned-nav u-header--navbar-bg">
    <div class="u-header__section bg-primary">
        <div class="container">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space hs-menu-initialized hs-menu-horizontal">
                <!-- Logo -->
                <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="/">
                    <img src="/public/images/logo_white.png" alt="Seller Sprite" style="height: 2.715rem;">
                    <span class="u-header__navbar-brand-text">&nbsp;</span>
                </a>
                <!-- End Logo -->

                <button type="button" class="navbar-toggler u-hamburger" data-toggle="collapse" data-target="#navBar">
                    <span class="u-hamburger__box">
                      <span class="u-hamburger__inner"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse navbar-right" id="navBar"  >

                    <ul class="head-nav u-header__navbar-nav"   >

                        <!--<li class="dropdown nav-item u-header__nav-item" >-->
                            <!--<a href="#" class="dropdown-toggle u-header__navbar-nav nav-link u-header__nav-link" data-toggle="dropdown"  > 91选品<span class="caret"></span> </a>-->
                            <!--<ul class="dropdown-menu amz-sub-menu" role="menu">-->
                                <!--<li><a  href="/website/shopSelection"> 店铺选品</a></li>-->
                                <!--&lt;!&ndash;<li><a  href="/website/productList"> 选产品</a></li>&ndash;&gt;-->
                            <!--</ul>-->
                        <!--</li>-->
                        <li class="nav-item u-header__nav-item ">
                            <a class="nav-link u-header__nav-link" href="/website/shopSelection" target="_blank">店铺选品</a>
                        </li>
                        <!--<li class="nav-item u-header__nav-item ">-->
                            <!--<a class="nav-link u-header__nav-link" href="/website/price" target="_blank">套餐购买</a>-->
                        <!--</li>-->
                        <li class="nav-item u-header__nav-item ">
                            <a class="nav-link u-header__nav-link" href="/website/article" target="_blank">帮助</a>
                        </li>


                        <?php if($isLogin): ?>
                        <li class="nav-item u-header__nav-item u-header__nav-last-item">
                            <a class="nav-link u-header__nav-link btn btn-sm btn-primary" style="color:#3377FF;background:white;" href="/website/member" target="_blank">个人中心</a>
                        </li>
                        <li class="nav-item hs-has-mega-menu " >
                            <span class="nav-link u-header__nav-link btn-notice" style="line-height:51px;">
                              <a href="/website/memberLetter" class="btn btn-xs btn-icon text-white btn-notice">
                                <span class="iconfont icon-notice1 font-size-2"></span>
                                  <?php if($smsCount): ?>
                                    <span class="badge badge-sm bg-FA3232 badge-pos rounded-circle hide" id="msg_none_read_bell" style="display: inline;"><?php echo htmlentities($smsCount); ?></span>
                                  <?php endif; ?>
                              </a>
                            </span>
                            <div class="hs-mega-menu u-header__sub-menu hs-position-right text-left" style="width: 350px;display: none;border-top:3px solid #3377FF;">
                                <h6 class="p-3 mb-0 border-bottom"><strong>消息通知</strong></h6>

                                <ul class="list-unstyled" id="msg_none_read_list" msg-sync="1" msg-url="/website/memberLetter">

                                    <?php if($getSmsList): if(is_array($getSmsList) || $getSmsList instanceof \think\Collection || $getSmsList instanceof \think\Paginator): $i = 0; $__LIST__ = $getSmsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <li class="p-3 border-bottom">
                                        <small class="text-muted d-flex justify-content-between">
                                            <span class="text-secondary">私信</span>
                                            <span class="ml-auto"><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($vo['addTime'])? strtotime($vo['addTime']) : $vo['addTime'])); ?></span>
                                        </small>
                                        <h6 class="mt-2">
                                            <a href="/website/memberLetter" class="text-msg link-muted">
                                                <span class="text-danger pr-2 pull-left">●</span>
                                                <div style="word-wrap:break-word;" ><?php echo $vo['content']; ?></div>
                                            </a>
                                        </h6>
                                    </li>
                                    <?php endforeach; endif; else: echo "" ;endif; else: ?>
                                    <li class="p-3" id="msg_none_read_none">
                                        <div class="text-center">
                                            <img src="/public/static/images/no_message.png" class="mt-4 w-50">
                                            <p class="mt-4 text-505355">您没有未读的消息通知！<a class="text-primary" href="/website/memberLetter">查看已读消息</a></p>
                                        </div>
                                    </li>
                                    <?php endif; ?>
                                </ul>
                                <h6 class="p-3 mb-0 hide" id="msg_none_read_more" style="display: block;">
                                    <a href="/website/memberLetter" class="link-dark no-decoration d-block text-center">查看更多</a>
                                </h6>
                            </div>
                        </li>

                        <li class="nav-item u-header__nav-item align-self-stretch">
                            <a href="javascript:;" class="u-header__user h-100 target-of-invoker-has-unfolds sidebar-account" data-toggle="modal" data-target="#sidebar-account"  >
                                <?php if($userInfo['userFace']): ?>
                                <img class="u-header__user-avatar" src="<?php echo htmlentities($userInfo['userFace']); ?>" alt="Avatar">
                                <?php else: ?>
                                <img class="u-header__user-avatar" src="/public/static/images/default_headimg.png" alt="Avatar">
                                <?php endif; ?>

                            </a>
                        </li>

                        <?php else: ?>
                        <li class="nav-item u-header__nav-item u-header__nav-last-item align-self-stretch guest-sign">
                            <span class="u-header__user h-100">
                                <span class="text-light" data-href="/website/login">登录</span>&nbsp;/&nbsp;<span class="text-light" data-href="/website/register">注册</span>
                            </span>
                        </li>
                        <li class="nav-item u-header__nav-item align-self-stretch">
                            <a href="javascript:;" class="u-header__user h-100 target-of-invoker-has-unfolds sidebar-account" data-toggle="modal" data-target="#sidebar-account"  >
                                <img class="u-header__user-avatar" src="/public/static/images/default_headimg.png" alt="Avatar">
                                91AMZ游客
                            </a>
                        </li>
                        <?php endif; ?>


                    </ul>
                </div>



            </nav>
            <!-- End Nav -->
        </div>
    </div>


    <aside id="sidebar-account" class="u-sidebar modal fade"  tabindex="1050" role="dialog"  style="animation-duration: 500ms; right: 0px;">
        <div class="u-sidebar__scroller bg-white">
            <div class="u-sidebar__container">
                <div class="u-sidebar--account__footer-offset ">
                    <div class="d-flex justify-content-between align-items-center pt-4 px-7">
                        <h3 class="h6 mb-0"   >个人中心</h3>
                        <button type="button" class="close ml-auto target-of-invoker-has-unfolds" data-dismiss="modal" aria-hidden="true" >
                            <span><i class="fa fa-times"></i></span>
                        </button>
                    </div>

                    <?php if($isLogin): ?>
                    <div class="js-scrollbar u-sidebar__body">
                        <div class="d-flex align-items-start u-sidebar--account__holder mt-3">
                            <div class="position-relative">
                                <?php if($userInfo['userFace']): ?>
                                <img class="u-sidebar--account__holder-img" src="<?php echo htmlentities($userInfo['userFace']); ?>" alt="Avatar">
                                <?php else: ?>
                                <img class="u-sidebar--account__holder-img" src="/public/static/images/default_headimg.png" alt="Avatar">
                                <?php endif; ?>


                            </div>
                            <div class="ml-3">
                                <strong>
                                    <?php echo htmlentities($userInfo['nickName']); ?>
                                    <!--<span class="badge badge-success ml-1"> 免费会员 </span>-->
                                </strong>
                                <span class="u-sidebar--account__holder-text mt-1"><?php echo htmlentities($userMobile); ?></span>
                                <span class="u-sidebar--account__holder-text mt-1 text-muted">
                                     剩余积分：<span class="badge badge-success ml-1"> <?php echo htmlentities($userInfo['integral']); ?></span>分
                                </span>
                            </div>
                        </div>

                        <div class="u-sidebar__content--account">
                            <ul class="list-unstyled u-sidebar--account__list">
                                <li class="u-sidebar--account__list-item">
                                    <a class="u-sidebar--account__list-link" href="/">
                                        <span class="fa fa-home u-sidebar--account__list-icon mr-2"></span>
                                        网站首页
                                    </a>
                                </li>

                                <li class="u-sidebar--account__list-item">
                                    <a class="u-sidebar--account__list-link" href="/website/member">
                                        <span class="fa fa-user-circle u-sidebar--account__list-icon mr-2"></span>
                                        个人中心
                                    </a>
                                </li>
                                <li class="u-sidebar--account__list-item">
                                    <a class="u-sidebar--account__list-link" href="/website/memberRecharge">
                                        <span class="fa fa-cubes u-sidebar--account__list-icon mr-2"></span>
                                        充值积分
                                    </a>
                                </li>
                                <li class="u-sidebar--account__list-item">
                                    <a class="u-sidebar--account__list-link" href="/website/myPoint">
                                        <span class="fa fa-list-alt u-sidebar--account__list-icon mr-2"></span>
                                        积分明细
                                    </a>
                                </li>
                                <li class="u-sidebar--account__list-item">
                                    <a class="u-sidebar--account__list-link" href="/website/article" target="_blank">
                                        <span class="fa fa-question-circle u-sidebar--account__list-icon mr-2"></span>
                                        帮助中心
                                    </a>
                                </li>
                                <li class="u-sidebar--account__list-item">
                                    <a class="u-sidebar--account__list-link" href="/website/logout">
                                        <span class="fa fa-sign-out u-sidebar--account__list-icon mr-2"></span>
                                        退出登录
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <?php else: ?>

                    <div class="js-scrollbar u-sidebar__body">
                        <div class="d-flex align-items-start u-sidebar--account__holder mt-3">
                            <div class="position-relative">
                                <img class="u-sidebar--account__holder-img" src="/public/static/images/default_headimg.png">
                            </div>
                            <div class="ml-3">

                                <strong>
                                    91AMZ游客
                                    <span class="badge badge-success ml-1">游客模式</span>
                                </strong>

                                <span class="u-sidebar--account__holder-text mt-1 text-muted">
                                     剩余积分：<span class="badge badge-success ml-1"> 0</span>分
                                </span>
                            </div>
                        </div>

                        <div class="u-sidebar__content--account">
                            <ul class="list-unstyled u-sidebar--account__list">
                                <li class="u-sidebar--account__list-item">
                                    <a class="u-sidebar--account__list-link" href="/">
                                        <span class="fa fa-home u-sidebar--account__list-icon mr-2"></span>
                                        网站首页
                                    </a>
                                </li>

                                <li class="u-sidebar--account__list-item">
                                    <a class="u-sidebar--account__list-link" href="/website/member">
                                        <span class="fa fa-user-circle u-sidebar--account__list-icon mr-2"></span>
                                        个人中心
                                    </a>
                                </li>
                                <li class="u-sidebar--account__list-item">
                                    <a class="u-sidebar--account__list-link" href="/website/memberRecharge">
                                        <span class="fa fa-cubes u-sidebar--account__list-icon mr-2"></span>
                                        充值积分
                                    </a>
                                </li>

                                <li class="u-sidebar--account__list-item">
                                    <a class="u-sidebar--account__list-link" href="/website/article" target="_blank">
                                        <span class="fa fa-question-circle u-sidebar--account__list-icon mr-2"></span>
                                        帮助中心
                                    </a>
                                </li>
                                <li class="u-sidebar--account__list-item">
                                    <a class="u-sidebar--account__list-link" href="/website/login">
                                        <span class="fa fa-sign-in u-sidebar--account__list-icon mr-2"></span>登录&nbsp;/&nbsp;注册
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <footer class="u-sidebar__footer u-sidebar__footer--account">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item pr-3">
                            <a class="u-sidebar__footer--account__text" href="../website/articleView?cid=2&aid=19">隐私政策</a>
                        </li>
                        <li class="list-inline-item pr-3">
                            <a class="u-sidebar__footer--account__text" href="../website/articleView?cid=2&aid=20">服务条款</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="u-sidebar__footer--account__text" href="javascript:;">
                                <span class="fa fa-info-circle"></span>
                            </a>
                        </li>
                    </ul>

                    <div class="position-absolute right-0 bottom-0 left-0">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 126.5" style="margin-bottom: -5px; enable-background:new 0 0 300 126.5;" xml:space="preserve">
                <path class="fill-primary" opacity=".6" d="M0,58.9c0-0.9,5.1-2,5.8-2.2c6-0.8,11.8,2.2,17.2,4.6c4.5,2.1,8.6,5.3,13.3,7.1C48.2,73.3,61,73.8,73,69
                  c43-16.9,40-7.9,84-2.2c44,5.7,83-31.5,143-10.1v69.8H0C0,126.5,0,59,0,58.9z"></path>
                            <path class="fill-primary" d="M300,68.5v58H0v-58c0,0,43-16.7,82,5.6c12.4,7.1,26.5,9.6,40.2,5.9c7.5-2.1,14.5-6.1,20.9-11
                  c6.2-4.7,12-10.4,18.8-13.8c7.3-3.8,15.6-5.2,23.6-5.2c16.1,0.1,30.7,8.2,45,16.1c13.4,7.4,28.1,12.2,43.3,11.2
                  C282.5,76.7,292.7,74.4,300,68.5z"></path>
              </svg>
                    </div>
                </footer>
            </div>
        </div>
    </aside>


</header>

<script>

    //点击登录
    $(".u-header__nav-item .text-light").click(function(){
        var href = $(this).data("href");
        window.location.href = href;
    })


    $(".hs-has-mega-menu").mouseover(function(){
        $(this).addClass("hs-mega-menu-opened");
        $(this).children(".hs-mega-menu").show();
        $(this).children(".hs-mega-menu").addClass("slideInUp");
        $(this).children(".hs-mega-menu").removeClass("fadeOut");
    })
    $(".hs-has-mega-menu").mouseleave(function(){


        $(this).children(".hs-mega-menu").hide();
        $(this).children(".hs-mega-menu").removeClass("slideInUp");
        $(this).children(".hs-mega-menu").addClass("fadeOut");
        $(this).removeClass("hs-mega-menu-opened");

    })

    $('#sidebar-account').modal(
        {
            show:false,
            backdrop:false
        }
    );

    $('#sidebar-account').on('show.bs.modal', function () {
        $(this).removeClass("fadeOutRight");
        $(this).addClass("fadeInRight");
    })
    $('#sidebar-account').on('hide.bs.modal', function () {
        $(this).removeClass("fadeInRight");
        $(this).addClass("fadeOutRight");
    })



</script>

<link rel="stylesheet" type="text/css" href="/public/static/css/member_security.css" /><style></style><div class="ns-main w1200">    <style>

</style>

<aside class="member-menu">
    <div class="item">

        <p class="title">
            <i class="icon i-member-center"></i>
            会员中心
        </p>
        <ul>
            <?php if(is_array($member_menu) || $member_menu instanceof \think\Collection || $member_menu instanceof \think\Paginator): $i = 0; $__LIST__ = $member_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                　　<a href="<?php echo htmlentities($vo['url']); ?>" ><?php echo htmlentities($vo['name']); ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>

    <div class="item">
        <p class="title">
            <i class="icon i-trading-center"></i>
            充值中心
        </p>
        <ul>
            <?php if(is_array($order_menu) || $order_menu instanceof \think\Collection || $order_menu instanceof \think\Paginator): $i = 0; $__LIST__ = $order_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                　　<a href="<?php echo htmlentities($vo['url']); ?>" ><?php echo htmlentities($vo['name']); ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>

    <div class="item">
        <p class="title">
            <i class="fa fa-users"></i>
            推广联盟
        </p>
        <ul>
            <?php if(is_array($promotion_menu) || $promotion_menu instanceof \think\Collection || $promotion_menu instanceof \think\Paginator): $i = 0; $__LIST__ = $promotion_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li>
                　　<a href="<?php echo htmlentities($vo['url']); ?>" ><?php echo htmlentities($vo['name']); ?></a>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</aside>
<script type="text/javascript">
    $(function () {
        $(".member-menu ul li a[href='" + String(location) + "']").addClass("ns-text-color");
    });
</script>    <div class="member-main">        <!-- 修改密码 -->        <section>            <div class="main-top">                <div class="title">修改登录密码</div>            </div>            <div class="setting-cont clearfix">                <div class="stepflex stepflex-te">                    <dl class="normal doing ns-border-color">                        <dt class="s-num ns-bg-color">1</dt>                        <dd class="s-text">密码修改</dd>                    </dl>                    <dl class="last">                        <dt class="s-num ns-bg-color-gray">2</dt>                        <dd class="s-text"> 完成</dd>                    </dl>                </div>                <div class="form-horizontal">                    <div class="form-group">                        <label class="col-sm-2">手机号</label>                        <div class="col-md-6 col-sm-10 list-inline-item">                            <input type="text" class="form-control form-control-sm" maxlength="11"  name="mobile" placeholder="请输入手机号" onKeyPress="if (event.keyCode == 13) memberInfoOperation.confirm(this);"  >                        </div>                    </div>                    <div class="form-group">                        <label class="col-sm-2">验证码</label>                        <div class="col-md-3 col-sm-5 list-inline-item">                            <input type="text" style="width: 120px;" class="form-control form-control-sm" maxlength="6" name="verify" placeholder="请输入验证码" onKeyPress="if (event.keyCode == 13) memberInfoOperation.confirm(this);" >                        </div>                        <div class="col-md-3 col-sm-5 list-inline-item item">                            <button class="btn btn-primary btn-sm btn-block code" onclick="memberInfoOperation.sendSmsCaptcha(this);" type="button">获取验证码</button>                        </div>                    </div>                    <div class="form-group">                        <label class="col-sm-2">原密码</label>                        <div class="col-md-6 col-sm-10 list-inline-item">                            <input type="password" class="form-control form-control-sm" name="old_password" placeholder="请输入原密码" onKeyPress="if (event.keyCode == 13) memberInfoOperation.confirm(this);" >                        </div>                    </div>                    <div class="form-group">                        <label class="col-sm-2">新密码</label>                        <div class="col-md-6 col-sm-10 list-inline-item">                            <input type="password" class="form-control form-control-sm" name="new_password" placeholder="请输入新密码" onKeyPress="if (event.keyCode == 13) memberInfoOperation.confirm(this);" >                        </div>                    </div>                    <div class="form-group">                        <label class="col-sm-2">确认密码</label>                        <div class="col-md-6 col-sm-10 list-inline-item">                            <input type="password" class="form-control form-control-sm" name="re_new_password" placeholder="请再次确认密码" onKeyPress="if (event.keyCode == 13) memberInfoOperation.confirm(this);" >                        </div>                    </div>                    <div class="form-group">                        <div class="col-12 col-sm-2 offset-sm-4" >                            <button class="btn btn-primary btn-sm btn-block " type="button" onclick="memberInfoOperation.confirm(this);">                                <span class="iconfont icon-correct font-size-1 mr-1"></span>                                保存                            </button>                        </div>                    </div>                </div>                <div class="js-finish verify-success none" id="finish_password">                    <p>新密码重置完成!</p>                </div>            </div>        </section>    </div></div><script>    //倒计时    var wait = 60;    function countDown(chageObj, oldText) {        //var time = time != undefined ? time : 60,        oldText = oldText != undefined ? oldText : '获取动态码',            text = wait + 's后重新获取';        if (wait > 0) {            $(chageObj).text(text).addClass('disabled');            wait -= 1;            setTimeout(function () {                countDown(chageObj, oldText);            }, 1000);        } else {            console.log(wait);            $(chageObj).text(oldText).removeClass('disabled');        }    }    var isClick = false;    var memberInfoOperation = {        field: {},        confirm: function (event) {            this.getFieldValue(event);            if (this.verification()) {                if (isClick) return;                isClick = true;                this.submit();            }        },        // 表单提交        submit: function () {            var self = this;            $.post("/website/modifyPassword", self.field, function (res) {                sendCodeId = 0;                isClick = false;                if (res.status == "success") {                    layer.msg(res.msg);                    $(".doing").removeClass("ns-border-color");                    $(".doing .sum").removeClass("ns-bg-color");                    $(".doing .sum").addClass("ns-bg-color-gray");                    $(".last").addClass("ns-border-color");                    $(".last .sum").addClass("ns-border-color");                    $(".last .sum").removeClass("ns-bg-color-gray");                    $(".js-finish").show();                    $(".form-horizontal").hide();                    setTimeout(function () {                        location.href = '/website/memberSecurity';                    }, 2000);                }else{                    layer.msg(res.msg);                }            },"json");        },        // 数据验证        verification: function (is_submit) {            var self = this,                field = this.field;            $("input").each(function(){                $(this).removeClass("ns-border-color");            });            if (field.mobile == '') {                layer.msg('手机号不能为空');                $("input[name=mobile]").focus().addClass("ns-border-color");                return false;            } else if (field.mobile.search(regex.mobile) == -1) {                layer.msg('手机号格式不正确');                $("input[name=mobile]").focus().addClass("ns-border-color");                return false;            }            if (field.verify == '') {                layer.msg('请输入动态码');                $("input[name=verify]").focus().addClass("ns-border-color");                return false;            }            if (field.old_password == '') {                layer.msg('请输入原密码');                $("input[name=old_password]").focus().addClass("ns-border-color");                return false;            }            if (field.new_password == '') {                layer.msg('请输入新密码');                $("input[name=new_password]").focus().addClass("ns-border-color");                return false;            }            if (field.re_new_password != field.new_password) {                layer.msg('两次输入的密码不一致');                $("input[name=re_new_password]").focus().addClass("ns-border-color");                return false;            }            return true;        },        // 获取表单数据        getFieldValue: function (event) {            var self = this;            var formObj = $(event).parents('.form-horizontal');            if (formObj.find('[name]').length > 0) {                formObj.find('[name]').each(function () {                    var name = $(this).attr('name'),                        value = $(this).val();                    self['field'][name] = value;                })            }        },        // 发送短信验证码        sendSmsCaptcha: function (event) {            var mobile = $("input[name=mobile]").val();            var isDisabled = $(".code").hasClass("disabled");            if(!isDisabled){                if ( mobile == '') {                    layer.msg('手机号不能为空');                    $("input[name=mobile]").focus();                    return false;                } else if (mobile.search(regex.mobile) == -1) {                    layer.msg('手机号格式不正确');                    $("input[name=mobile]").focus();                    return false;                }                countDown(event);                $.post('/website/sms', {                    "mobile": mobile,                    "type": "savePassword"                }, function (data) {                    if (data.status == "success") {                        //countDown(event);                        layer.msg(data.msg);                    } else {                        layer.msg(data.msg);                        wait = 0;                        countDown(self, "获取动态码");                    }                }, "json");            }        }    };    $(function(){        var userMobile = "<?php echo htmlentities($userMobile); ?>" ? true : false;        if(!userMobile){            //如果未绑定手机号，提示绑定并跳转到绑定手机号页面            layer.msg("您未绑定手机号，请先绑定手机号！",{                icon:2,                time:3000,            });            setTimeout(function(){                window.location.href="/website/perfectInfo";            },3000)        }    })</script><!--footer-->

<footer class="g-ft c-ft">
  <div class="ft-content">
    <div class="wow fadeInUp ft-bg-m"></div>
    <div class="wow fadeInUp ft-middle ">
      <div class="g-container f-clearfix">
        <div class="g-l">
          <div class="contact">
            <!--<a class="icon-wb" href="#" target="_blank" rel="nofollow"></a>-->
            <a class="icon-wx" href="javascript:;" data-toggle="tooltip" data-style="white" data-placement="top" data-title="扫一扫，关注我们" data-src="/public/static/images/91wechat.png" ></a>
            <a class="icon-qq polyvBizQQWPA" href="tencent://message/?uin=676826691&Site=Sambow&Menu=yes" data-toggle="tooltip" data-placement="top" data-title="在线客服"></a>
            <div class="line"></div>
            <!--<a class="icon-phone" href="tel:4000-114-025" target="_blank" data-toggle="tooltip" data-placement="top" data-title="4000-114-025"></a>-->
            <a class="icon-email" href="mailto:676826691@qq.com" target="_blank" data-toggle="tooltip" data-placement="top" data-title="676826691@qq.com"></a>
          </div>
        </div>
        <div class="g-r">
          <ul class="certificate">
            <li>
              <p><a href="../website/article?cid=1">帮助中心</a></p>
            </li>
            <li>
              <p><a href="../website/articleView?cid=2&aid=17">关于我们</a></p>
            </li>
            <li>
              <p><a href="../website/articleView?cid=2&aid=18">联系我们</a></p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="wow fadeInUp ft-bottom g-container">
      <p>&copy; 2019 91AMZ 版权所有 </p>
      <p> <a class="hovera" href="http://beian.miit.gov.cn"> 粤ICP备19001178号-2</a> </p>
    </div>
  </div>
</footer>
<!-- 侧面工具栏 -->
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
<!-- /.侧面工具栏 --> 
<script src="/public/static/js/owl.carousel.min.js" type="text/javascript" ></script> 
<script src="/public/static/js/doc-home.min.js" type="text/javascript" ></script> 
<script src="/public/static/js/jquery.SuperSlide.2.1.2.js" type="text/javascript"></script> 
<script src="/public/static/js/wow.min.js"></script> 
<script src="/public/static/js/entrance.js" data-args="manual=true" class="zhiCustomBtn" id="zhichiScript"></script> 
<script src="/public/static/js/common.min.js" type="text/javascript" ></script> 
<script src="/public/static/layer/layer.js"></script> 
<script src="/public/static/js/fakeLoader.js"></script> 
<script src="/public/static/js/jquery.lazyload.js" type="text/javascript" charset="utf-8"></script> 
<script src="/public/static/js/js.js" type="text/javascript" charset="utf-8"></script> 
<script type="text/javascript">
    $(function() {
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: true,
            live: true
        });
        wow.init();
    })
</script>
</body></html>