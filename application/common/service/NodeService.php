<?php/** * Created by PhpStorm. * User: chenyouxi * Date: 2019/6/18 * Time: 11:29 AM */namespace app\common\service;use think\facade\Session as Session;use think\facade\Cookie as Cookie;use think\facade\Cache;use app\common\service\BaseService as BaseService;use app\common\model\NodeModel;use think\Db;class NodeService extends BaseService{    function __construct()    {        parent::__construct();        $this->node = new NodeModel();    }    //分类列表    public function getList($page_index, $page_size, $condition, $order, $type=""){        $list = $this->node->viewPageQuery($this->node, $page_index, $page_size, $condition, $order,$type);        return $list;    }    public function getInfo($condition = '',$field = '*' ){        $info = $this->node->getInfo($condition, $field);        return $info;    }}