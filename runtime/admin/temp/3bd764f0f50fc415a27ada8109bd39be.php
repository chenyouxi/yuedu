<?php /*a:7:{s:60:"/Users/chenyouxi/Desktop/WWW/nyd/view/admin/index/index.html";i:1568374914;s:55:"/Users/chenyouxi/Desktop/WWW/nyd/view/admin/layout.html";i:1563411738;s:66:"/Users/chenyouxi/Desktop/WWW/nyd/view/admin/public/breadcrumb.html";i:1563411738;s:62:"/Users/chenyouxi/Desktop/WWW/nyd/view/admin/public/header.html";i:1568374975;s:66:"/Users/chenyouxi/Desktop/WWW/nyd/view/admin/index/webuploader.html";i:1563411738;s:60:"/Users/chenyouxi/Desktop/WWW/nyd/view/admin/public/left.html";i:1563411738;s:62:"/Users/chenyouxi/Desktop/WWW/nyd/view/admin/public/footer.html";i:1568374940;}*/ ?>
<?php if($pjax == true): if($breadCrumb): ?>
<section class="content-header">
    <h1>
        <?php echo htmlentities($breadCrumb['left']['0']); ?>
        <small><?php echo htmlentities($breadCrumb['left']['1']); ?></small>
    </h1>

    <!-- breadcrumb start -->
    <ol class="breadcrumb">
        <li><a href="<?php echo url('index/index'); ?>"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li>
            <a href="<?php echo url($breadCrumb['right']['url']); ?>"><?php echo htmlentities($breadCrumb['right']['title']); ?></a>
        </li>
    </ol>
    <!-- breadcrumb end -->
</section>
<?php endif; ?>
	<!--内容开始-->
<section class="content content_main">
    <!---->
    <div class="row boot-col-space15">
        <div class="col-sm-8 col-xs-12">
            <div class="row boot-col-space15">
                <!--快捷方式-->
                <div class="col-sm-6 col-xs-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-gift"></i>
                            <h3 class="box-title">快捷方式</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <a class="btn btn-app" href="<?php echo url('system/system'); ?>"><i class="fa fa-cogs"></i>系统设置</a><a
                                class="btn btn-app" href="<?php echo url('database/database'); ?>"><i class="fa fa-database"></i>数据备份</a><a
                                class="btn btn-app" href="<?php echo url('module/index'); ?>"><i
                                class="fa fa-th-list"></i>模型管理</a><a class="btn btn-app" href="<?php echo url('cate/index'); ?>"><i
                                class="fa fa-th"></i>栏目管理</a><a class="btn btn-app" href="<?php echo url('link/index'); ?>"><i
                                class="fa fa-link"></i>友情链接</a><a class="btn btn-app" href="<?php echo url('ad/index'); ?>"><i
                                class="fa fa-photo"></i>广告管理</a><a class="btn btn-app" href="<?php echo url('debris/index'); ?>"><i
                                class="fa fa-puzzle-piece"></i>碎片管理</a><a class="btn btn-app"
                                                                          href="<?php echo url('template/index'); ?>"><i
                                class="fa fa-code"></i>模板管理</a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!---->
                <div class="col-sm-6 col-xs-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-pie-chart"></i>
                            <h3 class="box-title">数据统计</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- ./col -->
                            <div class="col-sm-6 col-xs-6">
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3><?php echo htmlentities($message); ?></h3>
                                        <p>待处理留言</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-android-clipboard"></i>
                                    </div>
                                    <a href="<?php echo htmlentities($messageCatUrl); ?>" class="small-box-footer">更多信息 <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-sm-6 col-xs-6">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3><?php echo htmlentities($user); ?></h3>
                                        <p>一周用户注册</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="<?php echo url('users/index'); ?>" class="small-box-footer">更多信息 <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!--系统信息开始-->
                <div class="col-sm-12 col-xs-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-gear"></i>
                            <h3 class="box-title">系统信息</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-striped">
                                <tr>
                                    <td>网站域名</td>
                                    <td><?php echo htmlentities($config['url']); ?></td>
                                </tr>
                                <tr>
                                    <td>网站目录</td>
                                    <td><?php echo htmlentities($config['document_root']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器操作系统</td>
                                    <td><?php echo htmlentities($config['server_os']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器端口</td>
                                    <td><?php echo htmlentities($config['server_port']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器IP</td>
                                    <td><?php echo htmlentities($config['server_ip']); ?></td>
                                </tr>
                                <tr>
                                    <td>WEB运行环境</td>
                                    <td><?php echo htmlentities($config['server_soft']); ?></td>
                                </tr>
                                <tr>
                                    <td>MySQL数据库版本</td>
                                    <td><?php echo htmlentities($config['mysql_version']); ?></td>
                                </tr>
                                <tr>
                                    <td>运行PHP版本</td>
                                    <td><?php echo htmlentities($config['php_version']); ?></td>
                                </tr>
                                <tr>
                                    <td>最大上传限制</td>
                                    <td><?php echo htmlentities($config['max_upload_size']); ?></td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
            <!--系统信息结束-->
        </div>
        <div class="col-sm-4 col-xs-12">

            <!---->
            <div class="box box-default">
                <div class="box-header with-border">
                    <i class="fa fa-bookmark"></i>
                    <h3 class="box-title">作者</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>

                <!-- /.box-body -->
            </div>
            <!---->
        </div>
    </div>
    <!---->
</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!--内容结束-->



<?php else: ?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--渲染器-->
    <meta name="renderer" content="webkit">
    <!--优先使用最新版本的IE 和 Chrome 内核-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>nenyes 后台管理面板</title>
    <!-- 告诉浏览器该页面是自适应布局 -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Datetime Picker -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/bower_components/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Pace style -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/pace/pace.css">
    <!-- jQuery 3 -->
    <script src="/static/plugins/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- webuploader -->
    <link rel="stylesheet" type="text/css" href="/static/plugins/webuploader-0.1.5/webuploader.css">
    <script src="/static/plugins/webuploader-0.1.5/webuploader.js"></script>
    <script type="text/javascript">
    //封装下上传组件
    function webupload(list, filePicker_image, image_preview, image, more, upload_allowext) {
        if (upload_allowext) {
            upload_allowext = upload_allowext.replace('|', ',');
        }
        var $list = $("#" + list + "");   //这几个初始化全局的百度文档上没说明，好蛋疼
        var uploader = WebUploader.create({
            auto: true,// 选完文件后，是否自动上传。
            swf: '/static/plugins/webuploader-0.1.5/uploader.swf', //加载swf文件，路径一定要对
            server: '<?php echo url("index/upload"); ?>',// 文件接收服务端
            pick: '#' + filePicker_image,// 选择文件的按钮。可选。
            resize: false,//不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
            compress: false,
            fileSingleSizeLimit: 200 * 1024 * 1024,//限制大小200M，单文件
            //fileSizeLimit: allMaxSize*1024*1024,//限制大小10M，所有被选文件，超出选择不上
            accept: {
                title: '上传图片/文件',
                extensions: upload_allowext,//'gif,jpg,jpeg,bmp,png', //格式由字段控制
                mimeTypes: '*',//默认全部文件，为兼容上传文件功能，如只上传图片可写成img/*
            }
        });

        // 文件上传过程中创建进度条实时显示。
        uploader.on('uploadProgress', function (file, percentage) {
            var $li = $list,
                    $percent = $li.find('.progress .progress-bar');
            // 避免重复创建
            if (!$percent.length) {
                $percent = $('<div class="progress progress-striped active">' +
                        '<div class="progress-bar" role="progressbar" style="width: 0%">' +
                        '</div>' +
                        '</div>').appendTo($li).find('.progress-bar');
            }
            //$li.find('p.state').text('上传中');
            $percent.css('width', percentage * 100 + '%');
        });
        uploader.on('uploadSuccess', function (file, response) {
            var url = response._raw;
            if (more == true) {
                var images = '<div class="row"><div class="col-xs-6"><input type="text" name="' + image + '[]" value="' + url + '" class="form-control"/></div> <div class="col-xs-3"><input class="form-control input-sm" type="text" name="' + image + '_title[]" value="' + file.name + '" ></div> <div class="col-xs-3"><button type="button" class="btn btn-block btn-warning remove_images">移除</button></div></div>';
                var images_list = $('#more_images_' + image).html();

                $('#more_images_' + image).html(images + images_list);

            } else {
                $("input[name='" + image + "']").val(url);
                $("#" + image_preview).attr('src', url);
            }
        });
        uploader.on('uploadComplete', function (file) {
            $list.find('.progress').fadeOut();
        });
        //错误提示
        uploader.on("error", function (type) {
            if (type == "Q_TYPE_DENIED") {
                sweetAlert(
                        '',
                        '请上传' + upload_allowext + '格式文件！',
                        'error'
                )
            } else if (type == "F_EXCEED_SIZE") {
                sweetAlert(
                        '',
                        '单个文件大小不能超过200M！',
                        'error'
                )
            } else if (type == "F_DUPLICATE") {
                sweetAlert(
                        '',
                        '请不要重复选择文件！',
                        'error'
                )
            } else {
                sweetAlert(
                        '',
                        '上传出错！请检查后重新上传！错误代码' + type,
                        'error'
                )
            }
        });
    }
</script>
    <!-- ckeditor4 -->
    <script src="/static/plugins/ckeditor/ckeditor.js"></script>
    <!-- sweetalert -->
    <link rel="stylesheet" href="/static/plugins/sweetalert/dist/sweetalert2.min.css">
    <script src="/static/plugins/sweetalert/dist/sweetalert2.min.js"></script>
    <script src="/static/plugins/sweetalert/lib/es6-promise.min.js"></script>
    <!-- jQueryTagsInput -->
    <script src="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.js"></script>
    <link rel="stylesheet" href="/static/plugins/AdminLTE/plugins/jQueryTagsInput/jquery.tagsinput.css">
    <!-- nenyes -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/dist/css/siyucms.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- 警告：Respond.js 不支持 file:// 方式查看（即本地方式查看）-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">-->
</head>
<!--
BODY TAG OPTIONS:
=================
应用以下一个或多个类以达到你想要的效果
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo url('Index/index'); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>nenyes</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>nenyes</b> CMS</span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- 切换边栏-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" title="切换边栏">
                <span class="sr-only">切换边栏</span>
            </a>
            <a href="javascript:;" class="sidebar-toggle fullscreen" title="全屏模式">
                <i class="glyphicon glyphicon-fullscreen"></i>
            </a>
            <!-- Navbar Left Menu -->
            <ul class="nav navbar-nav js_left_menu">
                <li class="active">
                    <a href="javascript:;">
                        <i class="fa  fa-gear"></i>
                        <span>主导航</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-th-large"></i>
                        <span>内容管理</span>
                    </a>
                </li>
            </ul>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="<?php echo session('admin.image') ? session('admin.image') : '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="user-image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"><?php echo session('admin.nickname') ? session('admin.nickname') : session('admin.username'); ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php echo session('admin.image') ? session('admin.image') : '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle">

                                <h5>
                                    上次登录时间：<?php echo session('admin.logintime'); ?>
                                </h5>
                                <h5>
                                    上次登录IP：<?php echo session('admin.loginip'); ?>
                                </h5>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo url('auth/adminedit',['id'=>session('admin.id')]); ?>" class="btn btn-default btn-flat">资料</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo url('Login/logout'); ?>" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="js_clear_cash" href="javascript:;" target="right" title="清空缓存">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/" target="_blank" title="访问系统前台">
                            <i class="glyphicon glyphicon-home"></i>
                        </a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <script>
        //主导航、内容管理切换
        $(".js_left_menu li").click(function () {
            //通过 .index()方法获取元素下标，从0开始，赋值给某个变量
            var _index = $(this).index();
            //让左侧菜单第 _index 个显示出来，其他的被隐藏
            $(".js_left_menu_show").eq(_index).show().siblings('.js_left_menu_show').hide();
            //当前菜单添加选中效果,同级的移除。
            $(this).addClass('active').siblings('li').removeClass('active');
        })

        //清空缓存
        $(".js_clear_cash").click(function () {
            var url = "<?php echo url('index/clear'); ?>";
            swal({
                title: '确定要清除缓存吗?',
                text: "该操作无法撤回！",
                type: 'warning',
                showCancelButton: false,
                confirmButtonText: '确定',
                cancelButtonText: '取消'
            }).then(function (isConfirm) {
                if (isConfirm) {
                    $.post(url, {
                        del: true
                    }, function (result) {
                        if (result.error == 0) {
                            swal(result.msg, '', 'success').then(function () {
                                //window.location.reload(); //传统重载
                                $.pjax.reload('.content-wrapper'); //pjax 重载
                            });
                        } else {
                            swal(result.msg, '', 'error');
                        }
                    });
                }
            })
        })

    </script>

    <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo session('admin.image') ? session('admin.image') : '/static/plugins/AdminLTE/dist/img/user2-160x160.jpg'; ?>" class="img-circle" >
            </div>
            <div class="pull-left info">
                <p><?php echo session('admin.nickname') ? session('admin.nickname') : session('admin.username'); ?></p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> 在线</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="" method="get" class="sidebar-form" onsubmit="return false;">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." autocomplete="off">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat" onclick="search_menu()"><i class="fa fa-search"></i></button>
                </span>
                <div class="menuresult list-group sidebar-form hide">
                </div>
            </div>
        </form>
        <!-- /.search form -->

        <!-- 主导航 -->
        <ul class="sidebar-menu js_left_menu_show" data-widget="tree">
            <li class="header">主导航</li>
            <!-- Optionally, you can add icons to the links -->
            <?php if(is_array($menus) || $menus instanceof \think\Collection || $menus instanceof \think\Paginator): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="treeview">
                <a href="#">
                    <i class="<?php echo htmlentities($vo['icon']); ?>"></i>
                    <span><?php echo htmlentities($vo['title']); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php if(is_array($vo['children']) || $vo['children'] instanceof \think\Collection || $vo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="<?php echo htmlentities($voo['href']); ?>">
                            <i class="<?php echo !empty($voo['icon']) ? htmlentities($voo['icon']) : 'fa fa-circle-o'; ?>"></i>
                            <span><?php echo htmlentities($voo['title']); ?></span>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- 主导航 -->

        <!-- 内容管理 -->
        <ul class="sidebar-menu js_left_menu_show" data-widget="tree" style="display: none">
            <li class="header">内容管理</li>
            <!-- Optionally, you can add icons to the links -->
            <?php if(is_array($cates) || $cates instanceof \think\Collection || $cates instanceof \think\Paginator): $i = 0; $__LIST__ = $cates;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(count($vo['sub'])): ?>
            <li class="treeview">
                <a href="<?php echo url($vo['moduleurl'].'/index',['cate'=>$vo['id']]); ?>">
                    <i class="fa fa-bars"></i>
                    <span><?php echo htmlentities($vo['catname']); ?></span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection || $vo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voo): $mod = ($i % 2 );++$i;if(count($voo['sub'])): ?>
                    <li class="treeview">
                        <a href="<?php echo url($voo['moduleurl'].'/index',['cate'=>$voo['id']]); ?>">
                            <i class="fa fa-circle-o"></i>
                            <span><?php echo htmlentities($voo['catname']); ?></span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php if(is_array($voo['sub']) || $voo['sub'] instanceof \think\Collection || $voo['sub'] instanceof \think\Paginator): $i = 0; $__LIST__ = $voo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vooo): $mod = ($i % 2 );++$i;?>
                            <li>
                                <a href="<?php echo url($vooo['moduleurl'].'/index',['cate'=>$vooo['id']]); ?>">
                                    <i class="fa fa-circle-o"></i>
                                    <span><?php echo htmlentities($vooo['catname']); ?></span>
                                </a>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </li>
                    <?php else: ?>
                    <li>
                        <a href="<?php echo url($voo['moduleurl'].'/index',['cate'=>$voo['id']]); ?>">
                            <i class="fa fa-circle-o"></i>
                            <span><?php echo htmlentities($voo['catname']); ?></span>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li>
            <?php else: ?>
            <li>
                <a href="<?php echo url($vo['moduleurl'].'/index',['cate'=>$vo['id']]); ?>">
                    <i class="fa fa-bars"></i>
                    <span><?php echo htmlentities($vo['catname']); ?></span>
                </a>
            </li>
            <?php endif; ?>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
        <!-- 内容管理 -->

    </section>
    <!-- /.sidebar -->
</aside>


<script>
    //左侧菜单 高亮+记忆
    $(function(){
        //高亮
        $('.sidebar-menu li:not(.treeview) > a').on('click', function(){
            var $parent = $(this).parent().addClass('active');
            $parent.siblings('.treeview.active').find('> a').trigger('click');
            $parent.siblings().removeClass('active').find('li').removeClass('active');

            //小屏幕上点击左边菜单栏按钮，模拟点击 xs: 480,sm: 768,md: 992,lg: 1200
            if ($(window).width() < 992){
                //触发左边菜单栏按钮点击事件,关闭菜单栏
                $("[data-toggle='push-menu']").trigger('click');
            }


        });

        //刷新后匹配当前URL（刷新的情况并不完美，比如添加、修改、分页之类无法匹配到,后续已进行改进，变为通过标题来匹配）
        $(window).on('load', function(){
            //获取当前页面面包导航标题
            var _title = $(".content-header").children("h1").clone();
            _title.find(':nth-child(n)').remove();
            _title = _title.html().trim();
            //循环匹配
            $('.sidebar-menu a').each(function(){
                //if(this.href === window.location.href){
                if(this.href !== '#' && $(this).children('span').html() == _title){
                    //打开对应菜单
                    $(this).parent().addClass('active')
                            .closest('.treeview-menu').addClass('menu-open')  //打开二级ul
                            .closest('.treeview').addClass('active menu-open'); //打开一级li
                    //打开对应 .sidebar-menu
                    //判断当前所属的是第几个
                    var index = $(".js_left_menu_show").index($(this).closest('.sidebar-menu'));
                    //执行点击动作
                    $(".js_left_menu li").eq(index).click();
                }
            });
        });

    });

    $(function() {
        //菜单搜索
        //设置默认宽度
        $(".menuresult").width($("form.sidebar-form > .input-group").width()-1);
        //搜索展示框
        var searchResult = $(".menuresult");
        $("form.sidebar-form").on("blur", "input[name=q]", function() {
            //表单失去焦点后隐藏展示框
            setTimeout(function() {
                searchResult.addClass("hide");
            }, 300);

        }).on("focus", "input[name=q]", function() {
            //获取焦点时,当有元素则取消隐藏
            if (searchResult.children('a').length > 0) {
                searchResult.removeClass("hide");
            }
        }).on("keyup", "input[name=q]", function() {
            //按下按键时触发以下内容
            searchResult.html(''); //设置内容为空
            var val = $(this).val();
            var html = [];
            if (val != '') {
                //循环菜单进行遍历(:visible 匹配所有可见元素，:hidden选择器用于匹配所有不可见的元素，防止匹配到另一个菜单)
                $("ul.sidebar-menu:visible li a:not([href^='#'])").each(function() {
                    //进行汉字比较
                    if ($("span:first", this).text().indexOf(val) > -1) {
                        //写入搜搜展示框
                        html.push('<a href="' + $(this).attr("href") + '" >' + $("span:first", this).text() + '</a>');
                        //超出最大值则退出,防止页面崩溃
                        if (html.length >= 100) {
                            return false;
                        }
                    }
                });
            }
            $(searchResult).append(html.join(""));
            if (html.length > 0) {
                searchResult.removeClass("hide");
            } else {
                searchResult.addClass("hide");
            }
        });
        //快捷搜索点击事件
        //$("form.sidebar-form").on('mousedown click', '.menuresult a[data-url]', function() {});


    })

    /**
     * 本地搜索菜单
     */
    function search_menu() {
        //要搜索的值
        var text = $('input[name=q]').val();
        var $ul = $('.sidebar-menu');
        //取消空搜索
        if(text == ''){
            return false;
        }
        $ul.find("a:not([href^='#'])").each(function () {
            var $a = $(this).css("border","");
            //判断是否含有要搜索的字符串
            if ($("span:first", this).text().indexOf(text) > -1) {
                //如果a标签的父级是隐藏的就展开
                $ul = $a.parents("ul");
                if ($ul.is(":hidden")) {
                    $a.parents("ul").prev().click();
                }
                //点击该菜单并设置边框
                //$a.click().css("border","1px solid");
                //点击该菜单
                $a.click();
                //return false;
            }
        });
    }

</script>

    <div class="content-wrapper">
    	<?php if($breadCrumb): ?>
<section class="content-header">
    <h1>
        <?php echo htmlentities($breadCrumb['left']['0']); ?>
        <small><?php echo htmlentities($breadCrumb['left']['1']); ?></small>
    </h1>

    <!-- breadcrumb start -->
    <ol class="breadcrumb">
        <li><a href="<?php echo url('index/index'); ?>"><i class="fa fa-dashboard"></i> 首页</a></li>
        <li>
            <a href="<?php echo url($breadCrumb['right']['url']); ?>"><?php echo htmlentities($breadCrumb['right']['title']); ?></a>
        </li>
    </ol>
    <!-- breadcrumb end -->
</section>
<?php endif; ?>
        <!--内容开始-->
<section class="content content_main">
    <!---->
    <div class="row boot-col-space15">
        <div class="col-sm-8 col-xs-12">
            <div class="row boot-col-space15">
                <!--快捷方式-->
                <div class="col-sm-6 col-xs-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-gift"></i>
                            <h3 class="box-title">快捷方式</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <a class="btn btn-app" href="<?php echo url('system/system'); ?>"><i class="fa fa-cogs"></i>系统设置</a><a
                                class="btn btn-app" href="<?php echo url('database/database'); ?>"><i class="fa fa-database"></i>数据备份</a><a
                                class="btn btn-app" href="<?php echo url('module/index'); ?>"><i
                                class="fa fa-th-list"></i>模型管理</a><a class="btn btn-app" href="<?php echo url('cate/index'); ?>"><i
                                class="fa fa-th"></i>栏目管理</a><a class="btn btn-app" href="<?php echo url('link/index'); ?>"><i
                                class="fa fa-link"></i>友情链接</a><a class="btn btn-app" href="<?php echo url('ad/index'); ?>"><i
                                class="fa fa-photo"></i>广告管理</a><a class="btn btn-app" href="<?php echo url('debris/index'); ?>"><i
                                class="fa fa-puzzle-piece"></i>碎片管理</a><a class="btn btn-app"
                                                                          href="<?php echo url('template/index'); ?>"><i
                                class="fa fa-code"></i>模板管理</a>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!---->
                <div class="col-sm-6 col-xs-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-pie-chart"></i>
                            <h3 class="box-title">数据统计</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <!-- ./col -->
                            <div class="col-sm-6 col-xs-6">
                                <div class="small-box bg-green">
                                    <div class="inner">
                                        <h3><?php echo htmlentities($message); ?></h3>
                                        <p>待处理留言</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-android-clipboard"></i>
                                    </div>
                                    <a href="<?php echo htmlentities($messageCatUrl); ?>" class="small-box-footer">更多信息 <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-sm-6 col-xs-6">
                                <div class="small-box bg-yellow">
                                    <div class="inner">
                                        <h3><?php echo htmlentities($user); ?></h3>
                                        <p>一周用户注册</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                    <a href="<?php echo url('users/index'); ?>" class="small-box-footer">更多信息 <i
                                            class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
                <!--系统信息开始-->
                <div class="col-sm-12 col-xs-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <i class="fa fa-gear"></i>
                            <h3 class="box-title">系统信息</h3>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                        class="fa fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-striped">
                                <tr>
                                    <td>网站域名</td>
                                    <td><?php echo htmlentities($config['url']); ?></td>
                                </tr>
                                <tr>
                                    <td>网站目录</td>
                                    <td><?php echo htmlentities($config['document_root']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器操作系统</td>
                                    <td><?php echo htmlentities($config['server_os']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器端口</td>
                                    <td><?php echo htmlentities($config['server_port']); ?></td>
                                </tr>
                                <tr>
                                    <td>服务器IP</td>
                                    <td><?php echo htmlentities($config['server_ip']); ?></td>
                                </tr>
                                <tr>
                                    <td>WEB运行环境</td>
                                    <td><?php echo htmlentities($config['server_soft']); ?></td>
                                </tr>
                                <tr>
                                    <td>MySQL数据库版本</td>
                                    <td><?php echo htmlentities($config['mysql_version']); ?></td>
                                </tr>
                                <tr>
                                    <td>运行PHP版本</td>
                                    <td><?php echo htmlentities($config['php_version']); ?></td>
                                </tr>
                                <tr>
                                    <td>最大上传限制</td>
                                    <td><?php echo htmlentities($config['max_upload_size']); ?></td>
                                </tr>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>
            <!--系统信息结束-->
        </div>
        <div class="col-sm-4 col-xs-12">

            <!---->
            <div class="box box-default">
                <div class="box-header with-border">
                    <i class="fa fa-bookmark"></i>
                    <h3 class="box-title">作者</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>

                <!-- /.box-body -->
            </div>
            <!---->
        </div>
    </div>
    <!---->
</section>
<!-- right col -->
</div>
<!-- /.row (main row) -->

</section>
<!--内容结束-->



    </div>
        <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">首页</h3>
            </div>
            <!-- /.tab-pane -->
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<button id="totop" title="返回顶部" style="display: none;"><i class="fa fa-chevron-up"></i></button>

<!-- Bootstrap 3.3.7 -->
<script src="/static/plugins/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- daterangepicker -->
<script src="/static/plugins/AdminLTE/bower_components/moment/min/moment.min.js"></script>
<script src="/static/plugins/AdminLTE/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/static/plugins/AdminLTE/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="/static/plugins/AdminLTE/bower_components/bootstrap-datepicker/js/locales/bootstrap-datepicker.zh-CN.js"></script>
<!-- datetimepicker -->
<script src="/static/plugins/AdminLTE/bower_components/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<!-- Slimscroll -->
<script src="/static/plugins/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/static/plugins/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/static/plugins/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/static/plugins/AdminLTE/dist/js/demo.js"></script>
<!-- pjax -->
<script src="/static/plugins/AdminLTE/plugins/pjax/jquery.pjax.js"></script>
<script type="text/javascript">
    $(function () {
        //a 链接
        $(document).pjax('a[target!=_blank]', '.content-wrapper');
        //form 表单
        $(document).on('submit', 'form[data-pjax]', function(event) {
            $.pjax.submit(event, '.content-wrapper');
        });
        //重新加载
        //$.pjax.reload('.content-wrapper');
    })
</script>
<!-- PACE -->
<script src="/static/plugins/AdminLTE/bower_components/PACE/pace.min.js"></script>
<!-- jQueryForm -->
<script src="/static/plugins/AdminLTE/plugins/jQueryForm/jquery.form.js"></script>
<!-- nenyes -->
<script src="/static/plugins/AdminLTE/siyucms.js"></script>

</body>
</html>
<?php endif; ?>



