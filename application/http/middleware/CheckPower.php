<?php

namespace app\http\middleware;

class CheckPower
{
	use \traits\controller\Jump;

    public function handle($request, \Closure $next, $power)
    {
        if (strtolower($_SERVER['REQUEST_METHOD']) == 'options') {
            exit;
        }


        if (!in_array(999, explode(',', validateSessionID()['admin_power'])))
        {
            if (!in_array($power, explode(',', validateSessionID()['admin_power'])))
            {
                return error('权限不足', 403);
            }
        }


    	return $next($request);
    }
}
