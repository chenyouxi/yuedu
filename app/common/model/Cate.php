<?php
/**
 * +----------------------------------------------------------------------
 * | 栏目模型
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

class Cate extends Base
{
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = false;

    // 一对一获取所属模型
    public function module()
    {
        return $this->belongsTo('Module','moduleid');
    }

    // 获取列表
    public static function getList($where = array(), $order = ['sort', 'id'=>'desc']){
        $list = self::where($where)
            ->order($order)
            ->select();
        foreach ($list as $k => $v) {
            $v['modulename'] = $v->module->getData('title');
            $v['moduleurl']  = $v->module->getData('name');
        }
        return $list;
    }
}