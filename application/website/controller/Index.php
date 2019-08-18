<?php
namespace app\website\controller;

use think\Controller;
use think\Request;
use think\facade\Cache;
use think\facade\Session;
use app\common\service\User;

class Index extends BaseController{
	
	public function __construct() {
        parent::__construct();

        if( $this->userId ){

            parent::isBindPhone();

        }
    }
	
	public function index(){

	    $title = "91AMZ 简单选品 选品简单 -- 首页";

        return view('Index',compact('title'));

    }


    /**
     * 套餐购买
     */
    public function price(){
        $title = "91AMZ 简单选品 选品简单 -- 套餐购买";
        return view('price',compact('title'));
    }

    /**
     * 插件下载
     */
    public function guide(){
        $title = "91AMZ 简单选品 选品简单 -- 插件下载";
        return view('guide',compact('title'));
    }



}
?>
