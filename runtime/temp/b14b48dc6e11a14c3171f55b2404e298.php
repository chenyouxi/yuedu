<?php /*a:6:{s:82:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/shop/myCollection.html";i:1565935821;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/header.html";i:1561604652;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/navbar.html";i:1565682693;s:85:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/common_page.html";i:1561713439;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/footer.html";i:1565580163;s:86:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/right-navbar.html";i:1563782741;}*/ ?>
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

<style>    .polyvtooltip{        top:0;        left:0;        position: absolute;        z-index:2000;        font-family:WorkSans,Helvetica Neue,Arial,PingFang SC,Microsoft YaHei,sans-serif;        font-style:normal;        font-weight:400;        line-height:1.5;        text-align: left;        text-align:start;        text-decoration:none;        text-shadow:none;        text-transform:none;        letter-spacing:normal;        word-break:normal;        word-spacing:normal;        white-space:normal;        line-break:auto;        font-size:.8rem;        word-wrap:break-word;        background-clip:padding-box;        border:1px solid rgba(0,0,0,.2);        border-radius:.3rem;    }    .polyvtooltip .tooltip-inner {        padding: 10px;        will-change:transform;        filter:alpha(Opacity=90);        -moz-opacity:0.9;        opacity: 0.9;        text-align:left;        transform:translate3d(0px,0px,0px);        border-radius: 4px;    }    .polyvtooltip .tooltip-inner p{        color:#fff;    }    #table-condition-search tr th {        font-size: 13px;        font-weight: 600;    }    #hdtable-condition-search tr th {        font-size: 13px;        font-weight: 600;    }    .icon-see{        vertical-align: middle;        width: 17px;        height: 17px;        z-index: 100;        background: url(/public/static/img/icon-see.png) no-repeat center;        background-size: contain    }    /* 去掉加减按钮 */    /* 谷歌 */    input::-webkit-outer-spin-button,    input::-webkit-inner-spin-button {        -webkit-appearance: none;        appearance: none;        margin: 0;    }    /* 火狐 */    input{        -moz-appearance:textfield;    }    .nav-tabs{        padding-left: 0px;        border-bottom: none;    }    .nav-tabs .nav-item {        margin-bottom: -2px;    }    .nav-tabs > li {        width: 100px;        line-height: 30px;    }    .card {        border: none;    }    .nav-tabs .nav-link.active{        border-bottom: none;    }    .nav-tabs .nav-link{        border-bottom: none;    }    .nav-tabs .nav-link:hover{        border-bottom: none;    }    .nav-tabs .nav-item{        z-index: 100;        border:none;    }    .nav-tabs .nav-link.active{        border:none;    }    .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus{        border: none;    }    .userBehaviorRow:hover{        background-color: #f6f6f8;    }    #tab2 .card-body table th{        border-top:none;        border-bottom:none;    }</style><div class="container p-0">    <div class="card">        <div class="card-body">            <style>                #header-help-content-block.alert p {                    color: #86898c!important;                    margin-bottom: .25rem!important;                }            </style>            <div class="alert alert-primary mt-4 m-0 d-none d-md-block" id="header-help-content-block">                <h6 class="text-primary">使用帮助</h6>                <p>1、收藏店铺可以帮助您更快的定位分析产品；</p>                </p>            </div>        </div>    </div></div><div class="container p-0">    <div class="p-3 d-none d-md-flex justify-content-md-end justify-content-center"></div></div><div class="container p-0">    <div class="card">        <div class="card-body" id="businessList">            <div class="d-none d-md-flex" style="margin-bottom: 1.5rem;">                <div class="pt-2 text-muted">搜索结果数:                    <span class="text-primary">                        <strong id="searchCount" >100000+</strong>                    </span>                </div>                <button type="button" id="list-export" style="margin-left: auto;" class="btn btn-sm btn-outline-secondary text-opera" title="" export_remain_num="0" data-toggle="tooltip" data-style="" data-placement="top" data-title="最大可导出前20000条记录"   >                    <span class="fas fa-download mr-1"></span>                    导出Excel                </button>            </div>            <div class="table-responsive-md u-datatable">                <div id="hdtable-condition-search" style="z-index: 2; visibility: hidden; top: 0px;  position: fixed;">                    <table style="margin: 0 0;" class="js-freeze-header table">                        <thead>                        <tr class="bg-light text-secondary p-4">                            <th width="1%" scope="col" style="width: 100px;">                                <a href="javascript:;"   class=" d-flex justify-content-between align-items-center text-primary">                                    <div class="text-nowrap">                                        排名                                        <span class="fal fa-question-circle"  data-toggle="tooltip" data-style="" data-placement="bottom" data-title="<p>店铺Feedback综合评分在亚马逊所有店铺中的综合排名位置</p>" data-original-title="" title=""></span>                                    </div>                                    <span class="order-span fas order-span-active fa-angle-down text-primary u-datatable__thead-icon ml-2"></span>                                </a>                            </th>                            <th width="30%" scope="col" style="width: 201px;">                                <a href="javascript:;"   class=" d-flex justify-content-between align-items-center text-secondary">                                    <div class="text-nowrap">                                        店铺名称                                        <span class="fal fa-question-circle"  data-toggle="tooltip" data-style="" data-placement="bottom" data-title="<p>亚马逊店铺名称</p>" data-original-title="" title=""></span>                                    </div>                                    <span class="order-span fas order-span-active u-datatable__thead-icon ml-2"></span>                                </a>                            </th>                            <th width="20%" scope="col" class="mobile-field-hide" style="width: 100px;">                                <a href="javascript:;"    class=" d-flex justify-content-between align-items-center text-secondary">                                    <div class="text-nowrap" >                                        综合评分                                        <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="bottom" data-title="<p>亚马逊店铺Feedback综合评分</p>"  ></span>                                    </div>                                    <span class="order-span fas order-span-active   u-datatable__thead-icon ml-2"></span>                                </a>                            </th>                            <th width="1%" scope="col" class="mobile-field-hide" style="width: 124px;">                                <a href="javascript:;"   class=" d-flex justify-content-between align-items-center text-secondary">                                    <div class="text-nowrap" >                                        Feedback总量                                        <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="bottom" data-title="<p>整个店铺获得的Feedback总数量</p>"  ></span>                                    </div>                                    <span class="order-span fas order-span-active  u-datatable__thead-icon ml-2"></span>                                </a>                            </th>                            <th width="1%" scope="col" style="width: 104px;">                                <a href="javascript:;"   class=" d-flex justify-content-between align-items-center text-secondary">                                    <div class="text-nowrap" >                                        最近30天Feedback                                        <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="bottom" data-title="<p>是指店铺最近30天获得的Feedback数量</p>"  ></span>                                    </div>                                    <span class="order-span fas order-span-active u-datatable__thead-icon ml-2"></span>                                </a>                            </th>                            <th width="1%" scope="col" style="width: 100px;">                                <a href="javascript:;"   class=" d-flex justify-content-between align-items-center text-secondary">                                    <div class="text-nowrap" >                                        支持FBA                                        <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="bottom" data-title="<p>店铺下是否支持FBA配送</p>"  ></span>                                    </div>                                    <span class="order-span fas u-datatable__thead-icon ml-2"></span>                                </a>                            </th>                            <th width="1%" scope="col" style="width: 117px;">                                <a href="javascript:;"   class=" d-flex justify-content-between align-items-center text-secondary">                                    <div class="text-nowrap">                                        商品数量                                        <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="bottom" data-title="<p>店铺正常销售的Listing数量</p>"  ></span>                                    </div>                                    <span class="order-span fas u-datatable__thead-icon ml-2"></span>                                </a>                            </th>                            <th width="1%" scope="col" style="width: 130px;">                                <a href="javascript:;"    class=" d-flex justify-content-between align-items-center text-secondary">                                    <div class="text-nowrap"  >                                        主要销售类目                                        <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="bottom" data-title="<p>店铺主要销售的商品类目</p>"  ></span>                                    </div>                                    <span class="order-span fas u-datatable__thead-icon ml-2"></span>                                </a>                            </th>                            <th width="1%" scope="col" style="width: 114px;">                                <a href="javascript:;"    class=" d-flex justify-content-between align-items-center text-secondary">                                    <div class="text-nowrap"  >                                        类目占比                                        <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="bottom" data-title="<p>店铺主要销售的商品类目占比</p>"  ></span>                                    </div>                                    <span class="order-span fas u-datatable__thead-icon ml-2"></span>                                </a>                            </th>                            <th width="20%" scope="col" style="width: 118px;">                                <a href="javascript:;"   class=" d-flex justify-content-between align-items-center text-secondary">                                    <div class="text-nowrap"  >                                        操作                                        <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="bottom" data-title="<p>亚马逊店铺ID</p>"  ></span>                                    </div>                                    <span class="order-span fas u-datatable__thead-icon ml-2"></span>                                </a>                            </th>                        </tr>                        </thead>                    </table>                </div>                <table id="table-condition-search" class="js-freeze-header table">                    <thead>                    <tr class="bg-light text-secondary p-4" id="filter">                    </tr>                    <tr class="bg-light text-secondary p-4">                        <th width="1%" scope="col">                            <a href="javascript:;"  order-field="ranking"  class="order-field d-flex justify-content-between align-items-center text-primary">                                <div class="text-nowrap"   >                                    <div>                                        排名                                        <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="right" data-title="<p>店铺Feedback综合评分在亚马逊所有店铺中的综合排名位置</p>"  ></span>                                    </div>                                </div>                                <span class="order-span fas order-span-active fa-angle-down text-primary u-datatable__thead-icon ml-2" ></span>                            </a>                        </th>                        <th width="40%" scope="col">                            <a href="javascript:;"  order-field="shopName"  class="order-field d-flex justify-content-between align-items-center text-secondary">                                <div class="text-nowrap"   >                                    店铺名称                                    <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="right" data-title="<p>店铺名称</p>"  ></span>                                </div>                                <span class="order-span fas order-span-active u-datatable__thead-icon ml-2" ></span>                            </a>                        </th>                        <th width="1%" scope="col" class="mobile-field-hide">                            <a href="javascript:;" order-field="rating"  class="order-field d-flex justify-content-between align-items-center text-secondary">                                <div class="text-nowrap"  >                                    综合评分                                    <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="top" data-title="<p>亚马逊店铺Feedback综合评分</p>"  ></span>                                </div>                                <span class="order-span fas order-span-active  text-secondary  u-datatable__thead-icon ml-2" ></span>                            </a>                        </th>                        <th width="1%" scope="col" class="mobile-field-hide">                            <a href="javascript:;" order-field="total"   class="order-field d-flex justify-content-between align-items-center text-secondary">                                <div class="text-nowrap"   >                                    Feedback总量                                    <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="top" data-title="<p>整个店铺获得的Feedback总数量</p>" data-original-title="" title=""></span>                                </div>                                <span class="order-span fas order-span-active u-datatable__thead-icon ml-2" ></span>                            </a>                        </th>                        <th width="1%" scope="col">                            <a href="javascript:;"  order-field="thirtyDay" class="order-field d-flex justify-content-between align-items-center text-secondary">                                <div class="text-nowrap" >                                    最近30天Feedback                                    <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="top" data-title="<p>是指店铺最近30天获得的Feedback数量</p>" data-original-title="" title=""></span>                                </div>                                <span class="order-span fas order-span-active u-datatable__thead-icon ml-2" ></span>                            </a>                        </th>                        <th width="1%" scope="col">                            <a href="javascript:;"  order-field="isFBA" class="order-field d-flex justify-content-between align-items-center text-secondary">                                <div class="text-nowrap"   >                                    支持FBA                                    <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="top" data-title="<p>店铺下是否支持FBA配送</p>" data-original-title="" title=""></span>                                </div>                                <span class="order-span fas u-datatable__thead-icon ml-2" ></span>                            </a>                        </th>                        <th width="1%" scope="col">                            <a href="javascript:;"  order-field="listings" class="order-field d-flex justify-content-between align-items-center text-secondary">                                <div class="text-nowrap" >                                    商品数量                                    <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="top" data-title="<p>店铺正常销售的Listing数量</p>" data-original-title="" title=""></span>                                </div>                                <span class="order-span fas u-datatable__thead-icon ml-2" ></span>                            </a>                        </th>                        <th width="25%" scope="col">                            <a href="javascript:;" order-field="primarily"  class="order-field d-flex justify-content-between align-items-center text-secondary">                                <div class="text-nowrap"  >                                    主要销售类目                                    <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="top" data-title="<p>店铺主要销售的商品类目</p>" data-original-title="" title=""></span>                                </div>                                <span class="order-span fas u-datatable__thead-icon ml-2" ></span>                            </a>                        </th>                        <th width="1%" scope="col">                            <a href="javascript:;" order-field="ratePrimarily"  class="order-field d-flex justify-content-between align-items-center text-secondary">                                <div class="text-nowrap"  >                                    类目占比                                    <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="top" data-title="<p>店铺主要销售的商品类目占比</p>" data-original-title="" title=""></span>                                </div>                                <span class="order-span fas u-datatable__thead-icon ml-2" ></span>                            </a>                        </th>                        <th width="25%" scope="col">                            <a href="javascript:;" order-field="sellerId" class="order-field d-flex justify-content-between align-items-center text-secondary">                                <div class="text-nowrap">                                    操作                                    <span class="fal fa-question-circle" data-toggle="tooltip" data-style="" data-placement="top" data-title="<p>亚马逊店铺ID</p>" data-original-title="" title=""></span>                                </div>                                <span class="order-span fas u-datatable__thead-icon ml-2" ></span>                            </a>                        </th>                    </tr>                    </thead>                    <tbody class="js-page-content">                    <tr class="wxts">                        <td class="align-middle align-middle-1 text-center" colspan="10">                            <div class="bg-white py-5 px-4">                                <div class="jk-empty py-md-3 mt-4 mb-11 tips-guide">                                    <h5 class="text-primary mb-3"><strong>温馨提示</strong></h5>                                    <p></p>                                    <p class="ns-text-color">请设置条件筛选后显示店铺结果</p>                                </div>                            </div>                        </td>                    </tr>                    </tbody>                </table>            </div>            <?php if($total_count > 0): ?><div id="pagination" class="page hide" >    <div class="page-wrap fr">        <div class="total">共<span id="totalcount"><?php echo htmlentities($total_count); ?></span>条</div>    </div>    <div class="page-num fr">        <?php if($page == 1): ?>        <span id="home_page"><a href="javascript:;" class="num prev disabled" data-go-page="1" title="首页" >首页</a></span>        <span id="pre_page"><a href="javascript:;" class="num prev disabled " title="上一页" >上一页</a></span>        <?php else: ?>        <span id="home_page"><a href=""  class="num prev" data-go-page="1" title="首页" >首页</a></span>        <span id="pre_page"><a href=""  class="num prev " title="上一页" >上一页</a></span>        <?php endif; ?>        <div id="page_list" style="float: left;">            <!-- 分页页码显示计算 -->            <!-- 总页数小于总页码时就都显示 -->            <?php if($page_count <= $page_num): $__FOR_START_1009083911__=1;$__FOR_END_1009083911__=$page_count+1;for($i=$__FOR_START_1009083911__;$i < $__FOR_END_1009083911__;$i+=1){ if($i == $page): ?>            <span class="num curr"><a href="javascript:;" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php else: ?>            <span class="num"><a href="" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php endif; } ?>            <!-- 当前页小于页码的页码的平均两面的值时显示 -->            <?php elseif($page <= ($page_num-1)/2): $__FOR_START_1671328464__=1;$__FOR_END_1671328464__=$page_num+1;for($i=$__FOR_START_1671328464__;$i < $__FOR_END_1671328464__;$i+=1){ if($i == $page): ?>            <span class="num curr"><a href="javascript:;" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php else: ?>            <span class="num"><a href="" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php endif; } ?>            <!-- 如果总页数等于当前页 或者 总页数小于当前页加上页码总数平均值显示 -->            <?php elseif($page_count == $page or $page_count <= $page+($page_num-1)/2): $__FOR_START_1676500201__=$page_count-$page_num+1;$__FOR_END_1676500201__=$page_count+1;for($i=$__FOR_START_1676500201__;$i < $__FOR_END_1676500201__;$i+=1){ if($i == $page): ?>            <span class="num curr"><a href="javascript:;" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php else: ?>            <span class="num"><a href="" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php endif; } ?>            <!-- 否则就正常显示 -->            <?php else: $__FOR_START_62068482__=$page-($page_num-1)/2;$__FOR_END_62068482__=$page+($page_num-1)/2+1;for($i=$__FOR_START_62068482__;$i < $__FOR_END_62068482__;$i+=1){ if($i == $page): ?>            <span class="num curr"><a href="javascript:;" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php else: ?>            <span class="num"><a href="" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php endif; } ?>            <?php endif; ?>        </div>        <?php if($page != $page_count): ?>        <span id="next_page"><a href="javascript:;" class="num next" title="暂无文章" >下一页</a></span>        <span id="last_page"><a href="javascript:;" class="num next" title="尾页" >尾页</a></span>        <?php else: ?>        <span id="next_page"><a href="javascript:;" class="num next disabled" title="下一页" >下一页</a></span>        <span id="last_page"><a href="javascript:;" class="num next disabled" title="尾页" >尾页</a></span>        <?php endif; ?>    </div></div><?php endif; ?><script>    function page_display(pagecount,pageindex){        if(pagecount==""||pagecount==0){            $("#pagination").hide();        }else{            $("#pagination").show();            var pagehtml='',                pag_end_html='',                page_start_html='';            var page_display_num = 5;  //总共显示的页的个数必须为奇数            //结束页数计算            var pageend = pagecount;            //开始页面计算            var pagestart = pageindex-(page_display_num-1)/2;            pagestart = (pageindex==pageend) ? pageend-page_display_num+1 : pagestart;            pagestart = (pageend-pageindex) <3 ? pageend-page_display_num+1 : pagestart;            pagestart = pagestart<1 ? 1 : pagestart;            for( var i=pagestart; i<=pageend; i++ ){                if(pageindex==i){                    if( pageindex>=1000 && pageindex<10000 ){                        pagehtml+='<span class="num curr width45" onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    } else if ( pageindex > 10000 ){                        pagehtml+='<span class="num curr width50" onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    } else {                        pagehtml+='<span class="num curr width35" onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    }                    var pre_page = (i==1) ? 1 : i-1;                    var next_page= ( i==pagecount ) ? pagecount : i+1;                    if(i==1){                        $('#home_page>a').addClass('disabled');                        $('#pre_page>a').addClass('disabled');                        $('#home_page').attr('onclick','');                        $('#pre_page').attr('onclick','');                    }else{                        $('#home_page').attr('onclick','GetDataList(1)');                        $('#pre_page').attr('onclick','GetDataList("'+pre_page+'")');                        $('#home_page>a').removeClass('disabled');                        $('#pre_page>a').removeClass('disabled');                    }                    if(i<pagecount){                        $('#next_page').attr('onclick','GetDataList("'+next_page+'")');                        $('#last_page').attr('onclick','GetDataList("'+pagecount+'")');                        $('#last_page>a').removeClass('disabled');                        $('#next_page>a').removeClass('disabled');                    }else{                        $('#next_page').attr('onclick','');                        $('#last_page').attr('onclick','');                        $('#last_page>a').addClass('disabled');                        $('#next_page>a').addClass('disabled');                    }                    /*省略点显示*/                    if( (pageend-page_display_num)>0 && i>(page_display_num/2+1) ){                        page_start_html='<span class="shenglue">...</span>';                    }                    if(pageend > page_display_num){                        pageend = page_display_num;                        if(( parseInt(pageindex) + parseInt((page_display_num-1)/2)) <= pagecount && i>parseInt(page_display_num/2+1) ){                            pageend = parseInt(pageindex) + parseInt((page_display_num-1)/2);                        }                        if(i<pagecount){                            pag_end_html = '<span class="shenglue">...</span>';                        }                        if( (parseInt(pagecount)-parseInt(pageindex)) <= ((page_display_num-1)/2) ){                            pageend = pagecount;                            pag_end_html = '';                        }                    }                } else {                    if( pageindex>=1000 && pageindex<10000 ){                        pagehtml+='<span class="num width45"  onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    } else if ( pageindex > 10000 ){                        pagehtml+='<span class="num width50"  onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    } else {                        pagehtml+='<span class="num width35"  onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    }                }            }            if(pagehtml==''){                $('#page_list').html('<span class="num curr"><a data-cur-page="1">1</a></span>');            }else{                $('#page_list').html(pagehtml);            }        }    }</script>        </div>    </div></div><div class="container p-0">    <div class="p-3 d-none d-md-flex justify-content-md-end justify-content-center"></div></div><input type="hidden" name="pageindex" value="<?php echo htmlentities($page); ?>"  ><a target='_blank' href="#" id="clickNewWin"></a><script>    $(function(){        GetDataList(1);        $(window).scroll(function () {            var scroll_top = $(window).scrollTop();//当前滚动条滚动的距离            var businessList = $("#table-condition-search").offset();            if( scroll_top > businessList.top ){                $("#hdtable-condition-search").css("visibility","visible");            } else {                $("#hdtable-condition-search").css("visibility","hidden");            }        })    })    /**     * 分页显示     * @param {Object} pageindex     */    function GetDataList(pageindex,isExport=0){        var pageindex = pageindex==0 ? $('#pageindex').val() : pageindex;        $("input[name='pageindex']").val(pageindex);        $.ajax({            type:"post",            url:"/website/myCollection",            data:"pageindex="+pageindex+"&isExport="+isExport,            dataType:'json',            beforeSend:function(){                $.loading();            },            success:function(data){                $.loaded();                if(data.status == 'success'){                    if(isExport){                        window.open(data.data);                        return false;                    }                    var list = data.data.data,                        page_count = data.data.page_count,                        total_count = data.data.total_count,                        countryConfig = data.data.countryConfig;                    if( total_count == 0 ){                        $(".js-page-content").html('<tr class="wxts">\n' +                            '                    <td class="align-middle align-middle-1 text-center" colspan="10">\n' +                            '                        <div class="bg-white py-5 px-4">\n' +                            '                            <div class="jk-empty py-md-3 mt-4 mb-11 tips-guide">\n' +                            '                                <h5 class="mb-3"><strong>您暂无收藏店铺</strong></h5>\n' +                            '                            </div>\n' +                            '                        </div>\n' +                            '                    </td>\n' +                            '\n' +                            '                </tr>');                        $('#pagination').hide();                        $("#searchCount").html("0");                    } else {                        for(var i=0;i<list.length;i++){                            $(".js-page-content").html("");                            var listhtml='';                            for(var i=0;i<list.length;i++){                                var id = list[i].autoId,                                    country = list[i].country,                                    isFBA = list[i].isFBA,                                    ranking = list[i].ranking,                                    ratePrimarily = list[i].ratePrimarily,                                    rating = list[i].rating,                                    reviewThirtyDays = list[i].reviewThirtyDays,                                    reviewTotals = list[i].reviewTotals,                                    sellerId = list[i].sellerId,                                    sellingPrimarily = list[i].sellingPrimarily,                                    shop_name = list[i].shop_name,                                    verifiedListings = list[i].verifiedListings;                                if(isFBA>0){                                    var fba = "<img src='/public/static/images/icon_yes.png' />";                                } else {                                    var fba = " ";                                }                                var amzonUrl = 'https://www.'+countryConfig[country].webUrl+'/s?marketplaceID='+countryConfig[country].marketplaceID+'&me='+sellerId+'&merchant='+sellerId+'&redirect=true';                                listhtml += '<tr>'                                    + '<td class="align-middle align-middle-1 text-center">'+ranking+'</td>'                                    + '<td class="align-middle align-middle-1"><span class="span-keywords "><a href="javascript:getSellerInfo(\''+sellerId+'\',\''+country+'\');" title="点击查看店铺详情及店铺热销商品信息" class="seller'+sellerId+'" >'+shop_name+'</a></span></td>'                                    + '<td class="align-middle align-middle-1 mobile-field-hide"><div class="text-nowrap"><span>'+rating+'%</span></div></td>'                                    + '<td class="align-middle align-middle-1"><div class="text-nowrap text-center">'+number_format(reviewTotals)+'</div></td>'                                    + '<td class="align-middle align-middle-1"><div class="text-nowrap text-center">'+number_format(reviewThirtyDays)+'</div></td>'                                    + '<td class="align-middle align-middle-1 mobile-field-hide"><div class="text-nowrap text-center" >'+fba+'</div></td>'                                    + '<td class="align-middle align-middle-1 "><div class="text-center">'+number_format(verifiedListings)+'</div></td>'                                    + '<td class="align-middle align-middle-1 "><span>'+sellingPrimarily+'</span></td>'                                    + '<td class="align-middle align-middle-1 "><span>'+ratePrimarily+'%</span></td>'                                    + '<td class="align-middle align-middle-1 ">'                                    // + '<a href="javascript:getSellerInfo(\''+sellerId+'\');" title="点击查看店铺详情及店铺热销商品信息"   class="small btn" style="padding: 0.3rem 0.3rem;"> <i class="fa icon-see "></i></a>'                                    // + '<span style="border:0.5px solid #eee;"></span>'                                    + '<a href="'+amzonUrl+'" title="点击打开亚马逊店铺页面" target="_blank" class="small btn" style="color:#252525;padding: 0.3rem 0.3rem;"> <i class="fa fa-external-link " style="vertical-align: middle;"></i></a>'                                    + '<span style="border:0.5px solid #eee;"></span>'                                    + '<a href="javascript:cancelCollection(\''+sellerId+'\',\''+country+'\');" title="取消收藏该店铺"  class="small btn cancelCollection-'+sellerId+' '+cancelCollection+'" style="color:#252525;padding: 0.3rem 0.3rem;margin-bottom: 2px;"> <i class="fa fa-trash-o"  aria-hidden="true" style="vertical-align: middle;" ></i></a>'                                    + '</td>'                                    + '</tr>';                            }                            $(".js-page-content").html(listhtml);                        }                        var j = 1;                        for(i =1 ;i<total_count.toString().length;i++){                            var j = j+"0";                        }                        var searchCount = Math.floor(total_count/parseInt(j));                        $("#searchCount").html(searchCount*j+"+");                        $('#totalcount').text(total_count);//总条数                        $('#pagecount').text(page_count);//总页数                        $('#pageindex').val(pageindex);	//当前页数                        page_display(page_count,pageindex);                        $('#pagination').show();                    }                } else {                    if(data.code=="111111"){                        layer.msg(data.msg,{                            icon: 2,                            time: 3000,                            shade : [0.5 , '#000' , true]                        });                        //3秒后跳转到登录页面                        setTimeout(function(){                            window.location.href = "/website/login";                        },3000);                    } else {                        layer.msg(data.msg);                    }                }            }        });    }    //导出    $("#list-export").on('click',function(){        $("input[name='isExport']").val("1");        GetDataList(1,1);    })    //查看店铺信息    function getSellerInfo(sellerId , country ){        var url = "/website/shopView?sellerId="+sellerId;        var isLogin = "<?php echo htmlentities($isLogin); ?>";        if(isLogin == '0'){            layer.msg("您未登录，请先登录！",{                icon: 2,                time: 3000,                shade : [0.5 , '#000' , true]            });            //3秒后跳转到登录页面            setTimeout(function(){                window.location.href="/website/login";            },3000);            return false;        }        var point = parseInt("<?php echo htmlentities($getSPLV); ?>") + parseInt("<?php echo htmlentities($getSIV); ?>");        $('#dialog').show();        $("#questionContent").text('您将消费'+point+'积分查看该店铺信息和热卖商品，是否继续？');        $("#dialogUrl").attr("href",url+'&station='+country+'&point='+point);        $("#dialogUrl").data("id",sellerId);    }    //收藏店铺    function collection(sellerId,country){        $.post("/website/collectionSeller","sellerId="+sellerId+"&country="+country,function(data){            console.log(data);            if(data.status == 'success'){                $(".collection-"+sellerId).removeClass("show").addClass('hide');                $(".cancelCollection-"+sellerId).removeClass("hide").addClass('show');                layer.msg(data.msg);            } else {                if(data.code=="111111"){                    layer.msg(data.msg,{                        icon: 2,                        time: 3000,                        shade : [0.5 , '#000' , true]                    });                    //3秒后跳转到登录页面                    setTimeout(function(){                        window.location.href = "/website/login";                    },3000);                } else {                    layer.msg(data.msg);                }                return false;            }        },'json');    }    //取消收藏    function cancelCollection(sellerId,country){        $.post("/website/cancelCollectionSeller","sellerId="+sellerId+"&country="+country,function(data){            if(data.status == 'success'){                $(".cancelCollection-"+sellerId).parent("td").parent("tr").css('display','none');                layer.msg(data.msg);            } else {                if(data.code=="111111"){                    layer.msg(data.msg,{                        icon: 2,                        time: 3000,                        shade : [0.5 , '#000' , true]                    });                    //3秒后跳转到登录页面                    setTimeout(function(){                        window.location.href = "/website/login";                    },3000);                } else {                    layer.msg(data.msg);                }                return false;            }        },'json');    }</script><div id="dialog" style="display:none;z-index:9999;position: fixed;top: 40%;left: 36%; right: 36%;background-color: rgba(0,0,0,.6);border-radius:3px;">    <div style="background-color: #3377FF;border-top-left-radius:3px;border-top-right-radius:3px;">        <div style="padding:5px;font-size:13px;color:white;" >            温馨提示:        </div>    </div>    <div style="padding: 15px;color:white;text-align:center;" id="questionContent" > </div>    <div style="padding: 15px; margin-left: 40px; float: left;">        <a href="#" id="dialogUrl" data-id="" target="_blank" class="btn btn-sm btn-primary">继续</a>    </div>    <div style="padding: 15px; margin-right: 40px; float: right;">        <input type="button" value="暂时不要" onclick="diaClose('close')" style="width: 85px;" class="btn btn-sm " >    </div></div><script>    function diaClose(){        $("#dialog").hide();    }    $('#dialog').on('click','a',function(){        $("#dialog").hide();        var sellerId = $(this).data("id");        $(".seller"+sellerId).addClass("ns-text-color");    })</script><!--footer-->

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