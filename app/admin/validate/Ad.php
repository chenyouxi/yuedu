<?php
/**
 * +----------------------------------------------------------------------
 * | 广告验证器
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: siyu
 *                    :::::::::::           | EMAIL: 407593529@qq.com
 *                 ..:::::::::::'           | QQ: 407593529
 *             '::::::::::::'               | WECHAT: zhaoyingjie4125
 *                .::::::::::               | DATETIME: 2019/03/07
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
namespace app\admin\validate;

use think\Validate;

class Ad extends Validate
{
    protected $rule = [
        'type_id|广告位置' => [
            'require' => 'require',
        ],
        'name|广告名称' => [
            'require' => 'require',
            'max'     => '255',
        ],
        'description|描述' => [
            'max' => '255',
        ],
        'sort|排序' => [
            'require' => 'require',
            'number'  => 'number',
        ]
    ];
}