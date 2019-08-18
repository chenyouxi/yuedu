<?php/** * Created by PhpStorm. * User: chenyouxi * Date: 2019/7/17 * Time: 4:59 PM */namespace app\admin\controller;use app\common\service\Wechat as Wechat;use app\common\service\WeixinService as wxService;use app\common\service\User as User;use app\common\service\Http as http;use app\common\service\SourceService as Source;use app\common\service\ImageTextService as ImageText;use app\common\service\DiyMenuService as diyMenu;use think\facade\Config;use think\facade\Db;use think\facade\Request;use think\facade\View;class Weixin extends Base{    public function index(){    }        //群发消息    public function massMsg(){        $user = new User();        $fansCount = $user->getCountWxUser();        //获取素材        $source = new Source();        $ImageText = new ImageText();        $list = $source -> getList(1, 15, [], "autoId DESC","*");        $itIds = array();        $temp = array();        foreach ($list['data'] as $l) {            $lt_ids_arr = unserialize($l['itIds']);            if (is_array($lt_ids_arr)) {                foreach (unserialize($l['itIds']) as $id) {                    if (!in_array($id, $itIds)) $itIds[] = $id;                    $temp[$id] = $l;                }            }        }        $result = array();        $image_text = $ImageText -> getQuery([["autoId","in",$itIds]], "autoId,title", "autoId ASC");        $temp = json_decode(json_encode($temp),true);        foreach ($image_text as $txt) {            if (!isset($result[$temp[$txt['autoId']]['autoId']])) {                $result[$temp[$txt['autoId']]['autoId']] = $temp[$txt['autoId']];            }            $result[$temp[$txt['autoId']]['autoId']]['list'][] = $txt;        }        View::assign('list', $result);        View::assign('fansCount', $fansCount);        return view();    }    //发送    public function send(){        //防止资源过大超时        set_time_limit(0);        $content = Request::param('content');        $fansType = Request::param('fansType');        $type = Request::param('type');        $image = Request::param('image');        $wxService = new wxService();        $access_token 	= $wxService->getAccessToken();        $_SESSION['WEIXIN_TOKEN_DATA'] = $access_token;        if ($access_token['errcode']) {            $this->error($access_token['errmsg']);        }        $http = new Http();        $send_all_url = 'https://api.weixin.qq.com/cgi-bin/message/mass/sendall?access_token=' . $access_token['access_token'];        $send_url = 'https://api.weixin.qq.com/cgi-bin/message/mass/send?access_token=' . $access_token['access_token'];        //内容类型        $type = isset($type) ? intval($type) : -1;        if ($type == -1) {            $this->error("不合法的请求");        } else if ($type == 0) {            //单文本            $content = strip_tags(html_entity_decode($content));            if (empty($content)) {                $this->error("发送内容不能为空");            }            if ($fansType == 'all') {                $str = '{"filter":{"is_to_all":true}, "text":{"content":"' . addslashes($content) . '"}, "msgtype":"text"}';                $rt = $http::curlPost($send_all_url, $str);            } else {//                foreach ($openid_arr as $tmp) {//                    $str = '{"touser":[' . $tmp . '], "msgtype": "text", "text": { "content": "' . addslashes($content) . '"}}';//                    $rt = $http::curlPost($send_url, $str);//                }            }            if ($rt['errcode']) {                $this->error($rt['errmsg']);            } else {                $this->success("群发成功");            }        } elseif ($type == 1) {            //图片            $url = isset($image) ? htmlspecialchars($image) : '';            if (empty($url) || !is_file(ROOT_PATH .$url)) $this->error("不是合法的图片");            $url = ROOT_PATH.ltrim($url,'/');            //$real_path = "D:\wwwroot\www91amz\wwwroot\public\images\logo.png";            $data = array(                "media" => new \CURLFile(realpath($url))            );            $upload = $http::curlPost('https://api.weixin.qq.com/cgi-bin/media/upload?access_token='.$access_token['access_token'].'&type=image', $data);            if ( $upload['errcode'] ) {                $this->error($upload['errmsg']);            }            //图片            if ($fansType == 'all') {                $str = '{"filter":{"is_to_all":true},"image":{"media_id":"'.$upload['media_id'].'"}, "msgtype":"image"}';                $result = $http::curlPost($send_all_url, $str);            } else {//                foreach ($openid_arr as $tmp) {//                    $str = '{"touser":[' . $tmp . '], "image":{"media_id":"' . $upload['media_id'] . '"}, "msgtype":"image"}';//                    $result = $http::curlPost($send_url, $str);//                }            }            if ($result['errcode']) {                $this->error($result['errmsg']);            } else {                $this->success("群发成功");            }        } else {            //图文素材            $autoId = isset($_POST['source_id']) ? intval($_POST['source_id']) : 0;            $source = new Source();            $ImageText = new ImageText();            if ( $data = $source->getInfo(['autoId' => $autoId]) ) {                $upload_url = 'http://file.api.weixin.qq.com/cgi-bin/media/upload?access_token='.$access_token['access_token'].'&type=image';                $it_ids = unserialize($data['itIds']);                $comma = $send = '';                $media = array();                if ($data['type'] == 0) {                    $id = isset($it_ids[0]) ? intval($it_ids[0]) : 0;                    $image_text = $ImageText -> getInfo(array('autoId' => $id ));                    if ($image_text['coverPic']) {                        $url 	= ROOT_PATH.$image_text['coverPic'];                        $media  = Http::curlPost($upload_url, array( "media" => new \CURLFile(realpath($url)) ));                        if ($media['errcode']) {                            $this->error($media['errmsg']);                        }                    } else {                        $media['media_id'] = '';                    }                    $content = html_entity_decode($image_text['content']);                    $content = preg_replace_callback('/src=\"\/?(.*?)\"/', array($this, 'sendUploadImage'), $content);                    $send = '{"thumb_media_id":"'.$media['media_id'].'","author":"'.$image_text['author'].'","title":"'.$image_text['title'].'","content_source_url":"'.$image_text['url'].'","content":"' . addslashes($content) . '","digest":"'.$image_text['digest'].'", "show_coverPic":"'.$image_text['isShow'].'"}';                } else {                    $image_text = D('Image_text')->where(array('autoId' => array('in', $it_ids)))->order('autoId asc')->select();                    foreach ($image_text as $image) {                        $media['media_id'] = '';                        if ($image['coverPic']) {                            $url 	= PIGCMS_PATH.'upload/'.$image['coverPic'];                            if(!file_exists($url)){                                $org_url= getAttachmentUrl($image['coverPic']);                                $url = PIGCMS_PATH.'upload/'.$image['coverPic'];                                Http::curlDownload($org_url,$url);                            }                            $media  = Http::curlPost($upload_url, array('media' => '@' . $url));                            if ($media['errcode']) {                                exit(json_encode($media));                            }                        }                        $content = html_entity_decode($image['content']);                        $content = preg_replace_callback('/src=\"\/?(.*?)\"/', 'sendUploadImage', $content);                        $send .= $comma . '{"thumb_media_id":"'.$media['media_id'].'","author":"'.$image['author'].'","title":"'.$image['title'].'","content_source_url":"'.$image['url'].'","content":"' . addslashes($content) . '","digest":"'.$image['digest'].'", "show_coverPic":"'.$image['isShow'].'"}';                        $comma = ',';                    }                }                $uploadnews = Http::curlPost('https://api.weixin.qq.com/cgi-bin/media/uploadnews?access_token='.$access_token['access_token'], '{"articles": ['.$send.']}');                if ($uploadnews['errcode']) {                    exit(json_encode($uploadnews));                }                if ($fansType == 'all') {                    $str = '{"filter":{"is_to_all":true}, "mpnews":{"media_id":"' . $uploadnews['media_id'] . '"}, "msgtype":"mpnews"}';                    $result = Http::curlPost($send_all_url, $str);                } else {//                    foreach ($openid_arr as $tmp) {//                        $str = '{"touser":[' . $tmp . '], "mpnews":{"media_id":"' . $uploadnews['media_id'] . '"}, "msgtype":"mpnews"}';//                        $result = Http::curlPost($send_url, $str);//                    }                }                if ($result['errcode']) {                    $this->error($result['errmsg']);                } else {                    $this->success("群发成功");                }            } else {                $this->error("不是合法的参数");            }        }    }    //图文素材    public function source(){        $source = new Source();        $ImageText = new ImageText();        $list = $source -> getList(1, 15, [], "autoId DESC","*");        $itIds = array();        $temp = array();        foreach ($list['data'] as $l) {            $lt_ids_arr = unserialize($l['itIds']);            if (is_array($lt_ids_arr)) {                foreach (unserialize($l['itIds']) as $id) {                    if (!in_array($id, $itIds)) $itIds[] = $id;                    $temp[$id] = $l;                }            }        }        $result = array();        $image_text = $ImageText -> getQuery([["autoId","in",$itIds]], "autoId,title", "autoId ASC");        $temp = json_decode(json_encode($temp),true);        foreach ($image_text as $txt) {            if (!isset($result[$temp[$txt['autoId']]['autoId']])) {                $result[$temp[$txt['autoId']]['autoId']] = $temp[$txt['autoId']];            }            $result[$temp[$txt['autoId']]['autoId']]['list'][] = $txt;        }        View::assign('list', $result);        return view();    }    //单图文    public function sourceOne(){        $autoId = isset($_GET['autoId']) ? intval($_GET['autoId']) : 0;        $image_text = array('title' => '', 'coverPic' => '', 'author' => '', 'content' => '', 'digest' => '', 'url' => '', 'addTime' => time(), 'autoId' => 0,'isShow' => 1);        $source = new Source();        if ($data = $source->getInfo(['autoId' => $autoId])) {            $it_ids = unserialize($data['itIds']);            $id = isset($it_ids[0]) ? intval($it_ids[0]) : 0;            $ImageText = new ImageText();            $image_text = $ImageText->getInfo( ['autoId' => $id] );            $image_text['coverPic'] = $image_text['coverPic'];            $image_text['content'] = html_entity_decode($image_text['content']);        }        View::assign('autoId', $autoId);        View::assign('image_text', $image_text);        return view();    }    //单图文保存    public function saveOne(){        $autoId = isset($_POST['autoId']) ? intval($_POST['autoId']) : 0;        $thisid = isset($_POST['thisid']) ? intval($_POST['thisid']) : 0;        $data['content'] = isset($_POST['content']) ? htmlspecialchars( $_POST['content']) : '';        $data['title'] = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';        $data['author'] = isset($_POST['author']) ? htmlspecialchars($_POST['author']) : '';        $data['url'] = isset($_POST['url']) ? htmlspecialchars($_POST['url']) : '';        $data['urlTitle'] = isset($_POST['urlTitle']) ? htmlspecialchars($_POST['urlTitle']) : '';        $data['coverPic'] = isset($_POST['image']) ? htmlspecialchars($_POST['image']) : '';        $data['digest'] = isset($_POST['digest']) ? htmlspecialchars($_POST['digest']) : '';        $data['isShow'] = isset($_POST['isShow']) ? intval($_POST['isShow']) : 0;        if (empty($data['title'])) {            $this->error("标题不能为空");        }        if (empty($data['coverPic'])) {            $this->error("必须得有封面图");        }        $data['coverPic'] = $data['coverPic'];        if (empty($data['content'])) {            $this->error("内容不能为空");        }        $data['addTime'] = time();        $source = new Source();        $ImageText = new ImageText();        if ($autoId && $thisid) {            if ( $ImageText->save($data, ['autoId' => $thisid]) ) {                $source->add(['autoId' => $autoId],['itIds' => serialize(array($thisid)),'addTime' => time(),'type'=>0]);                $this->success("ok");            } else {                $this->error("操作失败稍后重试！");            }        } else {            if ($id = $ImageText->add($data,false,true)) {                $source->add(array('itIds' => serialize(array($id)),  'addTime' => time(),'type'=>0));                $this->success("ok");            } else {                $this->error("操作失败稍后重试！");            }        }    }    private function sendUploadImage($matches){        $token_data = $_SESSION['WEIXIN_TOKEN_DATA'];        if ($token_data['errcode']) {            exit(json_encode($token_data));        }        $upload_url = 'https://api.weixin.qq.com/cgi-bin/media/uploadimg?access_token=' . $token_data['access_token'];        $image = $matches[1];        $url = ROOT_PATH . ltrim(str_replace("https://www.91amz.com",'', $image),'/');        if(!file_exists($url)){            $image_name = ltrim(strrchr($image, '/'), '/');            $upload_dir = config("save_path") . date('Ym', $_SERVER['REQUEST_TIME']) .DS;            if(!is_dir($upload_dir)){                mkdir($upload_dir,0777,true);            }            $url 	= ROOT_PATH .  $upload_dir . $image_name;            Http::curlDownload($image, $url);        }        $media  = Http::curlPost($upload_url, array( "media" => new \CURLFile(realpath($url))));        if ($media['errcode'] == 0) {            return 'src="' . $media['url'] . '"';        }    }    //自定义菜单    public function diyMenu(){        $diyMenu = new diyMenu();        $list = $diyMenu->getQuery(["pid"=>0], "*", "sort desc");        foreach ($list as $key => $vo) {            $c = $diyMenu->getQuery(["pid"=>$vo['autoId']], "*", "sort desc");            $list[$key]['class'] = $c;        }        View::assign('list', $list);        return view();    }    //添加自定义菜单    public function diyMenuAdd(){        $diyMenu = new diyMenu();        if (Request::isPost()) {            $data = array();            $data['pid'] = isset($_POST['pid']) ? intval($_POST['pid']) : 0;            $count = $diyMenu->getCount(['pid' => $data['pid']]);            if ($data['pid'] == 0 && $count >= 3) {                $this->error('1级菜单最多只能开启3个');            } elseif ($data['pid'] && $count >= 5) {                $this->error('2级子菜单最多开启5个');            }            $data['isShow'] = isset($_POST['isShow']) ? intval($_POST['isShow']) : 1;            $data['sort'] = isset($_POST['sort']) ? intval($_POST['sort']) : 0;            $data['title'] = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';            $data['keyword'] = isset($_POST['keyword']) ? htmlspecialchars($_POST['keyword']) : '';            $data['url'] = isset($_POST['url']) ? htmlspecialchars_decode($_POST['url']) : '';            $data['wxSys'] = isset($_POST['wxSys']) ? htmlspecialchars($_POST['wxSys']) : '';            if($_POST['menuType'] == 1 && $_POST['keyword'] != ''){                $data['url'] = $data['wxSys'] = '';            }elseif($_POST['menuType'] == 2 && $_POST['url'] != ''){                $data['keyword'] = $data['wxSys'] = '';            }elseif($_POST['menuType'] == 3 && $_POST['wxSys'] != ''){                $data['keyword'] = $data['url'] = '';            }            if ( $diyMenu->add($data) )            {                $this->success('添加成功');            }        } else {            View::assign('bg_color','#F3F3F3');            $list = $diyMenu->getQuery(['pid'=>0], "*", "sort desc");            View::assign('list', $list);            View::assign('wxSys', $this->_get_sys());            return view();        }    }    //编辑自定义菜单    public function diyMenuEdit(){        $diyMenu = new diyMenu();        View::assign('bg_color','#F3F3F3');        View::assign('wxSys',$this->_get_sys());        if (Request::isPost()) {            $set['pid'] = isset($_POST['pid']) ? intval($_POST['pid']) : 0;            $set['keyword'] = isset($_POST['keyword']) ? htmlspecialchars($_POST['keyword']) : '';            $set['url'] = isset($_POST['url']) ? htmlspecialchars_decode($_POST['url']) : '';            $set['wxSys'] = isset($_POST['wxSys']) ? htmlspecialchars($_POST['wxSys']) : '';            if($_POST['menuType']==1 && $_POST['keyword'] != ''){                $set['url'] = $set['wxSys'] = '';            }else if($_POST['menuType']==2 && $_POST['url'] != ''){                $set['keyword'] = $set['wxSys'] = '';            }else if($_POST['menuType']==3 && $_POST['wxSys'] != ''){                $set['keyword'] = $set['url'] = '';            }            $set['isShow'] = isset($_POST['isShow']) ? intval($_POST['isShow']) : 1;            $set['sort'] = isset($_POST['sort']) ? intval($_POST['sort']) : 0;            $set['title'] = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';            $diyMenu -> save($set,['autoId'=>$_POST['autoId']]);            $this->success('更新成功');        } else {            $data = $diyMenu -> getInfo( ["autoId" => $_GET['autoId']] ,   '*');            if ($data==false) {                $this->error('您所操作的数据对象不存在！');            } else {                $class = $diyMenu -> getQuery( ["pid" => 0] ,   '*','sort desc');                View::assign('list', $class);                View::assign('show', $data);            }            if ($data['keyword'] != '') {                $type = 1;            } elseif($data['url'] != '') {                $type = 2;            } elseif($data['wxSys'] != '') {                $type = 3;            }            View::assign('type', $type);            return view();        }    }    //生成自定义菜单    public function diyMenuSend(){        if(Request::isGet()){            $wxService = new wxService();            $access_token 	= $wxService->getAccessToken();            if ($access_token['errcode']) {                $this->error('获取access_token发生错误：错误代码' . $access_token['errcode'] .',微信返回错误信息：' . $access_token['errmsg']);            }            $data = '{"button":[';            $diyMenu = new diyMenu();            $class = $diyMenu -> getList(1, 3, ['pid'=>0,'isShow'=>1], ' sort asc ',"arr");            $kcount = $diyMenu -> getCount(['pid'=>0,'isShow'=>1]);            $k=1;            foreach($class as $key=>$vo){                //主菜单                $data.='{"name":"'.$vo['title'].'",';                $c = $diyMenu -> getList(1, 5, ['pid'=>$vo['id'],'isShow'=>1], ' sort asc ',"arr");                $count = $diyMenu -> getCount(['pid'=>$vo['id'],'isShow'=>1]);                //子菜单// 				$vo['url']=str_replace(array('{siteUrl}','&amp;','&wecha_id={wechat_id}'),array($this->siteUrl,'&','&diymenu=1'),$vo['url']);                if($c!=false){                    $data.='"sub_button":[';                }else{                    if($vo['keyword']){                        $data.='"type":"click","key":"'.$vo['keyword'].'"';                    }else if($vo['url']){                        $data.='"type":"view","url":"'.$vo['url'].'"';                    }else if($vo['wxSys']){                        $data.='"type":"'.$this->_get_sys('send',$vo['wxSys']).'","key":"'.$vo['wxSys'].'"';                    }                }                $i=1;                foreach($c as $voo){// 					$voo['url']=str_replace(array('{siteUrl}','&amp;','&wecha_id={wechat_id}'),array($this->siteUrl,'&','&diymenu=1'),$voo['url']);                    if($i==$count){                        if($voo['keyword']){                            $data.='{"type":"click","name":"'.$voo['title'].'","key":"'.$voo['keyword'].'"}';                        }else if($voo['url']){                            $data.='{"type":"view","name":"'.$voo['title'].'","url":"'.$voo['url'].'"}';                        }else if($voo['wxSys']){                            $data.='{"type":"'.$this->_get_sys('send',$voo['wxSys']).'","name":"'.$voo['title'].'","key":"'.$voo['wxSys'].'"}';                        }                    }else{                        if($voo['keyword']){                            $data.='{"type":"click","name":"'.$voo['title'].'","key":"'.$voo['keyword'].'"},';                        }else if($voo['url']){                            $data.='{"type":"view","name":"'.$voo['title'].'","url":"'.$voo['url'].'"},';                        }else if($voo['wxSys']){                            $data.='{"type":"'.$this->_get_sys('send',$voo['wxSys']).'","name":"'.$voo['title'].'","key":"'.$voo['wxSys'].'"},';                        }                    }                    $i++;                }                if($c!=false){                    $data.=']';                }                if($k==$kcount){                    $data.='}';                }else{                    $data.='},';                }                $k++;            }            $data.=']}';            // file_get_contents('https://api.weixin.qq.com/cgi-bin/menu/delete?access_token='.$access_token_array['access_token']);            $url = 'https://api.weixin.qq.com/cgi-bin/menu/create?access_token='.$access_token['access_token'];            $rt = $this->api_notice_increment($url,$data);            if ($rt['rt'] == false) {                import('@.ORG.GetErrorMsg');                $errmsg = GetErrorMsg::wx_error_msg($rt['errorno']);                $this->error('操作失败,'.$rt['errorno'].':'.$errmsg);            }else{                $this->success('操作成功');            }            exit;        }else{            $this->error('非法操作');        }    }    private function _get_sys($type='',$key='')    {        $wxSys 	= array(            '扫码带提示',            '扫码推事件',            '系统拍照发图',            '拍照或者相册发图',            '微信相册发图',            '发送位置',        );        if($type == 'send'){            $wxSys 	= array(                '扫码带提示'=>'scancode_waitmsg',                '扫码推事件'=>'scancode_push',                '系统拍照发图'=>'pic_sysphoto',                '拍照或者相册发图'=>'pic_photo_or_album',                '微信相册发图'=>'pic_weixin',                '发送位置'=>'location_select',            );            return $wxSys[$key];            exit;        }        return $wxSys;    }}