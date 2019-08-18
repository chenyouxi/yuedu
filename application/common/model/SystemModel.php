<?php/** * * +---------------------------------------------------------------------- *                      .::::. *                    .::::::::.            | AUTHOR: chenyouxi *                    :::::::::::           | EMAIL: 905100794@qq.com *                 ..:::::::::::'           | QQ: 905100794 *             '::::::::::::'               | WECHAT: xi20130618 *                .::::::::::               | DATETIME: 2019/8/16 3:28 PM *           '::::::::::::::.. *                ..::::::::::::. *              ``:::::::::::::::: *               ::::``:::::::::'        .:::. *              ::::'   ':::::'       .::::::::. *            .::::'      ::::     .:::::::'::::. *           .:::'       :::::  .:::::::::' ':::::. *          .::'        :::::.:::::::::'      ':::::. *         .::'         ::::::::::::::'         ``::::. *     ...:::           ::::::::::::'              ``::. *   ```` ':.          ':::::::::'                  ::::.. *                      '.:::::'                    ':'````.. * +---------------------------------------------------------------------- */namespace app\common\model;use think\facade\Request;use app\common\model\BaseModel as BaseModel;class SystemModel extends BaseModel{    protected $pk = 'autoId';    protected $table = 'amz_system';    protected $field = ["*"];    // 定义时间戳字段名    protected $createTime = 'addTime';    protected $updateTime = 'updateTime';    // 一对一获取所属分组    public function systemGroup()    {        return $this->belongsTo('SystemGroupModel', 'groupId');    }    // 格式化获取所有字段(后台列表)    public static function getListField($order = ['sort', 'autoId'=>'desc']){        $list = self::order($order)->select();        foreach ($list as $k => $v){            $v['typeName']  = self::getType($v['type']);            $v['groupName'] = $v->systemGroup->getData('name');        }        return $list;    }    // 获取字段列表    public static function getList($where = array(), $pageSize, $order = ['sort', 'autoId'=>'desc']){        $list = self::where($where)            ->order($order)            ->paginate([                'query'     => Request::get(),                'list_rows' => $pageSize,            ]);        foreach ($list as $k=>$v){            $v['typeName']  = self::getType($v['type']);            $v['groupName'] = $v->systemGroup->getData('name');        }        return $list;    }    // 字段类型    public static function getType($type=''){        $arr=[            'text'      => '单行文本',            'textarea'  => '多行文本',            'editor'    => '编辑器',            'select'    => '下拉列表',            'radio'     => '单选按钮',            'checkbox'  => '复选框',            'image'     => '单张图片',            'file'      => '文件上传',            'datetime'  => '日期和时间',            'template'  => '选择模板',        ];        if ($type) {            return $arr[$type];        } else {            return $arr;        }    }    // 格式化获取所有字段(后台列表)    public static function getFieldValue($order = ['sort', 'autoId'=>'desc']){        $list = self::order($order)->select();        $arr = [];        foreach ($list as $k => $v){            $arr[$v['field']]  = $v['value'];        }        return $arr;    }}