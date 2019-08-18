<?php
/**
 * +----------------------------------------------------------------------
 * | 公共会员列表模型
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: chenyouxi
 *                    :::::::::::           | EMAIL: 905100794@qq.com
 *                 ..:::::::::::'           | QQ: 905100794
 *             '::::::::::::'               | WECHAT: xi20130618
 *                .::::::::::               | DATETIME: 2019/03/04
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

class Users extends Base
{
    // 定义时间戳字段名
    protected $createTime = 'create_time';
    protected $updateTime = 'update_time';

    // 一对一获取所属用户组
    public function usersType()
    {
        return $this->belongsTo('UsersType', 'type_id');
    }

    // 获取列表
    public static function getList($where = array(), $pageSize, $order = ['sort', 'id'=>'desc']){
        $list = self::where($where)
            ->order($order)
            ->paginate([
                'query'     => Request::get(),
                'list_rows' => $pageSize,
            ]);

        foreach ($list as $k => $v){
            $v['type_name'] = $v->usersType->getData('name');
        }
        return $list;
    }

    // 获取下载列表
    public static function getDownList($where = array(), $order = ['sort', 'id'=>'desc']){
        $list = self::where($where)
            ->order($order)
            ->select();
        foreach ($list as $k => $v){
            $v['type_name'] = $v->usersType->getData('name');
        }
        return $list;
    }

    //获取单个用户详情
    public static function getInfoForId( $id ){

        $info = self::find($id);
        $type_name = $info->usersType->getData('name');

        $info['type_name'] = $type_name;

        return $info;
    }

}