<?php
class ClassLoader{
	public function __construct()
	{
		print SYS_CLS_PATH;
	
		//set_include_path(AWS_PATH);
		
		//foreach (self::$aliases AS $key => $val)
		//{
		//	self::$aliases[$key] = AWS_PATH . $val;
		//}
		
		spl_autoload_register(array($this, 'loadClass'));

		//require_once(SYS_CLS_PATH.'class_demo.php');
		//echo SYS_CLS_PATH.'class_demo.php';
	}
        
        private function loadClass($class){
            //echo $class;
            $filename = $class;
        
            if(file_exists(SYS_CLS_PATH.'class_'.$filename.'.php')){
                echo SYS_CLS_PATH.'class_'.$filename.'.php ok';
                return require_once SYS_CLS_PATH.'class_'.$filename.'.php';
            }else{
                if(file_exists(SYS_CLS_PATH.$filename.'.php')){
                    return require_once SYS_CLS_PATH.$filename.'.php';
                }else{ 
                    echo SYS_CLS_PATH.'class_'.$filename.'.php fail';
                }
            }
        }
        
        public function test(){
            echo '<br>11111';
        }
}
