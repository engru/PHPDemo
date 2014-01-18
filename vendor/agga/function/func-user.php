<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//登录状态
function islogin(){
    //根据Cookie 和 Session ID判断用户是否在线
    //如果在线，返回用户uid，否则返回false
        $username = $_COOKIE['username'];
        $password = $_COOKIE['password'];
        //
        //return 0;
        session_start();
        if($_SESSION['authorized']){
            //echo $_SESSION['userid'][0][uid];
            return $_SESSION['userid'][0][uid];
        }else{
            //查询是否已经注册
            $res = login($username,$password);
            if($res){
                //echo '登录成功';
            }else{
                //echo '登录失败';
            }
        }

    
        return $res;
}


//获取用户信息
function getUser($uid){
    $sql = "select * from pre_user where uid=$uid";
    return query($sql);
}

//查询是否已经注册，并执行注册操作
function isRegister($username){
    $sql = "select * from pre_user where username='$username'";
    return query($sql);
}
//注册
function register($username,$password){
    if(isRegister($username)){
        echo '用户已经注册';
    }else{
        $sql = "insert into pre_user (username,password) values ('$username','$password')";
        $res= insert($sql);
        return $res;
    }
}

//登录操作
function login($username,$password){
    $sql = "select * from pre_user where username='$username' and password='$password'";
    return query($sql);
}


/**---------------------------------------------------------------**/
//检查
function isSiteSubsed($uid, $sid){
    $sql = "select * from pre_subs where uid=$uid and sid=$sid";
    return query($sql);
}
        
//
function getSubsSiteList(){
    $sql = "select * from pre_site a,pre_subs b where a.sid=b.sid";
    return query($sql);
}


//添加订阅
function addSubs($uid,$sid){
    $sql = "insert into pre_subs (uid,sid) values ($uid,$sid)";
    $res= insert($sql);
    return $res;
}

//删除订阅
function delSubs($uid,$sid){
    $sql = "delete from pre_subs where uid=$uid and sid=$sid";
    $res= update($sql);
    return $res;
}

//获取订阅
function getSubsList($uid){
    $sql = "select * from pre_subs where uid=$uid";
    //echo $sql;
    return query($sql);
}
//获取订阅内容
function getSubsLists($uid){
    //检索用户订阅列表
    $re;
    if(getSubsList($uid)){
        foreach (getSubsList($uid) as $list){
            //var_dump($list['sid']);
            $re[] = getSite($list['sid']);
        }
    }
    //返回列表数据库
    
    //var_dump($re);
    return $re;
}
/**---------------------------------------------------------------**/
//收藏列表
function getFavorList($uid){
    $sql = "select * from pre_favor a,pre_article b where a.aid=b.aid and a.uid=$uid ORDER BY su_id DESC";
    return query($sql);
}

function getFavorite($uid,$aid){
    $sql = "select * from pre_favor where uid=$uid and aid=$aid";
    return query($sql);
}

function addFavorite($uid,$aid){
    $sql = "insert into pre_favor (uid,aid) values ($uid,$aid)";
    $res= insert($sql);
    return $res;
}



/**---------------------------------------------------------------**/
//喜欢

/**---------------------------------------------------------------**/
//我的评论

?>
