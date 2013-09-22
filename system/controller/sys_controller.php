<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sys_controller
 *
 * @author 80054349
 */
class sys_controller {
    //put your code here
    public function dispatch(){
        //$query = $_SERVER['REQUEST_URI']; //启用 .htaccess 时用 REQUEST_URI， 否则全部作为参数传递，用 QUERY_STRING
	$query = $_SERVER['QUERY_STRING'];
	echo $query;
        //require_once SYS_CLS_PATH.'class_url.php';
        $cls_url = new class_url();
        $cls_url->parse_url($query);
        
        //路径判断
        if($cls_url->path_count==1){
            ;   //默认向下执行
        }else{
            //$path1 = $cls_url->paths[1];
            //启动分组模式
            $this->Run($cls_url);
            /*
            
            if($path1=='test'){
                //进入模式
            }else if($path1 == 'admin'){
                //
            }else if($path1 == 'article'){
                
            }else{
                return "error";
            }

             * 
             */
            return;
        }
        
        
        
        
	if($query=='register'){
		include( ROOT_PATH . 'demo.html');
	}else if($query!=''){
          
           
            if($query=='query'){
                $db = new db();
                $sql = "";
                $db->init($sql);
                $rs = $db->query($sql);
                
                if(mysqli_num_rows($rs)>=1){
                   while($info = mysqli_fetch_assoc($rs)){
                       $re[]=$info;
                       //echo $info;
                   }

               }
                ob_clean();
                print_r(json_encode($re));
       
       
            }else{
                $templ = new Template();
                $templ->render('index','index');
            }
        }else{
            ob_clean();
		session_start();
		//echo $_SESSION['authorized'];
		if(isset($_SESSION['authorized'])){
			//echo 'auth ok';
			include(ROOT_PATH . 'content.html');
		}else{
			//echo 'auth fail';
			include(ROOT_PATH . 'login.html');
		}
                
               
	}
    }
    
    
    function Run($cls_url){
        //controller
        //action
        //转入模块控制器，并执行模块的操作
       // $cls_url = new class_url();
       // $cls_url->path_count;
        
        //switch ($cls_url->path_count)
        $ctr_dir = APP_PATH;
        for ($i=0; $i<$cls_url->path_count-1; $i++){
            echo 'echo'.$cls_url->path_count.'test<br>';
            $ctr_dir = $ctr_dir.'/'.$cls_url->paths[$i];
        }
        echo $ctr_dir.'<br>';
        
        //加载模块控制器
        if(file_exists($ctr_dir.'.php')){
            require_once $ctr_dir.'.php';
            //echo 'ok';
        }else{
            //echo 'error';
        }
        
        //
        $controller = $cls_url->paths[$cls_url->path_count-2];
        $controller_handle = $this->createController($controller);
        //动作设定
        $action_method = '';
        if($cls_url->paths[$cls_url->path_count-1]){
            //echo $cls_url->paths[$cls_url->path_count-1];
            $action_method = $cls_url->paths[$cls_url->path_count-1].'_action';
        }else{
            //echo 'null';
            $action_method = 'index_action';
        }
        
        if($cls_url->params[0]){
           // echo 'test';
            if(method_exists($controller_handle,$action_method))
                $controller_handle->$action_method($cls_url->params);
            else
                echo 'no exist';
        }else{
            //echo 'fal';
            $controller_handle->$action_method($cls_url->params);
        }

    }
    
    function createController($controller){
        return new $controller();
    }
    
}

?>
