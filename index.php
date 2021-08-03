<?php

//设置时区
date_default_timezone_set("RPC");
/**
 * 定义三种环境
 */
include_once './app.env';

/**
 * 根据环境设置相应的内容
 */
//switch ($application_env)
//{
//    case 'testing':
//        error_reporting(-1);
//        break;
//    case 'test1':
//        error_reporting(-1);
//        break;
//    case 'product':
//        error_reporting(-1);
//        break;
//    default:
//        error_reporting(-1);
//        break;
//}


/**
 * 入口文件
 * 1. 定义常量
 * 2. 加载常量
 * 3. 启动框架
 */
define('IMOOC', realpath('./'));
define('CORE', IMOOC.'/core');
define('APP', IMOOC.'/app');
define('MODULE', 'app');
define('DEBUG', true);

include "vendor/autoload.php";

if(DEBUG) {
    $whoops = new \Whoops\Run;
    $errorTitle = '框架出错了';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error', 'On');
} else {
    ini_set('display_error', 'Off');
}

include CORE.'/common/function.php';

include CORE.'/imooc.php';

spl_autoload_register("\core\imooc::load");

\core\imooc::run();