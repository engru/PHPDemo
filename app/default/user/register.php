<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of register
 *
 * @author 80054349
 */
class register {//implements ControllerInterface{
    //put your code here
    
    public function index_action($params='') {
        //转入 注册页面
         $templ = new Template();
         $templ->render('user/register',$params);
    }
    
    public function identify_action(){
        
    }
    
    public function register_action(){
        
    }
}

?>
