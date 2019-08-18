<?php/** * * +---------------------------------------------------------------------- *                      .::::. *                    .::::::::.            | AUTHOR: chenyouxi *                    :::::::::::           | EMAIL: 905100794@qq.com *                 ..:::::::::::'           | QQ: 905100794 *             '::::::::::::'               | WECHAT: xi20130618 *                .::::::::::               | DATETIME: 2019/9/22 1:02 上午 *           '::::::::::::::.. *                ..::::::::::::. *              ``:::::::::::::::: *               ::::``:::::::::'        .:::. *              ::::'   ':::::'       .::::::::. *            .::::'      ::::     .:::::::'::::. *           .:::'       :::::  .:::::::::' ':::::. *          .::'        :::::.:::::::::'      ':::::. *         .::'         ::::::::::::::'         ``::::. *     ...:::           ::::::::::::'              ``::. *   ```` ':.          ':::::::::'                  ::::.. *                      '.:::::'                    ':'````.. * +---------------------------------------------------------------------- */namespace app\api\controller;use app\common\model\Users;use think\facade\Db;use think\facade\Cache;use think\facade\Env;use think\facade\Request;use app\common\model\Book as M;use app\common\model\BookType;use app\common\model\Ad;use app\common\model\AdType;class Book extends Base{    //书籍搜索    public function search(){        $where = [];        $keyword = input('post.keyword');        $page = input('post.page');        $pageSize = input('post.pageSize',20);        if (!empty($keyword)) {            $where[] = ['name', 'like', '%'.$keyword.'%'];        }        //获取列表        $list = M::getList($where, $pageSize);        $list['keyword'] = $keyword;        $this->success("成功!",'',$list);    }    //首页    public function index(){        $list['banner'] =  $this->banner();        $list['recommend_book'] = $this->recommendBook();        $list['hot_book'] = $this->hotBook();        $this->success("成功!",'',$list);    }    //广告banner    public function banner(){        $list = Ad::apiGetList(['type_id'=>1,'status'=>1], 6);        $list = json_decode(json_encode($list));        $data = $list->data;        foreach($data as $key=>&$value){            $value->image = app('config')->get('app.admin_domain').$value->image;            $value->thumb = app('config')->get('app.admin_domain').$value->thumb;        }        return $data;    }    //热门书籍    public function hotBook(){        $list = M::getList(['is_hot'=>1], 6);        $list = json_decode(json_encode($list));        $data = $list->data;        return $data;    }    //推荐书籍    public function recommendBook(){        $list = M::getList(['type_id'=>1], 6);        $list = json_decode(json_encode($list));        $data = $list->data;        return $data;    }    //更新书籍封面    public function updatePic(){        $pic = input('post.pic');        $id = input('post.id');        if (!empty($pic) && !empty($id)) {            $data['pic'] = $pic;            $data['id'] = $id;            $result = M::editPost($data);            if($result['error'] == 0){                $this->success("成功!",'',"");            } else {                $this->error("失败!",'',"");            }        } else {            //缺少参数            $this->error("缺少参数!",'',"");        }    }}