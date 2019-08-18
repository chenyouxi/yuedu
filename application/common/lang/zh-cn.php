<?php

return [
    //分页
    'total'                          => '共',
    'strip'                          => '条',
    'shadowe'                        => '尾页',
    'goods_previous_page'             => '上一页',
    'goods_next_page'                 => '下一页',

    'hello thinkphp'  => '欢迎使用ThinkPHP',
    'data type error' => '数据类型错误',
    'getRechargeRecord'=>[
        'recharge_record_id'=>'充值记录id'
        ,'recharge_no'=>'充值单号'
        ,'user_id'=>'关联用户表'
        ,'user_name'=>'会员名称'
        ,'user_phone'=>'会员电话'
        ,'level_id'=>'会员身份'
        ,'recharge_amount'=>'充值金额'
        ,'recharge_method'=>'支付类型'
        ,'recharge_status'=>'支付状态'
        ,'recharge_createtime'=>'充值时间'
        ,'recharge_paytime'=>'支付时间'
        ,'user_transaction_id'=>'第三方流水号'
        ,'level_name'=>'会员等级'
    ],
    'SearchCashWithdrawal'=>[
        "cash_withdrawal_id"=>"ID",
        "cash_withdrawal_orderNo"=>"提现申请号",
        "cash_withdrawal_username"=>"申请人",
        "cash_withdrawal_creditcard"=>"提现银行卡卡号",
        "cash_withdrawal_phone"=>"提现银行卡绑定的手机号",
        "cash_withdrawal_money"=>"提现金额",
        "cash_withdrawal_createtime"=>"创建时间",
        "cash_withdrawal_to_examine_status"=>"审核状态",
        "cash_withdrawal_to_examine_time"=>"审核时间",
        "user_id"=>"会员ID",
        "user_name"=>"会员姓名",
        "user_phone"=>"会员电话",
        "level_id"=>"会员身份",
        "cash_transaction_no"=>"提现申请单号"
    ],
    'searchThirdparty'=>[
        "order_no"=>"相关的订单编",
        "user_transaction_id"=>"第三方订单号",
        "user_invitecode"=>"邀请码",
        "user_name"=>"会员姓名",
        "user_phone"=>"会员电话",
        "user_balance_record_createtime"=>"创建时间",
        "pay_type"=>"支付方式",
        "user_balance_record_detail"=>"消费",
        "user_balance_record_type"=>"余额记录标识",
        "user_balance_record_amount"=>"余额记录金额"
    ],
    'YtSearchCashWithdrawal'=>[
        "cash_withdrawal_id"=>"ID",
        "cash_withdrawal_orderNo"=>"提现申请号",
        "cash_withdrawal_username"=>"申请人",
        "cash_withdrawal_creditcard"=>"提现银行卡卡号",
        "cash_withdrawal_phone"=>"提现银行卡绑定的手机号",
        "cash_withdrawal_money"=>"提现金额",
        "cash_withdrawal_createtime"=>"创建时间",
        "cash_withdrawal_to_examine_status"=>"审核状态",
        "cash_withdrawal_to_examine_time"=>"审核时间",
        "user_id"=>"会员ID",
        "user_name"=>"会员姓名",
        "user_phone"=>"会员电话",
        "level_id"=>"会员身份",
        "cash_transaction_no"=>"提现申请单号",
        "cash_withdrawal_yt_apply_id"=>"代收申请附表ID",
    ],
    'memberDataCount'=>[
        "user"=>"会员总数",
        "order"=>"订单总数"
    ],
    'orderDataCount'=>[
        "per_capita_order"=>"订单均价",
        "average_order_price"=>"人均订单",
        "total_order"=>"订单数",
        "total_amount"=>"订单金额",
        "conversion_rate"=>"新用户购买转化率"
    ],
    'informationDataCount'=>[
        "order_all_price"=>"订单总金额",
        "cash_all_price"=>"提现总金额",
        "return_all_price"=>"退款总金额",
        "order_finished"=>"订单完成数",
        "order_return_count"=>"退款订单数",
        "order_close_count"=>"关闭订单数",
        "order_unit_price"=>"订单客单价",
        "new_user"=>"新用户数"
    ],
    'commoditySaleCount'=>[
        "commodity_id"=>"商品ID",
        "commodity_category_id"=>"关联商品类别表",
        "commodity_icon"=>"商品图片",
        "commodity_brand_id"=>"关联品牌表",
        "commodity_name"=>"商品名称",
        "commodity_subheading"=>"副标题",
        "commodity_description"=>"商品描述",
        "commodity_stock_original_price"=>"商品原价",
        "commodity_low_price"=>"商品最低价",
        "commodity_sold_quantity"=>"商品销量,已销售额",
        "commodity_clickrate"=>"商品点击率",
        "commodity_status"=>"商品状态",
        "commodity_type"=>"产品类型",
        "commodity_is_show"=>"显示否",
        "commodity_createtime"=>"记录时间",
        "commodity_false"=>"商品需值销量",
        "commodity_alone_commission"=>"该商品的单独佣金",
        "commodity_alone_discount"=>"该商品的单独折扣",
        "commodity_vip_discount"=>"参与",
        "commodity_purchase_limit"=>"商品购买限额",
        "commodity_is_upgrade"=>"满额升级否",
        "sale_prices"=>"销售金额",
        "sale_count"=>"销售数量"
    ],
    'SearchUser' =>[
          "user_id"=>"会员ID",
          "user_openid"=>"会员OPEINID",
          "user_unionid"=>"会员unionid",
          "user_name"=>"会员姓名",
          "user_password"=>"密码",
          "user_sex"=>"性别",
          "user_birthday"=>"会员生日",
          "user_phone"=>"会员电话",
          "user_city"=>"城市",
          "wechat_id"=>"微信ID",
          "user_balance"=>"可提余额",
          "user_vip_balance"=>"不可提vip余额",
          "level_id"=>"会员等级",
          "user_agent"=>"代理商",
          "user_owner"=>"推荐人",
          "user_invitecode"=>"邀请码",
          "user_is_prohibit"=>"禁用否",
          "user_createtime"=>"会员创建时间",
          "user_lasttime"=>"最后登录时间",
          "user_status"=>"会员状态",
          "session_id"=>"用户SESSIONID",
          "user_app_openid"=>"用户appOpenid",
          "is_new"=>"是否新用户",
          "tonglian_biz_user_id"=>"通联会员ID",
          "sub_account"=>"子帐户",
          "user_code"=>"user_code",
          "agentName"=>"代理商",
          "agentCode"=>"代理商Code",
          "user_owner_name"=>"推荐人",
          "user_owner_code"=>"代理商code",
          "user_all_balance"=>"余额",
    ],

    'blanceInfo'=>[
        "order_no"=>"订单号",
        "pay_type"=>"支付方式",
        "user_balance_record_amount"=>"余额记录金额",
        "user_balance_record_createtime"=>"记录时间",
        "user_balance_record_detail"=>"充值金额",
        "user_balance_record_id"=>"详情",
        "user_balance_record_type"=>"余额记录标识",
        "user_code"=>"user_code",
        "user_id"=>"会员ID",
        "user_name"=>"会员姓名",
        "user_phone"=>"会员电话",
        "user_transaction_id"=>"第三方订单号",
    ],

    'level_id_getAttribute'=>[
        "1"=>"代理商",
        "2"=>"砖石",
        "3"=>"VIP",
        "4"=>"普通会员"
    ],

    'user_sex_getAttribute'=>[
        "1"=>"男",
        "2"=>"女"
    ],

    'user_status_getAttribute'=>[
        "1"=>"正常",
        "2"=>"删除"
    ],

    'user_is_prohibit_getAttribute'=>[
        "0"=>"否",
        "1"=>"是"
    ],

    'is_new_getAttribute'=> [
        "0"=>"旧用户",
        "1"=>"新用户"
    ],

    'pay_type_getAttribute'=> [
        '1'=>'微信',
        '2'=>'银行卡',
        '3'=>'余额',
    ],

    'recharge_method_getAttribute'=> [
        '1'=>'微信',
        '2'=>'银行卡',
        '3'=>'余额',
    ],

    'user_balance_record_type_getAttribute'=>[
        "0"=>"无标识",
        "1"=>"充值会员金额返现",
        "2"=>"充值金额",
        "3"=>'提现',
        "4"=>'退款',
        "5"=>'消费',
    ],
    'recharge_status_getAttribute' =>[
       '1'=>'成功',
        '0'=>'失败'
    ],

    'cash_withdrawal_to_examine_status_getAttribute'=>[
        '0'=>'未审核',
        '1'=>'审核成功',
        '2'=>'审核失败',
    ],
    ///////////////////
    'exec_prefix'=>[
        'order_no','user_transaction_id'
    ],




 ];

?>