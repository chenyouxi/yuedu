<?php
/**
 *
 *
 */
use think\facade\Cookie as Cookie;
use app\common\service\User as UserService;
// 应用公共文件

/**
 * 格式化返回方法
 * RESTful
 *
 * @param $data 返回的数据
 */
function result($data,$status="success")
{
    header(config('http_status')['version'] . ' 200 ' . config('http_status')['code'][200]);

//    exit(json_encode(['msg'=>'success','data'=>$data], JSON_UNESCAPED_UNICODE));
    exit(json_encode(['status' => $status, 'data' => $data, 'msg' => 'success', 'code' => '00000'], JSON_UNESCAPED_UNICODE));
}

function exception($msg, $errorcode,$data=null)
{
    header(config('http_status')['version'] . ' 200 ' . config('http_status')['code'][200]);

//    exit(json_encode(['msg'=>'error','data'=>$msg], JSON_UNESCAPED_UNICODE));
    exit(json_encode(['status' => 'error', 'msg' => $msg, 'code' => '' . $errorcode,'data'=>$data], JSON_UNESCAPED_UNICODE));
}

function error($data, $errorcode,$msg='')
{
    header(config('http_status')['version'] . ' 200 ' . config('http_status')['code'][200]);

    $arr = ['status' => 'error', 'data' => $data, 'code' => '' . $errorcode];
    if ($msg) { $arr['msg']= $msg; }
    exit(json_encode($arr, JSON_UNESCAPED_UNICODE));
}

function result_exception($errcode = 500, $errmsg = 'failed')
{
    $httpStatus = '';
    if (isset(config('http_status')['code'][$errcode]))
        $httpStatus = config('http_status')['code'][$errcode];

    header(config('http_status')['version'] . ' ' . $errcode . ' ' . $httpStatus);

    exit(json_encode(['error' => $errmsg], JSON_UNESCAPED_UNICODE));
}



// 成功处理请求，返回成功状态，code默认00000，并且data是数据
function result_success($data,$msg='')
{
    header(config('http_status')['version'] . ' 200 ' . config('http_status')['code'][200]);

//    exit(json_encode(['status'=>'success','code'=>'00000','data'=>$data], JSON_UNESCAPED_UNICODE));
    $arr = ['status' => 'success', 'code' => '00000', 'data' => $data];
    if ($msg) { $arr['msg']= $msg; }
    exit(json_encode($arr, JSON_UNESCAPED_UNICODE));
}

// 不能成功处理请求，返回错误状态，code根据需要自定义，比如'11111'代表未登录，'11112'代表为绑定手机号
function result_error($code,$msg)
{
    header(config('http_status')['version'] . ' 200 ' . config('http_status')['code'][200]);

//    exit(json_encode(['status'=>'error','code'=>(string)$code,'msg'=>$msg], JSON_UNESCAPED_UNICODE));
    exit(json_encode(['status' => 'error', 'code' => (string)$code, 'msg' => $msg], JSON_UNESCAPED_UNICODE));
}
function login_error($code,$msg)
{
    header(config('http_status')['version'] . ' 200 ' . config('http_status')['code'][200]);

//    exit(json_encode(['status'=>'error','code'=>(string)$code,'msg'=>$msg], JSON_UNESCAPED_UNICODE));
    exit(json_encode(['status' => 'error', 'code' => (string)$code, 'msg' => $msg], JSON_UNESCAPED_UNICODE));

}


/*
 * 获取用户IP
 */
function getIP()
{
    if (getenv('HTTP_CLIENT_IP')) {
        $ip = getenv('HTTP_CLIENT_IP');
    } elseif (getenv('HTTP_X_FORWARDED_FOR')) {
        $ip = getenv('HTTP_X_FORWARDED_FOR');
    } elseif (getenv('HTTP_X_FORWARDED')) {
        $ip = getenv('HTTP_X_FORWARDED');
    } elseif (getenv('HTTP_FORWARDED_FOR')) {
        $ip = getenv('HTTP_FORWARDED_FOR');

    } elseif (getenv('HTTP_FORWARDED')) {
        $ip = getenv('HTTP_FORWARDED');
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
/*
 * post curl
 */
function post($curlPost,$url){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_NOBODY, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $curlPost);
    $return_str = curl_exec($curl);
    curl_close($curl);
    return $return_str;
}

/**
 * 把微信生成的图片存入本地
 *
 * @param [type] $username
 *            [用户名]
 * @param [string] $LocalPath
 *            [要存入的本地图片地址]
 * @param [type] $weixinPath
 *            [微信图片地址]
 *
 * @return [string] [$LocalPath]失败时返回 FALSE
 */
function save_weixin_img($local_path, $weixin_path)
{
    $weixin_path_a = str_replace("https://", "http://", $weixin_path);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $weixin_path_a);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //不验证证书
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //不验证证书
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $r = curl_exec($ch);
    curl_close($ch);
    if (! empty($local_path) && ! empty($weixin_path_a)) {
        $msg = file_put_contents($local_path, $r);
    }
    return $local_path;
}

/**
 * 获取上传根目录
 *
 * @return Ambigous <\think\mixed, NULL, multitype:>
 */
function getUploadPath()
{
    $list = config("save_path");
    return $list;
}

/**
 * 获取域名
 */
function host(){

    $http_type = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')) ? 'https://' : 'http://';

    return $http_type . $_SERVER['HTTP_HOST'];

}

/**
 * 判断当前是否是微信浏览器
 */
function isWeixin()
{
    if (strpos($_SERVER['HTTP_USER_AGENT'],

            'MicroMessenger') !== false) {

        return 1;
    }

    return 0;
}

/**
 * 格式化日期
 * */
function DateFormat($time){
    return date("Y-m-d H:i:s",$time);
}

/**
 * 消费类型配置
 */
function __integralType($val){
    return config("integralType")[$val];
}

/**
 * 获取国家信息
 *
 */
function __getCountryConfig($country){
    return config("countryConfig")[$country];
}

/**
 * 获取字符长度
 */
function lengthA($arr){
    if( is_array($arr) ){
        return count($arr);
    } else {
        return 0;
    }
}

/**
 * 对象转数组
 *
 */
function object_array($array) {
    if(is_object($array)) {
        $array = (array)$array;
    } if(is_array($array)) {
        foreach($array as $key=>$value) {
            $array[$key] = object_array($value);
        }
    }
    return $array;
}
/**
 * 删除文件
 */
function deleteDir($path) {

    if (is_dir($path)) {
        //扫描一个目录内的所有目录和文件并返回数组
        $dirs = scandir($path);

        foreach ($dirs as $dir) {
            //排除目录中的当前目录(.)和上一级目录(..)
            if ($dir != '.' && $dir != '..') {
                //如果是目录则递归子目录，继续操作
                $sonDir = $path.'/'.$dir;
                if (is_dir($sonDir)) {
                    //递归删除
                    deleteDir($sonDir);

                    //目录内的子目录和文件删除后删除空目录
                    @rmdir($sonDir);
                } else {

                    //如果是文件直接删除
                    @unlink($sonDir);
                }
            }
        }
        @rmdir($path);
    }
}
/**
 *
 * 获取缓存文件
 */
function getRuntimePath($fileName){
    return \think\facade\Env::get('runtime_path') .$fileName;
}


/**
 * 获取数据百分比
 */
function __getPercentage( $row , $sum){
     return round($row/$sum*100,2)."％";
}


/*
 * 生成登录态，返回SESSION_ID
 */
function createSessionID($userId)
{
    // 缓存保存信息
    $eUserCode = md5("91amz".$userId);

    $SESSION_ID = uuid();

    //把sessionid存入数据库
    $lockSession = lock_url($SESSION_ID);

    $User = new UserService();
    $User->updateUser(['userId' => $userId], ['sessionId' => $lockSession]);

    // 设置过期时间5小时
    return Cookie::set($eUserCode, $SESSION_ID, 5000 * 3600) ? $SESSION_ID : false;
}

/*
 * 生成uuid
 */
function uuid()
{
    if (function_exists('com_create_guid')) {
        return com_create_guid();
    } else {
        mt_srand((double)microtime() * 10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
            . substr($charid, 0, 8) . $hyphen
            . substr($charid, 8, 4) . $hyphen
            . substr($charid, 12, 4) . $hyphen
            . substr($charid, 16, 4) . $hyphen
            . substr($charid, 20, 12)
            . chr(125);// "}"
        return $uuid;
    }
}


function lock_url($txt, $key = 'lock.lock')
{
    if(!$txt){
        return '';
    }
    $txt = $txt . $key;
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-=+";
    $nh = rand(0, 64);
    $ch = $chars[$nh];
    $mdKey = md5($key . $ch);
    $mdKey = substr($mdKey, $nh % 8, $nh % 8 + 7);
    $txt = base64_encode($txt);
    $tmp = '';
    $i = 0;
    $j = 0;
    $k = 0;
    for ($i = 0; $i < strlen($txt); $i++) {
        $k = $k == strlen($mdKey) ? 0 : $k;
        $j = ($nh + strpos($chars, $txt[$i]) + ord($mdKey[$k++])) % 64;
        $tmp .= $chars[$j];
    }
    return urlencode(base64_encode($ch . $tmp));
}

function unlock_url($txt, $key = 'lock.lock')
{
    if(!$txt){
        return '';
    }
    $txt = base64_decode(urldecode($txt));
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-=+";
    $ch = $txt[0];
    $nh = strpos($chars, $ch);
    $mdKey = md5($key . $ch);
    $mdKey = substr($mdKey, $nh % 8, $nh % 8 + 7);
    $txt = substr($txt, 1);
    $tmp = '';
    $i = 0;
    $j = 0;
    $k = 0;
    for ($i = 0; $i < strlen($txt); $i++) {
        $k = $k == strlen($mdKey) ? 0 : $k;
        $j = strpos($chars, $txt[$i]) - $nh - ord($mdKey[$k++]);
        while ($j < 0) $j += 64;
        $tmp .= $chars[$j];
    }
    return trim(base64_decode($tmp), $key);
}

//时间格式转换
function timeChange($time){
    if( $time >0){
        $newDate = date("Y-m-d", strtotime($time));

    } else {
        $newDate = "-";
    }
    return $newDate;

}

/***
 * 对象转数组
 * @param $object
 * @return array
 */
function object2array($object)
{
    $array = array();
    if (is_object($object)) {
        foreach ($object as $key => $value) {
            $array[$key] = $value;
        }
    } else {
        $array = $object;
    }
    return $array;
}

/**
 * 传递一个父级分类ID返回所有子分类
 * @param $cate
 * @param $pid
 * @return array
 */
function getChildsRule($rules, $pid)
{
    $arr = [];
    foreach ($rules as $v) {
        if ($v['pid'] == $pid) {
            $arr[] = $v;
            $arr = array_merge($arr, getChildsRule($rules, $v['id']));
        }
    }
    return $arr;
}


/***
 * 格式化面包导航(用户后台面包导航)
 * @param $data
 * @return array
 */
function format_bread_crumb($data)
{
    $result = array();
    if (!empty($data)) {
        $data = array_reverse($data);
        if (count($data) == 4) {
            //非常规 添加或修改
            $result['right'] = $data[1];
            $result['left'][0] = $data[1]['title'];
            //查看是添加还是修改
            $result['left'][1] = $data[2]['title'] . '-' . str_replace('操作-', '', $data[3]['title']);
        } else if (count($data) == 3) {
            //常规 添加或修改
            $result['right'] = $data[1];
            $result['left'][0] = $data[1]['title'];
            //查看是添加还是修改
            $result['left'][1] = str_replace('操作-', '', $data[2]['title']);
        } else if (count($data) == 2) {
            //常规 列表
            $result['right'] = $data[1];
            $result['left'][0] = $data[1]['title'];
            $result['left'][1] = '列表';
        } else {
            //单独定义
            $result['right'] = $data[0];
            $result['left'][0] = $data[0]['title'];
            $result['left'][1] = '';
        }
    }



    return $result;
}



/**
 * 校验元素是否存在二维数组里面
 */
function deep_in_array($value, $array) {
    foreach($array as $item) {
        if(!is_array($item)) {
            if ($item == $value) {
                return true;
            } else {
                continue;
            }
        }

        if(in_array($value, $item)) {
            return true;
        } else if(deep_in_array($value, $item)) {
            return true;
        }
    }
    return false;
}


/**
 *
 * 获取doadmin
 */
function getDomainID($station){
    switch($station){
        case 'us':
            $domainID = 1;
            break;
        case 'uk':
            $domainID = 2;
            break;
        case 'de':
            $domainID = 3;
            break;
        case 'fr':
            $domainID = 4;
            break;
        case 'jp':
            $domainID = 5;
            break;
        case 'ca':
            $domainID = 6;
            break;
        case 'cn':
            $domainID = 7;
            break;
        case 'it':
            $domainID = 8;
            break;
        case 'es':
            $domainID = 9;
            break;
        case 'in':
            $domainID = 10;
            break;
        case 'mx':
            $domainID = 11;
            break;
        case 'au':
            $domainID = 12;
            break;
        default :
            $domainID = 0;
            break;
    }
    return $domainID;
}