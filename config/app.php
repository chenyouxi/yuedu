<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Controller;
// +----------------------------------------------------------------------
// | 应用设置
// +----------------------------------------------------------------------
$root = Env::get('root_path');

define("__ROOT__", $root);
define("__PUBLIC__", $root."public/");

return [

    // +----------------------------------------------------------------------
    // | 微信支付配置
    // +----------------------------------------------------------------------
    'wxpay' => [
        'AppID'                 => '',
        'AppSecret'             => '',
        'mch_id'                => '',                        // 商户号
        'key'                   => '',  // 证书密钥
        'domain'                => '',         // 微信支付回调通知访问域名
        'order_notify_path'     => '',             // 微信支付回调通知访问路径(商城订单支付成功)
        'recharge_notify_path'  => '',     // 微信支付回调通知访问路径(充值余额支付成功)
        'buyVIP_notify_path'    => '',   // 微信支付回调通知访问路径(购买会员 支付成功)
    ],
    // +----------------------------------------------------------------------
    // | app微信登陆
    // +----------------------------------------------------------------------
    'appWxlogin' => [
        'AppID'                 => '',
        'AppSecret'             => '',
    ],


    // +----------------------------------------------------------------------
    // | 系统消息设置
    // +----------------------------------------------------------------------

    'system_news' => [
        'recharge'  => '会员卡微信充值于 {time} 充值成功，金额为 {amount} 元，请注意查收！',
        'level'     => '恭喜您的店铺等级身份成为 {level}！',
        'order'     => '亲，您于 {time} 微信支付成功，支付 {amount} 元。',
        'owner_order' => '亲，您于 {time} 获得佣金 {amount} 元。',
        'withdraw'  => '您于 {time} 成功提现 {amount} 元。',
    ],

    // +----------------------------------------------------------------------
    // | 七牛云设置
    // +----------------------------------------------------------------------


    'qiniu' => [
        'access_key'    => '',
        'secret_key'    => '',
        'bucket_name'   => '',
        'bucket_domain' => '',
    ],

    // +----------------------------------------------------------------------
    // | 返回状态码设置
    // +----------------------------------------------------------------------

    'http_status' => [
        'version' => 'HTTP/1.1',
        'code' => [
            200 => 'OK',
            401 => 'Unauthorized',
            403 => 'Forbidden',
            404 => 'Not Found',
            500 => 'Internal Server Error',
            402 => 'Authentication error'
        ]
    ],

    // +----------------------------------------------------------------------
    // | 应用设置
    // +----------------------------------------------------------------------

    // 应用名称
    'app_name'               => '',
    // 应用地址
    'app_host'               => '',
    // 应用调试模式
    'app_debug'              => true,
    // 应用Trace
    'app_trace'              => false,
    // 是否支持多模块
    'app_multi_module'       => true,
    // 入口自动绑定模块
    'auto_bind_module'       => false,
    // 注册的根命名空间
    'root_namespace'         => [],
    // 默认输出类型
    'default_return_type'    => 'html',
    // 默认AJAX 数据返回格式,可选json xml ...
    'default_ajax_return'    => 'json',
    // 默认JSONP格式返回的处理方法
    'default_jsonp_handler'  => 'jsonpReturn',
    // 默认JSONP处理方法
    'var_jsonp_handler'      => 'callback',
    // 默认时区
    'default_timezone'       => 'Asia/Shanghai',
    // 是否开启多语言
    'lang_switch_on'         => false,
    // 默认全局过滤方法 用逗号分隔多个
    'default_filter'         => '',
    // 默认语言
    'default_lang'           => 'zh-cn',
    // 应用类库后缀
    'class_suffix'           => false,
    // 控制器类后缀
    'controller_suffix'      => false,

    // +----------------------------------------------------------------------
    // | 模块设置
    // +----------------------------------------------------------------------

    // 默认模块名
    'default_module'         => 'website',
    // 禁止访问模块
    'deny_module_list'       => ['common'],
    // 默认控制器名
    'default_controller'     => 'Index',
    // 默认操作名
    'default_action'         => 'Index',
    // 默认验证器
    'default_validate'       => '',
    // 默认的空模块名
    'empty_module'           => '',
    // 默认的空控制器名
    'empty_controller'       => 'Error',
    // 操作方法前缀
    'use_action_prefix'      => false,
    // 操作方法后缀
    'action_suffix'          => '',
    // 自动搜索控制器
    'controller_auto_search' => false,

    // +----------------------------------------------------------------------
    // | URL设置
    // +----------------------------------------------------------------------

    // PATHINFO变量名 用于兼容模式
    'var_pathinfo'           => 's',
    // 兼容PATH_INFO获取
    'pathinfo_fetch'         => ['ORIG_PATH_INFO', 'REDIRECT_PATH_INFO', 'REDIRECT_URL'],
    // pathinfo分隔符
    'pathinfo_depr'          => '/',
    // HTTPS代理标识
    'https_agent_name'       => '',
    // IP代理获取标识
    'http_agent_ip'          => 'X-REAL-IP',
    // URL伪静态后缀
    'url_html_suffix'        => 'html',
    // URL普通方式参数 用于自动生成
    'url_common_param'       => false,
    // URL参数方式 0 按名称成对解析 1 按顺序解析
    'url_param_type'         => 0,
    // 是否开启路由延迟解析
    'url_lazy_route'         => false,
    // 是否强制使用路由
    'url_route_must'         => false,
    // 合并路由规则
    'route_rule_merge'       => false,
    // 路由是否完全匹配
    'route_complete_match'   => false,
    // 使用注解路由
    'route_annotation'       => false,
    // 域名根，如thinkphp.cn
    'url_domain_root'        => '',
    // 是否自动转换URL中的控制器和操作名
    'url_convert'            => true,
    // 默认的访问控制器层
    'url_controller_layer'   => 'controller',
    // 表单请求类型伪装变量
    'var_method'             => '_method',
    // 表单ajax伪装变量
    'var_ajax'               => '_ajax',
    // 表单pjax伪装变量
    'var_pjax'               => '_pjax',
    // 是否开启请求缓存 true自动缓存 支持设置请求缓存规则
    'request_cache'          => false,
    // 请求缓存有效期
    'request_cache_expire'   => null,
    // 全局请求缓存排除规则
    'request_cache_except'   => [],
    // 是否开启路由缓存
    'route_check_cache'      => false,
    // 路由缓存的Key自定义设置（闭包），默认为当前URL和请求类型的md5
    'route_check_cache_key'  => '',

    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl'  => Env::get('think_path') . 'tpl/dispatch_jump.tpl',
    'dispatch_error_tmpl'    => Env::get('think_path') . 'tpl/dispatch_jump.tpl',

    // 异常页面的模板文件
    'exception_tmpl'         => Env::get('think_path') . 'tpl/think_exception.tpl',

    // 错误显示信息,非调试模式有效
    'error_message'          => '页面错误！请稍后再试～',
    // 显示错误信息
    'show_error_msg'         => false,
    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle'       => '',

    'save_path' => 'public/static/uploads/',

    'path_one'  => 'http://'.(isset($_SERVER['SERVER_NAME'])?$_SERVER['SERVER_NAME']:'域名').'/static/upload',

    'view_replace_str' => [
            '__STATIC__' =>__PUBLIC__.'/static',
            '__CSS__' =>__PUBLIC__.'/static/css',
            '__JS__' =>__PUBLIC__.'/static/js',
            '__IMG__' =>__PUBLIC__.'/static/images',
            '__FONT__' =>__PUBLIC__.'/static/fonts',
            '__BS__' =>__PUBLIC__.'/static/bootstrap',
            '__FA__' =>__PUBLIC__.'/static/font-awesome',
            '__FB__' =>__PUBLIC__.'/static/foncybox',
            '__UPLOAD__' => __PUBLIC__.'/uploads'
        ],
    // 验证码排至文件
    'captcha' => [
        // 验证码字符集合
        'codeSet' => '0123456789',
        // 验证码字体大小(px)
        'fontSize' => 15,

        // 是否画混淆曲线
        'useCurve' => false,

        // 是否添加杂点
        'useNoise' => false,

        // 验证码图片高度
        'imageH' => 30,
        // 验证码图片宽度
        'imageW' => 100,
        // 验证码位数
        'length' => 4,
        // 验证成功后是否重置
        'reset' => true
    ],

    'integralType' => [
        '0' => '充值',	//充值
        '1' => '赠送',	//平台赠送或者活动
        '2' => '续费',	//续费或升级
        '3'=> '抽奖活动',
        '4'=> '特别处理',	//操作恢复或者明细记录删除
        '5' => '筛选店铺消费积分',	//回收题分，或者扣除！
        '6' => '查看店铺信息消费积分',
        '7' => '查看产品详情消费积分',
		'8' => '扣除',
        '9' => '查看店铺产品列表消费积分',

    ],

    
    'countryConfig' => [
        'us' => array(
            'cityName' => '美国',
            'webUrl' => 'amazon.com',
            'support' => '支持',
            'countryName' => 'U.S.A',
            'currency' => "$",	//货币符号
            'keepaIndex' => 1,		//历史价格网站https://keepa.com/#!product/国家编号-B0064N2S34
            'goodsUnit' => 0,	//对应货币符号，参考 unitConfig.php
            'symbol' => "#",		//类目BSR排名符号
            'label' => "danger",
            'color' =>"red",
            'marketplaceID'=>"ATVPDKIKX0DER",
            'longtail'=>1,	//是否支持长尾关键词挖掘
            'longtail_suffix'=>"com",
            'month'=>array(
                1=>"Jan",
                2=>"Feb",
                3=>"Mar",
                4=>"Apr",
                5=>"May",
                6=>"June",
                7=>"July",
                8=>"Aug",
                9=>"Sept",
                10=>"Oct",
                11=>"Nov",
                12=>"Dec"
            )
        ),
        'ca' => array(
            'cityName' => '加拿大',
            'webUrl' => 'amazon.ca',
            'support' => '支持',
            'countryName' => 'Canada',
            'currency' => "CDN$",
            'keepaIndex' => 6,
            'goodsUnit' => 4,
            'symbol' => "#",
            'label' => "primary",
            'color' =>"blue",
            'marketplaceID'=>"A2EUQ1WTGCTBG2",
            'longtail'=>1,
            'longtail_suffix'=>"ca",
        ),
        'fr' => array(
            'cityName' => '法国',
            'webUrl' => 'amazon.fr',
            'support' => '支持',
            'countryName' => 'France',
            'currency' => "€",
            'keepaIndex' => 4,
            'goodsUnit' => 1,
            'symbol' => "n°",
            'label' => "warning",
            'color' =>"orange",
            'marketplaceID'=>"A13V1IB3VIYZZH",
            'longtail'=>1,
            'longtail_suffix'=>"fr",
            'month'=>array(
                1=>"janv",
                2=>"Févr",
                3=>"mars",
                4=>"avr",
                5=>"mai",
                6=>"juin",
                7=>"juil",
                8=>"août",
                9=>"sept",
                10=>"oct",
                11=>"nov",
                12=>"déc"
            )
        ),
        'uk' => array(
            'cityName' => '英国',
            'webUrl' => 'amazon.co.uk',
            'support' => '支持',
            'countryName' => 'England',
            'currency' => "£",
            'keepaIndex' => 2,
            'goodsUnit' => 2,
            'symbol' => "#",
            'label' => "secondary",
            'color' =>"primary",
            'marketplaceID'=>"A1F83G8C2ARO7P",
            'longtail'=>1,
            'longtail_suffix'=>"co.uk",
        ),
        'de' => array(
            'cityName' => '德国',
            'webUrl' => 'amazon.de',
            'support' => '支持',
            'countryName' => 'Germany',
            'currency' => "€",
            'keepaIndex' => 3,
            'goodsUnit' => 1,
            'symbol' => "Nr.",
            'label' => "success",
            'color' =>"green",
            'marketplaceID'=>"A1PA6795UKMFR9",
            'longtail'=>1,
            'longtail_suffix'=>"de",
        ),
        'es' => array(
            'cityName' => '西班牙',
            'webUrl' => 'amazon.es',
            'support' => '支持',
            'countryName' => 'Spain',
            'currency' => "€",
            'keepaIndex' => 9,
            'goodsUnit' => 1,
            'symbol' => "n.°",
            'label' => "default",
            'color' =>"danger",
            'marketplaceID'=>"A1RKKUPIHCS9HS",
            'longtail'=>1,
            'longtail_suffix'=>"es",
        ),
        'it' => array(
            'cityName' => '意大利',
            'webUrl' => 'amazon.it',
            'support' => '支持',
            'countryName' => 'Italy',
            'currency' => "€",
            'keepaIndex' => 8,
            'goodsUnit' => 1,
            'symbol' => "n.",
            'label' => "danger",
            'color' =>"warning",
            'marketplaceID'=>"APJ6JRA9NG5V4",
            'longtail'=>1,
            'longtail_suffix'=>"it",
        ),
        'jp' => array(
            'cityName' => '日本',
            'webUrl' => 'amazon.co.jp',
            'support' => '支持',
            'countryName' => 'Japan',
            'currency' => "JPY￥",
            'keepaIndex' => 5,
            'goodsUnit' => 5,
            'symbol' => "OK",
            'label' => "primary",
            'color' =>"secondary",
            'marketplaceID'=>"A1VC38T7YXB528",
            'longtail'=>-1,
            'longtail_suffix'=>"co.jp",
        ),
//        'au' => array(
//            'cityName' => '澳大利亚',
//            'webUrl' => 'amazon.com.au',
//            'support' => '暂不支持',
//            'countryName' => 'Australia',
//            'longtail'=>-1,
//        ),
//        'in' => array(
//            'cityName' => '印度',
//            'webUrl' => 'amazon.in',
//            'support' => '暂不支持',
//            'countryName' => 'India',
//            'longtail'=>-1,
//            'longtail_suffix'=>"in",
//        ),
//        'br' => array(
//            'cityName' => '巴西',
//            'webUrl' => 'amazon.com.br',
//            'support' => '暂不支持',
//            'countryName' => 'Brazil',
//            'longtail'=>-1,
//        ),
//        'nl' => array(
//            'cityName' => '荷兰',
//            'webUrl' => 'amazon.nl',
//            'support' => '暂不支持',
//            'countryName' => 'Netherlands',
//            'longtail'=>-1,
//        ),
//        'mx' => array(
//            'cityName' => '墨西哥',
//            'webUrl' => 'amazon.com.mx',
//            'support' => '暂不支持',
//            'countryName' => 'Mexico',
//            'longtail'=>-1,
//        ),
//        'tr' => array(
//            'cityName' => '土耳其',
//            'webUrl' => 'amazon.com.tr',
//            'support' => '暂不支持',
//            'countryName' => 'Türkiye Cumhuriyeti',
//            'longtail'=>-1,
//        )
    ]
];
