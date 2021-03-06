<?php
// +----------------------------------------------------------------------
// | 模板设置
// +----------------------------------------------------------------------

//查找设置的模版
$system = \think\facade\Db::name('system')->select();
$systemArr = [];
foreach ($system as $k => $v) {
    $systemArr[$v['field']] = $v['value'];
}

return [
    // 模板路径
    'view_path'    => './template/'.$systemArr['template'].'/'.\think\facade\Request::app().'/'.$systemArr['html'].'/',
    // 模板文件名分隔符
    'view_depr'    => '_',
    // 自定义标签库
    'taglib_pre_load'    => 'app\common\taglib\Tp',
];
