<?php/** * * +---------------------------------------------------------------------- *                      .::::. *                    .::::::::.            | AUTHOR: chenyouxi *                    :::::::::::           | EMAIL: 905100794@qq.com *                 ..:::::::::::'           | QQ: 905100794 *             '::::::::::::'               | WECHAT: xi20130618 *                .::::::::::               | DATETIME: 2019/9/19 5:40 下午 *           '::::::::::::::.. *                ..::::::::::::. *              ``:::::::::::::::: *               ::::``:::::::::'        .:::. *              ::::'   ':::::'       .::::::::. *            .::::'      ::::     .:::::::'::::. *           .:::'       :::::  .:::::::::' ':::::. *          .::'        :::::.:::::::::'      ':::::. *         .::'         ::::::::::::::'         ``::::. *     ...:::           ::::::::::::'              ``::. *   ```` ':.          ':::::::::'                  ::::.. *                      '.:::::'                    ':'````.. * +---------------------------------------------------------------------- */use OSS\Core\OssException;use OSS\OssClient;use think\facade\Cache;class Oss {    // Access Key ID    private $accessKeyId = 'LTAIq3l1IzK88CQI';    // Access Access Key Secret    private $accessKeySecret = 'vJn3MloZRB2cpxuxwMfu4NgSfa3bvQ';    private $endpoint = 'http://oss-cn-shenzhen.aliyuncs.com';    // 模版ID    private $bucket = 'nenyes';    public function __construct($cofig = array()) {        // 配置参数//        $this->accessKeyId = $cofig ['accessKeyId'];//        $this->accessKeySecret = $cofig ['accessKeySecret'];//        $this->endpoint = $cofig ['signName'];//        $this->bucket = $cofig ['templateCode'];    }    //列举文件    public function getlistObjects($folder='')    {        $ossClient = new OssClient($this->accessKeyId, $this->accessKeySecret, $this->endpoint);        $prefix = 'yuedu/file/'.$folder;        $delimiter = '/';        $nextMarker = '';        $maxkeys = 1000;        $options = array(            'delimiter' => $delimiter,            'prefix' => $prefix,            'max-keys' => $maxkeys,            'marker' => $nextMarker,        );        $i = 0;        while (true) {            $options = array(                'delimiter' => $delimiter,                'prefix' => $prefix,                'max-keys' => $maxkeys,                'marker' => $nextMarker,            );            try {                $listObjectInfo = $ossClient->listObjects($this->bucket, $options);            } catch (OssException $e) {                printf(__FUNCTION__ . ": FAILED\n");                printf($e->getMessage() . "\n");                return;            }            // 得到nextMarker，从上一次listObjects读到的最后一个文件的下一个文件开始继续获取文件列表。            $nextMarker = $listObjectInfo->getNextMarker();            $listObject = $listObjectInfo->getObjectList();            $listPrefix = $listObjectInfo->getPrefixList();            $delimiter = $listObjectInfo->getDelimiter();            $data['nextMarker'] = $nextMarker;            $data['listObject'][$i] = $listObject;            $data['listPrefix'][$i] = $listPrefix;            $data['delimiter'] = $delimiter;            $i++;            if ($nextMarker === '') {                return $data;                break;            }        }    }}