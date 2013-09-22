<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class_url
 *
 * @author 80054349
 */
class class_url {
    //put your code here
    /*
     * paths 的最后一个 是文件名，若空，说明没有传递
     */
    var $paths;
    var $path_count;
    var $params;
    var $param_count;
    var $url = "/open/tewo/sd/";
    
    function parse_url($url){
        //解析路径
         $this->paths = explode("/",$url);
         $this->path_count = count($this->paths);
         
        //解析文件名
        $file_temp = $this->paths[$this->path_count-1];
        $file = explode("?", $file_temp);
        $file_count  = count($file);
        if($file_count!=1){
            $this->paths[$this->path_count-1] = $file[0];
            $this->params = $file[1];
        }else{
            $this->paths[$this->path_count-1] = $file[0];
        }
        
        //解析参数
        $this->params = explode("&", $this->params);

    }
    
    
    
}

?>
