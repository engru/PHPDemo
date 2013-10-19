<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of proj_model
 *
 * @author 80054349
 */
class proj_model {
    //读取数据库
    var $proj;
    public function __construct() {
        require_once 'proj.php';
        $this->proj = new proj();
    }
    
    function set_current_app($app){
        $this->proj->set_current_app($app);
    }
            
    
    function get_proj_list(){
        $sql = "select * from pre_proj";
        $proj = $this->query($sql);
        $this->proj->set_proj($proj);
    }
    
    function get_proj_all($id){
        $this->get_proj($id);
        $this->get_base($id);
        $this->get_intro($id);
        $this->get_attach($id);
        $this->get_info($id);
        $this->get_team($id);
        $this->get_acti($id);
    }
            
    function get_proj($id){
        $sql = "select * from pre_proj where p_id=$id";
        $proj = $this->query($sql);
        $this->proj->set_proj($proj);
    }
    
    
    function get_base($id){
        $sql = "select * from pre_proj_base where p_id=$id";
        $base = $this->query($sql);
        $this->proj->set_base($base);
    }
    
    function get_intro($id){
        $sql = "select * from pre_proj_intro where p_id=$id";
        $intro = $this->query($sql);
        $this->proj->set_intro($intro);
    }
    
    function get_attach($id){
        $sql = "select * from pre_proj_attach where p_id=$id";
        $attach = $this->query($sql);
        $this->proj->set_attach($attach);
    }
    
    function get_info($id){
        $sql = "select * from pre_proj_info where p_id=$id";
        $info = $this->query($sql);
        $this->proj->set_info($info);
    }
    
    function get_team($id){
        $sql = "select * from pre_proj_team t,pre_proj_group g where t.g_id=g.g_id and p_id=$id";
        $team = $this->query($sql);
        $this->proj->set_team($team);
    }
    
    function get_sch(){
        $sql = "";
        $this->query($sql);
    }
    

    
    function get_acti($id){
        $sql = "select * from pre_proj_acti where p_id=$id";
        $acti = $this->query($sql);
        $this->proj->set_acti($acti);
        /*
            $db = new db();
            $sql = "select * from pre_proj_acti where p_id=$param";
            $db->init($sql);
            $rs = $db->query($sql);
            $re;
            if(mysqli_num_rows($rs)>=1){
               while($info = mysqli_fetch_assoc($rs)){
                   $re[]=$info;
                   //var_dump($info);
               }
            }
            return $re;
         * 
         */
    }
    
    function getcomment($param){
        //获取文章评论
        $sql = "select * from pre_comment where activity_id=$param;";
        return $this->query($sql);
        
        /*
            $db = new db();
            $sql = "select * from pre_comment where activity_id=$param;";
            $db->init($sql);
            $rs = $db->query($sql);
            $re;
            if(mysqli_num_rows($rs)>=1){
               while($info = mysqli_fetch_assoc($rs)){
                   $re[]=$info;
                   //echo $info;
               }
            }
            return $re;
         * 
         */
    }
    
    
    function createproj(){
        
    }
    
    
    
    function query($sql=""){
            $db = new db();
            $db->init($sql);
            $rs = $db->query($sql);
            $re;
            if(mysqli_num_rows($rs)>=1){
               while($info = mysqli_fetch_assoc($rs)){
                   $re[]=$info;
                   //echo $info;
               }
            }
            return $re;
    }
}

?>
