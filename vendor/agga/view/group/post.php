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
require '../../function/func-group-article.php';
error_reporting(-9);
//var_dump($_POST);

$uid = islogin();
if($uid){
    //所属组
    $gid = isGroupOn($uid);
}

if($gid){
    if($_POST){
        //文章保存
        $article = '';
        if(false){
            $thumbnail = $_POST[thumbnail];
        }else{
            $thumbnail = '';
        }
        if(false){
            $intro = $_POST[intro];
        }else{
            require_once '../../class/generate_digest_by_php/demo.php';
            $intro = generateDigest($_POST['contn'], 400);
        }

        $article[title]     = $_POST['title'];      //标题
        $article[gid]       = $gid;                 //sid,所属组别
        $article[thumbnail] = $thumbnail;           //缩略图，默认，提取
        $article[intro]     = $intro;               //摘要
        $article[link]      = '';                   //链接，原来是原文链接，
        $article[type]      = 1;                    //类型，文字 1、图片 2、视频 3、音频 4、富媒体 5、等
        $article[status]    = 2;                    //状态，编辑 1、保存 2、权限 3、发布 4、审核中 5、发布通过 6、等
        $article[attr]      = '';                   //属性
        $article[contn]     = $_POST['contn'];      //内容
        $article[date]      = time();               //日期

        //暂不实现的字段
        $article[aid]       = '';       //id索引字段
        $article[appendix]  = '';       //附件
        $article[comment]   = '';       //评论

        //添加群组文章
        if(addGroupArticle($article)){
            echo '文章保存成功';
            //var_dump($article[intro]);
            //header('Location:group.php');
        }else{
            echo '文章保存失败';
        }

    }else{
        echo '未提交数据';
    }
}else{
    echo '未加入任何群组';
}

?>
