<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//登录状态
function islogin(){
    return FALSE;
}
//获取订阅
function getSubsList($uid){
    $sql = '';
    return query($sql);
}
//
function getSubsLists($uid){
    //检索用户订阅列表
    $re='';
    foreach (getSubsList($uid) as $list){
        $re[] = getSite($list[sid]);
    }
    //返回列表数据库
    $re;
}

//收藏列表

//喜欢

//我的评论

?>
