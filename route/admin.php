<?php/** * Created by PhpStorm. * User: chenyouxi * Date: 2019/7/17 * Time: 5:07 PM *//****************************  后台  ***********************///登录Route::rule('/admin/login','admin/Login/index');//登录提交Route::rule('/admin/dologin','admin/Login/dologin');//注销登陆Route::rule('/admin/loginout','admin/Login/loginout');//验证码Route::rule('/admin/captcha','admin/Login/captcha');//登录校验Route::rule('/admin/checkLogin','admin/Login/checkLogin');//首页Route::rule('/admin/index','admin/Index/index');//图片上传路径Route::rule('/admin/upload','admin/Index/upload');