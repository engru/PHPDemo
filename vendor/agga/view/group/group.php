<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require '../../function/func-db.php';
require '../../class/db/db.php';
require '../../function/func-core.php';
require '../../function/func-user.php';
require '../../function/func-group.php';
error_reporting(-9);
$islogin = islogin();
$_GET['uid'] = $islogin;
//组文章列表
//组文章编辑界面跳转
$action = $_GET['action'];
$gid = $_GET['gid'];
//$group = getGroupInfo($gid);
if($gid)
$_GET['group'] = getGroupInfo($gid);

//获取群组信息
/*
if($gid){
    $status = getStatus($islogin, $gid);
    switch ($status){
        case 1111:
            $isOwner =false;
            $ismember = false;
            $follow = false;
    }
}
*/


if($action=='home'){
    //组首页，动态消息，
    g_home();
}else if($action=='edit'){
    g_edit();
}else if($action=='list'){
    //文章列表
    g_list();
}else if($action=='member'){
    //成员列表，关注列表
    g_member();
}else if($action=='statist'){
    //数据统计，
    g_statist();
}else if($action=='active'){
    g_active();
}else if($action=='join'){
    g_join($islogin,$gid);
}else if($action=='addfollow'){
    g_follow($islogin,$gid,TRUE);
}else if($action=='delfollow'){
    g_follow($islogin,$gid,FALSE);
}else{
    //查询
    g_home();
    //getGroup();
}
/*-- Group -------------------------------------------------------*/
/* 激活群组 */
function g_active(){
    //增加一个组
    echo '激活群组';
}
/* 加入群组 */
function g_join($uid,$gid){
    if($uid){
        //echo '加入群组';
        group_join($uid,$gid);
    }else{
        echo '//未登录';
    }
    
}

/* 退出群组 */
function g_quit(){
    
}

/*----------------------------------------------------------*/
function g_follow($uid,$gid,$action){
    if($uid){
        if($action){
            addFollowGroup($uid, $gid);
        }else{
            removeFollowGroup($uid, $gid);
        }
    }
}


/*-- UI --------------------------------------
 * 群组属性：关注、加入
 * 内容：分享、收藏、转载、评论
 * 
 */
function g_home(){
    //echo 'group主页';
    include 'view/home.php';
}

function g_edit(){
    //echo 'group 文章编辑';
    echo '<meta charset="utf-8">';
    echo '<link href="http://s.stu.126.net/s/core.css" type="text/css" rel="stylesheet">';
    echo '<script type="text/javascript" src="../../../../vendor/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="../../../../vendor/ueditor/ueditor.all.js"></script>';
    include 'view/header.php';
    echo '<div style="margin:0 auto;width:720px">';
    include 'view/edit.php';
    echo '</div>';
    include 'view/footer.php';
}

function g_list(){
    //echo 'group 文章列表';
    echo '<meta charset="utf-8">';
    echo '<link href="http://s.stu.126.net/s/core.css" type="text/css" rel="stylesheet">';
    include 'view/header.php';
    echo '<div style="margin:0 auto;width:720px">';
    include 'view/list.php';
    echo '<div style="clear:both"></div>  </div>';
    include 'view/footer.php';
}

function g_member(){
    //echo 'group成员';
    echo '<meta charset="utf-8">';
    echo '<link href="http://s.stu.126.net/s/core.css" type="text/css" rel="stylesheet">';
    include 'view/header.php';
    echo '<div style="margin:0 auto;width:720px">';
    include 'view/member.php';
    echo '</div>';
    include 'view/footer.php';
}

function g_statist(){
    //echo 'group统计';
    echo '<meta charset="utf-8">';
    echo '<link href="http://s.stu.126.net/s/core.css" type="text/css" rel="stylesheet">';
    include 'view/header.php';
    echo '<div style="margin:0 auto;width:720px">';
    include 'view/statist.php';
    echo '</div>';
    include 'view/footer.php';
}

?>
