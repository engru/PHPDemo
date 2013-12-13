<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/*
 * 用户注册、登录，在线
 * 用户订阅
 * 用户收藏、喜好、评论、分享
 */
$register = $_GET['action'];
if($register=='register'){
    //注册
    register();
}else if($register=='login'){
    //登录
    login();
}else{
    //查询
    getuser();
}

function register(){
    if($_POST){
        //执行插入
        echo '注册操作';
    }else{
        //显示页面
        ?>
echo '注册页面';
        


        <?php
    }
}

function login(){
    if($_POST){
        //执行登录查询
        echo '登录查询操作';
    }else{
        //显示页面
        echo '登录页面';
    }
}

function getuser(){
    echo '获取用户信息';
}


?>
