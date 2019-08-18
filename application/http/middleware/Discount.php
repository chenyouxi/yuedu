<?php

namespace app\http\middleware;
use app\miniapp\service\GetUserDiscount as GetUserDiscountService;
use think\facade\Cache;
class Discount
{
	use \traits\controller\Jump;
    protected $getUserDiscount;
    protected $user_id;
    protected $user_Discount;
    
    public function handle($request, \Closure $next)
    {

    	$this->getUserDiscount = new GetUserDiscountService;
        $this->user_id = validateSessionID()['user_id'];
        $this->user_Discount = $this->getUserDiscount->getDiscount($this->user_id);
        $user_md5 = md5($this->user_id);
        Cache::set('Discount'.$user_md5,$this->user_Discount,3600000);
        
    	return $next($request);
    }
}
