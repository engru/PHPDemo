<?php

if (! defined('SYSTEM_PATH'))
{
	define('SYSTEM_PATH', dirname(__FILE__) . '/');
      //  define('ROOT_PATH',dirname(SYSTEM_PATH).'/');
}

/* 开启网页压缩*/
/*
if (defined('G_GZIP_COMPRESS') AND G_GZIP_COMPRESS === TRUE)
{
	if (@ini_get('zlib.output_compression') == FALSE)
	{
		if (extension_loaded('zlib'))
		{
			if (isset($_SERVER['HTTP_ACCEPT_ENCODING']) AND strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== FALSE)
			{
				ob_start('ob_gzhandler');
			}
		}
	}
}
*/

//初始化系统环境

require_once (SYSTEM_PATH . 'init_env.php');

//加载系统模块
$demo = new demo();
$demo->show('demo');

$kernel = new SystemKernel();
$kernel->run();

$controller = new sys_controller();
$controller->dispatch();

//require_once (SYSTEM_PATH . 'aws_app.inc.php');
//require_once (SYSTEM_PATH . 'aws_controller.inc.php');
//require_once (SYSTEM_PATH . 'aws_model.inc.php');
