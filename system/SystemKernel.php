<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SystemKernel
 *
 * @author 80054349
 */
class SystemKernel {
    //put your code here
    //SystemKernel 用于装载系统功能、模块、模板、视图、插件系统等等
    
    public function run(){
        //初始化配置信息
        echo 'init config<br>';
        //初始化数据库
        echo 'init databases <br>';
        $this->init_db();
        //装载模型
        echo 'load models <br>';
        //装载模板机制 Smarty
        echo 'load tempel <br>';
        //装载语言多国化
        
        //装载插件
        echo 'load plugin <br>';
    }
    
    public function init_config(){
        
    }
    
    public function init_db(){
        //echo 'sd';
        require_once SYSTEM_PATH . 'db/db.php';
        $db = new db();
        $db->init('mysqli');
    }
    
    public function load_models(){
        
    }
    
    public function load_tpl(){
        
    }
    
    public function load_plugin(){
        
    }
    
    public function load_lib($name){
        
    }
    
    
    
}

?>
