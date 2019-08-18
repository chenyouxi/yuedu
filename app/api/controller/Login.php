<<<<<<< HEAD
<?php/** * * +---------------------------------------------------------------------- *                      .::::. *                    .::::::::.            | AUTHOR: chenyouxi *                    :::::::::::           | EMAIL: 905100794@qq.com *                 ..:::::::::::'           | QQ: 905100794 *             '::::::::::::'               | WECHAT: xi20130618 *                .::::::::::               | DATETIME: 2019/9/13 7:45 下午 *           '::::::::::::::.. *                ..::::::::::::. *              ``:::::::::::::::: *               ::::``:::::::::'        .:::. *              ::::'   ':::::'       .::::::::. *            .::::'      ::::     .:::::::'::::. *           .:::'       :::::  .:::::::::' ':::::. *          .::'        :::::.:::::::::'      ':::::. *         .::'         ::::::::::::::'         ``::::. *     ...:::           ::::::::::::'              ``::. *   ```` ':.          ':::::::::'                  ::::.. *                      '.:::::'                    ':'````.. * +---------------------------------------------------------------------- */namespace app\api\controller;use app\common\model\Users;use think\facade\Db;use think\facade\Cache;use think\facade\Env;use think\facade\Request;class Login extends Base{    // 注册、登录    public function dologin()    {        $mobile = input('post.mobile');        $code = input('post.code');        if( !$mobile ){            $this->error('请输入手机号');        } else if( !$code ){            $this->error('请输入手机验证码');        }        //校验手机验证码        $codeMoile = Cache::get($mobile."_code",'9486');        //校验手机验证码是否正确        if(!$codeMoile){            $this->error( '手机验证码已过期！');        }        if ( $code != $codeMoile){            $this->error( '手机验证码不正确！');        }        $res = Db::name('users')            -> where('mobile',$mobile)            -> find();        //已注册则登录，未注册，则注册        if( $res ){            if ($res['status'] == 0)            {                $this->error('账号已经被禁用');            }            // 生成SESSION_ID            $SESSION_ID = createSessionID($res);            // SESSION_ID加在请求头随Cookie返回            header("Cookie: SESSION_ID=$SESSION_ID");            $this->result($SESSION_ID,1);        } else {            $data['last_login_time'] = time();            $data['create_time'] = time();            $data['mobile'] = $mobile;            $data['create_ip']       = $data['last_login_ip'] = Request::ip();            $data['password']        = md5(123456);            $data['type_id']        = 1;//默认为注册会员            $result =  Users::addPost($data);            if ($result['error']) {                $this->error($result['msg']);            } else {                // 生成SESSION_ID                $res = Db::name('users')-> where('mobile',$mobile)-> find();                $SESSION_ID = createSessionID($res);                // SESSION_ID加在请求头随Cookie返回                header("Cookie: SESSION_ID=$SESSION_ID");                $this->result($SESSION_ID,1);            }        }    }    //短信发送    public function sendSms(){        $mobile = input('post.mobile');        if( !$mobile ){            $this->error('请输入手机号');        }        //校验手机号发送间隔时间        $codeMoile = Cache::get($mobile."_code",'');        if($codeMoile){            if( ($codeMoile['verify_time'] + 60 ) > time() && isset($codeMoile['verify_time'])){                $this->error("您发送的手机验证码过于频繁，请稍后再试！");            }        }        $data = \app\common\model\Config::where('inc_type','sms')->select();        $config = convert_arr_kv($data,'name','value');        //生成验证码        $code = rand ( 1000, 9999 );        $sms = new \Sms($config);        //短信验证码        $status = $sms->send_verify($mobile, $code);        if (!$status) {            $this->error($sms->error);        } else {            $this->success("短信发送成功!");        }    }}
=======
<?php/** * * +---------------------------------------------------------------------- *                      .::::. *                    .::::::::.            | AUTHOR: chenyouxi *                    :::::::::::           | EMAIL: 905100794@qq.com *                 ..:::::::::::'           | QQ: 905100794 *             '::::::::::::'               | WECHAT: xi20130618 *                .::::::::::               | DATETIME: 2019/9/13 7:45 下午 *           '::::::::::::::.. *                ..::::::::::::. *              ``:::::::::::::::: *               ::::``:::::::::'        .:::. *              ::::'   ':::::'       .::::::::. *            .::::'      ::::     .:::::::'::::. *           .:::'       :::::  .:::::::::' ':::::. *          .::'        :::::.:::::::::'      ':::::. *         .::'         ::::::::::::::'         ``::::. *     ...:::           ::::::::::::'              ``::. *   ```` ':.          ':::::::::'                  ::::.. *                      '.:::::'                    ':'````.. * +---------------------------------------------------------------------- */namespace app\api\controller;use app\common\model\Users;use think\facade\Db;use think\facade\Cache;use think\facade\Env;use think\facade\Request;class Login extends Base{    // 注册、登录    public function dologin()    {        $mobile = input('post.mobile');        $code = input('post.code');        if( !$mobile ){            $this->error('请输入手机号');        } else if( !$code ){            $this->error('请输入手机验证码');        }        //校验手机验证码        $codeMoile = Cache::get($mobile."_code",'');        //校验手机验证码是否正确        if(!$codeMoile){            $this->error( '手机验证码已过期！');        } else if ($mobile != $codeMoile['verify_mobile']) {            $this->error( '该手机号与验证手机不符！');        } else if ( $code != $codeMoile['verify_code']){            $this->error( '手机验证码不正确！');        } else if ( time() > $codeMoile['verify_time']+5*60){            $this->error( '手机验证码已过期！');        }        $res = Db::name('users')            -> where('mobile',$mobile)            -> find();        //已注册则登录，未注册，则注册        if( $res ){            if ($res['status'] == 0)            {                $this->error('账号已经被禁用');            }            // 生成SESSION_ID            $SESSION_ID = createSessionID($res);            // SESSION_ID加在请求头随Cookie返回            header("Cookie: SESSION_ID=$SESSION_ID");            $this->result($SESSION_ID,1);        } else {            $data['last_login_time'] = time();            $data['create_time'] = time();            $data['mobile'] = $mobile;            $data['create_ip']       = $data['last_login_ip'] = Request::ip();            $data['password']        = md5(123456);            $data['type_id']        = 1;//默认为注册会员            $result =  Users::addPost($data);            if ($result['error']) {                $this->error($result['msg']);            } else {                // 生成SESSION_ID                $res = Db::name('users')-> where('mobile',$mobile)-> find();                $SESSION_ID = createSessionID($res);                // SESSION_ID加在请求头随Cookie返回                header("Cookie: SESSION_ID=$SESSION_ID");                $this->result($SESSION_ID,1);            }        }    }    //短信发送    public function sendSms(){        $mobile = input('post.mobile');        if( !$mobile ){            $this->error('请输入手机号');        }        //校验手机号发送间隔时间        $codeMoile = Cache::get($mobile."_code",'');        if($codeMoile){            if( ($codeMoile['verify_time'] + 60 ) > time() && isset($codeMoile['verify_time'])){                $this->error("您发送的手机验证码过于频繁，请稍后再试！");            }        }        $data = \app\common\model\Config::where('inc_type','sms')->select();        $config = convert_arr_kv($data,'name','value');        //生成验证码        $code = rand ( 1000, 9999 );        $sms = new \Sms($config);        //短信验证码        $status = $sms->send_verify($mobile, $code);        if (!$status) {            $this->error($sms->error);        } else {            $this->success("短信发送成功!");        }    }}
>>>>>>> 提交
