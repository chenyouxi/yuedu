<?php

namespace app\http\middleware;

class CheckLogin
{
	use \traits\controller\Jump;

    public function handle($request, \Closure $next)
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'options') {
            exit;
        }
        
    	$admin_id = validateSessionID()['admin_id'];

    	if (empty($admin_id)) {
    		
    		login_error(401,'登陆已过期!');
    	}

    	$status = validateSessionID()['admin_status'];

    	if ($status == 0)
        {
            login_error(401,'管理员账号被禁用');
        }

    	return $next($request);
    }
}
