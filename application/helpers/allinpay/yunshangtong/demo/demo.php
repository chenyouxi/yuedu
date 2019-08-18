<?php
namespace app\miniapp\controller;

use Config;
use think\Exception;
use Think\Db;
use app\helpers\allinpay\yunshangtong\RSAUtil;
use app\helpers\allinpay\yunshangtong\SOAClient;
use app\helpers\allinpay\yunshangtong\YunshangtongHelper;


class Yunshangtong
{
    protected $config;

    public function test()
    {
      $helper = new YunshangtongHelper();

//       $params = array();
//       $params["bizUserId"] = "wucanheng";
//       $params["accountSetNo"] = "12985739202038";
// $helper->send('queryBalance', $params);
// echo 'asdf';
// exit;
        $config = config('pay.yunshangtongtest');
        $client = new SOAClient();
        $serverAddress = "http://116.228.64.55:9092/service/soa";
        $sysid = "100009001000";
        $alias = "100009001000";
        $privatePath = $config['privatePath'];
        $publicPath = $config['publicPath'];
        $pwd = "900724";
        $signMethod = "SHA1WithRSA";
        $privateKey = RSAUtil::loadPrivateKey($alias, $privatePath, $pwd);
        $publicKey = RSAUtil::loadPublicKey($alias, $publicPath, $pwd);

        $client->setServerAddress($serverAddress);
        $client->setSignKey($privateKey);
        $client->setPublicKey($publicKey);
        $client->setSysId($sysid);
        $client->setSignMethod($signMethod);

        // $this->createMember($client);//创建会员
        // $this->sendVerificationCode($client);//发送短信
        // $this->bindPhone($client);//绑定手机
        // $this->setRealName($client, $publicKey, $privateKey);//实名认证
        // $this->signContract($client);//电子签约
        // $this->getMemberInfo($client, $publicKey, $privateKey);//获取会员信息
        // $this->getBankCardBin($client, $publicKey, $privateKey);//查询卡 bin
        // $this->applyBindBankCard($client, $publicKey, $privateKey);//请求绑定银行卡
        // $this->bindBankCard($client, $publicKey, $privateKey);//确认绑定银行卡
        // $this->queryBankCard($client, $publicKey, $privateKey);//查询绑定银行卡
        // $this->agentCollectApply($client, $publicKey, $privateKey);//托管代收申请
        // $this->pay($client, $publicKey, $privateKey);//确定收款

        // $this->batchAgentPay($client);//批量托管代付
        // $this->signalAgentPay($client, $publicKey, $privateKey);//批量托管代付

        // $this->depositApply($client, $publicKey, $privateKey);//充值
        // $this->queryBalance($client, $publicKey, $privateKey);//会员账户余额查询
        // $this->withdrawApply($client, $publicKey, $privateKey);//提现申请
        // $this->refund($client, $publicKey, $privateKey);//申请退款
        // $this->getOrderDetail($client, $publicKey, $privateKey);//查看订单状态

        // $this->applyBindAcct($client);
        // $this->consumeApply($client);
    }

    //创建会员
    function createMember($client) {
      $param["bizUserId"] = "wucanheng";
      $param["memberType"] = "3";
      $param["source"] = "1";
      $result = $client->request("MemberService", "createMember", $param);
      print_r($result);
    }

    //发送短信验证码
    function sendVerificationCode($client) {
      $param["bizUserId"] = "wucanheng";
      $param["phone"] = "13560246766";
      $param["verificationCodeType"] = "9";
      $result = $client->request("MemberService", "sendVerificationCode", $param);
      print_r($result);
    }

    //绑定手机
    function bindPhone($client) {
      $param["bizUserId"] = "wucanheng";
      $param["phone"] = "13560246766";
      $param["verificationCode"] = "533088";
      $result = $client->request("MemberService", "bindPhone", $param);
      print_r($result);
    }

    //实名认证
    function setRealName($client, $publicKey, $privateKey) {
        $param["bizUserId"] = "wucanheng";
        $param["name"] = "吴灿恒";
        $param["identityType"] = "1";
        $param["identityNo"] = $this->rsaEncrypt("440181198901195418", $publicKey, $privateKey);

        $result = $client->request("MemberService", "setRealName", $param);
        print_r($result);
    }

    //电子签约
    function signContract($client){
      // $serverAddress = "http://116.228.64.55:9092/yungateway/member/signContract.html";
      // $client->setServerAddress($serverAddress);
      $param["bizUserId"] = "wucanheng";
      $param["memberType"] = 3;
      $param["jumpUrl"] = "https://eno43h0lalsx.x.pipedream.net/";
      $param["backUrl"] = "https://eno43h0lalsx.x.pipedream.net/";
      $param["source"] = "2";
      $result = $client->request("MemberService", "signContract", $param);
      print_r($result);
    }

    //获取会员信息
    function getMemberInfo($client, $publicKey, $privateKey)
    {
      $str = 'pLszIImz20Lb/WkS75M3u5m1VH9hOJV7JpHHnV7iJuCcSoJWmCGqLXGXOF3rwmdQ+IyU0Qz8tSXhn3IGo/bSwzjal5mY1w8zePdNyzXBUFWLzsUWeup1bi8zo6+A948EvKyoxP2ie4p/DUFkMNQJYKLgi88XqVkpKMVSyrRTKDA=';
      $r = $this->rsaDecrypt($str, $publicKey, $privateKey);
      // var_dump($r);
      // exit;
        $param["bizUserId"] = 'wucanheng';
        $result = $client->request("MemberService", "getMemberInfo", $param);
        print_r($result);
    }

    //查询卡 bin
    function getBankCardBin($client, $publicKey, $privateKey)
    {
        $param["cardNo"] = $this->rsaEncrypt("6228491234567890", $publicKey, $privateKey);
        $result = $client->request("MemberService", "getBankCardBin", $param);
        print_r($result);
    }

    //请求绑定银行卡
    function applyBindBankCard($client, $publicKey, $privateKey)
    {
        $param["bizUserId"] = "wucanheng";
        // $param["cardNo"] = $this->rsaEncrypt("6227003320071233723", $publicKey, $privateKey);
        $param["cardNo"] = $this->rsaEncrypt("6217921080289567", $publicKey, $privateKey);
        // $param["cardNo"] = $this->rsaEncrypt("6228481234567890", $publicKey, $privateKey);
        $param["phone"] = "15018402381";
        $param["name"] = "吴灿恒";
        $param["cardCheck"] = "7";
        $param["identityType"] = "1";
        $param["identityNo"] = $this->rsaEncrypt("440181198901195418", $publicKey, $privateKey);
        // $param["identityNo"] = '440181198901195418';
        // $param["validate"] = $this->rsaEncrypt("2103", $publicKey, $privateKey);;
        // $param["cvv2"] = "1";
        // $param["isSafeCard"] = "1";
        // $param["unionBank"] = "1";
        $result = $client->request("MemberService", "applyBindBankCard", $param);
        print_r($result);
    }

    function bindBankCard($client, $publicKey, $privateKey)
    {
        $param["bizUserId"] = "wucanheng";
        $param["tranceNum"] = "559476694009";
        $param["phone"] = "15018402381";
        $param["verificationCode"] = "529007";
        // $param["cardNo"] = $this->rsaEncrypt("6217921080289567", $publicKey, $privateKey);
        $result = $client->request("MemberService", "bindBankCard", $param);
        print_r($result);
    }

    //请求绑定银行卡
    function queryBankCard($client, $publicKey, $privateKey)
    {
        $param["bizUserId"] = "wucanheng";
        // $param["cardNo"] = $this->rsaEncrypt("6217921080289567", $publicKey, $privateKey);
        $result = $client->request("MemberService", "queryBankCard", $param);
        print_r($result);
    }

    //托管代收申请
    function  agentCollectApply($client, $publicKey, $privateKey) {
      $payMethod = [
          "QUICKPAY_VSP" => [
            "bankCardNo" => $this->rsaEncrypt("6217921080289567", $publicKey, $privateKey),
            "amount" => 18,
          ]
      ];
      $recieverList = [
        [
            "bizUserId" => "15018402381",
            "amount" => 18,
        ]
      ];
      $param["bizOrderNo"] = "1902187023690257479";
      $param["payerId"] = "wucanheng";
      $param["recieverList"] = $recieverList;
      $param["tradeCode"] = "3001";
      $param["amount"] = 18;
      $param["backUrl"] = "https://lystoretmp.yipage.cn/miniapp/getPayStatus";
      $param["payMethod"] = $payMethod;
      $param["industryCode"] = "1910";
      $param["industryName"] = "其他";
      $param["source"] = "1";
      $result = $client->request("OrderService", "agentCollectApply", $param);
      print_r($result);
    }

    function pay($client, $publicKey, $privateKey) {
        // $serverAddress = "http://116.228.64.55:9092/service/gateway/frontTrans";
        // $client->setServerAddress($serverAddress);
        $tradeNo = [
            'thpinfo' => [
                'sign' => '',
                'tphtrxcrtime' => '',
                'tphtrxid' => 0,
                'trxflag' => 'trx',
                'trxsn' => ''
            ]
        ];
        $param["bizUserId"] = "wucanheng";
        $param["bizOrderNo"] = "1902187023690257479";
        // $param["tradeNo"] = $tradeNo;
        $param["tradeNo"] = '{"sign":"","tphtrxcrtime":"","tphtrxid":0,"trxflag":"trx","trxsn":""}';
        $param["verificationCode"] = "846215";
        $param["consumerIp"] = "39.104.92.85";
        $result = $client->request("OrderService", "pay", $param);
        print_r($result);
    }

    //批量托管代付
    function batchAgentPay($client) {
      $collectPayList = [
        [
          "bizOrderNo" => "1903021572329260836",
          "amount" => 18
        ]
      ];
      $batchPayList = [
          [
              "bizOrderNo" => "1903021572329260836",
              "collectPayList" => $collectPayList,
              "bizUserId" => "wucanheng",
              "accountSetNo" => "12985739202038",
              "backUrl" => "https://lystoretmp.yipage.cn/miniapp/getPayStatus",
              "amount" => 18,
              "fee" => 0
          ]
      ];
      $param["bizBatchNo"] = "1902282457919262505qwe";
      $param["batchPayList"] = $batchPayList;
      $param["tradeCode"] = "4001";
      $result = $client->request("OrderService", "batchAgentPay", $param);
      print_r($result);
    }

    function signalAgentPay($client, $publicKey, $privateKey) {
        $collectPayList = [
          [
            "bizOrderNo" => "1903021572329260836",
            "amount" => 18
          ]
        ];
        $param["bizOrderNo"] = "1903021572329260836123";
        $param["collectPayList"] = $collectPayList;
        $param["bizUserId"] = '15018402381';
        $param["accountSetNo"] = "12985739202038";
        $param["backUrl"] = "https://lystoretmp.yipage.cn/miniapp/getPayStatus";
        $param["amount"] = 18;
        $param["fee"] = 0;
        $param["tradeCode"] = "4001";

        $result = $client->request("OrderService", "signalAgentPay", $param);
        print_r($result);
    }

    function depositApply($client, $publicKey, $privateKey) {
      $payMethod = [
          "QUICKPAY_VSP" => [
            "bankCardNo" => $this->rsaEncrypt("6217921080289567", $publicKey, $privateKey),
            "amount" => 10,
          ]
      ];
      $param["bizOrderNo"] = "1902277172558275591";
      $param["bizUserId"] = "wucnaheng";
      $param["accountSetNo"] = "12985739202038";
      $param["amount"] = 10;
      $param["fee"] = 0;
      $param["backUrl"] = "https://lystoretmp.yipage.cn/miniapp/getPayStatus";
      $param["payMethod"] = $payMethod;
      $param["industryCode"] = "1910";
      $param["industryName"] = "其他";
      $param["source"] = 1;
      $result = $client->request("OrderService", "depositApply", $param);
      print_r($result);
    }

    //会员账户余额查询
    function queryBalance($client, $publicKey, $privateKey) {
        $param["bizUserId"] = "15018402381";
        $param["accountSetNo"] = "12985739202038";
        $result = $client->request("OrderService", "queryBalance", $param);
        print_r($result);
    }

    //提现申请
    function withdrawApply($client, $publicKey, $privateKey) {
      $param["bizOrderNo"] = "1902151776785273894";
      $param["bizUserId"] = "wucanheng";
      $param["accountSetNo"] = "12985739202038";
      $param["amount"] = 10;
      $param["fee"] = 0;
      $param["backUrl"] = "https://lystoretmp.yipage.cn/miniapp/getPayStatus";
      $param["bankCardNo"] = $this->rsaEncrypt("6217921080289567", $publicKey, $privateKey);
      $param["industryCode"] = "1910";
      $param["industryName"] = "其他";
      $param["source"] = 1;
      $result = $client->request("OrderService", "withdrawApply", $param);
      print_r($result);
    }

    //申请退款
    function refund($client, $publicKey, $privateKey) {
      $refundList = [
        [
          // "accountSetNo" => "12985739202038",
          "bizUserId" => "15018402381",
          "amount" => 18
        ],
      ];
      $param["bizOrderNo"] = "refund_1902187023690257479";
      $param["oriBizOrderNo"] = "1902187023690257479";
      $param["bizUserId"] = "wucanheng";
      $param["refundList"] = $refundList;
      $param["backUrl"] = "https://lystoretmp.yipage.cn/miniapp/getPayStatus";
      $param["amount"] = 18;
      $result = $client->request("OrderService", "refund", $param);
      print_r($result);
    }

    //查看订单状态
    function getOrderDetail($client, $publicKey, $privateKey) {
      $param["bizUserId"] = "wucanheng";
      $param["bizOrderNo"] = "refund_1902187023690257479";
      // $param["oriBizOrderNo"] = "1902187023690257479";
      $result = $client->request("OrderService", "getOrderDetail", $param);
      print_r($result);
    }

    //消费申请
    function consumeApply($client) {
      $payMethod = [
          "SCAN_WEIXIN" => [
            "payType" => "W02",
            "amount" => 12,
          ]
      ];
      // $payMethod = json_encode($payMethod);
      $param = array();
      $param["payerId"] = "15018402381";
      $param["recieverId"] = "wucanheng";
      $param["bizOrderNo"] = "1902284468368275591";
      $param["amount"] = 12;
      $param["fee"] = 0;
      $param["backUrl"] = "https://lystoretmp.yipage.cn/miniapp/getPayStatus";
      $param["payMethod"] = $payMethod;
      $param["industryCode"] = "1910";
      $param["industryName"] = "其他";
      $param["source"] = 2;
      $result = $client->request("OrderService", "consumeApply", $param);
      print_r($result);
    }

    //标识
    function applyBindAcct($client) {
      $param["bizUserId"] = "15018402381";
      $param["operationType"] = "set";
      $param["acctType"] = "weChatMiniProgram";
      $param["acct"] = "ouSxd5TSW3hAnghh4ZD-xbDSgJmQ";
      $result = $client->request("MemberService", "applyBindAcct", $param);
      print_r($result);
    }

    //平台账户集余额查询
    function queryMerchantBalance($client, $publicKey, $privateKey, $params)
    {
        $param["accountSetNo"] = "12985739202038";
        $result = $client->request("MemberService", "queryMerchantBalance", $param);
        print_r($result);
    }


    //加密
    function rsaEncrypt($str, $publicKey, $privateKey) {
      $rsaUtil = new RSAUtil($publicKey, $privateKey);
      $encryptStr = $rsaUtil->encrypt($str);
      return $encryptStr;
    }

  	//解密
  	function rsaDecrypt($str, $publicKey, $privateKey) {
  		$rsaUtil = new RSAUtil($publicKey, $privateKey);
  		$encryptStr = $rsaUtil->decrypt($str);
  		return $encryptStr;
  	}

}
