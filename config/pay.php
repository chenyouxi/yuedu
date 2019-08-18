<?php
return [
    'allinpay' => [
        'appid' => '',
        'cusid' => '',
        'privatekeyfile' => \think\facade\Env::get('root_path').'public/static/allinpayprod/20058600000210104.p12',
        'certfile' => \think\facade\Env::get('root_path').'public/static/allinpayprod/allinpay-pds.pem',
        'apiurl' => 'https://tlt.allinpay.com/aipg/ProcessServlet',//生产环境
        'apiversion' => '11',
    ],
    'allinpayweichat' => [
        'appid' => '',// 平台分配的APPID，必填
        'appkey' => '',// 平台分配的MD5密钥，生成sign关键参数，必填
        'apiurl' => 'https://vsp.allinpay.com/apiweb/unitorder/',//微信生产
        'apiversion' => '11',// 接口版本号, 默认填11
        'cusid' => '',// 实际交易的商户号
        'paytype' => 'W06',// w06为小程序支付，必填
        'order_notify_path'     => '',             // 微信支付回调通知访问路径(商城订单支付成功)
        'recharge_notify_path'  => '',     // 微信支付回调通知访问路径(充值余额支付成功)
        'buyVIP_notify_path'    => '',   // 微信支付回调通知访问路径(购买会员 支付成功)
    ],
    'allinpaytest' => [
        'appid' => '',
        'cusid' => '',
        'privatekeyfile' => \think\facade\Env::get('root_path').'public/static/allinpayInter/20060400000044502.p12',
        'certfile' => \think\facade\Env::get('root_path').'public/static/allinpayInter/allinpay-pds.pem',
        'apiurl' => '',
        'apiversion' => '11',
    ],
    'allinpayweichattest' => [
        'apiurl' => 'https://test.allinpaygd.com/apiweb/unitorder/',//微信测试
        'apiversion' => '11',// 接口版本号, 默认填11
        'appkey' => 'allinpay888',
        'appid' => '',
        'cusid' => '',
        'paytype' => 'W06',// w06为小程序支付，必填
        'notify_url' => '',// 回调地址，必填
    ]
];
