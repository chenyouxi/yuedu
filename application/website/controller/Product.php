<?php/** * Created by PhpStorm. * User: chenyouxi * Date: 2019/6/17 * Time: 11:31 AM */namespace app\website\controller;use think\Controller;use Keepa\objects\AmazonLocale;use Keepa\objects\ProductFinderRequest;use think\facade\Cache;use think\facade\Session;use app\common\service\User;use app\common\service\TopSellerListService;use app\common\service\KeepaService;use app\common\service\NodeService;use PHPExcel_IOFactory;use PHPExcel;use app\common\service\Config as WebConfig;class Product extends BaseController{    public function __construct() {        parent::__construct();        $this->topSellerList = new TopSellerListService();        $this->keepaService = new KeepaService();        $this->node = new NodeService();        if( $this->userId ){            parent::isBindPhone();        }        $this->assign('page_count', 1);        $this->assign('total_count', 1);        $this->assign('page', 1);        $this->assign('page_num', 1);    }    public function pList(){        $station = request()->post("country","us");        //获取国家站        $countryConfig = config("countryConfig");        //获取商品类目        $nodeList = $this->node -> getList(1, 1000, ['country'=>$station], "autoId desc","arr");        $title = "91AMZ 简单选品 选品简单 -- 选品";        return view('list',compact('title',"countryConfig","nodeList"));    }    //商品详情    public function view(){        $asinId = request()->get("asinId","");        $station = request()->get("station","");        if(!$asinId || !$station){            $this->error("缺少参数");        }        //查看该商品当天是否有查看过        $data = Cache::get("use_product_".$this->userId,[]);        if( $data ){            //删除过期的数据，数据保留1天            $arr = [];            foreach($data as $key => $val ){                if( ($val['addTime']+60*60*24) < time() ){                    unset($val);                } else {                    $arr[$key] = $val;                }            }            if( !deep_in_array($asinId,$arr) ){                //消费积分                $this->consume($station,$asinId);                $asin = [                    'addTime' => time(),                    'asinId' => $asinId,                    'station' => $station                ];                array_push($data,$asin);                Cache::set("use_product_".$this->userId,$arr);            } else {                //更新缓存                Cache::set("use_product_".$this->userId,$arr);            }        } else {            $this->consume($station,$asinId);            $asin = [                'addTime' => time(),                'asinId' => $asinId,                'station' => $station            ];            Cache::set("use_product_".$this->userId,[$asin]);        }        $title = "91AMZ 简单选品 选品简单 -- 商品详情";        return view('view',compact('title','asinId','station'));    }    /**     * @throws \Exceptiona     * ajax获取商品详情     */    public function ajaxProductInfo(){        if( request()->isAjax() ){            $asin = request()->post('asinId','');            $station = request()->post("station");            $domainID = getDomainID($station);            $path = getRuntimePath("getAsinInfo").DS.date('Y').date('W',time());            if (!file_exists( $path.DS.$asin."_".$station.".txt" ) ){                $productInfo = $this->keepaService->getProduct($domainID,0,date("Y-m-d",time()-86400*180),date("Y-m-d",time()), 24 , true,[$asin],1);                if($productInfo){                    //获取到数据之后存储到缓存文件                    is_dir( $path ) or mkdir($path, 0777, true);                    $put_file = $asin."_".$station.'.txt';                    file_put_contents($path.DS.$put_file,json_encode($productInfo,true));                    $productInfo = json_encode($productInfo,true);                } else {                    result_error(111222 , "请刷新重试");                }            } else {                $productInfo = file_get_contents($path.DS.$asin."_".$station.".txt");            }            $productInfo = json_decode( $productInfo,true );            $productInfo = $productInfo[0];            $productInfo['imagesCSV'] = explode(",",$productInfo['imagesCSV']);            $productInfo['lastRatingUpdate'] = ($productInfo['lastRatingUpdate']+21564000 )*60;            $productInfo['amzPrice'] = $productInfo['stats']['current'][0];            $productInfo['newPrice'] = $productInfo['stats']['current'][1];            $productInfo['usePrice'] = $productInfo['stats']['current'][2];            $productInfo['eBayPrice'] = $productInfo['stats']['current'][28];            $productInfo['lastPriceChange'] = ($productInfo['lastPriceChange'] + 21564000) * 60;            //lastPriceChange            $productInfo['lastPriceChange'] = $this->get_time($productInfo['lastPriceChange']);            //lastRatingUpdate            $productInfo['lastRatingUpdate'] = $this->get_time($productInfo['lastRatingUpdate']);            $productInfo['trackingSince'] = ($productInfo['trackingSince'] + 21564000) * 60;            $productInfo['description'] = htmlspecialchars_decode($productInfo['description']);           // $description = str_replace("." ,'.<br>' ,$productInfo['description']);            $description = explode(".", $productInfo['description'] );            $html = '<ul style="list-style:circle inside;">';            foreach( $description as $key=>$value){                if( $value ){                    $html .= '<li>'.trim($value,'<br>').';</li>';                }            }            $html .= '</ul>';            $productInfo['description'] = $html;            result_success($productInfo , "success");        }    }    /**     * 商品图片     *     */    public function ajaxProductImages(){        $imagesCSV = request()->get('imagesCSV','');        $imagesCSV = explode(",",$imagesCSV);        return view('imageCsv',compact('imagesCSV'));    }    /**     * 商品历史价格、评级、销量、评论走势     */    public function ajaxProductChart(){        if( request()->isAjax() ){            $asin = request()->post('asinId','');            $station = request()->post('station','');            $path = getRuntimePath("getAsinInfo").DS.date('Y').date('W',time());            if ( file_exists( $path.DS.$asin."_".$station.".txt" ) ){                $productInfo = file_get_contents($path.DS.$asin."_".$station.".txt");                $productInfo = json_decode( $productInfo,true );                $productInfo = $productInfo[0];                $data = [];                if(count($productInfo['csv'][0]) < count($productInfo['csv'][1])){                    $data['times'] = $this->getTimes($productInfo['csv'][1]);                } else if (count($productInfo['csv'][0]) > count($productInfo['csv'][1])){                    $data['times'] = $this->getTimes($productInfo['csv'][0]);                }//                $data['keepa']['price'] = $this->getAmzPrice( $productInfo );                $data['priceHistory'] = $this->getAmzPrice( $productInfo );                $data['srr'] = $this->getSRR($productInfo);//                $buyBoxSellerId = $productInfo['buyBoxSellerIdHistory'][1];//                $productInfo['buyBoxSeller'] = $this->getSellerInfo($buyBoxSellerId);                //获取 Lowest FBA Seller//                if($productInfo['stats']['sellerIdsLowestFBA']){//                    $productInfo['lowestFBASeller'] = $this->getSellerInfo($productInfo['stats']['sellerIdsLowestFBA'][0]);//                } else {//                    $productInfo['lowestFBASeller'] = "";//                }//                if($productInfo['stats']['sellerIdsLowestFBM']){//                    $productInfo['lowestFBMSeller'] = $this->getSellerInfo($productInfo['stats']['sellerIdsLowestFBM'][0]);//                } else {//                    $productInfo['lowestFBMSeller'] = "";//                }                result_success($data , "success");            } else {                result_error(111111,"请刷新页面后再试");            }        }    }    /**     * @param $time     * @return string     */    public function get_time($targetTime){        // 今天最大时间        $todayLast   = strtotime(date('Y-m-d 23:59:59'));        $agoTimeTrue = time() - $targetTime;        $agoTime     = $todayLast - $targetTime;        $agoDay      = floor($agoTime / 86400);        if ($agoTimeTrue < 60) {            $result = 'just';//刚刚        } elseif ($agoTimeTrue < 3600) {            $result = (ceil($agoTimeTrue / 60)) . ' minutes ago';//分钟前        } elseif ($agoTimeTrue < 3600 * 12) {            $result = (ceil($agoTimeTrue / 3600)) . ' hours ago';//小时前        } elseif ($agoDay == 0) {            $result = ' Today ' . date('H:i', $targetTime);//今天        } elseif ($agoDay == 1) {            $result = ' Yesterday ' . date('H:i', $targetTime);//昨天        } elseif ($agoDay == 2) {            $result = ' The day before yesterday ' . date('H:i', $targetTime);//前天        } elseif ($agoDay > 2 && $agoDay < 16) {            $result = $agoDay . ' days ago ' . date('H:i', $targetTime);        } else {            $format = date('Y') != date('Y', $targetTime) ? "Y-m-d H:i" : "m-d H:i";            $result = date($format, $targetTime);        }        return $result;    }    /**     * @param $sellerId     * @return string     * 获取店铺详情     */    public function getSellerInfo($sellerId,$station){        $path = getRuntimePath("getSellerInfo").DS.date('Y').date('W',time());        if (file_exists( $path.DS.$sellerId."_".$station.".txt" ) ){            $sellerInfo = file_get_contents($path.DS.$sellerId."_".$station.".txt");            $sellerInfo = json_decode( $sellerInfo,true );            $name = $sellerInfo['sellerName'];        } else {            $name = "";        }        return $name;    }    public function getAmzPrice($data){        $amzPriceCsvX = [];        $amzPriceCsvY = [];        for ($y = 0; $y < count($data['csv'][0]); $y++) {            if ($y % 2 == 0) {                $amzPriceCsvX[] = $data['csv'][0][$y];            } else {                $amzPriceCsvY[] = $data['csv'][0][$y];            }        }        $newPriceCsvX = [];        $newPriceCsvY = [];        for ($y = 0; $y < count($data['csv'][1]); $y++) {            if ($y % 2 == 0) {                $newPriceCsvX[] = $data['csv'][1][$y];            } else {                $newPriceCsvY[] = $data['csv'][1][$y];            }        }        $usePriceCsvX = [];        $usePriceCsvY = [];        for ($y = 0; $y < count($data['csv'][2]); $y++) {            if ($y % 2 == 0) {                $usePriceCsvX[] = $data['csv'][2][$y];            } else {                $usePriceCsvY[] = $data['csv'][2][$y];            }        }        $amzPriceCsv = [];        $newPriceCsv = [];        $usePriceCsv = [];        $i = 0;        foreach ($amzPriceCsvX as $k_1 => $v_1) {            if( $amzPriceCsvY[$k_1] != "-1"){                $amzPriceCsv[$i][] = ($v_1 + 21564000) * 60 * 1000;                $amzPriceCsv[$i][] = $amzPriceCsvY[$k_1]/100;                $i++;            }        }        $j = 0;        foreach ($newPriceCsvX as $k_2 => $v_2) {            if($newPriceCsvY[$k_2]!="-1"){                $newPriceCsv[$j][] = ($v_2 + 21564000) * 60 * 1000;                $newPriceCsv[$j][] = $newPriceCsvY[$k_2]/100;                $j++;            }        }        $k = 0;        foreach ($usePriceCsvX as $k_3 => $v_3) {            if( $usePriceCsvY[$k_3] != "-1"){                $usePriceCsv[$k][] = ($v_3 + 21564000) * 60 * 1000;                $usePriceCsv[$k][] = $usePriceCsvY[$k_3]/100;                $k++;            }        }        $chat = ["amz"=>$amzPriceCsv,"new"=>$newPriceCsv,"used"=>$usePriceCsv];        return $chat;    }    /**     *     */    public  function getTimes($data){        $times = [];        for ($y = 0; $y < count($data); $y++) {            if ($y % 2 == 0) {                $times[] = date("Y-m-d H:i",($data[$y] + 21564000) * 60);            }        }//        $i = 0;//        foreach ($times as $k_1 => $v_1) {//            if( $times[$k_1] != "-1"){//                $times[$k_1][] = ($v_1 + 21564000) * 60 * 1000;//                $times[$k_1][] = $times[$k_1]/100;//                $i++;//            }//        }        return $times;    }    /**     * 获取销量sales、reviews count、rating的历史数据     */    public function getSRR($data){        $salesCsvX = [];        $salesCsvY = [];        for ($y = 0; $y < count($data['csv'][3]); $y++) {            if ($y % 2 == 0) {                $salesCsvX[] = $data['csv'][3][$y];            } else {                $salesCsvY[] = $data['csv'][3][$y];            }        }        $reviewsCsvX = [];        $reviewsCsvY = [];        for ($y = 0; $y < count($data['csv'][17]); $y++) {            if ($y % 2 == 0) {                $reviewsCsvX[] = $data['csv'][17][$y];            } else {                $reviewsCsvY[] = $data['csv'][17][$y];            }        }        $ratingCsvX = [];        $ratingCsvY = [];        for ($y = 0; $y < count($data['csv'][16]); $y++) {            if ($y % 2 == 0) {                $ratingCsvX[] = $data['csv'][16][$y];            } else {                $ratingCsvY[] = $data['csv'][16][$y];            }        }        $salesCsv = [];        $reviewsCsv = [];        $ratingCsv = [];        $i = 0;        foreach ($salesCsvX as $k_1 => $v_1) {            if( $salesCsvY[$k_1] != "-1"){                $salesCsv[$i][] = ($v_1 + 21564000) * 60 * 1000;                $salesCsv[$i][] = $salesCsvY[$k_1];                $i++;            }        }        $j = 0;        foreach ($reviewsCsvX as $k_2 => $v_2) {            if($reviewsCsvY[$k_2]!="-1"){                $reviewsCsv[$j][] = ($v_2 + 21564000) * 60 * 1000;                $reviewsCsv[$j][] = $reviewsCsvY[$k_2];                $j++;            }        }        $k = 0;        foreach ($ratingCsvX as $k_3 => $v_3) {            if( $ratingCsvY[$k_3] != "-1"){                $ratingCsv[$k][] = ($v_3 + 21564000) * 60 * 1000;                $ratingCsv[$k][] = $ratingCsvY[$k_3]/10;                $k++;            }        }        $chat = ["sales"=>$salesCsv,"reviews"=>$reviewsCsv,"rating"=>$ratingCsv];        return $chat;    }    public function consume($station,$asinId){        $userInfo = $this->user->getUserInfo("integral");        //判断积分是否足够        $web_config = new WebConfig();        $config = $web_config->getProductInfoConfig();        if($userInfo['integral'] < $config['configValue']){            $this->error("您的积分不足，请及时充值哦！",'/website/memberRecharge');        }        //消费积分        //扣除查看商品详情积分        $res = $this->user->consumption("productInfo",$station."_".$asinId);        if(!$res){            $this->error(111113,"积分扣除失败！");        }        return $res;    }    /**     * 获取类目 getNodes     */    public function  getNodes(){        $country = request()->post('country','');        $parentNodeId = request()->post('parentNodeId');        $node = new NodeModel();        $nodeList = $node->getList(['parentNodeId'=>$parentNodeId,'country'=>$country]);        result_success($nodeList,'success');    }}