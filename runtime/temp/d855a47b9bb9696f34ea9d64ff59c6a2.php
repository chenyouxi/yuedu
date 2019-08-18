<?php /*a:7:{s:77:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/Member/order.html";i:1563780743;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/header.html";i:1561604652;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/navbar.html";i:1564019336;s:85:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/member_menu.html";i:1563780742;s:85:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/common_page.html";i:1561713439;s:80:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/footer.html";i:1565144046;s:86:"/Users/chenyouxi/Desktop/WWW/91amz/application/website/view/./public/right-navbar.html";i:1563782741;}*/ ?>
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
            我的充值记录
        </div>
        <table class="table table-borderless withdrawal-record">
            <colgroup>
                <col width="3%">
                <col width="31%">
                <col width="10%">
                <col width="18%">
                <col width="18%">
                <col width="12%">
                <col width="8%">
            </colgroup>
            <thead>
            <tr id="thead" style="display:none;">
                <th class="align-left">ID</th>
                <th class="align-center">支付宝交易号</th>
                <th class="align-center">充值金额</th>
                <th class="align-center">付款时间</th>
                <th class="align-center">使用时间</th>
                <th class="align-center">备注</th>
                <th class="align-center">状态</th>
            </tr>
            </thead>
            <input type="hidden" name="pageindex" value="1" />
            <div class="empty text-center orderNone" style="display:none;">
                <div class="icon-sprite cart-icon"></div>
                <span>您暂时还没有充值记录！</span>
            </div>
            <tbody class="js-page-content">


            </tbody>
        </table>
    </div>
    <?php if($total_count > 0): ?><div id="pagination" class="page hide" >    <div class="page-wrap fr">        <div class="total">共<span id="totalcount"><?php echo htmlentities($total_count); ?></span>条</div>    </div>    <div class="page-num fr">        <?php if($page == 1): ?>        <span id="home_page"><a href="javascript:;" class="num prev disabled" data-go-page="1" title="首页" >首页</a></span>        <span id="pre_page"><a href="javascript:;" class="num prev disabled " title="上一页" >上一页</a></span>        <?php else: ?>        <span id="home_page"><a href=""  class="num prev" data-go-page="1" title="首页" >首页</a></span>        <span id="pre_page"><a href=""  class="num prev " title="上一页" >上一页</a></span>        <?php endif; ?>        <div id="page_list" style="float: left;">            <!-- 分页页码显示计算 -->            <!-- 总页数小于总页码时就都显示 -->            <?php if($page_count <= $page_num): $__FOR_START_1792959018__=1;$__FOR_END_1792959018__=$page_count+1;for($i=$__FOR_START_1792959018__;$i < $__FOR_END_1792959018__;$i+=1){ if($i == $page): ?>            <span class="num curr"><a href="javascript:;" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php else: ?>            <span class="num"><a href="" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php endif; } ?>            <!-- 当前页小于页码的页码的平均两面的值时显示 -->            <?php elseif($page <= ($page_num-1)/2): $__FOR_START_1481152649__=1;$__FOR_END_1481152649__=$page_num+1;for($i=$__FOR_START_1481152649__;$i < $__FOR_END_1481152649__;$i+=1){ if($i == $page): ?>            <span class="num curr"><a href="javascript:;" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php else: ?>            <span class="num"><a href="" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php endif; } ?>            <!-- 如果总页数等于当前页 或者 总页数小于当前页加上页码总数平均值显示 -->            <?php elseif($page_count == $page or $page_count <= $page+($page_num-1)/2): $__FOR_START_896613010__=$page_count-$page_num+1;$__FOR_END_896613010__=$page_count+1;for($i=$__FOR_START_896613010__;$i < $__FOR_END_896613010__;$i+=1){ if($i == $page): ?>            <span class="num curr"><a href="javascript:;" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php else: ?>            <span class="num"><a href="" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php endif; } ?>            <!-- 否则就正常显示 -->            <?php else: $__FOR_START_1880480086__=$page-($page_num-1)/2;$__FOR_END_1880480086__=$page+($page_num-1)/2+1;for($i=$__FOR_START_1880480086__;$i < $__FOR_END_1880480086__;$i+=1){ if($i == $page): ?>            <span class="num curr"><a href="javascript:;" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php else: ?>            <span class="num"><a href="" data-cur-page="<?php echo htmlentities($i); ?>"><?php echo htmlentities($i); ?></a></span>            <?php endif; } ?>            <?php endif; ?>        </div>        <?php if($page != $page_count): ?>        <span id="next_page"><a href="javascript:;" class="num next" title="暂无文章" >下一页</a></span>        <span id="last_page"><a href="javascript:;" class="num next" title="尾页" >尾页</a></span>        <?php else: ?>        <span id="next_page"><a href="javascript:;" class="num next disabled" title="下一页" >下一页</a></span>        <span id="last_page"><a href="javascript:;" class="num next disabled" title="尾页" >尾页</a></span>        <?php endif; ?>    </div></div><?php endif; ?><script>    function page_display(pagecount,pageindex){        if(pagecount==""||pagecount==0){            $("#pagination").hide();        }else{            $("#pagination").show();            var pagehtml='',                pag_end_html='',                page_start_html='';            var page_display_num = 5;  //总共显示的页的个数必须为奇数            //结束页数计算            var pageend = pagecount;            //开始页面计算            var pagestart = pageindex-(page_display_num-1)/2;            pagestart = (pageindex==pageend) ? pageend-page_display_num+1 : pagestart;            pagestart = (pageend-pageindex) <3 ? pageend-page_display_num+1 : pagestart;            pagestart = pagestart<1 ? 1 : pagestart;            for( var i=pagestart; i<=pageend; i++ ){                if(pageindex==i){                    if( pageindex>=1000 && pageindex<10000 ){                        pagehtml+='<span class="num curr width45" onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    } else if ( pageindex > 10000 ){                        pagehtml+='<span class="num curr width50" onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    } else {                        pagehtml+='<span class="num curr width35" onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    }                    var pre_page = (i==1) ? 1 : i-1;                    var next_page= ( i==pagecount ) ? pagecount : i+1;                    if(i==1){                        $('#home_page>a').addClass('disabled');                        $('#pre_page>a').addClass('disabled');                        $('#home_page').attr('onclick','');                        $('#pre_page').attr('onclick','');                    }else{                        $('#home_page').attr('onclick','GetDataList(1)');                        $('#pre_page').attr('onclick','GetDataList("'+pre_page+'")');                        $('#home_page>a').removeClass('disabled');                        $('#pre_page>a').removeClass('disabled');                    }                    if(i<pagecount){                        $('#next_page').attr('onclick','GetDataList("'+next_page+'")');                        $('#last_page').attr('onclick','GetDataList("'+pagecount+'")');                        $('#last_page>a').removeClass('disabled');                        $('#next_page>a').removeClass('disabled');                    }else{                        $('#next_page').attr('onclick','');                        $('#last_page').attr('onclick','');                        $('#last_page>a').addClass('disabled');                        $('#next_page>a').addClass('disabled');                    }                    /*省略点显示*/                    if( (pageend-page_display_num)>0 && i>(page_display_num/2+1) ){                        page_start_html='<span class="shenglue">...</span>';                    }                    if(pageend > page_display_num){                        pageend = page_display_num;                        if(( parseInt(pageindex) + parseInt((page_display_num-1)/2)) <= pagecount && i>parseInt(page_display_num/2+1) ){                            pageend = parseInt(pageindex) + parseInt((page_display_num-1)/2);                        }                        if(i<pagecount){                            pag_end_html = '<span class="shenglue">...</span>';                        }                        if( (parseInt(pagecount)-parseInt(pageindex)) <= ((page_display_num-1)/2) ){                            pageend = pagecount;                            pag_end_html = '';                        }                    }                } else {                    if( pageindex>=1000 && pageindex<10000 ){                        pagehtml+='<span class="num width45"  onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    } else if ( pageindex > 10000 ){                        pagehtml+='<span class="num width50"  onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    } else {                        pagehtml+='<span class="num width35"  onclick="GetDataList('+i+')"><a data-cur-page="'+i+'" >'+i+'</a></span>	';                    }                }            }            if(pagehtml==''){                $('#page_list').html('<span class="num curr"><a data-cur-page="1">1</a></span>');            }else{                $('#page_list').html(pagehtml);            }        }    }</script>

</div>

<script type="text/javascript">
    $(function(){
        GetDataList("<?php echo htmlentities($page); ?>");
    })

    function GetDataList(pageindex,isExport=0){

        var pageindex = pageindex==0 ? $('#pageindex').val() : pageindex;

        $("input[name='pageindex']").val(pageindex);


        $.ajax({
            type:"post",
            url:"/website/memberOrder",
            data:"page="+pageindex,
            dataType:'json',
            beforeSend:function(){
                $.loading();
            },
            success:function(data){
                $.loaded();

                if(data.status == 'success'){

                    var list = data.data.data,
                        page_count = data.data.page_count,
                        total_count = data.data.total_count;

                    if( list.length == 0 ){
                        $(".orderNone").show();
                        return false;
                    } else {
                        $(".js-page-content").html("");
                    }

                    for(var i=0;i<list.length;i++){

                        var listhtml='';

                        for(var i=0;i<list.length;i++){
                            var id = list[i].autoId,
                                tradeNo = list[i].tradeNo,
                                tradePrice = list[i].tradePrice,
                                addTime = list[i].addTime,
                                userTime = list[i].useTime,
                                remark = list[i].remark,
                                iStatus = list[i].iStatus;

                            if(i%2 == 0){
                                var bgcolor = 'bgcolor';

                            } else {
                                var bgcolor = '';
                            }
                            var id = i + 1;


                            listhtml += '<tr class="'+bgcolor+'" >'
                                + '<td class="align-center"><span class="span-keywords "> '+id+' </span></td>'
                                + '<td class="align-center"><div class="text-nowrap"><span>'+tradeNo+'</span></div></td>'
                                + '<td class="align-center"><div class="text-nowrap">¥'+tradePrice+'</div></td>'
                                + '<td class="align-center"><div class="text-nowrap">'+addTime+'</div></td>'
                                + '<td class="align-center"><div class="text-nowrap">'+userTime+'</div></td>'
                                + '<td class="align-center "><div>'+remark+'</div></td>'
                                + '<td class="align-center "><div>'+iStatus+'</div></td>'
                                + '</tr>';


                        }
                        $("#thead").show();
                        $(".js-page-content").html(listhtml);

                    }
                    var j = 1;
                    for(i =1 ;i<total_count.toString().length;i++){
                        var j = j+"0";
                    }

                    var searchCount = Math.floor(total_count/parseInt(j));
                    $("#searchCount").html(searchCount*j+"+");

                    $('#totalcount').text(total_count);//总条数
                    $('#pagecount').text(page_count);//总页数
                    $('#pageindex').val(pageindex);	//当前页数
                    page_display(page_count,pageindex);
                    $('#pagination').show();

                } else {
                    layer.msg(data.msg);

                }


            }
        });
    }

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
</body></html>