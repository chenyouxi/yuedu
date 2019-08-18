<?php
namespace app\helpers\allinpay\weichat;

use app\helpers\allinpay\yunshangtong\YunshangtongHelper;

class AllInPayHelper{

	private $config;
    private $url;
    private $wechat_pay_type = ['pay' ,'cancel' ,'refund' ,'query' ,'close'];

	public function __construct()
	{
		// $this->config = config("pay.allinpayweichattest");
		$this->config = config("pay.allinpayweichat");
	}

	/**
     * 发送操作
     * @param array 参数
     * @param unknown_type appkey
     */
    public function send($type ,array $params)
	{
        if (!in_array($type, $this->wechat_pay_type)) {
            return '支付操作请求类型错误';
        }

        // 发送请求
		$this->url = $this->config['apiurl'].$type;
		$this->paramsStr = $this->BuildUrlParams($params);
        $resp = $this->sendReq();
		// echo $resp;

        // 响应验签
        $res = json_decode($resp, true);
        if("SUCCESS"==$res["retcode"]){
            if($this->ValidSign($res, $this->config['appkey'])){
				return ['code' => $res['trxstatus'], 'msg' => '下单成功', 'data' => $res];
            }
            else {
                return "验签失败";
            }
        }
        else{
			return ['code' => 10002, 'msg' => $res['retmsg'], 'data' => $res];
        }
	}

	/**
	 * 构建请求参数
	 * @param array 参数
	 * @param unknown_type appkey
	 */
	private function BuildUrlParams(array $params)
	{
		$params["appid"] = $this->config['appid'];
		$params["cusid"] = $this->config['cusid'];
		$params["version"] = $this->config['apiversion'];
		$params["paytype"] = $this->config['paytype'];
		$params['sign'] = $this->SignArray($params, $this->config['appkey']);
		$paramsStr = $this->ToUrlParams($params);
		return $paramsStr;
	}

	/**
     * 签名
     * @param array 参数
     * @param unknown_type appkey
     */
	private function SignArray(array $array ,$appkey)
    {
		$array['key'] = $appkey;// 将key放到数组中一起进行排序和组装
		ksort($array);
		$blankStr = $this->ToUrlParams($array);
		$sign = md5($blankStr);
		return $sign;
	}

	private function ToUrlParams(array $array)
	{
		$buff = "";
		foreach ($array as $k => $v)
		{
			if($v != "" && !is_array($v)){
				$buff .= $k . "=" . $v . "&";
			}
		}

		$buff = trim($buff, "&");
		return $buff;
	}

    /**
     * 校验签名
     * @param array 参数
     * @param unknown_type appkey
     */
    private function ValidSign(array $array,$appkey){
    $sign = $array['sign'];
    unset($array['sign']);
    $array['key'] = $appkey;
    $mySign = $this->SignArray($array, $appkey);
    return strtolower($sign) == strtolower($mySign);
    }

	/**
     * 发送请求
     * @param array 参数
     * @param unknown_type appkey
     */
    private function sendReq()
    {
        $url = $this->url;
        $paramsStr = $this->paramsStr;

        $ch = curl_init();
        $this_header = array("content-type: application/x-www-form-urlencoded;charset=UTF-8");
        curl_setopt($ch,CURLOPT_HTTPHEADER,$this_header);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $paramsStr);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);//如果不加验证,就设false,商户自行处理
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);

        $output = curl_exec($ch);
        curl_close($ch);
        return  $output;
    }

}
