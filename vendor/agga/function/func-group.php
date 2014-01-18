<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//当前用户是否已经开通或加入群组
function isGroupOn($uid){
    //查询 user 表中的group属性，为空，则未加入组，允许创建；非空，显示组名
    $user = getuser($uid);
    return $user[0][gid];
    
}

//激活创建群组
function group_active(){
    
}

/* 加入群组 */
function group_join($uid,$gid){
    $sql = "update pre_user set gid='$gid' where uid=$uid";
    return update($sql);
}

/* 退出群组 */
function group_quit(){
    
}

//群组信息/编辑
function group_info(){
    
}

function getGroupInfo($gid){
    //获取组信息,通过gid
    $sql = "select * from pre_group where gid=$gid";
    //echo $sql;
    return query($sql);
}

function getGroupMember($gid){
    //获取组成员
    $sql = "select * from pre_user where gid=$gid";
    //echo $sql;
    return query($sql);
}

/**------------------------------------------------------*/


//关注
function addFollowGroup($uid,$gid){
    $sql = "insert into pre_group_follows (uid,gid) values ($uid,$gid)";
    return insert($sql);
}

//取消关注
function removeFollowGroup($uid,$gid){
    $sql = "delete from pre_group_follows where uid=$uid and gid=$gid";
    $res= update($sql);
    return $res;
}

//关注该组的用户
function getGroupFollows($gid){
    $sql = "select * from pre_group_follows a,pre_user b where a.uid=b.uid and a.gid=$gid";
    return query($sql);
}

//该用户关注的组
function getFollowGroups($uid){
    $sql = "select * from pre_group_follows where uid=$uid";
    return query($sql);
}



/**---------------------------------------------------------*/
function isCurrent($uid,$gid){   //是否是组员
    $sql = "select * from pre_user where uid=$uid and gid=$gid";
    return query($sql);
}

function isOwner($uid,$gid){     //是否是创建者
    $sql = "select * from pre_group where gid=$gid and uid=$uid";
    return query($sql);
}

function isFollow($uid,$gid){    //是否加关注
    $sql = "select * from pre_group_follows where uid=$uid and gid=$gid";
    return query($sql);
    //return false;   //暂没有关注功能
}

//当前组队当前用户的状态
function getStatus($uid,$gid){
    //用户是否登录，没有登录0
    //如果已登录，是否已关注该组，是否是该组成员
    //$uid = islogin();
    $res = 0;
    $isOwner = false;
    $isMember = false;
    $isFollow = false;
    if($uid){
        if(isGroupOn($uid)){
            $res = 11;
            if(isCurrent($uid,$gid)){
                $res = 111;
                if(isowner($uid,$gid)){
                    //创建者
                    $res = 1111;
                }else{
                    //组成员
                    $res = 1110;
                }
            }  else {
                $res = 110;
                if(isfollow($uid,$gid)){
                    //已关注，已有加入
                    $res = 1101;
                }else{
                    //可关注，已有加入
                    $res = 1100;
                }
            }
        }else{
            $res = 10;
            if(isfollow($uid,$gid)){
                //可关注、可加入
                $res = 101;
            }else{
                //已关注、可加入
                $res = 100;
            }
        }
    }else{
        //未登录
        $res = 0;
    }
    return $res;
    
}


?>
