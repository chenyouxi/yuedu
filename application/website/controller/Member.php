<?php
/**
 * Created by PhpStorm.
 * User: chenyouxi
 * Date: 2019/5/29
 * Time: 12:59 PM
 */

namespace app\website\controller;

use think\facade\Cache as Cache;
use think\Controller;
use think\Session;
use think\Cookie;
use think\Request;
use app\common\service\Config as WebConfig;
use app\common\service\User;
use app\common\service\Invite;
use app\common\service\IntegralService;
use app\common\service\TopSellerListService;
use app\common\service\Sms;

use app\common\model\CollectionSellerModel as CollectionSeller;

use think\captcha\Captcha;


class Member extends BaseController
{
    public $user;

    protected $userId;

    public function __construct()
    {
        parent::__construct();
        $this->invite = new Invite();
        $this->integral = new IntegralService();
        $this->topSellerList = new TopSellerListService();
        $this->sms = new Sms();
        $this->user = new User();
        $this->userId = $this->user->getSessionUid();

        $this->init();
        parent::isLogin();
        parent::isBindPhone();
    }

    public function init()
    {

        $member_menu = [
            ["url" => host()."/website/member","name"=>"欢迎页"],
            ["url" => host()."/website/memberInfo","name"=>"个人资料"],
            ["url" => host()."/website/memberSecurity","name"=>"账户安全"],
//            ["url" => host()."/website/memberBalance","name"=>"账户余额"],
            ["url" => host()."/website/myPoint","name"=>"积分明细"],
            ["url" => host()."/website/memberLetter","name"=>"站内信"],
            ["url" => host()."/website/shopBrowsing","name"=>"店铺浏览"],


        ];

        $order_menu = [
            ["url" => host()."/website/memberRecharge","name"=>"充值"],
            ["url" => host()."/website/memberOrder","name"=>"我的充值"],

        ];

        $promotion_menu = [
            ["url" => host()."/website/memberPromotion","name"=>"我的推广"]
        ];

        $this->assign("member_menu" , $member_menu );
        $this->assign("order_menu" , $order_menu );
        $this->assign("promotion_menu",$promotion_menu);

    }

    public function index(){

        $userId = $this->userId;
        $userInfo = $this->user->getUserInfo();
        $inviteData = $this->invite->getList(1, 10, ["userMobile"=>$this->userMobile], "autoId desc","*");
        $web_config = new WebConfig();
        $loginConfig = $web_config->getLoginConfig();
        $this->assign("loginConfig", $loginConfig);
        $title = "91AMZ 简单选品 选品简单 -- 会员中心";

        return view( 'Member/index',compact("title","userId","userInfo","inviteData"));
    }

    public function info(){

        $userId = $this->userId;

        $userInfo = $this->user->getUserInfo();

        $title = "91AMZ 简单选品 选品简单 -个人资料";

        return view( 'Member/info',compact("title","userId","userInfo"));
    }


    /**
     * 编辑头像
     */
    public function modifyFace(){

        if (request()->isAjax()) {

            $userFace = request()->post('user_headimg', '');

            if( empty($userFace) || !$userFace ){

                result_error(11111, '上传头像错误！');

            }

            $userFaceUrl = host().DS.getUploadPath().$userFace;

            $res = $this->user->updateUserFace($userFaceUrl);

            if( $res ){

                result_success($userFaceUrl, '头像修改成功！');

            } else {

                result_error(11111, '头像修改失败！');

            }

        }
    }
    /**
     * 修改用户信息
     */
    public function updateUserInfo(){
        if (request()->isAjax()) {

            $nickName = request()->post('nickName', '');
            $userEmail = request()->post('userEmail', '');
            $userQQ = request()->post('userQQ', '');
            $userLocation = request()->post('userLocation', '');
            $userBirthday = request()->post('userBirthday', '');

            $res = $this->user->updateUserInfo($nickName,$userEmail,$userQQ,$userLocation,$userBirthday);

            if( $res ){
                result_success("", '编辑成功！');
            } else {
                result_error(11111, '编辑失败！');
            }

        }
    }

    /**
     * 账号安全
     */
    public function security(){

        $title = "91AMZ 简单选品 选品简单 -- 账号安全";

        if (request()->get("type") == "password") {

            return view( 'Member/security_password',compact("title"));

        } else if ( request()->get("type") == "mobile"){

            return view( 'Member/security_mobile',compact("title"));

        }

        return view( 'Member/security',compact("title"));
    }

    /**
     *
     *修改登录密码
     */
    public function modifyPassword(){

        if (request()->isAjax()) {

            $mobile = request()->post('mobile', '');

            $verify = request()->post('verify', '');

            $old_password = request()->post('old_password', '');

            $new_password = request()->post('new_password', '');

            $re_new_password = request()->post('re_new_password', '');


            //校验手机号是否存在
            if(!$this->user->mobileIsRegister($mobile)){
                result_error(11111, "该手机号不存在！");
            }


            //校验验证码
            $res = $this->user->checkMobileVerify( $mobile , $verify ,"savePassword" );
            if( $res != 200){
                result_error(11111, $res);
            }

            //校验旧密码是否正确
            if(!$this->user->checkPasswd($old_password)){
                result_error(11111, "旧密码不正确！");
            }

            //校验两次密码输入是否正确
            if( $new_password != $re_new_password){
                result_error(11111, "两次密码输入不一致！");
            }

            $userId =  $this->user->getSessionUid();

            $res = $this->user->updateUserInfoByUserid( $userId , $new_password );

            if( $res ){

                result_success("", '密码修改成功！');

            } else {

                result_error(11111, '密码修改失败！');

            }
        }
    }

    /**
     * 充值
     */

    public function recharge(){

        if( request()->isAjax() ){

            $tradeId = request()->post('tradeId', '');

            //iStatus  -1 未使用   1 已使用
            $inviteInfo = $this->invite->getInviteInfo( $tradeId );

            if( $inviteInfo == NULL){

                result_error(11111, "该支付单号不存在！");

            } else if( $inviteInfo['iStatus'] == "1"){

                result_error(11111, "该支付单号已使用！");

            } else if( $inviteInfo['iStatus'] == "-1"){

                //验证用户是否已绑定手机号
                $userMobile = $this->user->getSessionMobile();

                if(!$userMobile){
                    result_error(11111, "您未绑定手机号，请先绑定手机号！");
                }
                //更新订单状态
                $res = $this->invite->useTrade($tradeId,$this->userId,$userMobile,$inviteInfo['tradePrice']);


                if( $res ){
                    result_success("", '获取积分成功！');
                } else {
                    result_error(11111, "获取积分失败！");
                }
            }
        }


        //获取积分充值规则
        $web_config = new WebConfig();
        $rechargeConfig = $web_config->getRechargeConfig();
        $rechargeValue = $rechargeConfig['configValue'];

        $title = "91AMZ 简单选品 选品简单 -- 充值";
        return view("Member/recharge", compact("title","rechargeValue"));
    }

    /**
     * 站内信
     */
    public function letter(){

        $userId = $this->userId;

        if( request()->isAjax() ){
            //发送站内信消息
            $content = request()->post('content', '');

            if(!$content){
                result_error(11111, "请输入内容！");
            }

            $res = $this->sms->addSms($userId,$content);

            if( $res ){
                result_success("", '发送成功！');
            } else {
                result_error(11111, "发送失败！");
            }
        }


        $list = $this->sms->getList(1, 15, ['userId'=>$userId,'isDel'=>1], "autoId DESC");
        foreach($list as $key => &$value){

            if($value['status']==-1 && $value['smsType']==1){

                $value['content'] = "<img src='/public/static/images/new.gif' style=' position: absolute; right: -20px; top: -20px;' />".$value['content'];

            }
        }
        //更新站内信状态
        $this->sms->updateByMsmStatus($userId);

        $title = "91AMZ 简单选品 选品简单 -- 站内信";
        return view("Member/letter", compact("title","list"));
    }

    /**
     * 修改、绑定手机号
     */
    public function modifyMobile(){

        if( request()->isAjax() ){
            $userId = $this->userId;

            $mobile = request()->post('mobile', '');

            $verify = request()->post('verify', '');

            $verifyCode = request()->post('captcha', '');

            //校验手机号是否已注册
            if($this->user->mobileIsRegister($mobile)){
                result_error(11111, "该手机号已绑定，请重新选择手机号！");
            }
            //校验验证码是否正确
            $captcha = new Captcha();
            if( !$captcha->check($verifyCode) )
            {
                // 验证失败
                result_error(11111, '验证码错误！');
            }
            //校验手机验证码是否正确

            $res = $this->user->checkMobileVerify( $mobile , $verify ,"verify" );
            if( $res != 200){
                result_error(11111, $res);
            }

            $res = $this->user->updateUserMobile($userId,$mobile);

            if( $res ){
                result_success("", '发送成功！');
            } else {
                result_error(11111, "发送失败！");
            }

        }

    }
    /**
     * 我的积分
     */
    public function point(){

        $userId = $this->userId;


        $page = request()->post('page', 1);
        $page_num = request()->post('page_num', 20);


        if( request()->isAjax() ){
            $list = $this->integral->getList($page, $page_num, ['userId'=>$userId], "autoId DESC","*");
            $data = [];
            foreach($list['data'] as $k=>&$v){
                $data[$k] = json_decode(json_encode($v),true);
                $data[$k]['integralType'] = config("integralType")[$v['integralType']];
                $data[$k]['addTime'] = date("Y-m-d H:i:s",$v['addTime']);

            }
            $list['data'] = $data;

            result_success($list,"成功");
        }

        $list = $this->integral->getList(1, 15, ['userId'=>$userId], "autoId DESC",'*');

        $page_count = $list['page_count'];
        $total_count = $list['total_count'];


        $title = "91AMZ 简单选品 选品简单 -- 我的积分";

        return view("Member/point", compact("title","list","page_count","total_count","page","page_num"));
    }

    /**
     * 我的余额
     */
    public function balance(){
        $userId = $this->userId;

        $list = $this->integral->getList(1, 15, ['userId'=>$userId], "autoId DESC");

        $title = "91AMZ 简单选品 选品简单 -- 我的余额";

        return view("Member/balance", compact("title","list"));

    }

    /**
     * 我的订单
     */
    public function order(){

        $page = request()->post('page', 1);
        $page_num = request()->post('page_num', 20);

        if( request()->isAjax() ){
            $list = $this->invite->getList($page, $page_num, ['userMobile'=>$this->userMobile], "autoId DESC","*");
            $data = [];
            foreach($list['data'] as $k=>&$v){
                $data[$k] = json_decode(json_encode($v),true);
                $data[$k]['addTime'] = date("Y-m-d H:i:s",$v['addTime']);
                $data[$k]['useTime'] = date("Y-m-d H:i:s",$v['useTime']);
                $data[$k]['iStatus'] = ($data[$k]['iStatus']>0) ? "已使用" : "未使用";
            }
            $list['data'] = $data;

            result_success($list,"成功");
        }

        $list = $this->invite->getList(1, $page_num, ['userMobile'=>$this->userMobile], "autoId DESC","*");

        $page_count = $list['page_count'];
        $total_count = $list['total_count'];

        $title = "91AMZ 简单选品 选品简单 -- 我的订单";

        return view("Member/order", compact("title","list","page_count","total_count","page","page_num"));

    }

    /**
     * 我的推广
     * Promotion
     */
    public function promotion()
    {

        $userId = $this->userId;

        $inviteId = $userId + 1024;

        $inviteCount = $this->user->getInviteCount();
        $url = host()."/website/shopSelection?inviteId=".$inviteId;
        $title = "91AMZ 简单选品 选品简单 -- 我的推广";
        return view("Member/promotion", compact("title",'url','inviteCount'));
    }


    /**
     * 店铺浏览 数据只保留7天
     */
    public function shopBrowsing(){
        $page = request()->post("page","1");
        $page_num = request()->post("page_size","20");
        $sellerList = Cache::get("use_seller_".$this->userId,[]);

        //删除过期的数据
        $arr = [];
        foreach($sellerList as $key => $val ){
            if( ($val['addTime']+60*60*24*7) < time() ){
                unset($val);
            } else {
                $arr[$key] = $val;
            }
        }
        //Cache::set("use_seller_".$this->userId,$arr);

        rsort($arr);

        $total_count = count($arr);
        $limit = $page_num;
        $page_count = ceil($total_count/$limit);

        if( request()->isAjax() ){
            $arr = array_slice($arr,$limit*($page-1),$limit,true);
            $sellerIdArr = [];
            foreach($arr as $key=>$value){
                $sellerIdArr[] = $value['sellerId'];
                $this->topSellerList->getInfo(["sellerId"=>$value['sellerId'],"country" => $value['station']], '*');
            }

            $sList = $this->topSellerList->getQuery( [['sellerId','in',$sellerIdArr]], '*');

            //店铺收藏
            $CollectionSeller = new CollectionSeller();

            $collectionList = $CollectionSeller -> getQuery([["sellerId","in",$sellerIdArr],['userId','=',$this->userId]],"sellerId","autoId asc");
            $collectionList = json_decode( json_encode($collectionList) ,true );
            $collectionArr = array_column($collectionList,'sellerId','sellerId');
            $collections = implode(",",$collectionArr);
            //获取国家信息
            $countryConfig = config("countryConfig");
            $data = [
                'data' => $sList,
                'page_count' => $page_count,
                'page_num' => $limit,
                'total_count' => $total_count,
                'collectionList' => $collections,
                'countryConfig' => $countryConfig
            ];


            result_success($data,"成功");
        }




        $title = "91AMZ 简单选品 选品简单 -- 店铺浏览";
        return view("Member/sellerList", compact("title","data",'total_count','page','page_count','page_num'));

    }


}



