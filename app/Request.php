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
<<<<<<< HEAD:app/Request.php

namespace app;

class Request extends \think\Request
{

=======
// $Id$

if (is_file($_SERVER["DOCUMENT_ROOT"] . $_SERVER["SCRIPT_NAME"])) {
    return false;
} else {
    require __DIR__ . "/index.php";
>>>>>>> 提交:public/router.php
}
