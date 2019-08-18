<?php /*a:5:{s:74:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/shop/view.html";i:1565684335;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/header.html";i:1561604652;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/navbar.html";i:1565682693;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/footer.html";i:1565580163;s:86:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/right-navbar.html";i:1563782741;}*/ ?>
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
                                <span class="iconfont icon-notice1 font-size-2" style="top:-1.5px;"></span>
                                  <?php if($smsCount): ?>
                                    <span class="badge badge-sm bg-FA3232 badge-pos rounded-circle hide" id="msg_none_read_bell" style="display: inline;"><?php echo htmlentities($smsCount); ?></span>
                                  <?php endif; ?>
                              </a>
                            </span>
                            <div class="hs-mega-menu u-header__sub-menu hs-position-right text-left" style="width: 350px;display: none;border-top:3px solid #3377FF;animation-duration: 500ms;">
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




<!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>-->
<script type="text/javascript" src="/public/static/dataTables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>


<link rel="stylesheet" type="text/css" href="/public/static/dataTables/css/jquery.dataTables.css" />
<link rel="stylesheet" type="text/css" href="/public/static/dataTables/css/custom_dataTables.css" />



<link rel="stylesheet" type="text/css" href="/public/static/funcybox/jquery.fancybox.min.css" />
<script type="text/javascript" src="/public/static/funcybox/jquery.fancybox.min.js"></script>


<script type="text/javascript" src="/public/static/echarts/echarts.min.js"></script>

<style>

    .dynamic-toolbar{
        text-align: center;
        margin-bottom:20px;
        padding-top:20px;

    }
    .mdc-tab-bar--icons-with-text {

        height: 72px;

    }
    .mdc-tab-bar {

        display: table;
        position: relative;
        height: 48px;
        margin: 0 auto;
        text-transform: uppercase;

    }

    .mdc-tab span {
        text-align: center;
    }
    .mdc-tab__icon-text {
        display: block;
        margin: 0 auto;
    }
    .mdc-tab.mdc-ripple-upgraded::before {
        -webkit-transform: scale(var(--mdc-ripple-fg-scale,1));
        transform: scale(var(--mdc-ripple-fg-scale,1));
    }

    .mdc-tab.mdc-ripple-upgraded {
        --mdc-ripple-fg-opacity: .16;
    }

    .mdc-tab, .mdc-tab .mdc-tab__icon {
        color: rgba(0,0,0,.54);
        color: var(--mdc-theme-text-secondary-on-background,rgba(0,0,0,.54));
    }


    .mdc-tab {
        font-family: Roboto,sans-serif;
        -moz-osx-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        font-size: .875rem;
        line-height: 2.25rem;
        font-weight: 500;
        letter-spacing: .08929em;
        text-transform: uppercase;
        --mdc-ripple-fg-size: 0;
        --mdc-ripple-left: 0;
        --mdc-ripple-top: 0;
        --mdc-ripple-fg-scale: 1;
        --mdc-ripple-fg-translate-end: 0;
        --mdc-ripple-fg-translate-start: 0;
        -webkit-tap-highlight-color: transparent;
        will-change: transform,opacity;
        display: table-cell;
        position: relative;
        box-sizing: border-box;
        min-width: 160px;
        min-height: 48px;
        padding: 0px 24px;
        text-align: center;
        text-decoration: none;
        white-space: nowrap;
        cursor: pointer;
        overflow: hidden;
        vertical-align: middle;

    }


    .mdc-tab::after, .mdc-tab::before {
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
    }

    .mdc-tab::after, .mdc-tab::before {
        background-color: #000;
    }
    .mdc-tab:hover{
        background-color: #f5f5f5;
    }

    .mdc-tab::before {
        transition: opacity 15ms linear;
        z-index: 1;
    }

    .mdc-tab::after, .mdc-tab::before {
        position: absolute;
        border-radius: 50%;
        opacity: 0;
        pointer-events: none;
        content: "";
    }

    .fa-bar-chart::before {

        content: "\f080";

    }
    .mdc-tab .fa {

        font-size: 24px;

    }

    .fa {
        font: normal normal normal 14px/1 FontAwesome;
        font-size: 14px;
        font-size: inherit;
        text-rendering: auto;
        -moz-osx-font-smoothing: grayscale;
    }

    .mdc-tab--active, .mdc-tab--active .mdc-tab__icon {
        color: rgba(0,0,0,.87);
        color: var(--mdc-theme-text-primary-on-background,rgba(0,0,0,.87));
    }


    .mdc-tab:hover, .mdc-tab:hover .mdc-tab__icon{
        color: rgba(0,0,0,.87);
        color: var(--mdc-theme-text-primary-on-background,rgba(0,0,0,.87));
    }

    .mdc-tab-bar__indicator {

        background-color: rgba(0,0,0,.87);
        background-color: var(--mdc-theme-text-primary-on-light,rgba(0,0,0,.87));
        position: absolute;
        bottom: 0;
        height: 2px;
        visibility: hidden;
        left: 0;
        width: 100%;
        -webkit-transform-origin: left top;
        transform-origin: left top;
        transition: -webkit-transform .24s cubic-bezier(0,0,.2,1) 0ms;
        transition: transform .24s cubic-bezier(0,0,.2,1) 0ms;
        transition: transform .24s cubic-bezier(0,0,.2,1) 0ms,-webkit-transform .24s cubic-bezier(0,0,.2,1) 0ms;
        will-change: transform;

    }

    .highcharts-menu .highcharts-menu-item:last-child{
        display:none;
    }

    input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
        -webkit-appearance: none;
    }
    input[type="number"]{
        -moz-appearance: textfield;
    }
    .dt-buttons{
        float: left;
        margin-top: 30px;
    }

    .link-muted-b:hover {
        border: 1px solid #3377FF;
    }
    .sorting{
        color: #77838f !important;
        border-bottom: 1px solid #e7eaf3 !important;
    }
    table.dataTable.no-footer{
        border-bottom: none;
    }
    table.dataTable thead th, table.dataTable thead td{
        border-bottom: 1px solid #e7eaf3;
    }
    .sorting_asc,.sorting_desc{
        color: #3377FF !important;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:active {
        color: #fff !important;
    }
    table tr th{
        font-size: 13px;
        font-weight: 600;
    }

</style>

<div class="container p-0 mt-5" style="min-height:720px;">

    <!-- shop -->
    <div class ="card" >
        <div class="dynamic-toolbar">
            <nav id="icon-text-tab-bar" class="mdc-tab-bar mdc-tab-bar--icons-with-text mdc-tab-bar-upgraded ">

                <a class="mdc-tab mdc-tab--with-icon-and-text mdc-ripple-upgraded mdc-tab--active metrics" style="--mdc-ripple-fg-size:105.72000732421874px; --mdc-ripple-fg-scale:1.895033589286128; --mdc-ripple-fg-translate-start:67.73997192382814px, -8.36000366210937px; --mdc-ripple-fg-translate-end:35.240002441406254px, -16.86000366210937px;">
                    <i class="fa fa-bar-chart mdc-tab__icon"  ></i>
                    <span class="mdc-tab__icon-text">店铺详细信息</span>
                </a>

                <a class="mdc-tab mdc-tab--with-icon-and-text mdc-ripple-upgraded hotproduct" style="--mdc-ripple-fg-size:96px; --mdc-ripple-fg-scale:1.931809349955109; --mdc-ripple-fg-translate-start:61.899993896484375px, -5.5px; --mdc-ripple-fg-translate-end:32px, -12px;">
                    <i class="fa fa-table mdc-tab__icon"  ></i>
                    <span class="mdc-tab__icon-text">店铺热卖商品信息</span>
                </a>

                <span class="mdc-tab-bar__indicator" style="transform: translateX(0px) scale(0.483, 1); visibility: visible;"></span>

            </nav>
        </div>
    </div>

    <div class="card sellerInfo">
        <div class="row no-gutters" >
            <div class="col-12 col-md-6 ">
                <div class="card-body text-secondary">
                    <div class="d-flex align-items-center">
                        <div class="m-0">
                            <h5 class="m-0">店铺名称：<strong class="sellerName" ></strong></h5>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 col-md-9">
                            <div class="custom-control  mt-2">
                                店铺当前综合评分(Rating)：<span id="rating" ></span>%
                            </div>

                            <div class="custom-control  mt-2">
                                店铺当前Feedback总量：<span id="reviews" ></span> （最近30天:<span id="ratingsLast30Days">  </span>）
                            </div>

                            <div class="custom-control  mt-2">
                                商品数量: <span id="Listings"></span>
                            </div>

                            <!--<div class="custom-control  mt-2 hidden">
                                Browseable listings via 91AMZ: <span id="asinList"></span>
                            </div>-->

                            <div class="custom-control  mt-2">
                                是否支持FBA: <span id="hasFBA"></span>
                            </div>

                            <div class="custom-control  mt-2">
                                跟踪数据时间自: <span id="trackedSince"></span>起
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4"></div>
        <div class=" container" id="91chart" style="height:480px;width:100%;">
        <!--<iframe src="/website/loading" class="  m-5" scrolling="no" style="height:480px;width:100%;border:1px solid #eee;" ></iframe>-->
        </div>

        <div class="pt-4"></div>

        <div class="card-body">

            <div class="card-body text-secondary">
                <div class="d-flex align-items-center">
                    <div class="m-0">
                        <h5>卖家主要销售的商品类目及其占比统计</h5>

                        <!-- Overview of the type of products <span class="text-primary sellerName"></span> is primarily selling, how often Amazon is on those listings and what the avg. sales rank of this seller's products is. -->
                    </div>
                </div>
            </div>

            <div class="table-responsive-md u-datatable">

                <table id="table-condition-search" class="js-freeze-header table">
                    <thead>
                    <tr class="bg-light text-secondary p-4">
                        <th width="40%" scope="col">
                            <a href="javascript:;"  order-field="shopName"  class="order-field d-flex justify-content-between align-items-center text-secondary">
                                <div class="text-nowrap"   >
                                    类目
                                </div>
                                <span class="order-span fas order-span-active u-datatable__thead-icon ml-2" ></span>
                            </a>
                        </th>
                        <th width="50%" scope="col" class="mobile-field-hide">
                            <a href="javascript:;" order-field="rating"  class="order-field d-flex justify-content-between align-items-center text-primary">
                                <div class="text-nowrap"  >
                                    占比
                                </div>
                                <span class="order-span fas order-span-active fa-angle-down text-primary  u-datatable__thead-icon ml-2" ></span>
                            </a>
                        </th>
                        <!--<th width="1%" scope="col" class="mobile-field-hide">
                            <a href="javascript:;" order-field="total"   class="order-field d-flex justify-content-between align-items-center text-secondary">
                                <div class="text-nowrap"   >
                                    Listings with Amazon offer
                                </div>
                                <span class="order-span fas order-span-active u-datatable__thead-icon ml-2" ></span>
                            </a>
                        </th>-->
                        <th width="1%" scope="col">
                            <a href="javascript:;"  order-field="thirtyDay" class="order-field d-flex justify-content-between align-items-center text-secondary">
                                <div class="text-nowrap" >
                                    最近30天listing平均销量排名
                                </div>
                                <span class="order-span fas order-span-active u-datatable__thead-icon ml-2" ></span>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="js-page-content">


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card hide productList">
        <!-- 店铺商品 -->

        <div class="tableContent" >
            <div class="d-flex align-items-center mt-4 text-secondary">
                <span class="text-nowrap">&nbsp;&nbsp;&nbsp;商品价格</span>
                <div class="ml-3 d-flex align-items-center">
                    <div class="input-group input-group-xs" style="width: 90px;">
                        <div class="input-group-append">
                            <span class="input-group-text px-1 bg-light">$</span>
                        </div>
                        <input class="form-control text-center" id="amzPriceMin" value="" placeholder="最小值" type="number">
                    </div>
                    <span class="text-muted mx-2">~</span>
                    <div class="input-group input-group-xs" style="width: 90px;">
                        <div class="input-group-append">
                            <span class="input-group-text px-1 bg-light">$</span>
                        </div>
                        <input class="form-control text-center" id="amzPriceMax"   value="" placeholder="最大值" max="1000000" type="number">
                    </div>
                </div>

                <!--<span class="text-nowrap">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New价格</span>
                <div class="ml-3 d-flex align-items-center">
                    <div class="input-group input-group-xs" style="width: 90px;">
                        <div class="input-group-append">
                            <span class="input-group-text px-1 bg-light">$</span>
                        </div>
                        <input class="form-control text-center" id="newPriceMin" value="" placeholder="最小值" type="number">
                    </div>
                    <span class="text-muted mx-2">~</span>
                    <div class="input-group input-group-xs" style="width: 90px;">
                        <div class="input-group-append">
                            <span class="input-group-text px-1 bg-light">$</span>
                        </div>
                        <input class="form-control text-center" id="newPriceMax"  value="" placeholder="最大值" max="1000000" type="number">
                    </div>
                </div>-->

                <span class="text-nowrap">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;销售排名</span>
                <div class="ml-3 d-flex align-items-center">
                    <div class="input-group input-group-xs" style="width: 90px;">

                        <input class="form-control text-center" id="rankingMin" value="" placeholder="最小值" type="number">
                    </div>
                    <span class="text-muted mx-2">~</span>
                    <div class="input-group input-group-xs" style="width: 90px;">

                        <input class="form-control text-center" id="rankingMax"  value="" placeholder="最大值" max="1000000" type="number">
                    </div>
                </div>

                <span class="text-nowrap">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评论数</span>
                <div class="ml-3 d-flex align-items-center">
                    <div class="input-group input-group-xs" style="width: 90px;">

                        <input class="form-control text-center" id="commentsMin" value="" placeholder="最小值" type="number">
                    </div>
                    <span class="text-muted mx-2">~</span>
                    <div class="input-group input-group-xs" style="width: 90px;">

                        <input class="form-control text-center" id="commentsMax" value="" placeholder="最大值" max="1000000" type="number">
                    </div>
                </div>

                <button type="button" id="filter-reset" class="btn btn-sm btn-secondary ml-3" name="FormBtnReset">
                    <span class="iconfont icon-reset"></span>
                    重置
                </button>

            </div>
            <table id="productTable" class="display" style="width:100%;margin-top:60px;"></table>

        </div>
    </div>



    <script type="text/javascript">

        $(function () {

            var ratingData = "",
                reviewsData = "",
                listingData = "",
                sellerInfo = '';
            //加载商家信息详情
            $.ajax({
                type:"post",
                url:"/website/ajaxShopView",
                data:"sellerId=<?php echo htmlentities($sellerId); ?>&station=<?php echo htmlentities($station); ?>",
                dataType:'json',
                beforeSend:function(){
                    $.loading(7);
                },
                success:function(data){
                    $.loaded();

                    if(data.status == 'success'){
                        listingData = data.data.listingData;
                        ratingData = data.data.ratingData;
                        reviewsData = data.data.reviewsData;
                        sellerInfo = data.data.sellerInfo;


                        if( sellerInfo ){
                            $(".sellerName").html(sellerInfo.sellerName);
                            $("#rating").html(sellerInfo.rating);

                            $("#reviews").html(number_format(sellerInfo.reviews));
                            $("#ratingsLast30Days").html(number_format(sellerInfo.ratingsLast30Days));


                            if( sellerInfo.asinList ){
                                $("#Listings").html(number_format(sellerInfo.asinList.length));
                                //$("#asinList").html(number_format(sellerInfo.asinList.length));
                            } else {
                                $("#Listings").html(0);
                            }

                            var hasFBA = sellerInfo.hasFBA ? "Yes" : "No";
                            $("#hasFBA").html(hasFBA);

                            var trackedSince = new Date(sellerInfo.trackedSince*1000).Format("yyyy-MM-dd hh:mm:ss");

                            $("#trackedSince").html(trackedSince);

                            //分类
                            var html = "";
                            var isHaveCate = false;
                            if( sellerInfo.sellerCategoryStatistics.length>0){
                                for (let i=0; i<sellerInfo.sellerCategoryStatistics.length; i++){
                                    if(sellerInfo.sellerCategoryStatistics[i]){
                                        var avg30SalesRank = parseFloat(sellerInfo.sellerCategoryStatistics[i].avg30SalesRank).toLocaleString();
                                        var listingCount = sellerInfo.listingCount;

                                        var catId = sellerInfo.sellerCategoryStatistics[i].catId;
                                        if(sellerInfo.sellerCategoryInfo[catId] ){
                                            var categoryName = sellerInfo.sellerCategoryInfo[catId].name;
                                        } else {
                                            var categoryName = '-';
                                        }
                                        html += "<tr>"+
                                            '<td class="align-middle align-middle-1 "><div class="text-nowrap"><span> '+categoryName+' </span></div></td>'+
                                            '<td class="align-middle align-middle-1 "><div class="text-nowrap"><span> '+GetPercent( sellerInfo.sellerCategoryStatistics[i].productCount ,listingCount)+'</span></div></td>'+
                                            //'<td class="align-middle align-middle-1 "><div class="text-nowrap"><span> '+GetPercent( sellerInfo.sellerCategoryStatistics[i].productCountWithAmazonOffer , sellerInfo.sellerCategoryStatistics[i].productCount )+'</span></div></td>'+
                                            '<td class="align-middle align-middle-1 "><div class="text-nowrap"><span class="text-green"> # '+avg30SalesRank+' </span></div></td>'+
                                            '</tr>';
                                        $(".js-page-content").html(html);
                                        isHaveCate = true;
                                    }
                                }
                            } else {
                                $(".js-page-content").html('<tr>\n' +
                                    '                                                    <td class="align-middle align-middle-1 text-center" colspan="8">\n' +
                                    '                                                        <span class="span-keywords "> 暂无分类 </span>\n' +
                                    '                                                    </td>\n' +
                                    '                                                </tr>');
                            }
                            if(!isHaveCate){
                                $(".js-page-content").html('<tr>\n' +
                                    '                                                    <td class="align-middle align-middle-1 text-center" colspan="8">\n' +
                                    '                                                        <span class="span-keywords "> 暂无分类 </span>\n' +
                                    '                                                    </td>\n' +
                                    '                                                </tr>');
                            }

                        } else {
                            $(".sellerInfo").html("<div class=\"card\">\n" +
                                "        <div class=\"tableContent text-center\" >\n" +
                                "            Seller <?php echo htmlentities($sellerId); ?> on Amazon.com not found. Either the seller does not exist or 91AMZ has never encountered an offer by this seller.\n" +
                                "        </div>\n" +
                                "    </div>");
                        }

                        option.series[0].data = ratingData;
                        option.series[1].data = reviewsData;
                        option.series[2].data = listingData;
                        myChart.hideLoading(); //数据获取成功之后隐藏动画
                        myChart.setOption(option);
                        // var iframeHtml = '<iframe src="/website/ajaxChat?sellerId=<?php echo htmlentities($sellerId); ?>" class="m-5" scrolling="no" style="height:480px;width:100%;" >';
                        // $(".amzChat").html(iframeHtml);
                    } else {
                        layer.msg(data.msg);
                    }
                }
            });

        });


        function GetPercent(num, total) {
            num = parseFloat(num);
            total = parseFloat(total);
            if (isNaN(num) || isNaN(total)) {
                return "-";
            }
            return total <= 0 ? "0%" : (Math.round(num / total * 10000) / 100.00)+"%";
        }


        var myChart = echarts.init(document.getElementById('91chart'));
        myChart.showLoading(); //数据获取显示之前先加载一段动画
        var option = {
            title: {
                text: '91AMZ 统计图表',
                textStyle: {
                    width: '200px',
                    fontSzie: '15px',
                    color: '#3377FF',
                    rich: {}
                },

            },
            tooltip: {
                trigger: 'axis',
                axisPointer: {
                    type: 'cross',
                    label: {
                        backgroundColor: 'rgba(0, 0, 0, .7)'
                    }
                },
                padding: [5, 10],
                backgroundColor: 'rgba(0, 0, 0, .7)',
            },
            toolbox: {
                right: 200,
                feature: {
                    dataZoom: {
                        yAxisIndex: 'none',
                        title: {
                            zoom: "区域缩放",//'Time Interval Adjustment',
                            back: "区域缩放还原"//'Restore the Time Interval'
                        },
                        emphasis: {
                            iconStyle: {
                                borderColor: '#3377FF'
                            }
                        }
                    },
                    restore: {
                        title: "还原",//'Restore',
                        emphasis: {
                            iconStyle: {
                                borderColor: '#3377FF'
                            }
                        }
                    },
                    saveAsImage: {
                        title: "保存为图片",//'Save as image',
                        name: "SellerSprite-<?php echo htmlentities($station); ?>-<?php echo htmlentities($sellerId); ?>",
                        emphasis: {
                            iconStyle: {
                                borderColor: '#3377FF'
                            }
                        }
                    }
                }
            },
            legend: {
                data:['店铺评分','评论数量','商品数量'],
            },
            grid: [{
                left: 50,
                right: 180,
                //height: '36%'
            }],
            dataZoom: [
                {
                    show: true,
                    realtime: true,
                    start: 50,
                    end: 100,
                    top:"92%",
                    //xAxisIndex: [0, 1]//0,1,2,3
                },
                {
                    type: 'slider',
                    realtime: true,
                    start: 50,
                    end: 100,
                    top:"92%",
                    //xAxisIndex: [0, 1, 2, 3],//0,1,2,3
                    borderColor: '#E5E7EC',
                    dataBackground: {
                        lineStyle: {
                            color: '#E7ECF7'
                        },
                        areaStyle: {
                            color: '#F2F5FB'
                        }
                    },
                    fillerColor: 'rgba(229,234,245,.4)'
                }
            ],
            color: ['#FFAE2D', '#5FB0FF', '#6EC952', '#909CF7', '#FF8C45', '#FB7A7A', '#62E3BE'],
            xAxis: {
                type:'time',
                axisLine: {
                    onZero: true,
                    lineStyle: {
                        color: '#E5E7EC'
                    }
                },
                name:'时间',
                position: 'bottom',
                boundaryGap: false,
                data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            yAxis: [{
                name:'店铺评分',
                type: 'value',
                axisLine: {
                    lineStyle: {
                        color: '#7B7E81'
                    }
                },
                axisLabel: {
                    color: '#7B7E81',
                    formatter: '{value}'
                },
                inverse: false //起始点
            },{
                name:'评论数量',
                type: 'value',
                axisLine: {
                    lineStyle: {
                        color: '#7B7E81'
                    }
                },
                axisLabel: {
                    color: '#7B7E81',
                    formatter: '{value}'
                },
                inverse: false //起始点
            },{
                name:'商品数量',
                type: 'value',
                offset:60,
                axisLine: {
                    lineStyle: {
                        color: '#7B7E81'
                    }
                },
                axisLabel: {
                    color: '#7B7E81',
                    formatter: '{value}'
                }
            }],
            series: [{
                name: '店铺评分',
                type: 'line',
                data: [],
                yAxisIndex:0,
                step: true,
                smooth: false,//true 为平滑曲线，false为直线
                itemStyle: {
                    normal: {
                        lineStyle: {
                            width: 1.5,  // 设置线宽
                            type: 'solid'  //'dotted'虚线 'solid'实线
                        }
                    }
                },
            },{
                name: '评论数量',
                type: 'line',
                data: [],
                yAxisIndex:1,
                step: true,
                smooth: false,//true 为平滑曲线，false为直线
                itemStyle: {
                    normal: {
                        lineStyle: {
                            width: 1.5,  // 设置线宽
                            type: 'solid'  //'dotted'虚线 'solid'实线
                        }
                    }
                },
            },{
                name: '商品数量',
                type: 'line',
                data: [],
                yAxisIndex:2,
                step: true,
                smooth: false,//true 为平滑曲线，false为直线
                itemStyle: {
                    normal: {
                        lineStyle: {
                            width: 1.5,  // 设置线宽
                            type: 'solid'  //'dotted'虚线 'solid'实线
                        }
                    }
                },
            }]
        };
        myChart.setOption(option);


        //重置筛选条件
        $("#filter-reset").on("click", function(a) {
            a.preventDefault(),

            $("#amzPriceMin").val(""),
            $("#amzPriceMax").val(""),
            $("#newPriceMin").val(""),
            $("#newPriceMax").val(""),
            $("#rankingMin").val(""),
            $("#rankingMax").val(""),

            $("#commentsMin").val(""),
            $("#commentsMax").val("");
            githubTable.draw();//按时间段筛选完重绘表格
        });
    </script>




</div>

<div class="pt-4"></div>


<a target='_blank' href="#" id="clickNewWin"></a>

<script>

    $(".mdc-tab").click(function(){

        $(this).siblings().removeClass("mdc-tab--active");
        $(this).addClass("mdc-tab--active");

        if( $(this).hasClass("metrics") ){
            $(".mdc-tab-bar__indicator").css("transform","translateX(0px) scale(0.483, 1)");
            $(".sellerInfo").show();
            $(".productList").hide();
        } else {
            $(".mdc-tab-bar__indicator").css("transform","translateX(160px) scale(0.515, 1)");
            $(".sellerInfo").hide();
            $(".productList").show();
        }
        if( $(this).hasClass("hotproduct") ){

            var x=0;
            $("#productTable tbody").each(function(){
                x++;
            });

            if(x==0){


            //issue表格初始化
            githubTable = $("#productTable").DataTable({
                //调用github api 获取issues 数据
                ajax: {
                    url: "/website/shopProductList?sellerId=<?php echo htmlentities($sellerId); ?>&station=<?php echo htmlentities($station); ?>",
                    dataSrc: ""
                },
                //默认最后一列（最后更新时间）降序排列
                order: [[3, "asc"]],
                bAutoWidth:false,
                dom: 'Bfrtip',
                buttons: [
                    {
                        'extend': 'excelHtml5',
                        'text': '导出Excel',//定义导出excel按钮的文字
                        'className': 'btn btn-sm btn-primary', //按钮的class样式
                        'columns' : [ 1, 2, 3, 4, 5, 6, 7],
                        'format': {
                            header: function ( data, columnIdx ) {
                                return columnIdx +': '+ data;
                            },
                            body: function ( data, row, column, node ) {
                                //body区域的function，可以操作需要导出excel的数据格式
                                return data;
                            }
                        },

                        customize: function( xlsx ) {
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            console.log(sheet);
                            $('row c[r^="B"]', sheet).attr( 's', '2' );

                        },
                    }
                ],
                //行被创建回调
                createdRow: function (row, data, dataIndex) {

                    var updated_at = new Date(Date.parse(data.updated_at)).Format("yyyy-MM-dd hh:mm:ss");
                        updated_at = new Date(updated_at).getTime();
                    var current = new Date().getTime();
                    var bl = current - updated_at;
                    var s = 5 * 24 * 60 * 60 * 1000;
                    //最后更新日期在最近5天则突出显示
                    if (bl < s) {
                        $(row).addClass('unread');
                    }
                },
                //行创建完成后回调
                rowCallback: function (row, data, index) {

                    var tags = $(row).find("td:eq(1)");
                    if (tags.text().indexOf("置顶") > 0) {
                        var title = $(row).find("td:eq(0)");
                        var hot = "";
                        title.html(title.html() + hot);
                    }
                },
                columnDefs: [
                    {
                        targets: 0,
                        data: "images",
                        width:"8%",
                        title: "商品图片",
                        searchable: false,
                        render: function (data, type, row, meta) {
                            if(data){
                                var imagesHtml = '<a data-fancybox="gallery" href="https://images-na.ssl-images-amazon.com/images/I/'+data[0]+'._SX600_SY600_CR,0,0,600,600_.jpg" data-caption="<b>'+row.asin+'</b> <span class=&quot;flag-icon flag-icon-us&quot;></span><br /> <a href=&quot;https://www.amazon.com/dp/'+row.asin+'&quot; class=&quot;text-tooltip-title link-muted&quot; target=&quot;_blank&quot;>'+row.title+'</a>"><img style="height: 60px; width: 60px;float:left;" class="link-muted-b" src="https://images-na.ssl-images-amazon.com/images/I/'+data[0]+'" /></a>';
                            } else {
                                var imagesHtml;
                            }
                            return imagesHtml;
                        }
                    },
                    {
                        targets: 1,
                        data: "title",
                        title: "商品名称",
                        width:"32%",
                        render: function (data, type, row, meta) {
                            return '<a title="查看商品历史相关数据详情" class="getProductInfo asinId_'+row.asin+'" onClick="getProductInfo(\''+row.asin+'\');"  data-asin="'+row.asin+'" target="_blank">'+data+'</a>';
                        }
                    },
                    {
                        targets: 2,
                        data: null,
                        width:"9%",
                        title: "商品价格",
                        searchable:true,
                        render: function (data, type, row, meta) {
                            if(row.stats.current[0]>0 || row.stats.current[1]>0){
                                //这里取的是New市场价格
                                var amzPrice = "<?php echo __getCountryConfig($country)['currency']; ?>" + (row.stats.current[0]/100).toFixed(2);
                                var newPrice = "<?php echo __getCountryConfig($country)['currency']; ?>"+ (row.stats.current[1]/100).toFixed(2);
                                if(newPrice){
                                    return newPrice;
                                } else if (amzPrice){
                                    return amzPrice;
                                }
                            } else {
                                return "-";
                            }
                        }
                    },
                    // {
                    //     targets: 3,
                    //     data: null,
                    //     width:"8%",
                    //     title: "New价格",
                    //     render: function (data, type, row, meta) {
                    //         if(row.stats.current[1]>0){
                    //             var newPrice = "<?php echo __getCountryConfig($country)['currency']; ?>"+ (row.stats.current[1]/100).toFixed(2);
                    //             return newPrice;
                    //         } else {
                    //             return "-";
                    //         }
                    //     }
                    // },
                    {
                        targets: 3,
                        data: null,
                        width:"8%",
                        title: "销售排名",
                        render: function (data, type, row, meta) {
                            if(row.stats.current[3]>0){
                                return row.stats.current[3];
                            } else {
                                return "-";
                            }
                        }
                    },
                    {
                        targets: 4,
                        data: "categoryTree",
                        width:"9%",
                        title: "商品分类目录",
                        render: function (data, type, row, meta) {

                            var text = "";
                            if(data){
                                for (i = 0; i < data.length; i++) {
                                    text += data[i].name + ">>";
                                }
                                text = text.substr(0,text.length-2);
                                var html = '<span class="small">'+text+' </span>';
                                return html;
                            } else {
                                return "-";
                            }


                        }
                    },
                    {
                        targets: 5,
                        data: null,
                        width:"7%",
                        title: "评论数",
                        render: function (data, type, row, meta) {
                            if(row.stats.current[17] > 0){
                                return number_format(row.stats.current[17]);
                            } else {
                                return "-";
                            }
                        }
                    },
                    {
                        targets: 6,
                        data: null,
                        width:"9%",
                        title: "星级",
                        render: function (data, type, row, meta) {
                            if(row.stats.current[16] > 0){
                                var html = "";
                                for (i = 0; i < 5; i++) {
                                    if(row.stats.current[16]- i*10 < 10  &&  row.stats.current[16]- i*10 > 0){
                                        html += '<i style="color:#f1bb00" class="fa fa-star-half-o"></i>';
                                    }else if( row.stats.current[16]- i*10 <= 0   ){
                                        html += '<i style="color:#f1bb00" class="fa fa-star-o"></i>';
                                    } else {
                                        html += '<i style="color:#f1bb00" class="fa fa-star"></i>';
                                    }

                                }
                                html += row.stats.current[16]/10;

                                return html;
                            } else {
                                return "-";
                            }
                        }
                    },
                    {
                        targets: 7,
                        data: "trackingSince",
                        width:"9%",
                        title: "上架时间",
                        render: function (data, type, row, meta) {
                            var time = new Date(data*1000).Format("yyyy-MM-dd");
                            return time;
                        }
                    },
                    {
                        targets: 8,
                        data: null,
                        width:"9%",
                        title: "操作",
                        render: function (data, type, row, meta) {
                            var html =  '<a style="margin: 0 10px;" class="small asinId_'+row.asin+'" href="javascript:getProductInfo(\''+row.asin+'\');" title="查看商品历史相关数据详情" target="_blank" >' +
                                ' <i class="fa fa-sticky-note-o" aria-hidden="true"></i>'+
                                '</a>'+
                                '<span>|</span>'+
                                '<a style="margin: 0 5px;" class="small" href="https://www.'+row.webUrl+'/gp/product/'+row.asin+'?psc=1" title="在亚马逊中打开商品详情页面" target="_blank" >' +
                                ' <i class="fa fa-external-link" aria-hidden="true"></i>' +
                                '</a>';
                            return html;
                        }
                    }

                ],
                initComplete: function () {
                    //表格加载完毕，手动添加按钮到表格上
                    $("#toolbar").css("width", "100px").css("display", "inline").css("margin-left", "10px");

                }
            });
            }
        }

    })


    var githubTable;
    $(document).ready(function () {

        //配置DataTables默认参数
        $.extend(true, $.fn.dataTable.defaults, {
            "language": {
                "url": "/public/Chinese.txt"
            },
            "dom": "l<'#toolbar'>frtip"
        });



        //设置筛选
        $('#column3_search').on('keyup', function(){
            githubTable.columns(3).search($(this).val()).draw();
        })




        $.fn.dataTable.ext.search.push(

            function( settings, data, dataIndex, row, counter ) {
                //亚马逊价格
                if( data[2].substr(0,1)=='$'){
                    amz_price_data = parseFloat( data[2].substr(1) );
                } else {
                    amz_price_data = parseFloat(data[2]);
                }

                //新市场价格
                if( data[3].substr(0,1)=='$'){
                    new_price_data = parseFloat( data[3].substr(1) );
                } else {
                    new_price_data = parseFloat(data[3]);
                }

                //销售排名
                ranking_data = parseFloat(data[4]);

                //评论数
                comments_data = parseFloat(data[6]);

                amzPriceMin = $('#amzPriceMin').val();

                amzPriceMax = $('#amzPriceMax').val();

                newPriceMin = $('#newPriceMin').val();

                newPriceMax = $('#newPriceMax').val();

                rankingMin = $('#rankingMin').val();

                rankingMax = $('#rankingMax').val();

                commentsMin = $('#commentsMin').val();

                commentsMax = $('#commentsMax').val();


                if( (!amzPriceMax && !amzPriceMin) || (!amzPriceMax && amz_price_data >= amzPriceMin)|| (amz_price_data <= amzPriceMax && !amzPriceMin)|| (amzPriceMin <= amz_price_data && amzPriceMax && amzPriceMin && amzPriceMax >= amz_price_data) ) {

                    if( (!newPriceMax && !newPriceMin) || (!newPriceMax && new_price_data >= newPriceMin)|| (new_price_data <= newPriceMax && !newPriceMin)|| (newPriceMin <= new_price_data && newPriceMax && newPriceMin && newPriceMax >= new_price_data) ) {

                        if( (!rankingMax && !rankingMin) || (!rankingMax && ranking_data >= rankingMin)|| (ranking_data <= rankingMax && !rankingMin)|| (rankingMin <= ranking_data && rankingMax && rankingMin && rankingMax >= ranking_data) ) {

                            if( (!commentsMax && !commentsMin) || (!commentsMax && comments_data >= commentsMin)|| (comments_data <= commentsMax && !commentsMin)|| (commentsMin <= comments_data && commentsMax && commentsMin && commentsMax >= comments_data) ) {

                                return true;

                            }
                        }
                    }
                }
                return false;
            }
        );

        $('#amzPriceMin,#amzPriceMax,#newPriceMin,#newPriceMax,#rankingMin,#rankingMax,#commentsMin,#commentsMax').change(function() {
            githubTable.draw();//按时间段筛选完重绘表格
        })


    });

    //时间格式化
    Date.prototype.Format = function (fmt) {
        var o = {
            "M+": this.getMonth() + 1,
            //月份
            "d+": this.getDate(),
            //日
            "h+": this.getHours(),
            //小时
            "m+": this.getMinutes(),
            //分
            "s+": this.getSeconds(),
            //秒
            "q+": Math.floor((this.getMonth() + 3) / 3),
            //季度
            "S": this.getMilliseconds() //毫秒
        };
        if (/(y+)/.test(fmt)) {
            fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
        }
        for (var k in o) {
            if (new RegExp("(" + k + ")").test(fmt)) {
                fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
            }
        }
        return fmt;
    };

    //事件来回切换方法
    //solve this
    //reference http://stackoverflow.com/questions/4911577/jquery-click-toggle-between-two-functions
    (function ($) {
        $.fn.clickToggle = function (func1, func2) {
            var funcs = [func1, func2];
            this.data('toggleclicked', 0);
            this.click(function () {
                var data = $(this).data();
                var tc = data.toggleclicked;
                $.proxy(funcs[tc], this)();
                data.toggleclicked = (tc + 1) % 2;
            });
            return this;
        };
    }(jQuery));

    //查看商品详情
    function getProductInfo(asinId){

        var url = "/website/productView?asinId="+asinId+"&station=<?php echo htmlentities($station); ?>";
        var isLogin = "<?php echo htmlentities($isLogin); ?>";
        if(isLogin == '0'){
            layer.msg("您未登录，请先登录！",{
                icon: 2,
                time: 3000,
                shade : [0.5 , '#000' , true]
            });
            //3秒后跳转到登录页面
            setTimeout(function(){
                window.location.href="/website/login";
            },3000);
            return false;
        }

        $('#dialog').show();
        $("#questionContent").text('您将消费<?php echo htmlentities($getProductInfoValue); ?>积分查看该商品信息，是否继续？');
        $("#dialogUrl").attr("href",url);
        $("#dialogUrl").data("id",asinId);




        // layer.msg('您将消费<?php echo htmlentities($getProductInfoValue); ?>积分，是否继续？如果已经消费，24小时内将不再扣取', {
        //     time: 0 //不自动关闭
        //     ,btn: ['继续', '暂时不要']
        //     ,yes: function(index){
        //         layer.close(index);
        //         //校验用户积分是否充足
        //         $.post("/website/checkUserPoint","point=<?php echo htmlentities($getProductInfoValue); ?>&type=productInfo&asinId="+asinId+"&remark="+remark,function(data){
        //             if(data.status == 'success'){
        //                 //此处防止浏览器拦截，在新窗口打开
        //                 $("#clickNewWin").attr('href', url);
        //                 $("#clickNewWin")[0].click();
        //             } else {
        //                 if(data.code=="111111"){
        //                     layer.msg(data.msg,{
        //                         icon: 2,
        //                         time: 3000,
        //                         shade : [0.5 , '#000' , true]
        //                     });
        //                     //3秒后跳转到登录页面
        //                     setTimeout(function(){
        //                         window.location.href="/website/login";
        //                     },3000);
        //                 } else {
        //                     layer.msg(data.msg);
        //                 }
        //
        //                 return false;
        //             }
        //         },'json');
        //     }
        // });
    }

</script>

<div id="dialog" style="display:none;z-index:9999;position: fixed;top: 40%;left: 36%; right: 36%;background-color: rgba(0,0,0,.6);border-radius:3px;">
    <div style="background-color: #3377FF;border-top-left-radius:3px;border-top-right-radius:3px;">
        <div style="padding:5px;font-size:13px;color:white;" >
            温馨提示:
        </div>
    </div>
    <div style="padding: 15px;color:white;text-align:center;" id="questionContent" > </div>
    <div style="padding: 15px; margin-left: 40px; float: left;">
        <a href="#" id="dialogUrl" data-id="" target="_blank" class="btn btn-sm btn-primary">继续</a>
    </div>
    <div style="padding: 15px; margin-right: 40px; float: right;">
        <input type="button" value="暂时不要" onclick="diaClose('close')" style="width: 85px;" class="btn btn-sm " >
    </div>
</div>
<script>
    function diaClose(){
        $("#dialog").hide();
    }

    $('#dialog').on('click','a',function(){
        $("#dialog").hide();
        var asinId = $(this).data("id");
        $(".asinId_"+asinId).addClass("ns-text-color");
    })
</script>
<!--footer-->

<footer class=" c-ft">
  <div class="ft-content">
    <div class="wow fadeInUp ft-bg-m"></div>
    <div class="wow fadeInUp ft-middle  ">
      <div class="container f-clearfix">
        <div class="g-l col-sm-6">
          <div class="contact">
            <!--<a class="icon-wb" href="#" target="_blank" rel="nofollow"></a>-->
            <a class="icon-wx" href="javascript:;" data-toggle="tooltip" data-style="white" data-placement="top" data-title="扫一扫，关注我们" data-src="/public/static/images/91wechat.png" ></a>
            <a class="icon-qq polyvBizQQWPA" href="tencent://message/?uin=676826691&Site=Sambow&Menu=yes" data-toggle="tooltip" data-placement="top" data-title="在线客服"></a>
            <div class="line"></div>
            <!--<a class="icon-phone" href="tel:4000-114-025" target="_blank" data-toggle="tooltip" data-placement="top" data-title="4000-114-025"></a>-->
            <a class="icon-email" href="mailto:676826691@qq.com" target="_blank" data-toggle="tooltip" data-placement="top" data-title="676826691@qq.com"></a>
          </div>
        </div>
        <div class="g-r col-sm-6 text-sm-right">
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



    <div class="container u-space-0-top u-space-0-bottom">
      <div class="row align-items-center">
        <div class="col-sm-6">
          <p class="small u-text-light my-3"><a target="_blank" href="http://beian.miit.gov.cn" class="text-asinseed-white-lighter2">粤ICP备19001178号-2</a></p>
        </div>

        <div class="col-sm-6 text-sm-right">
          <p class="small u-text-light my-3">版权所有©2013-2019 91AMZ.COM 隐私条款</p>
        </div>
      </div>
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
<script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?e10236d029ca2107cedf036344fb3570";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
</script>

</body></html>