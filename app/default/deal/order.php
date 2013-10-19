<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of order
 *
 * @author 80054349
 */
class order {
    //put your code here
    
    public function index_action($params='') {
        //转入 注册页面
        $model = load_model('activity_model');
        $result = $model->getlist();
         $templ = new Template();
         $templ->renderAll('deal/order',$result);
    }
    
    
}

?>
