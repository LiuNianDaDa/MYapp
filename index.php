<?php    

define('APP_DEBUG', true);


define('APP_PATH', './Application/');


define ( 'RUNTIME_PATH', './Runtime/' );
//网关支付服务器地址
define("ALIPAY_SERVER_HOST",  '154.211.20.146');
define("ALIPAY_SERVER_PORT",  9090);
define("ALIPAY_SERVER_OUT_TIME",  10);

require './core/ThinkPHP.php';