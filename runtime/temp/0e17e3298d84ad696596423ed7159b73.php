<?php /*a:6:{s:78:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/Member/letter.html";i:1563780743;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/header.html";i:1561604652;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/navbar.html";i:1565593659;s:85:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/member_menu.html";i:1563780742;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/footer.html";i:1565580163;s:86:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/right-navbar.html";i:1563782741;}*/ ?>
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



<style>

    .ns-main {
        overflow: hidden;
        min-height:800px;
    }

    .member-main {
        background: #fff;
        overflow: hidden;
        margin-top: 20px;
        padding: 20px;

    }

    table{
        width:100%;
        table-layout:fixed;
    }

    table tr{
        border-bottom: 1px solid #eee;
    }

    button.close {
        -webkit-appearance: none;
        padding: 0;
        cursor: pointer;
        background: transparent;
        border: 0;
    }

    .hr-line-dashed {
        border-top: 1px dashed #e7eaec;
        color: #ffffff;
        background-color: #ffffff;
        height: 1px;
        margin: 20px 0;
    }

    .span{
        font-size: 12px;
        font-weight: 500;
        color: #A5A5A5;
        line-height: 32px;
    }

    .col-yx-2{
        flex: 0 0 20%;
        max-width:20%;
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .modal-body::-webkit-scrollbar {
        display:none;
    }

    .content_css img{
        max-width: 100%;
    }



</style>
<div class="ns-main w1200">
    <style>

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
</script>

    <div class="member-main">
        <div class="main-top clearfix">
            <button  data-toggle="modal" data-target="#letter-modal"   class="btn btn-primary btn-sm">发送站内信</button>
            <span class="span pull-right" >>>站内信息列表，仅显示最近20条记录</span>
        </div>

        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class=" clear" >

            <?php if($vo['smsType'] > 0): ?>
            <div class="col-yx-2 pull-left"></div>
            <div class="col-sm-7 pull-left" >
                <div class="alert  alert-danger content_css" role="alert" style="word-wrap:break-word">
                    <?php echo $vo['content']; ?>
                </div>
            </div>
            <div class="col-yx-2 pull-left">
                <strong> <i class="fa fa-hand-o-left "></i> 91AMZ </strong>
                <br><br><span class="text-info"><?php echo htmlentities(date('Y-m-d H:i:s',!is_numeric($vo['addTime'])? strtotime($vo['addTime']) : $vo['addTime'])); ?></span>
            </div>
            <?php else: ?>
            <div class="col-yx-2 pull-left text-right">
                <strong class="text-danger"> Me <i class="fa fa-hand-o-right"></i></strong>
                <br><br><span class="text-info"><?php echo htmlentities(date('Y-m-d H:i:s',!is_numeric($vo['addTime'])? strtotime($vo['addTime']) : $vo['addTime'])); ?></span>
            </div>
            <div class="col-sm-7 pull-left " >
                <?php if($vo['status'] < 0): ?>
                <span class="icon  not-read-icon"></span>
                <?php else: ?>
                <span class="icon read-icon"></span>
                <?php endif; ?>
                <div class="alert  alert-warning content_css" role="alert" style="word-wrap:break-word">
                    <?php echo $vo['content']; ?>
                </div>
            </div>
            <div class="col-yx-2 pull-left text-right"></div>
            <?php endif; ?>
        </div>
        <div class="hr-line-dashed"></div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>


    <div class="modal fade " id="letter-modal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="top: 15%;left:0;right:0;bottom:0;" >
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow: 2px 2px 10px rgba(0, 0, 0, .3);">
                <div class="modal-header">
                    <div style="font-weight:bold;font-size:17px;">向平台发送站内信</div>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                    </button>
                </div>

                <div class="modal-body" style="clear:both;">
                    <form class="form-horizontal" id="passwordForm">
                        <script id="container" name="content" type="text/plain"></script>
                    </form>
                </div>

                <!-- 配置文件 -->
                <script type="text/javascript" src="/public/static/UEditor/ueditor.config.js"></script>
                <!-- 编辑器源码文件 -->
                <script type="text/javascript" src="/public/static/UEditor/ueditor.all.js"></script>
                <!-- 实例化编辑器 -->
                <script type="text/javascript">
                    var ue = UE.getEditor('container', {
                        toolbars: [
                            ['simpleupload']
                        ],
                        autoHeightEnabled: false,
                        autoFloatEnabled: true,
                        initialFrameHeight: 200
                    });
                </script>

                <div class="modal-footer">
                    <button type="button" class="btn-sm btn-white" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn-sm btn-primary" id="btnSubmit">发送</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">

    //回复
    $("#btnSubmit").click(function(){
        var content = ue.getContent();
        if(content.length<1){
            layer.msg("内容不能为空！");
            return false;
        }
        $.post("/website/memberLetter", {"content": content}, function (res) {
            console.log(res);

            if (res.status == 'error') {
                layer.msg(res.msg);

            } else {
                layer.msg(res.msg);
                setTimeout(function () {
                    location.reload()
                }, 2000);
            }
        },"json");
    })
    $(".close,.btn-white ").click(function(){
        $(".letterBox").hide();
        ue.setContent("");
    });
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