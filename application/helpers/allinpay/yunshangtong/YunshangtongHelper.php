<?php
namespace app\helpers\allinpay\yunshangtong;
use app\helpers\allinpay\yunshangtong\SOAClient;
use app\helpers\allinpay\yunshangtong\YunshangtongHelper;

class YunshangtongHelper
{
    protected $config;

    public function send($method, $params)
    {
        $config = config('pay.yunshangtong');
        $client = new SOAClient();
        $serverAddress = $config['serverAddress'];
        $sysid = $config['sysid'];
        $alias = $config['alias'];
        $privatePath = $config['privatePath'];
        $publicPath = $config['publicPath'];
        $pwd = $config['pwd'];
        $signMethod = $config['signMethod'];
        $privateKey = RSAUtil::loadPrivateKey($alias, $privatePath, $pwd);
        $publicKey = RSAUtil::loadPublicKey($alias, $publicPath, $pwd);

        $client->setServerAddress($serverAddress);
        $client->setSignKey($privateKey);
        $client->setPublicKey($publicKey);
        $client->setSysId($sysid);
        $client->setSignMethod($signMethod);

        return $this->$method($client, $publicKey, $privateKey, $params);

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
    function createMember($client, $publicKey, $privateKey, $params) {
      $result = $client->request("MemberService", "createMember", $params);
      return $result;
    }

    //发送短信验证码
    function sendVerificationCode($client, $publicKey, $privateKey, $params) {
      $result = $client->request("MemberService", "sendVerificationCode", $params);
      return $result;
    }

    //绑定手机
    function bindPhone($client, $publicKey, $privateKey, $params) {
      $result = $client->request("MemberService", "bindPhone", $params);
      return $result;
    }

    //绑定手机
    function changeBindPhone($client, $publicKey, $privateKey, $params) {
        $result = $client->request("MemberService", "changeBindPhone", $params);
        return $result;
    }

    //实名认证
    function setRealName($client, $publicKey, $privateKey, $params) {
        $result = $client->request("MemberService", "setRealName", $params);
        return $result;
    }

    //电子签约
    function signContract($client, $publicKey, $privateKey, $params){
      $result = $client->request("MemberService", "signContract", $params);
      return $result;
    }

    //获取会员信息
    function getMemberInfo($client, $publicKey, $privateKey, $params)
    {
        $result = $client->request("MemberService", "getMemberInfo", $params);
        return $result;
    }

    //查询卡 bin
    function getBankCardBin($client, $publicKey, $privateKey, $params)
    {
        $result = $client->request("MemberService", "getBankCardBin", $params);
        return $result;
    }

    //请求绑定银行卡
    function applyBindBankCard($client, $publicKey, $privateKey, $params)
    {
        $result = $client->request("MemberService", "applyBindBankCard", $params);
        return $result;
    }

    function bindBankCard($client, $publicKey, $privateKey, $params)
    {
        $result = $client->request("MemberService", "bindBankCard", $params);
        return $result;
    }

    function unbindBankCard($client, $publicKey, $privateKey, $params)
    {
        $result = $client->request("MemberService", "unbindBankCard", $params);
        return $result;
    }

    //请求绑定银行卡
    function queryBankCard($client, $publicKey, $privateKey, $params)
    {
        $result = $client->request("MemberService", "queryBankCard", $params);
        return $result;
    }

    //托管代收申请
    function  agentCollectApply($client, $publicKey, $privateKey, $params) {
        $result = $client->request("OrderService", "agentCollectApply", $params);
        return $result;
    }

    function pay($client, $publicKey, $privateKey, $params) {
        $result = $client->request("OrderService", "pay", $params);
        return $result;
    }

    //批量托管代付
    function batchAgentPay($client, $publicKey, $privateKey, $params) {
      $result = $client->request("OrderService", "batchAgentPay", $params);
      return $result;
    }

    function signalAgentPay($client, $publicKey, $privateKey, $params) {
        $result = $client->request("OrderService", "signalAgentPay", $params);
        return $result;
    }

    function depositApply($client, $publicKey, $privateKey, $params) {
      $result = $client->request("OrderService", "depositApply", $params);
      return $result;
    }

    //会员账户余额查询
    function queryBalance($client, $publicKey, $privateKey, $params) {
        $result = $client->request("OrderService", "queryBalance", $params);
        return $result;
    }

    //提现申请
    function withdrawApply($client, $publicKey, $privateKey, $params) {
      $result = $client->request("OrderService", "withdrawApply", $params);
      return $result;
    }

    //申请退款
    function refund($client, $publicKey, $privateKey, $params) {
      $result = $client->request("OrderService", "refund", $params);
      return $result;
    }

    //查看订单状态
    function getOrderDetail($client, $publicKey, $privateKey, $params) {
      $result = $client->request("OrderService", "getOrderDetail", $params);
      return $result;
    }

    //消费申请
    function consumeApply($client, $publicKey, $privateKey, $params) {
      $result = $client->request("OrderService", "consumeApply", $params);
      return $result;
    }

    //标识
    function applyBindAcct($client, $publicKey, $privateKey, $params) {
      $result = $client->request("MemberService", "applyBindAcct", $params);
      return $result;
    }

    //平台账户集余额查询
    function queryMerchantBalance($client, $publicKey, $privateKey, $params)
    {
        $result = $client->request("MerchantService", "queryMerchantBalance", $params);
        return $result;
    }

//    //4.2.21 查询账户收支明细 bizUserId，返回未知错误，用不了
//    function queryInExpDetail($client, $publicKey, $privateKey, $params) {
//        $result = $client->request("OrderService", "queryInExpDetail", $params);
//        return $result;
//    }

    //4.2.23 收款方在途资金明细查询 bizUserId
    function getPaymentInformationDetail($client, $publicKey, $privateKey, $params) {
        $result = $client->request("OrderService", "getPayeeFundsInTransitDetail", $params);
        return $result;
    }

    //4.2.23 收款方在途资金明细查询 bizUserId
    function getPayeeFundsInTransitDetail($client, $publicKey, $privateKey, $params) {
        $result = $client->request("OrderService", "getPayeeFundsInTransitDetail", $params);
        return $result;
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
