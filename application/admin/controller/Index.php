<?php/** *                      .::::. *                    .::::::::.            | AUTHOR: chenyouxi *                    :::::::::::           | EMAIL: 905100794@qq.com *                 ..:::::::::::'           | QQ: 905100794 *             '::::::::::::'               | WECHAT: xi20130618 *                .::::::::::               | DATETIME: 2019/7/18 11:33 AM *           '::::::::::::::.. *                ..::::::::::::. *              ``:::::::::::::::: *               ::::``:::::::::'        .:::. *              ::::'   ':::::'       .::::::::. *            .::::'      ::::     .:::::::'::::. *           .:::'       :::::  .:::::::::' ':::::. *          .::'        :::::.:::::::::'      ':::::. *         .::'         ::::::::::::::'         ``::::. *     ...:::           ::::::::::::'              ``::. *   ```` ':.          ':::::::::'                  ::::.. *                      '.:::::'                    ':'````.. */namespace app\admin\controller;use think\Controller;use think\Db;use think\facade\App;use think\facade\Config;use think\facade\Request;use think\facade\View;class Index extends Base{    //上传验证规则    protected $uploadValidate = [        'image' => 'fileExt:jpg,png,gif,jpeg,rar,zip,avi,rmvb,3gp,flv,mp3,txt,doc,xls,ppt,pdf,xls,docx,xlsx,doc'    ];    // 首页    public function index()    {        //系统信息        $version = Db::query('SELECT VERSION() AS ver');        $config = [            'url' => $_SERVER['HTTP_HOST'],            'document_root' => $_SERVER['DOCUMENT_ROOT'],            'server_os' => PHP_OS,            'server_port' => $_SERVER['SERVER_PORT'],            'server_ip' => isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : '',            'server_soft' => $_SERVER['SERVER_SOFTWARE'],            'php_version' => PHP_VERSION,            'mysql_version' => $version[0]['ver'],            'max_upload_size' => ini_get('upload_max_filesize'),            'version' => App::version(),            'system_version' => Config::get('app.system_version'),        ];        $view = [            'config' => $config,            'user' => '',            'message' => '',            'messageCatUrl' =>'',        ];        View::assign($view);        return view();    }    /**     * @return string     * 文件上传     */    public function upload()    {        if (Request::param('from') == 'ckeditor') {            //获取上传文件表单字段名            $fileKey = array_keys(request()->file());            for ($i = 0; $i < count($fileKey); $i++) {                //获取表单上传文件                $file = request()->file($fileKey[$i]);                if ($file === null) {                    result_error( 11111, "上传文件不存在或超过服务器限制");                }                try {                    $save_path = ROOT_PATH. DS . getUploadPath();                    $info = $file->validate(['size'=>102407152,'ext'=>'jpg,png,gif'])->move($save_path);                    \think\Image::open(ROOT_PATH. DS .  getUploadPath() . '/' .  $info->getSaveName());                    $path[] = DS . getUploadPath().$info->getSaveName();                } catch (think\exception\ValidateException $e) {                    $path = '';                    $error = $e->getMessage();                }            }            if ($path) {                $result['uploaded'] = true;                //分辨是否截图上传，截图上传只能上传一个，非截图上传可以上传多个                if (Request::param('responseType') == 'json') {                    $result["url"] = $path[0];                } else {                    $result["url"] = $path;                }                return json_encode($result);            } else {                //上传失败获取错误信息                $result['uploaded'] = false;                $result['url'] = '';                $result['message'] = $error;                return json_encode($result, true);            }        } else {            //webupload [file是webloader固定写入的隐藏文本名称]            $file = request()->file('file');            try {                $save_path = ROOT_PATH . getUploadPath();                $info = $file->validate(['size'=>102407152,'ext'=>'jpg,png,gif,jpeg'])->move($save_path);                \think\Image::open(ROOT_PATH. DS .  getUploadPath() . DS .  $info->getSaveName());                return DS . getUploadPath().$info->getSaveName();            } catch (think\exception\ValidateException $e) {                return $e->getMessage();            }        }    }    // 清除缓存    public function clear()    {        $path = App::getRootPath() . 'runtime' . DIRECTORY_SEPARATOR;        if ($this->_deleteDir($path)) {            $result['msg'] = '清除缓存成功!';            $result['error'] = 0;        } else {            $result['msg'] = '清除缓存失败!';            $result['error'] = 1;        }        $result['url'] = url('admin/login/index');        return json($result);    }    // 执行删除    private function _deleteDir($R)    {        $handle = opendir($R);        while (($item = readdir($handle)) !== false) {            if ($item != '.' and $item != '..') {                if (is_dir($R . DIRECTORY_SEPARATOR . $item)) {                    $this->_deleteDir($R . DIRECTORY_SEPARATOR . $item);                } else {                    if ($item != '.gitignore' && $item != 'services.php') {                        if (!unlink($R . DIRECTORY_SEPARATOR . $item)) {                            return false;                        }                    }                }            }        }        closedir($handle);        return true;        //return rmdir($R); //删除空的目录    }}