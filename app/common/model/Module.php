<?php
/**
 * +----------------------------------------------------------------------
 * | 模型表模型
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: chenyouxi
 *                    :::::::::::           | EMAIL: 905100794@qq.com
 *                 ..:::::::::::'           | QQ: 905100794
 *             '::::::::::::'               | WECHAT: xi20130618
 *                .::::::::::               | DATETIME: 2019/03/27
 *           '::::::::::::::..
 *                ..::::::::::::.
 *              ``::::::::::::::::
 *               ::::``:::::::::'        .:::.
 *              ::::'   ':::::'       .::::::::.
 *            .::::'      ::::     .:::::::'::::.
 *           .:::'       :::::  .:::::::::' ':::::.
 *          .::'        :::::.:::::::::'      ':::::.
 *         .::'         ::::::::::::::'         ``::::.
 *     ...:::           ::::::::::::'              ``::.
 *   ```` ':.          ':::::::::'                  ::::..
 *                      '.:::::'                    ':'````..
 * +----------------------------------------------------------------------
 */
namespace app\common\model;

use think\facade\Request;

class Module extends Base
{
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 一对多获取栏目
    public function cates()
    {
        return $this->hasMany('Cate', 'moduleid');
    }

    // 获取模型列表
    public static function getList($where = array(), $pageSize, $order = ['id'=>'asc']){
        $list = self::where($where)
            ->order($order)
            ->paginate([
                'query'     => Request::get(),
                'list_rows' => $pageSize,
            ]);
        return $list;
    }
}