<?php
//初始化环境变量
define('ROOT_PATH', dirname(dirname(__FILE__)) . '/');
define('SYS_FUNC_PATH',SYSTEM_PATH . 'function' . '/');
define('SYS_CLS_PATH',SYSTEM_PATH . 'class' . '/');
define('SYS_CTR_PATH',SYSTEM_PATH . 'controller'.'/');
define('THEME_PATH',ROOT_PATH . 'theme'.'/');

define('VENDOR_PATH',ROOT_PATH . 'vendor'.'/');
define('SYS_DB_PATH',SYSTEM_PATH . 'db'.'/');
define('APP_PATH',ROOT_PATH . 'app/default');
define('MODEL_PATH',ROOT_PATH . 'models'.'/');
define('SMARTY_DIR', VENDOR_PATH.'Smarty-3.1.14/libs/');

echo ROOT_PATH;
echo ini_get('register_globals');

        //$_GET
        //$_POST
        //$_COOKIE
        //$_REQUEST
if ($_REQUEST)
{
        foreach ($_REQUEST AS $name => $value)
        {
                echo '<br>'.$name.":".$value;
        }
}
	
//设定各参数

//加载函数库
require_once(SYS_FUNC_PATH . 'Utils.php');
//加载类对象
require_once(SYS_CLS_PATH . 'ClassLoader.php');
require_once(SYSTEM_PATH . 'SystemKernel.php');
require_once(SYS_CTR_PATH . 'sys_controller.php');

require_once(VENDOR_PATH . 'Template.php');


//装载类自动加载功能
$loader = new ClassLoader();
//$loader->test();
//$loader->loadClass('demo');

/*
$query = $_SERVER['QUERY_STRING'];
$query_path = explode("/",$query);
$count = count($query_path);
//路径 query_path [1]...[count-1]
//参数项
*/








