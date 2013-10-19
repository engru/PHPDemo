<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of create
 *
 * @author 80054349
 */
class create {
   public function index_action($params='') {
        //转入 注册页面
        $model = load_model('proj_model');
        //$result = $model->getproj();
        $templ = new Template();
        $templ->renderAll('proj/create',$result);
    }
     
    public function create_action(){
        
    }
    
}

?>
