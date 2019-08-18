<?php

/*
 * 接收登录态过来验证,获取用户ID、openid等信息，解析登录态
 */
function validateSessionID()
{
    if (empty($_SERVER['HTTP_AUTHORIZATION']))
    {
        return false;
    }

    $res = Cache::get( $_SERVER['HTTP_AUTHORIZATION'] );
    
    return $res ? $res : false;
}
