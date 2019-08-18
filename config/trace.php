<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2019 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

<<<<<<< HEAD:app/provider.php
use app\ExceptionHandle;
use app\Request;

// 容器Provider定义文件
return [
    'think\Request'          => Request::class,
    'think\exception\Handle' => ExceptionHandle::class,
=======
// +----------------------------------------------------------------------
// | Trace设置 开启调试模式后有效
// +----------------------------------------------------------------------
return [
    // 内置Html 支持扩展
    'type'    => 'Html',
    // 读取的日志通道名
    'channel' => '',
>>>>>>> 提交:config/trace.php
];
