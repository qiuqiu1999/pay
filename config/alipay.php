<?php
return [
    //应用ID,您的APPID。
    'app_id' => env('APP_ID', ''),

    //商户私钥
    'merchant_private_key' => env('MERCHANT_PRIVATE_KEY', ''),
    //异步通知地址
    'notify_url' => env('NOTIFY_URL', ''),

    //同步跳转
    'return_url' => env('RETURN_URL', ''), // http://外网可访问网关地址/alipay.trade.page.pay-PHP-UTF-8/return_url.php

    //编码格式
    'charset' => env('CHARSET', ''),

    //签名方式
    'sign_type' => env('SIGN_TYPE', ''),

    //支付宝网关
    'gateway_url' => env('GATEWAY_URL', ''),

    //支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
    'alipay_public_key' => env('ALIPAY_PUBLIC_KEY', '')
];