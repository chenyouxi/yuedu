<?php/** * * +---------------------------------------------------------------------- *                      .::::. *                    .::::::::.            | AUTHOR: chenyouxi *                    :::::::::::           | EMAIL: 905100794@qq.com *                 ..:::::::::::'           | QQ: 905100794 *             '::::::::::::'               | WECHAT: xi20130618 *                .::::::::::               | DATETIME: 2019/9/22 1:02 上午 *           '::::::::::::::.. *                ..::::::::::::. *              ``:::::::::::::::: *               ::::``:::::::::'        .:::. *              ::::'   ':::::'       .::::::::. *            .::::'      ::::     .:::::::'::::. *           .:::'       :::::  .:::::::::' ':::::. *          .::'        :::::.:::::::::'      ':::::. *         .::'         ::::::::::::::'         ``::::. *     ...:::           ::::::::::::'              ``::. *   ```` ':.          ':::::::::'                  ::::.. *                      '.:::::'                    ':'````.. * +---------------------------------------------------------------------- */namespace app\api\controller;use app\common\model\Users;use think\facade\Db;use think\facade\Cache;use think\facade\Env;use think\facade\Request;use app\common\model\Book as M;use app\common\model\BookType;class Book extends Base{    //书籍搜索    public function search(){        $where = [];        $keyword = input('post.keyword');        $page = input('post.page');        $pageSize = input('post.pageSize',20);        if (!empty($keyword)) {            $where[] = ['name', 'like', '%'.$keyword.'%'];        }        //获取列表        $list = M::getList($where, $pageSize);        $list['keyword'] = $keyword;        $this->success("成功!",'',$list);    }}