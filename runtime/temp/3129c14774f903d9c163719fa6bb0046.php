<?php /*a:5:{s:77:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/article/view.html";i:1565862762;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/header.html";i:1561604652;s:87:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/header_common.html";i:1565682598;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/footer.html";i:1565580163;s:86:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/right-navbar.html";i:1563782741;}*/ ?>
<!DOCTYPE html><html><head>    <meta charset="utf-8" />    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="format-detection" content="telephone=yes" />    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />    <meta name="keywords" content="91AMZ 简单选品 选品简单" />    <meta name="description" content="91AMZ 简单选品 选品简单" />    <title><?php echo htmlentities($title); ?></title>    <link rel="shortcut icon" href="/public/static/images/favicon.ico">    <!--<link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap.min.css" />-->    <link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap.css" />    <!--<link rel="stylesheet" type="text/css" href="/public/static/css/bootstrap-theme.min.css" />-->    <link rel="stylesheet" type="text/css" href="/public/static/css/animate.min.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/common.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/doc-home.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/front.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/custom-front.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/fakeLoader.css" />    <link rel="stylesheet" type="text/css" href="/public/static/font-awesome/css/font-awesome.css" />    <link rel="stylesheet" type="text/css" href="/public/static/css/hs.megamenu.css" />    <!--[if lt IE 9]>    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>    <![endif]-->    <!--[if lte IE 8]>    <script>    (function(a){var c=document.createElement("div");c.className="g-alert-danger";c.innerHTML='您的浏览器实在<strong>太太太太太太太旧了</strong>,为保证良好的视觉体验，升级完浏览器再说<a href="https://browsehappy.com" target="_blank">立即升级</a>';var b=function(){var d=document.getElementsByTagName("body")[0];if("undefined"==typeof(d)){setTimeout(b,10)}else{d.insertBefore(c,d.firstChild)}};b()}(window));    </script>    <![endif]-->    <script src="/public/static/js/jquery-1.9.1.min.js" type="text/javascript"></script>    <script src="/public/static/js/bootstrap.min.js" type="text/javascript"></script></head><body><style>
    #navBar > .head-nav > li > a{
        color:#5a5f69;
        font-weight:400;
    }

    #navBar > .head-nav > li>a:hover{
        color:#3377FF;
        font-weight:400;
    }

    #navBar > .head-nav > li>.u-header__user{
        color:#5a5f69 !important;
        font-size:16px;
    }

    #navBar > .head-nav > li>.u-header__user:hover{
        color:#fff !important;;
    }
    .u-header__user >a{
        color:#5a5f69;
    }
</style>
<header id="header" class="u-header u-header-left-aligned-nav u-header--navbar-bg">
    <div class="u-header__section">
        <div class="container">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space hs-menu-initialized hs-menu-horizontal">
                <!-- Logo -->
                <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="/">
                    <img src="/public/static/images/logo.png" alt="Seller Sprite" style="height: 2.715rem;">
                    <span class="u-header__navbar-brand-text">&nbsp;</span>
                </a>
                <!-- End Logo -->

                <!-- Responsive Toggle Button -->

                <button type="button" class="navbar-toggler u-hamburger" data-toggle="collapse" data-target="#navBar">
                    <span class="u-hamburger__box">
                      <span class="u-hamburger__inner"></span>
                    </span>
                </button>

                <div class="collapse navbar-collapse navbar-right" id="navBar"  >
                    <ul class="head-nav u-header__navbar-nav"   >
                        <!--<li class="dropdown nav-item u-header__nav-item u-header__nav-last-item" >-->
                            <!--<a href="#" class="dropdown-toggle u-header__navbar-nav nav-link u-header__nav-link" data-toggle="dropdown"  > 91选品<span class="caret"></span> </a>-->
                            <!--<ul class="dropdown-menu amz-sub-menu" role="menu">-->
                                <!--<li><a  href="/website/shopSelection"> 店铺选品</a></li>-->
                                <!--&lt;!&ndash;<li><a  href="/website/productList"> 选产品</a></li>&ndash;&gt;-->
                            <!--</ul>-->
                        <!--</li>-->
                        <li class="nav-item u-header__nav-item ">
                            <a class="nav-link u-header__nav-link" href="/website/shopSelection" target="_blank"> 店铺选品 </a>
                        </li>

                        <!--<li class="nav-item u-header__nav-item ">-->
                            <!--<a class="nav-link u-header__nav-link" href="/website/price" target="_blank">套餐购买</a>-->
                        <!--</li>-->

                        <li class="nav-item u-header__nav-item ">
                            <a class="nav-link u-header__nav-link" href="/website/article" target="_blank">帮助</a>
                        </li>

                        <?php if($isLogin): ?>
                        <li class="nav-item u-header__nav-item  u-header__nav-last-item mr-2">
                            <a class="nav-link u-header__nav-link btn btn-sm btn-primary" style="color:white;" href="/website/member" target="_blank">个人中心</a>
                        </li>
                        <!-- 消息通知 -->
                        <li class="nav-item hs-has-mega-menu " >
                            <span class="nav-link u-header__nav-link btn-notice" style="line-height:51px;">
                              <a href="/website/memberLetter" class="btn btn-xs btn-icon  ">
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


                        <li class="nav-item hs-has-mega-menu  align-self-stretch">
                            <a href="javascript:;" class="u-header__user h-100 target-of-invoker-has-unfolds sidebar-account" data-toggle="modal" data-target="#sidebar-account"  >
                                <?php if($userInfo['userFace']): ?>
                                <img class="u-header__user-avatar" src="<?php echo htmlentities($userInfo['userFace']); ?>" alt="Avatar">
                                <?php else: ?>
                                <img class="u-header__user-avatar" src="/public/static/images/default_headimg.png" alt="Avatar">
                                <?php endif; ?>

                            </a>
                        </li>

                        <?php else: ?>
                        <li class="nav-item u-header__nav-item  align-self-stretch guest-sign u-header__nav-last-item">
                            <span class="u-header__user h-100">
                                <span class="text-url" data-href="/website/login">登录</span>&nbsp;/&nbsp;<span class="text-url" data-href="/website/register">注册</span>
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
                                     <!--您是免费用户，建议 <a href="/website/price" class="text-link" style="text-decoration: underline">立即升级</a>-->
                                    剩余积分：<span class="badge badge-success ml-1"> <?php echo htmlentities($userInfo['integral']); ?> </span>分
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
                                    剩余积分：<span class="badge badge-success ml-1"> 0 </span>分
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
                                    <a class="u-sidebar--account__list-link" href="/website/register">
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
                            <path class="fill-primary" opacity=".6" d="M0,58.9c0-0.9,5.1-2,5.8-2.2c6-0.8,11.8,2.2,17.2,4.6c4.5,2.1,8.6,5.3,13.3,7.1C48.2,73.3,61,73.8,73,69c43-16.9,40-7.9,84-2.2c44,5.7,83-31.5,143-10.1v69.8H0C0,126.5,0,59,0,58.9z"></path>
                            <path class="fill-primary" d="M300,68.5v58H0v-58c0,0,43-16.7,82,5.6c12.4,7.1,26.5,9.6,40.2,5.9c7.5-2.1,14.5-6.1,20.9-11c6.2-4.7,12-10.4,18.8-13.8c7.3-3.8,15.6-5.2,23.6-5.2c16.1,0.1,30.7,8.2,45,16.1c13.4,7.4,28.1,12.2,43.3,11.2C282.5,76.7,292.7,74.4,300,68.5z"></path>
                        </svg>
                    </div>
                </footer>
            </div>
        </div>
    </aside>


</header>

<script>

    //点击登录
    $(".u-header__nav-item .text-url").click(function(){
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



</script><style>    img{        max-width: 100%;    }    .article-title{        font-size:26px;        font-weight:600;        color:rgba(72,75,78,1);        line-height:37px;        letter-spacing: 1px;        word-break: break-all;        word-wrap:break-word;    }    .article-abstract,.article-abstract a{        font-size:14px;        font-weight:400;        color:rgba(157,168,180,1);        line-height:20px;        letter-spacing: 1px;        word-break: break-all;        word-wrap:break-word;    }    .article-content,.article-content p{        margin: 0;        font-size:14px;        font-weight:400;        color:rgba(96,101,106,1);        line-height:24px;        letter-spacing: 1px;        word-break: break-all;        word-wrap:break-word;    }    .article-content h3,.article-content h2{        font-size:16px;        font-weight:600;        color:rgba(72,75,78,1);        line-height:22px;        margin-bottom: 13px;        margin-top: 13px;        letter-spacing: 1px;    }    .article-content img{        max-width: 100% !important;        border: 1px solid #EFF1F4;    }    .article-foot{        border-top: dashed 1px #DEE1EB;        border-bottom: dashed 1px #DEE1EB;        padding: 20px 0px 20px 0px;    }    .article-foot-item{        padding: 4px 0px 4px 0px;    }    .article-foot-item a{        font-size:14px;        font-weight:400;        color:rgba(103,119,133,1);        line-height:20px;    }    .catalogue-title{        font-size:16px;        font-weight:600;        color:rgba(72,75,78,1);        line-height:22px;        letter-spacing: 1px;        padding-bottom: 6px;    }    .catalogue-li{        color:rgb(183,190,198);        padding-top: 14px;    }    .catalogue-li a{        font-size:14px;        font-weight:400;        color:rgba(96,101,106,1);        line-height:20px;        letter-spacing: 1px;    }    main{        background-color:white ;    }    .note-btn-group.btn-group button{        padding: 10px;    }    .dropdown-menu.dropdown-style.show{        width: 250%;    }    .article-catalogue:hover{        color:#3377ff !important;    }    a:hover{        color:#3377ff !important;    }    .fa.fa-trash-alt:hover{        color: #3377ff !important;    }    #commentContent{        font-size: 14px;    }    .a-checked{        color: #3377ee !important;    }    .a-checked:hover{        color: #3377ee !important;    }    #stickyBlockStartPoint ul li{        list-style:disc;    }</style><main id="content" role="main">    <!-- Blog Classic Section -->    <div class="container u-space-2-top u-space-3-top--md u-space-2-top--lg u-space-1-bottom">        <div class="row">            <div class="col-lg-9 mb-9 mb-lg-0">                <div class="row">                    <div class="col-12">                        <div class="edit-div article-title"><?php echo htmlentities($data['title']); ?></div>                    </div>                </div>                <div class="row" style="padding-top: 14px;">                    <div class="col-12">                        <input name="tags" value="促销活动" type="hidden">                        <div class="edit-div article-abstract">                            <?php echo htmlentities(date("Y年m月d日",!is_numeric($data['addTime'])? strtotime($data['addTime']) : $data['addTime'])); ?><span style="padding: 0px 8px 0px 8px;">|</span><a href="/website/article?cid=<?php echo htmlentities($data['categoryId']); ?>"><?php echo htmlentities($data['category_name']); ?></a></div>                    </div>                </div>                <!-- News Classic -->                <div class="row" style="padding-top: 32px;">                    <div class="col-12">                        <div style="width: 100%;min-height: 600px;" class="content-edit-div">                            <div class="edit-div article-content" style="min-height: 600px;">                                <?php echo $data['content']; ?>                            </div>                        </div>                    </div>                </div>                <div class="row" style="padding-top: 40px;">                    <div class="col-12">                        <div class="article-foot">                            <?php if($pre): ?>                            <div class="article-foot-item">                                <a href="/website/articleView?aid=<?php echo htmlentities($pre['autoId']); ?>">                                    前一篇：<?php echo htmlentities($pre['title']); ?> </a>                            </div>                            <?php endif; if($next): ?>                            <div class="article-foot-item">                                <a href="/website/articleView?aid=<?php echo htmlentities($next['autoId']); ?>">                                    后一篇：<?php echo htmlentities($next['title']); ?> </a>                            </div>                            <?php endif; ?>                        </div>                    </div>                </div>                <!-- End News Classic -->            </div>            <div id="stickyBlockStartPoint" class="col-lg-3" style="padding-left: 80px;">                <!-- Sticky Block -->                <div class="js-sticky-block" data-has-sticky-header="false" data-offset-target="#logoAndNav" data-sticky-view="lg" data-start-point="#stickyBlockStartPoint" data-end-point="#stickyBlockEndPoint" data-offset-top="32" data-offset-bottom="100" style="min-width: 250px; z-index: 1;">                    <div class="catalogue-title" style="padding-top: 50px;">分类标签</div>                    <ul style="padding-left: 15px;">                        <?php if(is_array($categoryList) || $categoryList instanceof \think\Collection || $categoryList instanceof \think\Paginator): $k = 0; $__LIST__ = $categoryList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>                        <li class="article-catalogue catalogue-li <?php if($cid==$vo['autoId']): ?>a-checked<?php endif; ?>">                            <a class="article-catalogue  <?php if($cid==$vo['autoId']): ?>a-checked<?php endif; ?>" href="/website/article?cid=<?php echo htmlentities($vo['autoId']); ?>" style="display:block;"><?php echo htmlentities($vo['category_name']); ?>(<?php echo htmlentities($vo['count']); ?>)</a>                        </li>                        <?php endforeach; endif; else: echo "" ;endif; ?>                    </ul>                    <!-- End Thumbnail News -->                </div>                <!-- End Sticky Block -->            </div>        </div>    </div>    <!-- End Blog Classic Section -->    <!-- Sticky Block End Point -->    <div id="stickyBlockEndPoint"></div></main><!--footer-->

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