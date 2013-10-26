<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of edit
 *
 * @author 80054349
 */
class edit {
    var $app = "base";
   public function index_action($params) {
        //转入 注册页面
       if($params==""){
           $params = "1";
       }
        var_dump($params);
        $model = load_model('proj_model');
        $model->set_current_app("base");
        $model->get_proj($params[0]);
        $templ = new Template();
        $templ->renderAll('proj/edit',$model->proj);
    }
    
    
    function base_action($params){
        $model = load_model('proj_model');
        $model->set_current_app("base");
        $model->get_proj($params[0]);
        $model->get_base($params[0]);
        $templ = new Template();
        $templ->renderAll('proj/edit/base',$model->proj);
    }
    
    function intro_action($params){
        $model = load_model('proj_model');
        $model->set_current_app("intro");
        $model->get_proj($params[0]);
        $model->get_intro($params[0]);
        $templ = new Template();
        $templ->renderAll('proj/edit/intro',$model->proj);
    }
    
    function group_action($params){
        $model = load_model('proj_model');
        $model->set_current_app("group");
        $model->get_proj($params[0]);
        $model->get_team($params[0]);
        $templ = new Template();
        $templ->renderAll('proj/edit/team',$model->proj);
    }
            
    function team_action($params){
        $model = load_model('proj_model');
        $model->set_current_app("team");
        $model->get_proj($params[0]);
        $model->get_team($params[0]);
        $templ = new Template();
        $templ->renderAll('proj/edit/team',$model->proj);
    }
    
    function res_action($params){
        $model = load_model('proj_model');
        $model->set_current_app("res");
        $model->get_proj($params[0]);
        $model->get_attach($params[0]);
        $templ = new Template();
        $templ->renderAll('proj/edit/res',$model->proj);
    }
    
    function info_action($params){
        $model = load_model('proj_model');
        $model->set_current_app("info");
        $model->get_proj($params[0]);
        $templ = new Template();
        if(is_ajax()){
            $model->get_info($params[0]);
            $templ->renderAll('proj/edit/ajax-info',$model->proj);
        }else{
            $model->get_info_list($params[0]);
            $templ->renderAll('proj/edit/info',$model->proj);
        }
        
    }
    
    function acti_action($params){
        $model = load_model('proj_model');
        $model->set_current_app("acti");
        $model->get_proj($params[0]);
        $templ = new Template();
        if(is_ajax()){
            $model->get_acti($params[0]);
            $templ->renderAll('proj/edit/ajax-acti',$model->proj);
        }else{
            $model->get_acti_list($params[0]);
            $templ->renderAll('proj/edit/acti',$model->proj);
        }
    }
    
    function comment_action($params){
        $model = load_model('proj_model');
        $model->set_current_app("comment");
        $model->get_proj($params[0]);
        //$model->get_intro($params[0]);
        $templ = new Template();
        $templ->renderAll('proj/edit/comment',$model->proj);
    }
}

?>
