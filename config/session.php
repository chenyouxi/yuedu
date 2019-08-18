<<<<<<< HEAD:app/mobile/config/app.php
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

// +----------------------------------------------------------------------
// | 应用设置
// +----------------------------------------------------------------------

return [
    // 默认分页显示数量
    'page_size'             => 10,
    // 默认跳转页面对应的模板文件
    'dispatch_success_tmpl' => app()->getBasePath() . 'common' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'dispatch_jump.tpl',
    'dispatch_error_tmpl'   => app()->getBasePath() . 'common' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR . 'dispatch_jump.tpl',
];
=======
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

// +----------------------------------------------------------------------
// | 会话设置
// +----------------------------------------------------------------------

return [
    // session name
    'name'           => '',
    // SESSION_ID的提交变量,解决flash上传跨域
    'var_session_id' => '',
    // 驱动方式 支持file redis memcache memcached
    'type'           => 'file',
    // 过期时间
    'expire'         => 0,
    // 前缀
    'prefix'         => '',
];
>>>>>>> 提交:config/session.php
