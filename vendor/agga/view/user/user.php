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
/*
 * 用户注册、登录，在线
 * 用户订阅
 * 用户收藏、喜好、评论、分享
 */
$action = $_GET['action'];
if($action=='register'){
    //注册
    u_register();
}else if($action=='login'){
    //登录
    u_login();
}else if($action=='logout'){
    u_logout();
}else{
    //查询
    getuser();
}

function u_register(){
    if($_POST){
        //执行插入
        //echo '注册操作';
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //查询是否已经注册
        $res = register($username,$password);
        if($res){
            echo '注册成功';
        }else{
            echo '注册失败';
        }
        

    }else{
        //显示页面
        ?>
<!--------------------------------------------------------------------------->
<link href="http://v2.bootcss.com/assets/css/bootstrap.css" rel="stylesheet">
<!--<link href="../../static/css/user.css" media="screen" rel="stylesheet" type="text/css">-->
<form accept-charset="UTF-8" action="?action=register" class="simple_form form-horizontal new_user" id="new_user" method="post" novalidate="novalidate">
      <fieldset>
        <legend>注册</legend>
        <div class="control-group string required">
            <label class="string required control-label" for="user_login"><abbr title="required"><!--*--></abbr> 登录名</label>
            <div class="controls">
                <input class="string required" id="user_login" name="username" size="50" style="width:180px;" type="text">
            </div>
        </div>
        <div class="control-group password optional">
            <label class="password optional control-label" for="user_password">密码</label>
            <div class="controls">
                <input class="password optional" id="user_password" name="password" size="50" style="width:180px;" type="password">
            </div>
        </div>
        <div class="form-actions">
          <input class="btn btn-primary" name="commit" type="submit" value="注册">
        </div>
      </fieldset>
</form>
<!--------------------------------------------------------------------------->
        <?php
    }
}


function u_logout(){
     session_start();
        if($_SESSION['authorized']){
            session_destroy();
            echo '退出成功';
        }else{
            echo '退出失败';
        }
}

function u_login(){
    if($_POST){
        //执行登录查询
        //echo '登录查询操作';
        //获取参数，查询数据库
        //返回结果
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $remember  = $_POST['remember_me'];     //用于免登陆，保持cookie和session id
        //
        session_start();
        
        //查询是否已经注册
        $res = login($username,$password);
        if($res){

            if($remember){
                $_SESSION['authorized'] = true;
                $_SESSION['userid'] = $res;
                setcookie('username', $username);
                setcookie('password', $password);
            }
            echo '登录成功';
        }else{
            echo '登录失败';
        }
        
    }else{
        //显示页面
        ?>
<!--------------------------------------------------------------------------->
<link href="http://v2.bootcss.com/assets/css/bootstrap.css" rel="stylesheet">
<!--<link href="../../static/css/user.css" media="screen" rel="stylesheet" type="text/css">-->
<form accept-charset="UTF-8" action="?action=login" class="simple_form form-horizontal new_user" id="new_user" method="post" novalidate="novalidate">
      <fieldset>
        <legend>登录</legend>
        <div class="control-group string required">
            <label class="string required control-label" for="user_login">
                <abbr title="required"><!--*--></abbr> 登录名</label>
            <div class="controls">
                <input class="string required" id="user_login" name="username" size="50" style="width:180px;" type="text">
            </div>
        </div>
        <div class="control-group password optional">
            <label class="password optional control-label" for="user_password">密码</label>
            <div class="controls">
                <input class="password optional" id="user_password" name="password" size="50" style="width:180px;" type="password">
            </div>
        </div>
        <div class="control-group checkbox optional">
          <label class="checkbox optional control-label"></label>
          <div class="controls">
            <div class="inputs-list">
                <label for="user_remember_me">
                    <input id="user_remember_me" name="remember_me" style="width:auto;" type="checkbox" value="1">
                    记住登录状态
                </label>
            </div>
          </div>
        </div>
        <div class="form-actions">
          <input class="btn btn-primary" data-disable-with="正在登录" name="commit" type="submit" value="登录">
        </div>
      </fieldset>
</form>
<!--------------------------------------------------------------------------->
        <?php
    }
}

function getuser(){
    echo '获取用户信息';
}


?>

