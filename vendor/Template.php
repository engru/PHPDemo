<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Template
 *
 * @author 80054349
 */
class Template {
    //put your code here
    var $smarty;
    
    function __construct() {
        require_once SMARTY_DIR.'Smarty.class.php';
        $this->smarty = new Smarty();
        
       $this->smarty->cache_dir=ROOT_PATH."cache/cache";
       $this->smarty->template_dir= ROOT_PATH."theme/templates";
       $this->smarty->compile_dir= ROOT_PATH."cache/templates_c";
       
       $this->smarty->allow_php_templates = true;
       $this->smarty->caching = false;
       echo "-----construct----<br>\n";
       

    }
    function render($file,$params='0'){
        //include ROOT_PATH.'default.css';
        /*
        if(file_exists(THEME_PATH.$file.'.html')){
            ob_clean();
            include THEME_PATH.$file.'.html';
        }
         * 
         */
        ob_clean();
       $this->smarty->assign('name',$params[0]);
       $this->smarty->display($file.'.tpl');
    }
    
    function rendercontent($file,$params=''){
        //include ROOT_PATH.'default.css';
        /*
        if(file_exists(THEME_PATH.$file.'.html')){
            ob_clean();
            include THEME_PATH.$file.'.html';
        }
         * 
         */
        ob_clean();
       $this->smarty->assign('$result',$params[0]);
       $this->smarty->display($file.'.tpl');
    }
    
    function renderAll($file,$result,$comment=''){
        //include ROOT_PATH.'default.css';
        /*
        if(file_exists(THEME_PATH.$file.'.html')){
            ob_clean();
            include THEME_PATH.$file.'.html';
        }
         * 
         */
        ob_clean();
        //print_r(json_encode($comment));
        //$tuCurl = curl_init(); 
        //curl_setopt($tuCurl, CURLOPT_URL, "http://www.wumii.com/reader/get"); 
        $content ='';
        //$content = file_get_contents("http://www.wumii.com/reader/get");
        
        $this->smarty->assign('wumi_content',$content);
        $this->smarty->assign('ajax','true');
       $this->smarty->assign('result',$result);
       //if($comment!=''){
           $this->smarty->assign('comment',$comment);
      // }
       $this->smarty->display($file.'.tpl');
    }
    
    
}

?>
