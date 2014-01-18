<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//查询文章列表
//查询单篇文章
//添加文章
//修改文章
//删除文章

//获取群组文章列表
function getGroupArticleList(){
    $sql = "select * from pre_article_platform ORDER BY aid DESC";
    return query($sql);
}

//获取群组文章分页列表
function getGroupArticlePageList($page){
    $begin = $page*5;
    $end = 5;
    $sql = "select * from pre_article_platform ORDER BY aid DESC limit $begin,$end";
    //echo $sql;
    return query($sql);
}

//获取组文章
function getGroupArticle($id){
	$sql = "select * from pre_article_platform where aid=$id";
	return query($sql);
}

//获取群组文章列表ByGid
// pre_issues type :0 原创、1 转载群组文章、2 转载爬取订阅文章
function getGroupArticleListByGid($gid){
    $sql = "
        select id,gid,a.type,a.aid,b.title,b.content,b.orgin_url,b.type,b.intro,b.thumbnail,b.date from pre_issues a,pre_article_platform b 
        where gid=$gid and (a.type=0 or a.type=1) and a.aid=b.aid
        union 
        select id,gid,a.type,a.aid,b.title,b.content,b.orgin_url,'',b.intro,b.thumbnail,b.date from pre_issues a,pre_article b 
        where gid=$gid and a.type=2 and a.aid=b.aid 
            ORDER BY id DESC
";
    return query($sql);
}

//获取群组文章分页列表ByGid
function getGroupArticlePageListByGid($page,$gid){
    $begin = $page*5;
    $end = 5;
    if(true){
    $sql = "
        select id,gid,a.type,a.aid,b.sid,b.title,b.content,b.orgin_url,b.intro,b.thumbnail,b.date from pre_issues a,pre_article_platform b 
        where gid=$gid and (a.type=0 or a.type=1) and a.aid=b.aid
        union 
        select id,gid,a.type,a.aid,b.sid,b.title,b.content,b.orgin_url,b.intro,b.thumbnail,b.date from pre_issues a,pre_article b 
        where gid=$gid and a.type=2 and a.aid=b.aid
        ORDER BY id DESC limit $begin,$end";
    }else{
    $sql = "
        select id,gid,a.type,a.aid,b.sid,b.title from pre_issues a,pre_article_platform b 
        where gid=$gid and (a.type=0 or a.type=1) and a.aid=b.aid
        union 
        select id,gid,a.type,a.aid,b.sid,b.title from pre_issues a,pre_article b 
        where gid=$gid and a.type=2 and a.aid=b.aid
        ORDER BY id DESC limit $begin,$end";
    }
    //echo $sql;
    return query($sql);
}


//获取群组原创文章分页列表ByGid

//select id,gid,a.type,a.aid,b.title,b.content,b.orgin_url,b.type,b.intro,b.thumbnail,b.date from pre_issues a,pre_article_platform b 
//        where gid=$gid and a.type=0 and a.aid=b.aid

//获取组文章ByGid
//function getGroupArticleByGid($id,$gid){
//	$sql = "select * from pre_article_platform where aid=$id";
//	return query($sql);
//}






//添加文章
function addGroupArticle($article){
    $sql = "insert into pre_article_platform 
        (title,sid,thumbnail,intro,orgin_url,
        type,status,attr,content,comment,appendix,date) 
 values ('$article[title]','$article[gid]','$article[thumbnail]','$article[intro]','$article[link]',
     '$article[type]','$article[status]','$article[attr]','$article[contn]','','',$article[date])";

	$res= insert($sql);
        
        if($res){
            //同步增加 pre_issues 记录,type 文章类型：原创 0， 转载群组 1，转载订阅 2
            $sql = "insert into pre_issues (gid,type,aid,time)
                values ('$article[gid]',0,$res,'$article[date]')";
            $res = insert($sql);
        }
        
	return $res;
}

//修改文章
function editGroupArticle(){
    
}

//删除文章
function delGroupArticle(){
    
}

//发布文章
function publishGroupArticle(){
    
}

/**--------------------------------------------------*/


//转载
function transGroupArticle(){
    
}

?>
