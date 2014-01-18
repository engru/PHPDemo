<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require '../../function/func-db.php';
require '../../class/db/db.php';
require '../../function/func-core.php';
require '../../function/func-user.php';
error_reporting(-9);

//组文章列表
//组文章编辑界面跳转
$action = $_GET['action'];
if($action=='home'){
    //组首页，动态消息，文章列表
}else if($action=='member'){
    //成员列表，关注列表
}else if($action=='statist'){
    //数据统计，
}else{
    //查询
    getGroup();
}
?>
