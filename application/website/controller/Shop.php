<?php
/**
 * Created by PhpStorm.
 * User: chenyouxi
 * Date: 2019/6/11
 * Time: 3:51 PM
 */
namespace app\website\controller;
set_time_limit(0);
use think\Controller;


use Keepa\objects\AmazonLocale;
use Keepa\objects\ProductFinderRequest;

use think\facade\Cache;
use think\facade\Cookie;
use app\common\service\User;
use app\common\service\TopSellerListService;
use app\common\service\KeepaService;
use app\common\service\NodeService;

use app\common\model\CollectionSellerModel as CollectionSeller;
use think\Db;
use PHPExcel_IOFactory;
use PHPExcel;
use app\common\service\Config as WebConfig;

class Shop extends BaseController{

    private $getSellerInfoPath;

    public function __construct() {
        parent::__construct();

        $this->topSellerList = new TopSellerListService();

        $this->keepaService = new KeepaService();

        $this->node = new NodeService();

        $this->web_config = new WebConfig();

        $country = Cache::get("country",'us');

        if( $this->userId ){

            parent::isBindPhone();

        }

        $this->assign('page_count', 1);
        $this->assign('total_count', 1);
        $this->assign('page', 1);
        $this->assign('page_num', 1);
        $this->assign('country', $country);

        //从缓存获取店铺信息
        $this -> getSellerInfoPath =  \think\facade\Env::get('runtime_path') . 'getSellerInfo/'.date('Ymd');
    }



    public function selection(){

        $page = request()->post('pageindex', '1');

        //国家
        $station = request()->post("station","us");

        $page_size = request()->post('pageSize', '20');

        //是否带有推广链接
        $inviteId = request()->get('inviteId', '');

        if($inviteId){
            //设置过期时间为24个小时
            Cookie::set("inviteUserId", $inviteId-1024, 24000 * 3600);
        }
        //获取国家信息
        $countryConfig = config("countryConfig");
        $userBehavior = Cache::get("user_behavior_".$this->userId );
//echo json_encode($userBehavior);die;
        if( request()->isAjax() ){

            //判断是否已经登录
            if( !$this->userId ){
                result_error(000000, '您未登录，请先登录！');
            }

            //筛选条件
            $ratingStart = request()->post('ratingStart','');

            $ratingEnd = request()->post('ratingEnd','');

            $totalStart = request()->post('totalStart','');

            $totalEnd = request()->post('totalEnd','');

            $reviewThirtyDaysStart = request()->post('reviewThirtyDaysStart','');

            $reviewThirtyDaysEnd = request()->post('reviewThirtyDaysEnd','');

            $verifiedListingsStart = request()->post('verifiedListingsStart','');

            $verifiedListingsEnd = request()->post('verifiedListingsEnd','');

            $orderBy = request()->post("orderBy","autoId");

            $sort = request()->post("sort","DESC");

            $isFBA = request()->post("isFBA","");

            $keyword = request()->post("keyword","");

            $departments = request()->post("departments","");

            $userBehaviorKey = request()->post('userBehaviorKey');
//是否要导出
            $isExport = request()->post("isExport","");
            //保存一个礼拜的用户操作行为数据
            $behaviorArr = [];

            if(isset($userBehaviorKey)){
                //历史记录查询
                $ratingStart = $userBehavior[$userBehaviorKey]['ratingStart'];
                $ratingEnd = $userBehavior[$userBehaviorKey]['ratingEnd'];
                $totalStart = $userBehavior[$userBehaviorKey]['totalStart'];
                $totalEnd = $userBehavior[$userBehaviorKey]['totalEnd'];
                $reviewThirtyDaysStart = $userBehavior[$userBehaviorKey]['reviewThirtyDaysStart'];
                $reviewThirtyDaysEnd = $userBehavior[$userBehaviorKey]['reviewThirtyDaysEnd'];
                $verifiedListingsStart = $userBehavior[$userBehaviorKey]['verifiedListingsStart'];
                $verifiedListingsEnd = $userBehavior[$userBehaviorKey]['verifiedListingsEnd'];
                $orderBy = $userBehavior[$userBehaviorKey]['orderBy'];
                $sort = $userBehavior[$userBehaviorKey]['sort'];
                $isFBA = $userBehavior[$userBehaviorKey]['isFBA'];
                $keyword = $userBehavior[$userBehaviorKey]['keyword'];
                $departments = $userBehavior[$userBehaviorKey]['departments'];
                $station = $userBehavior[$userBehaviorKey]['station'];


            } else {
                if( $page == 1 && !$isExport){ //排除分页查询和导出添加数据
                    $behaviorArr[time()] = [
                        'addTime' => time(),
                        'ratingStart' => $ratingStart,
                        'ratingEnd' => $ratingEnd,
                        'totalStart' => $totalStart,
                        'totalEnd' => $totalEnd,
                        'reviewThirtyDaysStart' => $reviewThirtyDaysStart,
                        'reviewThirtyDaysEnd' => $reviewThirtyDaysEnd,
                        'verifiedListingsStart' => $verifiedListingsStart,
                        'verifiedListingsEnd' => $verifiedListingsEnd,
                        'orderBy' => $orderBy,
                        'sort' => $sort,
                        'isFBA' => $isFBA,
                        'keyword' => $keyword,
                        'departments' => $departments,
                        'station' => $station
                    ];

                    if( $userBehavior ){
                        //删除过期的数据
                        $ubList = [];
                        foreach($userBehavior as $key => $val ){
                            if( ($val['addTime']+60*60*24*7) < time() ){
                                unset($val);
                            } else {
                                $ubList[$key] = $val;
                            }
                        }

                        $userBehavior = $ubList + $behaviorArr;

                        Cache::set("user_behavior_".$this->userId,$userBehavior);

                    } else {
                        Cache::set("user_behavior_".$this->userId,$behaviorArr);
                    }
                }

            }



//var_dump( request()->post() );die;
            $condition = [];


            if( $ratingStart ){
                $condition[] = ['rating', '>=', $ratingStart];
            }
            if ( $ratingEnd ){
                $condition[] = ['rating', '<=', $ratingEnd];
            }
            if ( $totalStart ){
                $condition[] = ['reviewTotals', '>=', $totalStart];
            }
            if ( $totalEnd ){
                $condition[] = ['reviewTotals', '<=', $totalEnd];
            }
            if ( $reviewThirtyDaysStart ){
                $condition[] = ['reviewThirtyDays', '>=', $reviewThirtyDaysStart];
            }
            if ( $reviewThirtyDaysEnd ){
                $condition[] = ['reviewThirtyDays', '<=', $reviewThirtyDaysEnd];
            }
            if ( $verifiedListingsStart ){
                $condition[] = ['verifiedListings', '>=', $verifiedListingsStart];
            }
            if( $verifiedListingsEnd ){
                $condition[] = ['verifiedListings', '<=', $verifiedListingsEnd];
            }
            if ( $isFBA ){
                $isFBA = implode(",",$isFBA);
                $condition[] = ['isFBA', 'in', $isFBA ];
            }

            if($station){
                $condition[] = ['country', '=', $station];
            }

            if( $departments ){
                $condition[] = ['nodeIdPrimarily', 'in', $departments ];
            }

            if($keyword){
                //如果是店铺名称筛选的话，这里屏蔽掉其他筛选，除了国家
                $condition = [];
                $condition[] = ['country', '=', $station];
                $condition[] = ['shop_name', 'like', "%".$keyword."%"];
            }

//echo json_encode($condition);die;

            //导出数据
            if($isExport == 1){
                set_time_limit(0);

                $xlsName = "店铺列表";
                $xlsCell = array(
                    array('ranking','排名'),
                    array('shop_name','店铺名称'),
                    array('rating','综合评分'),
                    array('reviewTotals','FeedBack总数量'),
                    array('reviewThirtyDays','最近30天Feedback数量'),
                    array('isFBA','是否支持FBA'),
                    array('verifiedListings','商品数量'),
                    array('sellingPrimarily','主要销售类目'),
                    array('ratePrimarily','类目占比'),
                    array('sellerId','店铺ID'),
                    array('country','国家'),
                    array('autoId','链接地址')
                );//查出字段输出对应Excel对应的列名

                $dataCount = $this->topSellerList->count($condition);
                $list = $this->topSellerList->getList($page, 20000, $condition, $orderBy." ".$sort,"ranking,shop_name,rating,reviewTotals,reviewThirtyDays,isFBA,verifiedListings,sellingPrimarily,ratePrimarily,sellerId,country,autoId");
                $res = $this->export_excel($xlsName,$xlsCell,$dataCount,$list['data'],1);
                result_success($res, '导出成功！');
            } else {

                //从数据库中获取
                $list = $this->topSellerList->getList($page, $page_size, $condition, $orderBy." ".$sort);

                //$list = json_decode(json_encode($list,true),true);
            }

            if($list['total_count']==0 && !$userBehaviorKey){
                //筛选结果为空时，回退积分
                $this->user->backIntegral("sellerFilter");
            }
            $list['countryConfig'] = $countryConfig;

            $list['userBehavior'] = !empty($userBehavior[$userBehaviorKey]) ? $userBehavior[$userBehaviorKey] : false;

            if($list['userBehavior']){
                if($list['userBehavior']['departments']){
                    $departments = implode( ',',$list['userBehavior']['departments'] );
                    $depList = $this -> node -> getList(1, 1000, [['nodeId','in',$departments]], "autoId ASC","arr");
                    $list['userBehavior']['departmentsList'] = $depList;
                }
                $list['userBehavior']['countryName'] = $countryConfig[$station]['cityName'];
            }

            //获取用户收藏店铺信息
            $sellerIdArr = [];
            foreach($list['data'] as $key => $value){
                $sellerIdArr[] = $value['sellerId'];
            }



            $CollectionSeller = new CollectionSeller();

            $collectionList = $CollectionSeller -> getQuery([["sellerId","in",$sellerIdArr],['userId','=',$this->userId]],"sellerId","autoId asc");
            $collectionList = json_decode( json_encode($collectionList) ,true );
            $collectionArr = array_column($collectionList,'sellerId','sellerId');
            $collections = implode(",",$collectionArr);
            $list['collectionList'] = $collections;

            result_success($list, '发送成功！');
        }


        //获取商品类目
        $nodeList = $this->node -> getList(1, 1000, ['country'=>$station,'parentNodeId'=>0], "nodeName ASC","arr");




        //获取积分充值规则

        $getSellerInfoConfig = $this->web_config->getSellerInfoConfig();
        $getFilterSellerConfig = $this->web_config->getFilterSellerConfig();
        $getSPLC = $this->web_config->getSellerProductListConfig();

        $getSIV = $getSellerInfoConfig['configValue'];
        $getFSV = $getFilterSellerConfig['configValue'];
        $getSPLV = $getSPLC['configValue'];

        $title = "91AMZ 简单选品 选品简单 -- 店铺选品";

        $totalCount = 0;
        $pageCount = 0;

        return view('selection',compact('title','countryConfig','nodeList','getSIV','getFSV','getSPLV','userBehavior','totalCount','pageCount'));
    }

    public function ajaxUserBehavior(){

        //获取用户的筛选历史记录
        $page = request()->post("page","1");
        $userBehavior = Cache::get("user_behavior_".$this->userId);

        $ubList = [];
        foreach($userBehavior as $key => $val ){
            if( ($val['addTime']+60*60*24*7) < time() ){
                unset($val);
            } else {
                $ubList[$key] = $val;
            }
        }
        $userBehavior = $ubList;

        rsort($userBehavior);

        $totalCount = count($userBehavior);
        $limit = 50;
        $pageCount = ceil($totalCount/$limit);

        $userBehavior = array_slice($userBehavior,$limit*($page-1),$limit,true);


        foreach($userBehavior as $k => &$v){
            $v['countryName'] = __getCountryConfig($v['station'])['cityName'];

            $list = $this->node -> getList(1, 1000, [['nodeId','in',$v['departments']]], "autoId ASC","arr");

            $v['departmentsList'] = $list;



        }

        $data = [
            'userBehavior' => $userBehavior,
            'pageCount' => $pageCount,
            'pageSize' => $limit,
            'totalCount' => $totalCount
        ];

        result_success($data, '发送成功！');
    }

    /**
     * 店铺详情内容
     */
    public function shopView(){

        $sellerId = request()->get("sellerId");
        $station = request()->get("station");
        $point = request()->get("point");
        $remark = $station."_".$sellerId;

        if(!$sellerId){
            $this->error('缺少参数');
        }

        if(!$this->userId){
            $this->error("您未登录，请先登录！", "/website/login");
        }


        $caches = Cache::get("use_seller_".$this->userId,[]);

        if( $caches ){
            //删除过期的数据，数据保留7天
            $arr = [];
            foreach($caches as $key => $val ){
                if( ($val['addTime']+60*60*24*7) < time() ){
                    unset($val);
                } else {
                    $arr[$key] = $val;
                }
            }
            if( !deep_in_array($sellerId,$arr) ){

                $userInfo = $this->user->getUserInfo("integral");

                //判断积分是否足够
                if($userInfo['integral'] < $point){
                    $this->error("您的积分不足，请及时充值哦！",'/website/memberRecharge');
                }
                //消费积分

                //查看商家详情扣除两份积分：热卖商品列表、商家详情
                //扣除查看商品列表积分
                $res = $this->user->consumption("sellerProductList",$remark);
                if(!$res){
                    $this->error(111113,"积分扣除失败！");
                }
                $res = $this->user->consumption("sellerInfo",$remark);
                if(!$res){
                    $this->error(111113,"积分扣除失败！");
                }
                $seller = [
                    'addTime' => time(),
                    'sellerId' => $sellerId,
                    'station' => $station
                ];

                array_push($arr,$seller);
                Cache::set("use_seller_".$this->userId,$arr);
            } else {

                Cache::set("use_seller_".$this->userId,$arr);
            }
        } else {
            $seller = [
                'addTime' => time(),
                'sellerId' => $sellerId,
                'station' => $station
            ];
            Cache::set("use_seller_".$this->userId,[$seller]);
        }
        //获取积分信息
        $getProductInfoConfig = $this->web_config->getProductInfoConfig();
        $getProductInfoValue = $getProductInfoConfig['configValue'];


        $title = "91AMZ 简单选品 选品简单 -- 店铺选品";
        return view('view',compact('title','sellerId','getProductInfoValue','station'));
    }

    public function ajaxShopView(){

        if(request()->isAjax()){

            $sellerId = request()->post("sellerId");
            $station = request()->post("station");

            //保留一个礼拜
            $path = getRuntimePath("getSellerInfo").DS.date('Y').date('W',time());

            if (!file_exists( $path.DS.$sellerId."_".$station.".txt" ) ){
                //获取店铺信息
                $domainID = getDomainID($station);

                $sellerArr = [$sellerId];

                $storefront = 1;//如果是1则返回商品列表数据

                $res = $this->keepaService->getSellerList($domainID,  $sellerArr,$storefront);

                if( $res ){

                    $sellerInfo = json_decode(json_encode( $res[$sellerId]  ),true);

                    //获取店铺最新评分
                    $sellerInfo['rating'] = $sellerInfo['csv'][0][count($sellerInfo['csv'][0]) - 1];

                    $sellerInfo['reviews'] = $sellerInfo['csv'][1][count($sellerInfo['csv'][1]) - 1];

                    $sellerInfo['trackedSince'] = ( $sellerInfo['trackedSince'] + 21564000 ) * 60;



                    //获取店铺分类信息
                    if( $sellerInfo['sellerCategoryStatistics'] ){

                        $sellerInfo['listingCount'] = 0;

                        $categoryIdArr = [];

                        foreach( $sellerInfo['sellerCategoryStatistics'] as $k => &$v ){

                            if( !empty($v['catId']) ){
                                //Listings
                                $sellerInfo['listingCount'] +=  $v['productCount'];
                                $categoryIdArr[$k] = $v['catId'];
                                $domainID = getDomainID($station);

                            }
                        }

                        $sellerCategoryInfo = $this->keepaService->getCategoryInfo( $domainID,  implode(',',$categoryIdArr),0 );
                        $sellerInfo['sellerCategoryInfo'] = $sellerCategoryInfo;
                    }


                    if( $sellerInfo ){

                        //获取到数据之后存储到缓存文件

                        is_dir($path ) or mkdir($path, 0777, true);

                        $put_file = $sellerId."_".$station.'.txt';

                        file_put_contents($path.DS.$put_file,json_encode($sellerInfo,true));

                    }
                } else {
                    $sellerInfo = "";
                    //回退积分
                    $this->user->backIntegral("sellerInfo");

                }


            } else {

                $sellerInfo = file_get_contents($path.DS.$sellerId."_".$station.".txt");

                $sellerInfo = json_decode( $sellerInfo,true );

            }



            $ratingData = [];

            $reviewsData = [];

            $listingData = [];
            if ($sellerInfo) {
                //rating csv
                $ratingDatax = [];

                $ratingDatay = [];

                for ($y = 0; $y < count($sellerInfo['csv'][0]); $y++) {

                    if ($y % 2 == 0) {

                        $ratingDatax[] = $sellerInfo['csv'][0][$y];

                    } else {

                        $ratingDatay[] = $sellerInfo['csv'][0][$y];

                    }

                }
//reviews csv
                $reviewsDatax = [];

                $reviewsDatay = [];

                for ($y = 0; $y < count($sellerInfo['csv'][1]); $y++) {

                    if ($y % 2 == 0) {

                        $reviewsDatax[] = $sellerInfo['csv'][1][$y];

                    } else {

                        $reviewsDatay[] = $sellerInfo['csv'][1][$y];

                    }

                }
//listing csv
                $listingDatax = [];

                $listingDatay = [];

                for ($y = 0; $y < count($sellerInfo['totalStorefrontAsinsCSV']); $y++) {

                    if ($y % 2 == 0) {

                        $listingDatax[] = $sellerInfo['totalStorefrontAsinsCSV'][$y];

                    } else {

                        $listingDatay[] = $sellerInfo['totalStorefrontAsinsCSV'][$y];

                    }

                }

                foreach ($ratingDatax as $k_1 => $v_1) {
                    $ratingData[$k_1][] = ($v_1 + 21564000) * 60 * 1000;
                    $ratingData[$k_1][] = $ratingDatay[$k_1];
                }

                foreach ($reviewsDatax as $k_2 => $v_2) {
                    $reviewsData[$k_2][] = ($v_2 + 21564000) * 60 * 1000;
                    $reviewsData[$k_2][] = $reviewsDatay[$k_2];
                }

                foreach ($listingDatax as $k_3 => $v_3) {
                    $listingData[$k_3][] = ($v_3 + 21564000) * 60 * 1000;
                    $listingData[$k_3][] = $listingDatay[$k_3];
                }

                $data['ratingData'] = $ratingData;
                $data['reviewsData'] = $reviewsData;
                $data['listingData'] = $listingData;
            }


            $data['sellerInfo'] = $sellerInfo;

            result_success($data,"success");
        }
    }

    /**
     * 店铺商品
     */
    public function productList(){

        set_time_limit(0);
        if( request()->isAjax() ) {
            $sellerId = request()->get("sellerId");
            $station = request()->get("station");
            if(!$sellerId || !$station){
                echo json_encode("缺少参数");
            }
            $domainID = getDomainID($station);

            $path = getRuntimePath("sellerAsinList").DS.date('Y').date('W',time());
            $data = [];
            if( !file_exists( $path.DS.$sellerId."_".$station.".txt" ) ){
                if (!file_exists( getRuntimePath("getSellerInfo").DS.date('Y').date('W',time()).DS.$sellerId."_".$station.".txt" ) ){

                    //通过sellerId获取店铺商品

                    $selection = new ProductFinderRequest();

                    $selection->sellerIds = [$sellerId];

                    $selection->perPage = 50; //最小为50

                    $selection->page = 0;

                    $selection->rootCategory = null;

                    $selection->sort = [["current_SALES","asc"]];

                    $selection->productType = [0,1,5];

                    $asinList = $this->keepaService->getQuery($domainID,  $selection);
                } else {

                    $sellerInfo = file_get_contents(getRuntimePath("getSellerInfo").DS.date('Y').date('W',time()).DS.$sellerId."_".$station.".txt");
                    $sellerInfo = json_decode( $sellerInfo,true );

                    if( !$sellerInfo['asinList'] ){

                        $asinList = [];

                    } else {
                        $asinList = array_slice($sellerInfo['asinList'],0,50,true);
                    }


                }



                if($asinList){

                    $productList = $this->keepaService->getProduct($domainID,0,date("Y-m-d",time()-86400),date("Y-m-d",time()), 0 , false,$asinList,1);

                    if($productList){
                        foreach ($productList as $k=>$product){
                            //产品图片	产品名称	价格	评论数	星级	大类排名	预计 月销量	上架时间
                            $data[$k]['images'] = explode(",",$product->imagesCSV);
                            //获取商品名称
                            $data[$k]['title'] = htmlspecialchars($product->title);

                            //获取商品根类别
                            $data[$k]['rootCategory'] = $product->rootCategory;

                            //获取商品分类名称
//                            $res = $this->keepaService->getCategoryInfo( $domainID,  $product->rootCategory );
//
//                            if($res){
//                                $result = object_array( $res );
//                                $data[$k]['categoryName'] = $result[$product->rootCategory]['name'];
//                            } else {
//                                $data[$k]['categoryName'] = "-";
//                            }

                            //获取商品亚马逊类别ID
                            $data[$k]['categories'] = $product->categories;

                            //获取商品是否有评论
                            $data[$k]['hasReviews'] = $product->hasReviews;

                            //亚马逊产品类型分类
                            $data[$k]['type'] = $product->type;

                            //获取该产品的件数
                            $data[$k]['numberOfItems'] = $product->numberOfItems;

                            //获取该产品的发布日期
                            $data[$k]['publicationDate'] = $product->publicationDate;

                            //获取该商品的报价
                            $data[$k]['offers'] = $product->offers;

                            //stats
                            $data[$k]['stats'] = $product->stats;

                            //asin
                            $data[$k]['asin'] = $product->asin;

                            //上架时间
                            $data[$k]['releaseDate'] = timeChange($product->releaseDate);

                            //获取跟踪时间
                            $data[$k]['trackingSince'] = ( $product->trackingSince + 21564000 )*60;

                            //商品分类类目
                            $data[$k]['categoryTree'] = $product->categoryTree;

                            $data[$k]['webUrl'] = config("countryConfig")[$station]['webUrl'];


                        }
                    }


                    //获取到数据之后存储到缓存文件
                    is_dir( $path ) or mkdir($path, 0777, true);
                    $put_file = $sellerId."_".$station.'.txt';
                    file_put_contents($path.DS.$put_file,json_encode($data,true));

                } else {
                    //回退积分
                    $this->user->backIntegral("sellerProductList");
                }

            } else {

                $data = file_get_contents($path.DS.$sellerId."_".$station.".txt");

                $data = json_decode( $data,true );

            }


            return $data;
        }


    }

    /**
     * 获取商品分类详情
     */
//    public function ajaxGetCategoryInfo($station){
//
//        if( request()->isAjax() ){
//
//            $domainID = getDomainID($station);
//
//            $rootCategory = request()->post("rootCategory");
//            //获取商品分类名称
//            $res = $this->keepaService->getCategoryInfo( $domainID,  $rootCategory );
//
//            if($res){
//                $result = object_array( $res );
//                $categoryName = $result[$rootCategory]['name'];
//            } else {
//                $categoryName = "-";
//            }
//
//            result_success($categoryName,"success");
//        }
//
//    }

    /**
     * 公共数据导出实现功能
     * @param $expTitle 导出文件名
     * @param $expCellName 导出文件列名称
     * @param $expTableData 导出数据
     */
    public function export_excel($expTitle,$expCellName,$dataCount,$expTableData,$isAjax=0)
    {


        $xlsTitle = iconv('utf-8', 'gb2312', $expTitle);//文件名称
        $fileName = $expTitle . date('_Ymd');//or $xlsTitle 文件名称可根据自己情况设定
        $cellNum = count($expCellName);
        $dataNum = count($expTableData);
        $objPHPExcel = new PHPExcel();//方法一
        $cellName = array('A','B', 'C','D', 'E', 'F','G','H','I', 'J', 'K','L','M', 'N', 'O', 'P', 'Q','R','S', 'T','U','V', 'W', 'X','Y', 'Z', 'AA',
            'AB', 'AC','AD','AE', 'AF','AG','AH','AI', 'AJ', 'AK', 'AL','AM','AN','AO','AP','AQ','AR', 'AS', 'AT','AU', 'AV','AW', 'AX',
            'AY', 'AZ');
        //设置头部导出时间备注
        $objPHPExcel->getActiveSheet(0)->mergeCells('A1:' . $cellName[$cellNum - 1] . '1');//合并单元格
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', $expTitle . ' 导出时间:' . date('Y-m-d H:i:s'));
        //设置列名称
        for ($i = 0; $i < $cellNum; $i++) {
            $objPHPExcel->setActiveSheetIndex(0)->setCellValue($cellName[$i] . '2', $expCellName[$i][1]);
        }


        //赋值
        for ($i = 0; $i < $dataNum; $i++) {

            for ($j = 0; $j < $cellNum; $j++) {

                $pValue = $expTableData[$i][$expCellName[$j][0]];

                if($expCellName[$j][0] == 'rating'){

                    $pValue = $expTableData[$i][$expCellName[$j][0]]."%";

                } else if ( $expCellName[$j][0] == 'isFBA' ){

                    $pValue = $expTableData[$i][$expCellName[$j][0]]>0 ? "Yes" : "No";

                } else if ( $expCellName[$j][0] == 'ratePrimarily' ){

                    $pValue = $expTableData[$i][$expCellName[$j][0]]."%";

                } else if ($expCellName[$j][0] == 'sellerId'){

                    $countryConfig = config("countryConfig");
                    $pValue = "https://www.".$countryConfig[$expTableData[$i]['country']]['webUrl']."/s?marketplaceID=".$countryConfig[$expTableData[$i]['country']]['marketplaceID']."&me=".$expTableData[$i]['sellerId']."&merchant=".$expTableData[$i]['sellerId']."&redirect=true";

                } else if ($expCellName[$j][0] == 'autoId'){

                    $countryConfig = config("countryConfig");
                    $pValue = "https://www.".$countryConfig[$expTableData[$i]['country']]['webUrl']."/s?marketplaceID=".$countryConfig[$expTableData[$i]['country']]['marketplaceID']."&me=".$expTableData[$i]['sellerId']."&merchant=".$expTableData[$i]['sellerId']."&redirect=true";
                }


                $objPHPExcel->getActiveSheet(0)->setCellValue( $cellName[$j] . ($i + 3),  $pValue );
            }
        }


        ob_end_clean();//这一步非常关键，用来清除缓冲区防止导出的excel乱码
        header('pragma:public');
        header('Content-type:application/vnd.ms-excel;charset=utf-8;name="' . $xlsTitle . '.xlsx"');
        header("Content-Disposition:attachment;filename=$fileName.xlsx");//"xls"参考下一条备注
        $objWriter = \PHPExcel_IOFactory::createWriter( $objPHPExcel, 'Excel2007' );
        //"Excel2007"生成2007版本的xlsx，"Excel5"生成2003版本的xls

        if($isAjax){
            $filePath = __ROOT__.'/public/excel/'.$fileName.'.xlsx';
            $objWriter->save($filePath);
            $url = host().'/public/excel/'.$fileName.'.xlsx';
            return $url;
        } else {
            $objWriter->save('php://output');
        }

    }



    /**
     * 导出商家列表
     *
     */
    public function expExcel(){
        $list = $this->topSellerList->getList(1, 15, [], "rating desc");
        $xlsName = "店铺列表";
        $xlsCell = array(
            array('shop_name','商家名称'),
            array('rating','商家评级'),
            array('reviewTotals','FeedBack Total'),
            array('reviewThirtyDays','Last 30 Days'),
            array('isFBA','Uses FBA'),
            array('verifiedListings','Verified Listings'),
            array('sellingPrimarily','Selling primarily'),
            array('sellerId','Seller Id')
        );//查出字段输出对应Excel对应的列名
        //公共方法调用

        $this->export_excel($xlsName,$xlsCell,$list['data']);
        die;
    }

    /**
     * 切换商家分类
     */
    public function getNodeList(){

        if( request()->isAjax() ) {

            $country = request()->post("country");

            $type = request()->post("type",'');

            $parentNodeId = request()->post("parentNodeId",0);
            error_log("\r\n".date("Y-m-d H:i:s").",run1:".json_encode($parentNodeId),3,dirname(__FILE__)."/__index.log");

            if( $parentNodeId ){
                $parentNodeId = explode(":",$parentNodeId);
                $parentNodeId = end($parentNodeId);
            } else {
                $parentNodeId = 0;
            }


            $page_size = request()->post("page_size",1000);

            $nodeList = $this -> node -> getList(1, $page_size, ['country'=>$country,'parentNodeId'=>$parentNodeId], "nodeName ASC","arr");


            $count = count($nodeList);

            if($type == 'seller'){
                $limit = round($count/3);
                $list = [
                    array_slice($nodeList,0,$limit,true),
                    array_slice($nodeList,$limit,$limit,true),
                    array_slice($nodeList,$limit*2)
                ];

            } else if($type == 'product'){
                $count = $count;
                $limit = round($count/2);

                $list = [
                    array_slice($nodeList,0,$limit-1,true),
                    array_slice($nodeList,$limit-1)
                ];
            } else {

                $items = [];
                $parent = [];
                if($nodeList){
                    foreach($nodeList as $key=>$val){
                        $items[$key] = $this->getNodeInfo($val['nodeId']);
                    }
                    if( $nodeList[0]['parentNodeId'] == 0 ){
                        $parent = false;
                    } else {
                        $parent = $this->getNodeInfo($parentNodeId);
                    }
                } else {
                    $parent = $this->getNodeInfo($parentNodeId);
                }

                $data['items'] = $items;
                $data['parent'] = $parent;


                result_success($data,'success');
            }
            return view('category',compact('list','type'));
        }

    }

    /**
     *
     */
    public function getNodeInfo($nodeId,&$label='',&$id=''){

        $nodeInfo = $this -> node -> getInfo(['nodeId'=>$nodeId] , "*" );
        error_log("\r\n".date("Y-m-d H:i:s").",run1:".json_encode($nodeId),3,dirname(__FILE__)."/__index.log");

        $id = $id ? $nodeInfo['nodeId'].':'.$id : $nodeInfo['nodeId'];
        $label = $label ? $nodeInfo['nodeName'].':'.$label : $nodeInfo['nodeName'];
        error_log("\r\n".date("Y-m-d H:i:s").",run1:".json_encode($nodeInfo),3,dirname(__FILE__)."/__index.log");

        if($nodeInfo['parentNodeId'] != 0){
            $this->getNodeInfo($nodeInfo['parentNodeId'],$label,$id);
        }
        $arr = [
            'id' => $id,
            'label' => $label,
            'products' => $nodeInfo['productCount']
        ];
        return $arr;


    }

    /**
     * 查看用户积分
     */
    public function checkUserPoint(){

        if( request()->isAjax() ){
            if(!$this->userId){
                result_error(111111, "您未登录，请先登录！");
            }
            $userInfo = $this->user->getUserInfo("integral");
            $point = request()->post("point");
            $asin = request()->post("asinId");

            //判断积分是否足够
            if($userInfo['integral'] < $point){
                result_error(111112,"您的积分不足，请及时充值哦！");
            }
            //消费积分
            $type = request()->post("type");
            $remark = request()->post("remark","");
            //查看商家详情扣除两份积分：热卖商品列表、商家详情
            if($type == "sellerInfo"){
                //扣除查看商品列表积分
                $res = $this->user->consumption("sellerProductList",$remark);
                if(!$res){
                    result_error(111113,"积分扣除失败！");
                }
                $res = $this->user->consumption("sellerInfo",$remark);
            } else if($type == "sellerFilter"){
                //筛选店铺
                $res = $this->user->consumption("sellerFilter",$remark);
            } else if ( $type == "productInfo" ){

                $caches = Cache::get("use_product_".$this->userId,array());


                if(!in_array($asin,$caches) || $caches==false){
                    $res = $this->user->consumption("productInfo",$remark);

                    if($caches){
                        array_push($caches,$asin);
                        Cache::set("use_product_".$this->userId,$caches,60*60*24);
                    } else {
                        Cache::set("use_product_".$this->userId,[$asin],60*60*24);
                    }

                } else {
                    result_success($userInfo['integral'], '发送成功！');
                }
            }


            if(!$res){
                result_error(111113,"积分扣除失败！");
            }



            if( $userInfo ){
                result_success($userInfo['integral'], '发送成功！');
            } else {
                result_error(11111, "发送失败！");
            }

        }
    }

    /**
     * amzChat
     */
    public function ajaxChat()
    {

        set_time_limit(0);
        $sellerId = request()->get("sellerId");
        $station = request()->get("station");

        $path = getRuntimePath("getSellerInfo") . DS . date('Y').date('W',time());
        if (!file_exists($path . DS . $sellerId . ".txt")) {
            //程序正常不会走到这里，以防万一前面没有获取到店铺信息，这里重新获取
            //获取店铺信息
            $domainID = getDomainID($station);

            $sellerArr = [$sellerId];

            $storefront = 1;

            $res = $this->keepaService->getSellerList($domainID, $sellerArr, $storefront);

            if ($res) {

                $sellerInfo = json_decode(json_encode($res[$sellerId]), true);

                //获取店铺最新评分
                $sellerInfo['rating'] = $sellerInfo['csv'][0][count($sellerInfo['csv'][0]) - 1];

                $sellerInfo['reviews'] = $sellerInfo['csv'][1][count($sellerInfo['csv'][1]) - 1];

                $sellerInfo['trackedSince'] = ($sellerInfo['trackedSince'] + 21564000) * 60;

                //获取店铺分类信息
                if ($sellerInfo['sellerCategoryStatistics']) {

                    $sellerInfo['listingCount'] = 0;

                    foreach ($sellerInfo['sellerCategoryStatistics'] as $k => &$v) {

                        if (!empty($v['catId'])) {
                            //Listings
                            $sellerInfo['listingCount'] += $v['productCount'];

                            $domainID = getDomainID($station);

                            $res = $this->keepaService->getCategoryInfo($domainID, $v['catId']);

                            if ($res) {

                                $result = object_array($res);

                                $v['categoryName'] = $result[$v['catId']]['name'];

                            } else {

                                $v['categoryName'] = "-";

                            }
                        }
                    }
                }


                if ($sellerInfo) {


                    //获取到数据之后存储到缓存文件

                    is_dir($path) or mkdir($path, 0777, true);

                    $put_file = $sellerId . '.txt';

                    file_put_contents($path . DS . $put_file, json_encode($sellerInfo, true));

                }
            } else {
                $sellerInfo = "";
            }


        } else {

            $sellerInfo = file_get_contents($path . DS . $sellerId . ".txt");

            $sellerInfo = json_decode($sellerInfo, true);

        }


        $ratingData = [];

        $reviewsData = [];

        $listingData = [];
        if ($sellerInfo) {
            //rating csv
            $ratingDatax = [];

            $ratingDatay = [];

            for ($y = 0; $y < count($sellerInfo['csv'][0]); $y++) {

                if ($y % 2 == 0) {

                    $ratingDatax[] = $sellerInfo['csv'][0][$y];

                } else {

                    $ratingDatay[] = $sellerInfo['csv'][0][$y];

                }

            }
//reviews csv
            $reviewsDatax = [];

            $reviewsDatay = [];

            for ($y = 0; $y < count($sellerInfo['csv'][1]); $y++) {

                if ($y % 2 == 0) {

                    $reviewsDatax[] = $sellerInfo['csv'][1][$y];

                } else {

                    $reviewsDatay[] = $sellerInfo['csv'][1][$y];

                }

            }
//listing csv
            $listingDatax = [];

            $listingDatay = [];

            for ($y = 0; $y < count($sellerInfo['totalStorefrontAsinsCSV']); $y++) {

                if ($y % 2 == 0) {

                    $listingDatax[] = $sellerInfo['totalStorefrontAsinsCSV'][$y];

                } else {

                    $listingDatay[] = $sellerInfo['totalStorefrontAsinsCSV'][$y];

                }

            }

            foreach ($ratingDatax as $k_1 => $v_1) {
                $ratingData[$k_1][] = ($v_1 + 21564000) * 60 * 1000;
                $ratingData[$k_1][] = $ratingDatay[$k_1];
            }

            foreach ($reviewsDatax as $k_2 => $v_2) {
                $reviewsData[$k_2][] = ($v_2 + 21564000) * 60 * 1000;
                $reviewsData[$k_2][] = $reviewsDatay[$k_2];
            }

            foreach ($listingDatax as $k_3 => $v_3) {
                $listingData[$k_3][] = ($v_3 + 21564000) * 60 * 1000;
                $listingData[$k_3][] = $listingDatay[$k_3];
            }

            $ratingData = json_encode($ratingData ,true);
            $reviewsData = json_encode($reviewsData ,true);
            $listingData = json_encode($listingData ,true);

            return view('ajaxChat',compact('ratingData','reviewsData','listingData'));
        }
    }

    /**
     * @desc arraySort php二维数组排序 按照指定的key 对数组进行自然排序
     * @param array $arr 将要排序的数组
     * @param string $keys 指定排序的key
     * @param string $type 排序类型 asc | desc
     * @return array
     */
    public function arraySort($arr, $keys, $type = 'asc')
    {
        $keysvalue = $new_array = array();
        foreach ($arr as $k => $v) {
            $keysvalue[$k] = $v[$keys];
        }

        $type == 'asc' ? asort($keysvalue) : arsort($keysvalue);
        foreach ($keysvalue as $k => $v) {
            $new_array[$k] = $arr[$k];
        }
        return $new_array;
    }

    /**
     * 收藏店铺
     */
    public function collectionSeller(){
        //收藏店铺
        $CollectionSeller = new CollectionSeller();
        $sellerId = request()->post("sellerId");
        $country = request()->post("country");
        if(!$sellerId){
            result_error(111112,"缺少参数");
        }
        if(!$this->userId){
            result_error(111111, "您未登录，请先登录！");
        }
        $data = [
            'sellerId' => $sellerId,
            'userId' => $this->userId,
            'addTime' => time(),
            'country'=> $country
        ];
        if($CollectionSeller->getCount(['sellerId'=>$sellerId,'userId'=>$this->userId,'country'=>$country])){
            result_error(111112,"该店铺已收藏");
        }
        $res = $CollectionSeller->add($data);

        if($res){
            result_success('',"收藏成功");
        }
    }

    /**
     * 取消收藏
     */
    public function cancelCollectionSeller(){
        //取消收藏店铺
        $CollectionSeller = new CollectionSeller();
        $sellerId = request()->post("sellerId");
        //国家
        $country = request()->post("country");
        if(!$sellerId){
            result_error(111112,"缺少参数");
        }
        if(!$this->userId){
            result_error(111111, "您未登录，请先登录！");
        }
        $data = [
            'sellerId' => $sellerId,
            'userId'  => $this->userId,
            'country' => $country
        ];

        if(!$CollectionSeller->getCount($data)){
            result_error(111112,"该店铺未收藏");
        }
        $res = CollectionSeller::destroy($data);

        if($res){
            result_success('',"取消收藏成功");
        }
    }

    /**
     *  获取我的收藏列表
     */
    public function ajaxCollection(){
        $CollectionSeller = new CollectionSeller();

        $page = request()->post("page");
        $pageSize = request()->post("pageSize",10);

        if(!$this->userId){
            result_error(111111, "您未登录，请先登录！");
        }
        $condition = [
            'userId' => $this->userId
        ];

        $res = $CollectionSeller->pageQuery($page, $pageSize, $condition, "", "*");

        $count = $CollectionSeller->count();
        //获取用户收藏店铺信息
        $sellerIdArr = [];
        foreach($res['data'] as $key => $value){
            $sellerIdArr[] = $value['sellerId'];
        }

        $sellerIds = implode(",",$sellerIdArr);

        $topSellerList = $this->topSellerList->getQuery([["sellerId","in",$sellerIds]], '*', 'rating desc');
        $list['data'] = $topSellerList;
        $list['page_count'] = ceil($count/$pageSize);
        $list['total_count'] = $count;
        $list['countryConfig'] = config("countryConfig");

        if($list){
            result_success($list,"返回成功");
        } else {
            result_success('',"返回成功");
        }
    }

    /**
     * 我的店铺收藏列表
     */
    public function myCollection(){


        $page = request()->post('pageindex', '1');



        $page_size = request()->post('pageSize', '20');


        if( request()->isAjax() ){

            //判断是否已经登录
            if( !$this->userId ){
                result_error(111111, '您未登录,请先登录！');
            }

            //是否要导出
            $isExport = request()->post("isExport","");
            $CollectionSeller = new CollectionSeller();
            //导出数据
            if($isExport == 1){
                set_time_limit(0);

                $xlsName = "收藏店铺列表";
                $xlsCell = array(
                    array('ranking','排名'),
                    array('shop_name','店铺名称'),
                    array('rating','综合评分'),
                    array('reviewTotals','FeedBack总数量'),
                    array('reviewThirtyDays','最近30天Feedback数量'),
                    array('isFBA','是否支持FBA'),
                    array('verifiedListings','商品数量'),
                    array('sellingPrimarily','主要销售类目'),
                    array('ratePrimarily','类目占比'),
                    array('sellerId','店铺ID'),
                    array('country','国家')
                );//查出字段输出对应Excel对应的列名

                $dataCount = $CollectionSeller->getCount(['userId' => $this->userId]);
                $res = $CollectionSeller->pageQuery($page, 0, ['userId' => $this->userId], "", "*");
                //获取用户收藏店铺信息
                $sellerIdArr = [];
                foreach($res['data'] as $key => $value){
                    $sellerInfo = $this->topSellerList->getInfo(['sellerId'=>$value['sellerId'] , 'country'=>$value['country']],'ranking,shop_name,rating,reviewTotals,reviewThirtyDays,isFBA,verifiedListings,sellingPrimarily,ratePrimarily,sellerId,country');
                    $sellerIdArr[] = $sellerInfo;
                }
                $result = $this->export_excel($xlsName,$xlsCell,$dataCount,$sellerIdArr,1);
                result_success($result, '导出成功！');
            } else {

                $count = $CollectionSeller->getCount(['userId' => $this->userId]);
                //获取用户收藏店铺信息
                $sellerIdArr = [];
                $res = $CollectionSeller->pageQuery($page, $page_size, ['userId' => $this->userId], "", "*");

                foreach($res['data'] as $key => $value){
                    $sellerInfo = $this->topSellerList->getInfo(['sellerId'=>$value['sellerId'] , 'country'=>$value['country']]);
                    $sellerIdArr[] = $sellerInfo;
                }

                $list['data'] = $sellerIdArr;
                $list['page_count'] = ceil($count/$page_size);
                $list['total_count'] = $count;
                $list['countryConfig'] = config("countryConfig");

            }

            result_success($list, '发送成功！');
        }
        $countryConfig = config("countryConfig");

        //获取积分充值规则

        $getSellerInfoConfig = $this->web_config->getSellerInfoConfig();
        $getFilterSellerConfig = $this->web_config->getFilterSellerConfig();
        $getSPLC = $this->web_config->getSellerProductListConfig();

        $getSIV = $getSellerInfoConfig['configValue'];
        $getFSV = $getFilterSellerConfig['configValue'];
        $getSPLV = $getSPLC['configValue'];

        $title = "91AMZ 简单选品 选品简单 -- 店铺选品";

        $totalCount = 0;
        $pageCount = 0;

        return view('myCollection',compact('title','countryConfig','getSIV','getFSV','getSPLV','totalCount','pageCount'));
    }

}
?>