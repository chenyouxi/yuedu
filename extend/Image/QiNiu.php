<?php
/**
 * Created by PhpStorm.
 * UserModel: mac
 * Date: 2018/5/22
 * Time: 下午12:37
 */

/*
 * 命名空间
 */
namespace Image;

/*
 * 载入文件
 */
require_once __DIR__ . '/qiniu-sdk/autoload.php';
use Qiniu\Auth;

class QiNiu
{
    private $auth = null;
    private $bucket = null;

    function __construct($AK, $SK, $bucket)
    {
        $this->auth = new Auth($AK, $SK);
        $this->bucket = $bucket;
    }

    /**
     * 设置空间名
     *
     * @param $bucket   空间名
     *
     * @return $this
     */
    public function setBucket($bucket)
    {
        $this->bucket = $bucket;

        return $this;
    }

    /**
     * 获取上传凭证
     *
     * @return string
     */
    public function getUploadToken()
    {
        return $this->auth->uploadToken($this->bucket);
        // return $this->bucket;
    }
}