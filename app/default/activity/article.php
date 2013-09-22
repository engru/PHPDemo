<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of article
 *
 * @author 80054349
 */
class article {
    //put your code here
    public function index_action($params='') {
        //转入 注册页面
        $model = load_model('activity_model');
        $result = $model->getcontent($params[0]);
        $comment = $model->getcomment($params[0]);
         $templ = new Template();
         $templ->renderAll('content/activity-content',$result,$comment);
    }
}

?>
