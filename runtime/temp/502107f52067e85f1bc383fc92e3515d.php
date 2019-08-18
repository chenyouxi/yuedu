<?php /*a:5:{s:77:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/product/view.html";i:1565680132;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/header.html";i:1561604652;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/navbar.html";i:1565682693;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/footer.html";i:1565580163;s:86:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/right-navbar.html";i:1563782741;}*/ ?>
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


<link rel="stylesheet" type="text/css" href="/public/static/css/goods.css" />


<script src="/public/static/echarts/echarts.min.js"></script>


<style>
    .price{display: inline-grid;font-size: 18px;margin-top: 0;margin-left: 5px;line-height: 18px;}
</style>

<div class="container p-0 " >
    <!-- 商品详细信息 -->
    <div class="card p-0 mt-5">
        <!-- 商品图片以及相册 _star-->
        <div class="row no-gutters mt-5">

            <div id="preview" class="preview col-12 col-md-4 ml-5">
                <div class="goodsgallery">
                    <link rel="stylesheet" href="/public/static/gallery/gallery.css">


                    <script type="text/javascript" src="/public/static/gallery/gallery.js"></script>
                    <link rel="stylesheet" href="/public/static/plyr/plyr.css">
                    <script type="text/javascript" src="/public/static/plyr/plyr.js"></script>
                    <style>
                        .magnifying-glass{position: absolute;bottom: 0;right: 0;cursor:pointer;z-index:999;}
                    </style>

                    <div id="MagnifierWrap">
                        <div class="MagnifierMain">
                            <img class="MagTargetImg" style="max-width:100%;max-height:100%;"  src=" " data_big_img=" "/>
                        </div>
                        <script>

                            plyr.setup();

                            function goods_video_pause(){

                                $(".goods-video-pause").hide();
                                $(".goods-video-box").remove();
                                $(".goods-video-play").show();
                                $("#video-is-play").val('0');
                            }

                            function goods_video_play(){

                                $(".goods-video-play").hide();
                                $(".goods-video-pause").show();
                                $("#video-is-play").val('1');
                                $(".MagnifierDrag").remove();
                                $(".MagnifierPop").remove();

                                var html = '';
                                html += '<div class="goods-video-box">';
                                html += '<video autoplay controls loop >';
                                html += '<source src="" type="video/mp4" />';
                                html += '</video>';
                                html += '</div>';

                                $(".MagnifierMain").append(html);
                                plyr.setup();
                            }
                        </script>

                        <span class="spe_leftBtn on">&lt;</span>
                        <span class="spe_rightBtn on" >&gt;</span>
                        <div class="spec-items">
                            <ul id="imageList">
                                <ul>
                                    <!-- 否则显示商品组图 -->
                                    <!-- 这里为了使用ajax配合插件使用 -->
                                    <?php $__FOR_START_278012917__=0;$__FOR_END_278012917__=10;for($i=$__FOR_START_278012917__;$i < $__FOR_END_278012917__;$i+=1){ ?>
                                    <li>
                                        <img src="" data_big_img="" data-picture-id="" data-pic-cover="">
                                    </li>
                                    <?php } ?>

                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="detail-info col-12 col-md-6">
                <!-- 商品名称 -->
                <h1 class="goods-name js-goods-name"></h1>
                <p>
                    <span class="score-value-no"><em style="width:100%;"></em></span>
                </p>

                <span style="white-space: nowrap;" class="small" id="start">

                </span>
                <p>by <span id="manufacturer" style="color:#66f;"></span></p>

                <div class="goods-price pull-left">
                    <div id="priceList">

                    </div>

                    <div class="pull-left text-secondary  mt-1 small">
                        (最近星级变动时间: <span id="lastRatingUpdate"></span>, 最近价格修改时间: <span id="lastPriceChange"></span>)
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="container mt-2 p-0 mb-5" style="min-height:200px;">

    <!-- 右半部分内容 -->
    <div class="card">
        <div class="wrapper">

            <div id="main-nav-holder" class="goods-detail">
                <ul id="nav" class="tab">
                    <li class="title-list current"><a href="javascript:;" id="dataTab"> 商品详情 </a></li>
                    <li class="title-list "><a href="javascript:;" id="amzPriceTab">历史价格走势</a></li>
                    <li class="title-list"><a href="javascript:;" id="trackProductTab">评级、销量、评论走势 </a></li>
                </ul>
            </div>

            <div id="data_tab" class="row no-gutters mt-5">
                <div  class="row m-3">
                    <div id="description"></div>
                </div>
                <div class="row m-auto col-12 " >

                <div class="   col-md-6" >
                    <table class="js-freeze-header table">
                        <thead>
                            <tr class="bg-light text-secondary p-4 "><td colspan="2">&nbsp;&nbsp;商品详情</td> </tr>
                        </thead>
                        <tbody class="border-light border-bottom" id="Details">

                        </tbody>
                    </table>
                </div>



                <div class=" col-md-6 " >
                    <table id="table-condition-search" class="js-freeze-header table">
                        <thead>
                        <tr class="bg-light text-secondary p-4"><td colspan="2">&nbsp;&nbsp;当前销售排名及平均排名情况 </td></tr>
                        </thead>
                        <tbody class="border-light border-bottom" id="current">
                        </tbody>
                    </table>
                </div>
                </div>


            </div>

            <div id="amz_price_tab" class="mt-5 mb-5 m-2" style="display:none;">
                <div id="priceHistory" style="height:400px;" class="col-12 container"></div>
            </div>

            <div id="track_product_tab" class=" m-5" style="display:none;">
                <div id="srr" style="height:400px;" class="col-12 container"></div>
            </div>
        </div>
    </div>


</div>


<!--<div class="row" id="trend-info">-->
    <!--<div class="col-12" id="keepa-history-trend" style="height: 600px;"></div>-->
    <!--<div class="chart-tip" style="position: absolute;bottom: 30px;right: 10px;width: 160px;height: 17px;font-size: 12px;color: rgba(134, 146, 158, 1);line-height: 17px;">-->
        <!--<div class="flex" id="range" style="margin-top:-185px;margin-left:-22px"></div>-->
    <!--</div>-->
<!--</div>-->

<script>

    $("#dataTab").click(function(){
        $("#nav").find('li').removeClass("current");
        $(this).parent("li").addClass("current");
        $("#track_product_tab").hide();
        $("#amz_price_tab").hide();
        $("#data_tab").show();
    })

    $("#amzPriceTab").click(function(){
        $("#nav").find('li').removeClass("current");
        $(this).parent("li").addClass("current");
        $("#data_tab").hide();
        $("#track_product_tab").hide();
        $("#amz_price_tab").show();
    })

    $("#trackProductTab").click(function(){
        $("#nav").find('li').removeClass("current");
        $(this).parent("li").addClass("current");
        $("#data_tab").hide();
        $("#amz_price_tab").hide();
        $("#track_product_tab").show();
    })



    //获取商品详情
    $(document).ready(function () {
        $.ajax({
            type:"post",
            url:"/website/ajaxProductInfo",
            data:"asinId=<?php echo htmlentities($asinId); ?>&station=<?php echo htmlentities($station); ?>",
            dataType:'json',
            beforeSend:function(){
                $.loading();
            },
            success:function(data){
                $.loaded();

                if(data.status == 'success'){
                    var productInfo = data.data;
                    console.log(data);
                    $(".js-goods-name").html(productInfo.title);
                    var start = ''
                    for(i=0;i<6;i++){
                        if(productInfo.stats.current[16] - i*10 < 10 && productInfo.stats.current[16] - i*10 > 0){
                            start += '<i style="color:#f1bb00" class="fa fa-star-half-o"></i>';
                        } else if ( productInfo.stats.current[16] - i*10 <= 0 ){
                            start += '<i style="color:#f1bb00" class="fa fa-star-o"></i>';
                        } else {
                            start += ' <i style="color:#f1bb00" class="fa fa-star"></i>';
                        }
                    }
                    start += '<span style="color:#cea000" > '+number_format(productInfo.stats.current[16]/10)+' </span>('+number_format(productInfo.stats.current[17])+' reviews)';
                    $("#start").html(start);
                    $("#manufacturer").html(productInfo.manufacturer);

                    var priceList = '';
                    if( productInfo.amzPrice != '-1' ){
                        var amzPrice = productInfo.amzPrice/100;
                        priceList += '<div class="pull-left "><span class=""> Amazon:</span><font class="price col-1" style="color:#f47a00;" > $'+amzPrice.toFixed(2)+' </font></div>';
                    }
                    if ( productInfo.newPrice != '-1' ){
                        var newPrice = productInfo.newPrice/100;
                        priceList += '<div class="pull-left"><span class=""> New:</span><font class="price col-1" style="color:#66f;" > $'+newPrice.toFixed(2)+' </font></div>';
                    }
                    if ( productInfo.usePrice != '-1' ){
                        var usePrice = productInfo.usePrice/100;
                        priceList += '<div class="pull-left"><span class=""> Used:</span><font class="price col-1" style="color:#444;" > $'+usePrice.toFixed(2)+' </font></div>';
                    }
                    if ( productInfo.eBayPrice != '-1'){
                        var eBayPrice = productInfo.eBayPrice/100;
                        priceList += '<div class="pull-left"><span class=""> eBay New:</span><font class="price col-1" style="color:#009688;" > $'+eBayPrice.toFixed(2)+' </font></div>';
                    }

                    $("#priceList").html(priceList);

                    $("#lastRatingUpdate").html(productInfo.lastRatingUpdate);
                    $("#lastPriceChange").html(productInfo.lastPriceChange);
                    $("#description").html(productInfo.description);


                    var infoData = '';
//                    if(productInfo.trackingSince){
//                        var trackingSince = new Date(productInfo.trackingSince*1000).Format("yyyy-MM-dd");
//                        infoData += '<tr><td> <span>Tracking since</span> </td><td class="align-middle"><div> <span>'+trackingSince+'</span> </div></td></tr>';
//                    }
                    if(productInfo.categoryTree){
                        var categoryTree = '';
                        for(j=0;j<=productInfo.categoryTree.length;j++){
                            if(productInfo.categoryTree[j]){
                                if(j < productInfo.categoryTree.length-1){
                                    var symbol = ' >> ';
                                } else {
                                    var symbol = '';
                                }
                                categoryTree += '<span class="small">'+productInfo.categoryTree[j].name+symbol+'</span>';
                            }

                        }
                        infoData += '<tr><td> <span>商品分类目录</span> </td><td class="align-middle"><div>'+categoryTree+'</div></td></tr>';
                    }
                    if(productInfo.asin){
                        infoData += '<tr><td> <span> ASIN </span> </td><td> <div> <span>'+productInfo.asin+'</span> </div> </td></tr>';
                    }
//                    if(productInfo.ean){
//                        infoData += '<tr><td> <span> Product Codes - EAN </span> </td><td class="align-middle"> <div> <span>'+productInfo.ean+'</span> </div> </td></tr>';
//                    }
                    if(productInfo.upc){
                        infoData += '<tr><td> <span> UPC </span> </td><td class="align-middle"> <div> <span>'+productInfo.upc+'</span> </div> </td></tr>';
                    }
//                    if(productInfo.mpn){
//                        infoData += '<tr><td> <span> Product Codes - MPN </span> </td><td class="align-middle"> <div> <span>'+productInfo.mpn+'</span> </div> </td></tr>';
//                    }
//                    if(productInfo.partNumber){
//                        infoData += '<tr><td> <span> Product Codes - PartNumber </span> </td><td class="align-middle"> <div> <span>'+productInfo.partNumber+'</span> </div> </td></tr>';
//                    }
                    if(productInfo.brand){
                        infoData += '<tr><td> <span> 品牌 </span> </td><td><div> <span>'+productInfo.brand+'</span> </div></td></tr>';
                    }
                    if(productInfo.color){
                        infoData += '<tr><td> <span> 颜色 </span> </td><td class="align-middle"><div> <span style="color:'+productInfo.color+';"> '+productInfo.color+' </span> </div></td></tr>';
                    }
//                    if(productInfo.binding){
//                        infoData += '<tr><td> <span> Binding </span> </td><td class="align-middle"><div> <span> '+productInfo.binding+' </span> </div></td></tr>';
//                    }
                    if( productInfo.packageLength || productInfo.packageWidth || productInfo.packageHeight || productInfo.packageLength || productInfo.packageWidth  ||  productInfo.packageHeight ){
                        infoData += '<tr><td> <span> 包装规格 (<span class="toggle-unit" title="Toggle unit">cm</span>³) </span> </td>' +
                            '<td class="align-middle"><div> <span> '+productInfo.packageLength/10+' x '+productInfo.packageWidth/10+' x '+productInfo.packageHeight/10+'cm (='+ (productInfo.packageLength/10 * productInfo.packageWidth/10 * productInfo.packageHeight/10).toFixed(2) +'<span class="toggle-unit" title="Toggle unit">cm</span>³)  </span> </div></td></tr>';
                    }
                    if(productInfo.packageWeight){
                        infoData += '<tr><td> <span> 包装重量 (<span class="toggle-unit" title="Toggle unit">g</span>) </span> </td><td class="align-middle"><div> <span> '+ productInfo.packageWeight +'g </span> </div></td></tr>';
                    }
                    if(productInfo.packageQuantity != '-1'){
                        infoData += '<tr><td> <span> 包装量 </span> </td><td class="align-middle"><div> <span> '+productInfo.packageQuantity+' </span> </div></td></tr>';
                    }
                    if( productInfo.itemHeight != '-1' && productInfo.itemLength != '-1' && productInfo.itemWidth != '-1'){
                        infoData += '<tr><td> <span> 商品规格 (<span class="toggle-unit" title="Toggle unit">cm</span>³) </span> </td><td class="align-middle"><div> <span> '+productInfo.itemLength/10+' x '+productInfo.itemWidth/10+' x '+productInfo.itemHeight/10+'cm (='+(productInfo.itemLength/10 * productInfo.itemWidth/10 * productInfo.itemHeight/10).toFixed(2)+'<span class="toggle-unit" title="Toggle unit">cm</span>³)  </span> </div></td></tr>';
                    }
                    if( productInfo.itemWeight != '-1' ){
                        infoData += '<tr><td> <span> 商品重量 (<span class="toggle-unit" title="Toggle unit">g</span>) </span> </td><td class="align-middle"><div> <span> '+productInfo.itemWeight+'g </span> </div></td></tr>';
                    }
                    $("#Details").html(infoData);

                    var current = '';
                    if(productInfo.stats.current[3] != '-1'){ current += '<tr><td class="align-middle"><span>销售排名</span></td><td class="align-middle"><div><span>#'+number_format(productInfo.stats.current[3])+'</span></div></td></tr>';}
                    if(productInfo.stats.avg30[3] != '-1'){ current += '<tr><td class="align-middle"><span>30天平均销售排名</span></td><td class="align-middle"><div><span>#'+number_format(productInfo.stats.avg30[3])+'</span></div></td></tr>';}
                    if(productInfo.stats.avg30[3] != '-1'){ current += '<tr><td class="align-middle"><span>60天平均销售排名</span></td><td class="align-middle"><div><span>#'+number_format(productInfo.stats.avg30[3])+'</span></div></td></tr>';}
                    if(productInfo.stats.avg90[3] != '-1'){ current += '<tr><td class="align-middle"><span>90天平均销售排名</span></td><td class="align-middle"><div><span>#'+number_format(productInfo.stats.avg90[3])+'</span></div></td></tr>';}
                    if(productInfo.stats.avg90[3] != '-1'){ current += '<tr><td class="align-middle"><span>180天平均销售排名</span></td><td class="align-middle"><div><span>#'+number_format(productInfo.stats.avg180[3])+'</span></div></td></tr>';}
                    if(productInfo.stats.avg180[17] != '-1'){ current += '<tr><td class="align-middle"><span>评论数量（90天平均）</span></td><td class="align-middle"><div><span>'+number_format(productInfo.stats.avg90[17])+'</span></div></td></tr>';}
                    if(productInfo.stats.current[0] != '-1'){
                        current += '<tr><td class="align-middle"><span> 价格 </span></td><td class="align-middle"><div><span>$'+(productInfo.stats.current[0]/100).toFixed(2)+'</span></div></td></tr>';
                    }
                    if(productInfo.stats.avg90[0] != '-1'){
                        current += '<tr><td class="align-middle"><span> 90天平均价格 </span></td><td class="align-middle"><div><span>$'+(productInfo.stats.avg90[0]/100).toFixed(2)+'</span></div></td></tr>';
                    }
                    $("#current").html(current);

                    //图片列表
                    var images = '';
                    for(k=0;k<productInfo.imagesCSV.length;k++){
                        if(k==0){
                            images += '<li class="on">';
                        } else {
                            images += '<li>';
                        }

                        images += '<img src="https://images-na.ssl-images-amazon.com/images/I/'+productInfo.imagesCSV[k]+'" data_big_img="https://images-na.ssl-images-amazon.com/images/I/'+productInfo.imagesCSV[k]+'" data-picture-id="https://images-na.ssl-images-amazon.com/images/I/'+productInfo.imagesCSV[k]+'" data-pic-cover="'+productInfo.imagesCSV[k]+'" /></li>';
                    }
                    // var MagnifierMain = '<img class="MagTargetImg" style="max-width:100%;max-height:100%;"  src="https://images-na.ssl-images-amazon.com/images/I/'+productInfo.imagesCSV[0]+'" data_big_img="https://images-na.ssl-images-amazon.com/images/I/'+productInfo.imagesCSV[0]+'"/>';
                    $(".MagTargetImg").attr("src","https://images-na.ssl-images-amazon.com/images/I/"+productInfo.imagesCSV[0]);
                    $(".MagTargetImg").attr("data_big_img","https://images-na.ssl-images-amazon.com/images/I/"+productInfo.imagesCSV[0]);

                    $("#imageList").html(images);



                    //获取chart
                    $.post("/website/ajaxProductChart","asinId=<?php echo htmlentities($asinId); ?>&station=<?php echo htmlentities($station); ?>",function(data){
                        if(data.status == 'success'){
                            var priceHistory = data.data.priceHistory;
                            option.series[0].data = priceHistory.amz;
                            option.series[1].data = priceHistory.new;
                            option.series[2].data = priceHistory.used;
                            myChart.hideLoading(); //数据获取成功之后隐藏动画
                            myChart.setOption(option);

                            var srr = data.data.srr;
                            srrOption.series[0].data = srr.rating;
                            srrOption.series[1].data = srr.sales;
                            srrOption.series[2].data = srr.reviews;
                            srrChart.hideLoading(); //数据获取成功之后隐藏动画
                            srrChart.setOption(srrOption);
                        }
                    },'json');



                } else {
                    layer.msg(data.msg);
                }
            }
        });
    });




</script>
<script type="text/javascript">


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



    //chart

    var worldMapContainer = document.getElementById('priceHistory');
    var srrMapContainer = document.getElementById('srr');
    //用于使chart自适应高度和宽度,通过窗体高宽计算容器高宽
    var resizeWorldMapContainer = function () {
        worldMapContainer.style.width = window.innerWidth + 'px';
        srrMapContainer.style.width = window.innerWidth +'px';
        //worldMapContainer.style.height = window.innerHeight/1.5+'px';
    };
    //设置容器高宽
    resizeWorldMapContainer();

    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('priceHistory'));

    var srrChart = echarts.init(document.getElementById('srr'));
    myChart.showLoading({
        text : "加载中...",
        effect :"ring" ,//可选为：'spin' | 'bar' | 'ring' | 'whirling' | 'dynamicLine' | 'bubble'
        color: "#3377FF",
        textColor: "#9FA3A8"
    }); //数据获取显示之前先加载一段动画
    //数据获取显示之前先加载一段动画
    srrChart.showLoading({
        text : "加载中...",
        effect :"ring" ,//可选为：'spin' | 'bar' | 'ring' | 'whirling' | 'dynamicLine' | 'bubble'
        color: "#3377FF",
        textColor: "#9FA3A8"
    });




    // 指定图表的配置项和数据
    var option = {
        title: {
            text: '商品价格走势',
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
            //top: '170',
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
                    //name: "SellerSprite-<?php echo htmlentities($station); ?>-<?php echo htmlentities($asinId); ?>-" + new Date().format("yyyyMMdd"),
                    name:'',
                    emphasis: {
                        iconStyle: {
                            borderColor: '#3377FF'
                        }
                    }
                }
            }
        },
        legend: {
            data:['Amazon','New','Used'],
            itemGap: 15,
        },
        grid: [{
            left: 50,
            right: 230,
        }, {
            left: 50,
            right: 230,
            top: '55%',
        }],
        color: ['#FFAE2D', '#5FB0FF', '#6EC952', '#909CF7', '#FF8C45', '#FB7A7A', '#62E3BE'],
        dataZoom: [
            {
                show: true,
                realtime: true,
                start: 50,
                end: 100,
                top:"92%",
            },
            {
                type: 'slider',
                realtime: true,
                start: 50,
                end: 100,
                top:"92%",
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
        xAxis: {
            type:'time',
            name:'时间',
            boundaryGap: false,
            data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: [{
            name:'Amazon',
            type: 'value',
            axisLine: {
                lineStyle: {
                    color: '#7B7E81'
                }
            },
            axisLabel: {
                color: '#7B7E81',
                formatter: '${value}'
            },
            inverse: false //起始点
        },{
            name:'New',
            type: 'value',
            axisLine: {
                lineStyle: {
                    color: '#7B7E81'
                }
            },
            axisLabel: {
                color: '#7B7E81',
                formatter: '${value}'
            },
            inverse: false //起始点
        },{
            name:'Used',
            type: 'value',
            offset:40,
            axisLine: {
                lineStyle: {
                    color: '#7B7E81'
                }
            },
            axisLabel: {
                color: '#7B7E81',
                formatter: '${value}'
            }
        }],
        series: [{
            name: 'Amazon',
            type: 'line',
            data: [],
            yAxisIndex:0,
            symbolSize: 1,
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
            name: 'New',
            type: 'line',
            data: [],
            yAxisIndex:1,
            symbolSize: 1,
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
            name: 'Used',
            type: 'line',
            data: [],
            yAxisIndex:2,
            symbolSize: 1,
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

    //rating、sales、reviews
    var srrOption = {
        title: {
            text: '销量、评论、评级历史走势',
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
        legend: {
            data:['Rating','Sales','Reviews'],
            itemGap: 15,
        },
        grid: [{
            left: 50,
            right: 230,
            //height: '36%'
        }, {
            left: 50,
            right: 230,
            top: '55%',
           // height: '36%'
        }],
        toolbox: {
            //top: '170',
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
                    //name: "SellerSprite-<?php echo htmlentities($station); ?>-<?php echo htmlentities($asinId); ?>-" + new Date().format("yyyyMMdd"),
                    name:'',
                    emphasis: {
                        iconStyle: {
                            borderColor: '#3377FF'
                        }
                    }
                }
            }
        },
        axisPointer: {
            link: {xAxisIndex: 'all'}
        },
        // dataZoom: [
        //     { type: 'slider', realtime: true, start: 0, end: 100 }
        // ],
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
            name:'Rating',
            type: 'value',
            splitLine: {
                show: false
            },
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
            name:'Sales',
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
            name:'Reviews',
            type: 'value',
            offset:50,
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
            name: 'Rating',
            type: 'line',
            data: [],
            yAxisIndex:0,
            symbolSize: 1,
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
            name: 'Sales',
            type: 'line',
            data: [],
            yAxisIndex:1,
            symbolSize: 1,
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
            name: 'Reviews',
            type: 'line',
            data: [],
            yAxisIndex:2,
            symbolSize: 1,
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

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);

    srrChart.setOption(srrOption);
    //用于使chart自适应高度和宽度
    window.onresize = function () {
        //重置容器高宽
        resizeWorldMapContainer();
        myChart.resize();
        srrChart.resize();
    };

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