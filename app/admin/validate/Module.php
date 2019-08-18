<?php
/**
 * +----------------------------------------------------------------------
 * | 模型管理验证器
 * +----------------------------------------------------------------------
 *                      .::::.
 *                    .::::::::.            | AUTHOR: chenyouxi
 *                    :::::::::::           | EMAIL: 905100794@qq.com
 *                 ..:::::::::::'           | QQ: 905100794
 *             '::::::::::::'               | WECHAT: xi20130618
 *                .::::::::::               | DATETIME: 2019/05/25
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

class Module extends Validate
{
    protected $rule = [
        'title|模型名称' => [
            'require' => 'require',
            'max'     => '100',
            'unique'  => 'module',
        ],
        'name|表名' => [
            'require' => 'require',
            'max'     => '50',
            'unique'  => 'module',
        ],
        'listfields|列表页字段' => [
            'require' => 'require',
            'max'     => '255',
        ],
        'description|描述' => [
            'max' => '200',
        ],
        'sort|排序' => [
            'require' => 'require',
            'number'  => 'number',
        ]
    ];
}