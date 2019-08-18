<?php/** * Created by PhpStorm. * User: chenyouxi * Date: 2019/6/6 * Time: 10:17 AM */namespace app\website\controller;use think\Controller;use Keepa\API\Request;use Keepa\API\ResponseStatus;use Keepa\helper\CSVType;use Keepa\helper\CSVTypeWrapper;use Keepa\helper\KeepaTime;use Keepa\helper\ProductAnalyzer;use Keepa\helper\ProductType;use Keepa\KeepaAPI;use Keepa\API\DealRequest;use Keepa\objects\AmazonLocale;use Keepa\objects\ProductFinderRequest;use app\common\service\Http as http;use app\common\model\NodeModel;class KeepaInterface extends BaseController{    protected $key;    public function __construct()    {        parent::__construct();        $this->init();    }    public function init(){        save_log("init",'KeepaInterface');        $this->key = "1etlt37b2g958fcfu3rgid9nq1j6bnvn2la18ljrl8sj9g5a3eofgiu0349282u2";    }    public function index(){    }    /**     * @throws \Exception     * 获取亚马逊商品国际价格     * domainId：要访问的Amazon区域设置的整数值。有效值：[ 1: com | 2: co.uk 17 | 3: de | 4: fr | 5: co.jp | 6: ca | 7: cn | 8: it | 9: es | 10: in ]     * asins: 您要申请的产品的ASIN。 对于批处理请求，以逗号分隔的ASIN列表（最多100个）。     * productCode: 您要申请的产品的产品代码。 我们目前允许使用UPC，EAN和ISBN-13代码。 对于批处理请求，以逗号分隔的代码列表（最多100个）。 多个ASIN可以具有相同的产品代码，因此请求产品代码可以返回多个产品。     * startsStartDate:统计的开始时间     * startsEndDate：统计的结束时间     * update: 产品超过多少小时则触发更新     * offers :如果使用offers参数，则产品对象将包含其他数据：     * history = 0（从产品对象中删除csv历史数据字段,可以加快页面响应速度，如果为1，则返回csv字段数据）     * 接口返回的数据说明：https://keepa.com/#!discuss/t/product-object/116     * 获取完整的商品图片：https://images-na.ssl-images-amazon.com/images/I/<image name>.     */    public function getProduct(){        $api = new KeepaAPI($this->key);        $r = Request::getProductRequest(AmazonLocale::US, 0, "2018-01-01", date("Y-m-d",time()), 24, true, ['B016XT0N76'],1);        $response = $api->sendRequestWithRetry($r);        switch ($response->status) {            case ResponseStatus::OK:                echo json_encode($response->products);                exit;                // iterate over received product information                foreach ($response->products as $product){                    $data = [];                    //获取商品名称                    $data['title'] = $product->title;                    //获取商品图片                    $data['images'] = explode(",",$product->imagesCSV);                    //获取商品根类别                    $data['rootCategory'] = $product->rootCategory;                    //获取商品亚马逊类别ID                    $data['categories'] = $product->categories;                    //面包屑//                    if( $product->categoryTree ){//                        $data['categoryTree'] = implode(">>",$product->categoryTree);//                    }                    //获取经常一起购买的商品                    $data['frequentlyBoughtTogether'] = $product->frequentlyBoughtTogether;                    //获取EAN商品条码                    $data['eanList'] = $product->ean;                    //获取商品统一代码UPC，商品条码                    $data['upc'] = $product->upc;                    //获取商品是否有评论                    $data['hasReviews'] = $product->hasReviews;                    //亚马逊产品类型分类                    $data['type'] = $product->type;                    //获取制造商名称                    $data['manufacturer'] = $product->manufacturer;                    //获取品牌名称                    $data['brand'] = $product->brand;                    //获取该商品标签                    $data['label'] = $product->label;                    //获取该商品分组                    $data['productGroup'] = $product->productGroup;                    //获取该产品的件数                    $data['numberOfItems'] = $product->numberOfItems;                    //获取该产品的发布日期                    $data['releaseDate'] = $product->releaseDate;                    //获取该产品的型号                    $data['model'] = $product->model;                    //获取该商品的部件号：如GX531GS-AH76                    $data['mpn'] = $product->mpn;                    //获取该产品的颜色                    $data['color'] = $product->color;                    //获取该产品的大小                    $data['size'] = $product->size;                    //获取该商品的版本                    $data['edition'] = $product->edition;                    //获取该商品的平台                    $data['platform'] = $product->platform;                    //获取该商品的格式                    $data['format'] = $product->format;                    //获取该商品的规格属性特征                    $data['features'] = $product->features;                    //获取该商品的描述                    $data['description'] = $product->description;                    //获取该商品的危险材料类型                    $data['hazardousMaterialType'] = $product->hazardousMaterialType;                    //获取该商品的外包装高度                    $data['packageHeight'] = $product->packageHeight; //单位：millimeter                    //获取该商品的外包装长度                    $data['packageLength'] = $product->packageLength; //单位：millimeter                    //获取该商品的外包装宽度                    $data['packageWidth'] = $product->packageWidth; //单位：millimeter                    //获取该商品的包装重量                    $data['packageWeight'] = $product->packageWeight; //单位：gram                    //获取该商品的外包装内产品数量                    $data['packageQuantity'] = $product->packageQuantity;                    //获取该商品的高度                    $data['itemHeight'] = $product->itemHeight; //单位：millimeter                    //获取该商品的长度                    $data['itemLength'] = $product->itemHeight; //单位：millimeter                    //获取该商品的宽度                    $data['itemWidth'] = $product->itemWidth; //单位：millimeter                    //获取该商品的重量                    $data['itemWeight'] = $product->itemWeight; //单位：gram                    //获取该商品的亚马逊优惠的可用性：-1：不存在Amazon商品；0：亚马逊优惠有货并且可以发货 ；1：亚马逊优惠目前没有库存，但将来会有（已订购，已预订） 2：亚马逊提供的可用性“未知” 3：无法识别的亚马逊可用性状态                    $data['availabilityAmazon'] = $product->availabilityAmazon;                    //包含价格最低的匹配eBay列表ID。 始终包含两个条目，第一个是新条件下最低价格列表的列表ID，第二个是使用条件。 如果不可用，则返回null或0。                    $data['ebayListingIds'] = $product->ebayListingIds;                    //是否仅用于成年人                    $data['isAdultProduct'] = $product->isAdultProduct;                    //区分缺货（价格= -1）与MAP限制。                    $data['newPriceIsMAP'] = $product->newPriceIsMAP;                    //是否符合以旧换新条件                    $data['isEligibleForTradeIn'] = $product->isEligibleForTradeIn;                    //该产品是否符合亚马逊（非FBA）的超级保护运输资格。                    $data['isEligibleForSuperSaverShipping'] = $product->isEligibleForSuperSaverShipping;                    //包含提供本产品FBA费用的对象，包括存储费和拣货费。 如果不可用则为null。 费用是相应亚马逊地区的最小货币单位（例如欧元美分或日元）的整数。                    $data['fbaFees'] = $product->fbaFees;                    //获取商品的数据统计                    $data['stats'] = $product->stats;                    //获取该商品的报价                    $data['offers'] = $product->offers;                    //包含产品历史数据的二维历史数组//                    0  - 亚马逊：亚马逊价格历史；//                    1  - 新：市场新价格历史。；//                    2  - 已使用：市场使用的价格历史记录//                    3  - 销售：销售排名历史记录。并非每个产品都有销售排名。变更项目通常没有单独的销售排名，只有父项目列表可以具有销售排名（请参阅parentAsin字段）。//                    4  -  LISTPRICE：列出价格历史记录//                    5  -  COLLECTIBLE：收藏价格历史//                    6  -  REFURBISHED：翻新的价格历史//                    7  -  NEW_FBM_SHIPPING：第三方（不包括亚马逊）新的价格历史记录，包括运费，仅由商家（FBM）履行。//                    8  -  LIGHTNING_DEAL：Lightning成交价格历史。闪电交易是以下特殊的相关重要信息。//                    9  -  WAREHOUSE：亚马逊仓库价格历史。//                    10  -  NEW_FBA：最低第三方（不包括亚马逊/仓库）的价格历史记录由亚马逊实现的新优惠//                    11  -  COUNT_NEW：新的优惠计数历史记录（=将产品作为新产品销售的市场商家数量）//                    12  -  COUNT_USED：已使用的商品计数历史记录//                    13  -  COUNT_REFURBISHED：翻新的优惠计数历史记录//                    14  -  COUNT_COLLECTIBLE：收藏要约计数历史记录//                    15  -  EXTRA_INFO_UPDATES：所有商品 - 参数相关数据的过去更新历史：商品，buyBoxSellerIdHistory，isSNS，isRedirectASIN和csv类型NEW_FBM_SHIPPING，WAREHOUSE，NEW_FBA，RATING，COUNT_REVIEWS，BUY_BOX_SHIPPING，USED _ * _ SHIPPING，COLLECTIBLE _ * _ SHIPPING和REFURBISHED_SHIPPING。由于这些字段的更新很少，因此了解我们的系统何时更新它们非常重要。绝对值表示在给定时间提取的要约数量。如果值为正，则表示已获取所有可用要约。如果提供的报价多于提取的报价，那么这是否定的。//                    16  - 评分：产品的评级历史记录。评级是0到50之间的整数（例如45 = 4.5星）//                    17  -  COUNT_REVIEWS：产品的审核计数历史记录。//                    18  -  BUY_BOX_SHIPPING：新购买框的价格历史记录。如果没有符合购买框的要约（或者如果购买框是已使用的要约），则价格的值为-1。包括运费。//                    19  -  USED_NEW_SHIPPING：“使用 - 像新的”价格历史记录，包括运费。//                    20  -  USED_VERY_GOOD_SHIPPING：“已使用 - 非常好”的价格历史记录，包括运费。//                    21  -  USED_GOOD_SHIPPING：“使用 - 好”价格历史记录，包括运费。//                    22  -  USED_ACCEPTABLE_SHIPPING：“已使用 - 可接受”的价格历史记录，包括运费。//                    23  -  COLLECTIBLE_NEW_SHIPPING：“收藏品 - 像新的”价格历史记录，包括运费。//                    24  -  COLLECTIBLE_VERY_GOOD_SHIPPING：“收藏 - 非常好”的价格历史记录，包括运费。//                    25  -  COLLECTIBLE_GOOD_SHIPPING：“收藏品 - 好”价格历史记录，包括运费。//                    26  -  COLLECTIBLE_ACCEPTABLE_SHIPPING：“收藏 - 可接受”的价格历史记录，包括运费。//                    27  -  REFURBISHED_SHIPPING：翻新的价格历史记录，包括运费。//                    28  -  EBAY_NEW_SHIPPING：各自在eBay地区的最低新价格的价格历史记录，包括运费。//                    29  -  EBAY_USED_SHIPPING：相应易趣区域的最低使用价格的价格历史记录，包括运费。//                    30  -  TRADE_IN：10个价格历史的交易。亚马逊以旧换新不适用于所有语言环境。//                    31  - 租赁：租赁价格历史。需要使用租赁和优惠参数。亚马逊租赁仅适用于亚马逊美国。                    $data['csv'] = $product->csv;                    echo json_encode($product,true);die;                    if ($product->productType == ProductType::STANDARD || $product->productType == ProductType::DOWNLOADABLE) {                        //get basic data of product and print to stdout                        $currentAmazonPrice = ProductAnalyzer::getLast($product->csv[CSVType::AMAZON], CSVTypeWrapper::getCSVTypeFromIndex(CSVType::AMAZON));                        echo json_encode($currentAmazonPrice,true);die;                        //check if the product is in stock -1 -> out of stock                        if ($currentAmazonPrice == -1) {                            echo sprintf("%s %s is currently not sold by Amazon (out of stock) %s",$product->asin,$product->title,PHP_EOL);                        } else {                            echo sprintf("%s %s Current Amazon Price: %s %s",$product->asin,$product->title,$currentAmazonPrice,PHP_EOL);                        }                        // get weighted mean of the last 90 days for Amazon                        $weightedMean90days = ProductAnalyzer::calcWeightedMean($product->csv[CSVType::AMAZON], KeepaTime::nowMinutes(),90, CSVTypeWrapper::getCSVTypeFromIndex(CSVType::AMAZON));                    } else {                    }                }                break;            default:                print_r($response);        }    }    /**     *  浏览优惠     * page:页数，从0开始     * domainId：要访问的Amazon区域设置的整数值     * excludeCategories：用于排除这些类别中列出的产品。     * includeCategories：用于包含这些类别中列出的产品。     * priceTypes：确定交易的类型。 尽管它是一个整数数组，但它只能包含一个条目。 目前尚不支持每种查询多种类型。0  - AMAZON：亚马逊；1  - NEW：市场新；2  - USED：使用市场；3  - SALES：销售排名。 并非每个产品都有销售排名。；4  -  LISTPRICE：定价；5  -  COLLECTIBLE：收藏价格；6  -  REFURBISHED：翻新价格；8  -  LIGHTNING_DEAL：当前安排的主动闪电交易；示例：[0]     * deltaRange：限制当前值与所选dateRange间隔开头的值之间的绝对差值范围。 示例：[0,999]（=无最小差异，最大差异为9.99美元）。     * deltaPercentRange：与deltaRange相同，但以百分比而非绝对值给出。 最低百分比为10，销售排名为80。 示例：[30,80]（= 30％到80％之间）。     * deltaLastRange：限制当前值与前一个值之间的绝对差值范围。 示例：[100,500]（= $ 1和$ 5之间的最后一次更改）     * salesRankRange：限制产品的销售排名范围。例子： [0,5000]（=只有销售排名在0到5000之间的产品） [5000，-1]（=高于5000）     * currentRange：限制价格类型的当前值的范围。 示例：[105,50000]（=最低价格1.05美元，最高价格500美元，或者介于105和50000之间）。     * minRating：限于具有最低评级的产品（评级是0到50之间的整数（例如45 = 4.5星））。如果-1，则过滤器处于非活动状。示例：20（= 2星评分）     * isLowest：仅包含指定价格类型处于最低值的产品（自我们开始跟踪它以来）。 如果为true，则“isRisers”必须为false。     * isLowestOffer：如果所选价格类型是所有新优惠中最低的（适用于亚马逊和新市场），则仅包括产品。 如果“isRisers”为真，则不适用。 示例：true     * isBackInStock：仅包括在过去24小时内缺货的产品，现在可以订购。     * isOutOfStock：仅包括在过去24小时内可订购且现已缺货的产品。     * titleSearch：通过基于关键字的产品标题搜索选择交易。 搜索不区分大小写，并支持多个关键字，如果指定并用空格分隔，则必须全部匹配。 例子：“三星galaxy”匹配所有在其标题中具有“三星”和“星系”字符序列的产品     * isRangeEnabled：切换以启用范围选项。 示例：true     * isFilterEnabled：切换以启用过滤器选项。 示例：true     * hasReviews：如果为true则排除所有没有评论的产品。 如果为false则过滤器处于非活动状 示例：false     * filterErotic：不包括列为成人商品的所有商品。 示例：false     * sortType：确定检索到的交易的排序顺序。 要反转排序顺序，请使用负值。 可能按值排序： 1  - 交易年龄。 最新的交易首先，而不是可逆的。2  - 绝对增量。 （当前值与所选dateRange间隔开头的值之间的差值）。 排序顺序是最高的delta到最低。 3  - 销售排名。 排序顺序是最低排名到最高排名。  4  - 百分比增量（当前值与所选dateRange间隔开头的值之间的百分比差异）。 排序顺序从最高百分比到最低。     * dateRange：我们的交易分为不同的集合，由产品变更的时间间隔决定。 间隔越短，变化越近; 这对于价格大幅下跌是有利的，但对于在较长时间内积累的缓慢增量下降是不利的。 对于大多数交易，较短的间隔可以被视为较长间隔的子集。 要查找更多优惠，请使用较长的间隔。 可能的值： 0-天：过去24小时 ； 1-周：最后24 * 7小时 ； 2-月：过去24 * 31小时 ； 3-3个月：过去24 * 90小时     */    public function getDeal(){        $api = new KeepaAPI($this->key);        $deal = new DealRequest();        $deal->page                 = 0;        $deal->domainId             = AmazonLocale::US;        $deal->excludeCategories    = [];//排除类别        $deal->includeCategories    = [5174];//包含类别        $deal->priceTypes           = [0];//交易类型，0亚马逊，1新市场，2使用市场，3销售排名，4定价，5收藏价格，6翻新价格        $deal->deltaRange           = [0,2147483647];        $deal->deltaPercentRange    = [20, 100];        $deal->deltaLastRange       = [100,500];        $deal->salesRankRange       = [-1, -1];        $deal->currentRange         = [500, 40000];//限制价格区间        $deal->minRating            = -1;        $deal->isLowest             = false;        $deal->isLowestOffer        = false;        $deal->isBackInStock        = false;        $deal->isOutOfStock         = false;        $deal->titleSearch          = '';        $deal->isRangeEnabled       = true;        $deal->isFilterEnabled      = true;        $deal->hasReviews           = false;        $deal->filterErotic         = true;        $deal->sortType             = 4;        $deal->dateRange            = 1;//        $deal->isPrimeExclusive = false;//        $deal->mustHaveAmazonOffer = false;//        $deal->mustNotHaveAmazonOffer = false;//        $deal->settings = ["viewTyp"=> 0];//        $deal->hasAmazonOffer = true;        $r = Request::getDealsRequest($deal);        $response = $api->sendRequestWithRetry($r);        switch ($response->status) {            case ResponseStatus::OK:                //获取成功返回的数据                $deals = $response->deals;                result_success($deals, '数据返回成功！');                break;            default:                print_r($response);        }    }    /**     * 商品搜索     * Product Search     */    public function productSearch(){        $term = request()->post('term', '');        $stats = request()->post('stats', '');        $domainID = AmazonLocale::US;        $api = new KeepaAPI($this->key);        $term = urlencode("The Rolling");        $stats = 180;        $r = Request::getProductSearchRequest($domainID, $term, $stats);        $response = $api->sendRequestWithRetry($r);        //返回数据详情  https://keepa.com/#!discuss/t/product-object/116        switch ($response->status) {            case ResponseStatus::OK:                //获取成功返回的数据                $products = $response->products;                result_success($products, '数据返回成功！');                break;            default:                print_r($response);        }    }    /**     * 获取商品图形数据分析     * graphimage     * https://keepa.com/#!discuss/t/graph-image-api/7928     */    public function graphImage(){        $asin = request()->post('asin', '');        $domainId = request()->post('domainId', '');        $api = new KeepaAPI($this->key);        $asin = "B00EZM38FS";        $domainID = AmazonLocale::US;        $file = \think\facade\Env::get('runtime_path') . 'graphimage/'.date('Ymd')."/".$asin.".png";        //判断今天是否有该商品的image缓存        if(file_exists($file)){            $url = host()."/runtime/graphimage/".date('Ymd')."/".$asin.".png";            result_success($url, '数据返回成功！');        } else {            $r = Request::getGraphImageRequest($domainID, $asin);            $response = $api->sendRequestImage($r);            if($response){                //获取该商品的文件                $url = host()."/runtime/graphimage/".date('Ymd')."/".$asin.".png";                result_success($url, '数据返回成功！');            } else {                result_error(11111, '头像修改失败！');            }        }    }    /**     * 获取所有类别或者单个类别信息     * category     * https://keepa.com/#!discuss/t/category-lookup/113     */    public function getCategory($category=0,$country=''){        //$domainID = AmazonLocale::JP;        $domainID = getDomainID($country);        //$country = "jp";        $category = $category?$category:0; //0获取所有类别，2619525011 获取单个类别        $parents = 1;// 0 不包含子类别        $api = new KeepaAPI($this->key);        $r = Request::getCategoryLookupRequest($domainID, $parents, $category);        $response = $api->sendRequestWithRetry($r);        switch ($response->status) {            case ResponseStatus::OK:                //获取成功返回的数据                $categories = $response->categories;                $categories = json_decode(json_encode($categories) , true);                foreach( $categories as $key => $val ) {                    //获取之后写入到数据库                    $data = [                        'nodeId' => $val['catId'],                        'nodeName' => $val['name'],                        'country' => $country,                        'parentNodeId' => $val['parent'],                        'highestRank' => $val['highestRank'],                        'productCount' => $val['productCount']                    ];                    $node = new NodeModel();                    $nodeCount = $node->getCount(['nodeId'=>$val['catId'],'country'=>$country]);                    if( !$nodeCount ){                        $node->add($data);                    }                    if($val['children'] ){                        sleep(2);                        $childrenCount = count($val['children']);                        $limit = 10;                        $pageCount = ceil($childrenCount/$limit);                        for($i=0;$i<$pageCount;$i++){                            sleep(2);                            $children = array_slice($val['children'],$i*$limit,$limit,true);                            $this -> getCategory(implode(',',$children),$country);                        }                    }                }                return true;                break;            default:                print_r($response);        }    }    public function getNode(){//        //89110开始//        $node = new NodeModel();//        $nodeList = $node -> getQuery( [['autoId','>=',89153],['autoId','<',89163]], "nodeId,country",'');//        $arr = [];//        foreach($nodeList as $k => $v){//            $arr[] = $v['nodeId'];//        }////        $nodeStr = implode(",",$arr);////        $this -> getCategory($nodeStr,"de");//        result_success($nodeList, '数据返回成功！');        $node = new NodeModel();        for($i=170;$i<180;$i++){            sleep(2);            $http = new Http();            $url = 'http://91.nenyes.com/website/getNodeList?page='.$i;            $rt = json_decode($http::curlGet($url),true);            foreach($rt['data'] as $key => $val){                $nodeCount = $node->getCount(['nodeId'=>$val['nodeId'],'country'=>$val['country']]);                if( !$nodeCount ){                    $data = [                        'nodeId' => $val['nodeId'],                        'nodeName' => $val['nodeName'],                        'country' => $val['country'],                        'parentNodeId' => $val['parentNodeId'],                        'highestRank' => $val['highestRank'],                        'productCount' => $val['productCount']                    ];                    $node->add($data);                }            }        }        result_success('', '数据返回成功！');    }    /**     * 按分类搜索     * search     * type=category     * https://keepa.com/#!discuss/t/category-searches/114     */    public function categorySearch(){        $domainID = AmazonLocale::US;        $term = "CDs2"; //分类名称        $parents = 1;        $api = new KeepaAPI($this->key);        $r = Request::getCategorySearchRequest($domainID, $term, $parents);        $response = $api->sendRequestWithRetry($r);        switch ($response->status) {            case ResponseStatus::OK:                //获取成功返回的数据                $categories = $response->categories;                result_success($categories, '数据返回成功！');            case ResponseStatus::REQUEST_FAILED:                $requset = $response->error;                //返回错误                result_error(11111, '数据错误！');                break;            default:                result_error(11111, '数据错误！');        }    }    /**     * 获取最受欢迎的卖家     * topseller     * https://keepa.com/#!discuss/t/most-rated-sellers/3725     */    public function getTopSeller(){        $domainID = AmazonLocale::US;        $api = new KeepaAPI($this->key);        $r = Request::getTopsellerRequest($domainID);        $response = $api->sendRequestWithRetry($r);        switch ($response->status) {            case ResponseStatus::OK:                //获取成功返回的数据                $sellerIdList = $response->sellerIdList;                result_success($sellerIdList, '数据返回成功！');            case ResponseStatus::REQUEST_FAILED:                $requset = $response->error;                //返回错误                result_error(11111, '数据错误！');                break;            default:                result_error(11111, '数据错误！');        }    }    /**     * 获取商品列表     * query     * https://keepa.com/#!discuss/t/product-finder/5473     */    public function getQuery(){        $domainID = AmazonLocale::US;        $selection = new ProductFinderRequest();        $api = new KeepaAPI($this->key);        $r = Request::getFinderRequest($domainID,  $selection);        $response = $api->sendRequestWithRetry($r);        switch ($response->status) {            case ResponseStatus::OK:                //获取成功返回的数据                //获取商品列表                $asinList = $response->asinList;                result_success($asinList, '数据返回成功！');            case ResponseStatus::REQUEST_FAILED:                //返回错误                result_error(11111, '数据错误！');                break;            default:                result_error(11111, '数据错误！');        }    }    /**     * 通过分类获取热销商品     * bestsellers     * https://keepa.com/#!discuss/t/request-best-sellers/1298     */    public function getBestSellers(){        $domainID = AmazonLocale::US;        $category = '2619525011';  //分类的获取可以通过categorySearch、getCategory接口        $range = 0; //有效值：[0：使用当前排名| 平均30：30天| 平均90：90天| 180：平均180天]        $api = new KeepaAPI($this->key);        $r = Request::getBestSellerRequest($domainID,  $category);        $response = $api->sendRequestWithRetry($r);        switch ($response->status) {            case ResponseStatus::OK:                //获取成功返回的数据                //获取商品列表                $bestSellersList = $response->bestSellersList;                result_success($bestSellersList, '数据返回成功！');            case ResponseStatus::REQUEST_FAILED:                //返回错误                result_error(11111, '数据错误！');                break;            default:                result_error(11111, '数据错误！');        }    }    /**     * 根据商家sellerID获取商家信息     * seller     * https://keepa.com/#!discuss/t/request-seller-information/790     */    public function getSellerList(){        $domainID = AmazonLocale::US;        $sellerArr = ['A2L77EE7U53NWQ'];        $api = new KeepaAPI($this->key);        $r = Request::getSellerRequest($domainID,  $sellerArr);        $response = $api->sendRequestWithRetry($r);        switch ($response->status) {            case ResponseStatus::OK:                //获取成功返回的数据                $sellers = $response->sellers;//返回数据字段：trackingSince（开始追踪此卖家的时间）；lastUpdate（最后更新此卖家信息的时间）；sellerId（商家的卖家ID）；SELLERNAME（卖家的名字）            //isScammer（判断该卖家是否试图欺骗用户）；hasFBA（判断卖家是否有FBA列表）；CSV（卖家的历史数据）；asinList（卖家销售的商品列表）；totalStorefrontAsins（第一个参数为最后更新时间，第二个参数为店面ASIN数量）；                result_success($sellers, '数据返回成功！');            case ResponseStatus::REQUEST_FAILED:                //返回错误                result_error(11111, '数据错误！');                break;            default:                result_error(11111, '数据错误！');        }    }    /**     * 检索token状态     *     */    public function getTokenStatus(){        $api = new KeepaAPI($this->key);        $r = Request::getTokenStatusRequest();        $response = $api->sendRequestWithRetry($r);        switch ($response->status) {            case ResponseStatus::OK:                $refillRate = $response->refillRate; //每分钟生成的令牌数。                $refillIn = $response->refillIn; //在您的令牌桶重新填充之前的时间（以分钟为单位）。                $tokensLeft = $response->tokensLeft; //你目前剩下多少令牌                $data['refillRate'] = $refillRate;                $data['refillIn'] = $refillIn;                $data['tokensLeft'] = $tokensLeft;                result_success($data, '数据返回成功！');            case ResponseStatus::REQUEST_FAILED:                //返回错误                result_error(11111, '数据错误！');                break;            default:                result_error(11111, '数据错误！');        }    }    /**     *  跟踪产品     * tracking     * https://keepa.com/#!discuss/t/tracking-products/2066     */    public function tracking(){        $type = request()->get('type', '');  //remove、removeAll、get、notification、listNames、webhook        $asin = request()->get('asin' , "");        $api = new KeepaAPI($this->key);        switch($type){            case "get":                $asin = "B00O1PTY6Q";                $r = Request::getTrackingGetRequest($asin);                break;            case "list":                $asinsOnly = 1;                $r = Request::getTrackingListRequest($asinsOnly);                break;            case "notification":                $since = -1; //在KeepaTime分钟内检索自此日期以来发生的所有可用通知。                $revise = 0; //是否请求已读的通知；0 = false, 1 = true                $r = Request::getTrackingNotificationRequest($since, $revise);                break;            case "add":                $tracking = [];                $tracking['asin'] = "B00O1PTY6Q";                $tracking['ttl'] = 1;                $tracking['expireNotify'] = true;                $tracking['desiredPricesInMainCurrency'] = false;                $tracking['mainDomainId'] = 1;                $tracking['mainDomainId'] = 1;                $tracking['updateInterval'] = 1;                $tracking['metaData'] = "备注";                $tracking['thresholdValues'] = [];                $tracking['notifyIf'] = [];                $tracking['notificationType'] = [];                $tracking['individualNotificationInterval'] = 1;                $r = Request::getTrackingBatchAddRequest($tracking);                break;            case "listNames":            case "webhook":                //推送通知的url                $url = host()."/website/"."webhook";                $r = Request::getTrackingWebhookRequest($url);            break;            case "remove":                $asin = "";//需要跟踪的商品asin                $r = Request::getTrackingRemoveRequest($asin);                break;            case "removeAll":                $r = Request::getTrackingRemoveAllRequest();                break;            default:                result_error(11111, '数据错误！');        }        $response = $api->sendRequestWithRetry($r);echo json_encode($response);die;        switch ($response->status) {            case ResponseStatus::OK:                $data['trackings'] = $response->trackings;                $data['asinList'] = $response->asinList;                result_success($data, '数据返回成功！');            case ResponseStatus::REQUEST_FAILED:                //返回错误                result_error(11111, '数据错误！');                break;            default:                result_error(11111, '数据错误！');        }        echo json_encode($response);        die;    }    /**     * 通知地址     * webhook     */    public function webhook(){        //先将获取到到信息写入到文件里面        $data = $_REQUEST;        $dirname =  \think\facade\Env::get('runtime_path') . 'webhook/'.date('Ymd');        is_dir($dirname) or mkdir($dirname, 0777, true);        $put_file = 'webhook.txt';        file_put_contents($dirname.'/'.$put_file,$data,FILE_APPEND);    }}