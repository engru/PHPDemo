<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of intro
 *
 * @author 80054349
 */
class intro {
    //put your code here
   /*public function index_action($params='1') {
        //转入 注册页面
        $model = load_model('proj_model');
        $model->get_proj_all($params[0]);
        //var_dump($model->proj->acti);
        $templ = new Template();
        $templ->renderAll('proj/intro',$model->proj);
    }
    */
    public function index_action($params) {
        $model = load_model('proj_model');
        $templ = new Template();
        if($params[0] ==''){
            $model->get_proj_list();
            $templ->renderAll('proj/proj', $model->proj);
        }else{
            $model->get_proj_all($params[0]);
            //var_dump($model->proj->acti);
            $templ->renderAll('proj/intro',$model->proj);
        }
    }
    
    
    
    
}

?>
