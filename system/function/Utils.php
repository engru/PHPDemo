<?php


/**
 * 载入类库，并实例化、加入队列
 * @param  string $class 需要加载的类包，注意：路径从/system开始计算，并遵循zendframe路径表示法，即下划线"_"取代"/"，比如core_config表示/system/core/config.php
 * @return object 实例化后的对象
 */
function &load_class($class)
{
	static $_classes = array();
	
	// Does the class exist?  If so, we're done...
	if (isset($_classes[$class]))
	{
		return $_classes[$class];
	}
	
	if (class_exists($class) === FALSE)
	{
		$file = AWS_PATH . preg_replace('#_+#', '/', $class) . '.php';
		
		if (! file_exists($file))
		{
			throw new Zend_Exception('Unable to locate the specified class: ' . $class . ' ' . preg_replace('#_+#', '/', $class) . '.php');
		}
		
		require_once $file;
	}
	
	$_classes[$class] = new $class();
	
	return $_classes[$class];
}


function &load_model($model){
    require_once MODEL_PATH.$model.'.php';
    return new $model();
}

function test(){
    
}


function is_ajax(){
    if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])&& strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest'){
        return true;
    }else{
        return false;
    }
}














