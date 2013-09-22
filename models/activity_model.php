<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of activity_model
 *
 * @author 80054349
 */
class activity_model {
    //put your code here
    //读取数据库
    function getlist(){
            $db = new db();
            $sql = "";
            $db->init($sql);
            $rs = $db->get_activity_list($sql);
            $re;
            if(mysqli_num_rows($rs)>=1){
               while($info = mysqli_fetch_assoc($rs)){
                   $re[]=$info;
                   //echo $info;
               }
            }
            return $re;
    }
    
    function getcontent($param){
        //读取文章内容
            $db = new db();
            $sql = "select * from pre_activity where id=$param";
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
    
    function getcomment($param){
        //获取文章评论
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
    }
}

?>
