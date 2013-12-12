<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/* 入口站点 */
function createSiteTable(){
    /*
     * 
     *  crate table c_site (
     *  
     * )default charset=utf8;
     */
}

function getSiteList(){
    $sql = "select * from pre_site";
    return query($sql);
}

function getSite($id){
	$sql = "select * from pre_site where sid=$id";
	return query($sql);
}

function updateSite($site,$id){
    $sql = "update pre_site set site_name='$site[name]',
        site_entry = '$site[entry]',
        url_reg = '$site[reg]',
        url_link = '$site[link]',
        url_img = '$site[img]',
        url_intro = '$site[intro]',
        arti_title_label = '$site[title]',
        arti_attri_label = '$site[attri]',
        arti_contn_label = '$site[contn]' where sid=$id";
	$res= update($sql);
        //if($res)
	return $res;
}

function addSite($site){
    $sql = "insert into pre_site (site_name,site_entry,url_reg,url_link,url_img,url_intro,arti_title_label,arti_attri_label,arti_contn_label) values ('$site[name]','$site[entry]','$site[reg]','$site[link]','$site[img]','$site[intro]','$site[title]','$site[attri]','$site[contn]')";
	//echo $sql."<br>";
	$res= insert($sql);
	return $res;
	/*
	if($res){
		echo "ok".$res;
		return $res;
	}else{
		echo "fff";
		return $res;
	}*/
}

function delSite(){
    
}

/*------------------------------------------------------------------------*/
function getAllArticle(){
    $sql = "select * from pre_article ORDER BY aid DESC";
    return query($sql);
}

function getPageArticle($page){
    $begin = $page*10;
    $end = 10;
    $sql = "select * from pre_article ORDER BY aid DESC limit $begin,$end";
    //echo $sql;
    return query($sql);
}

function getArticle($id){
	$sql = "select * from pre_article where aid=$id";
	return query($sql);
}

function getArticleLink($link){
	$sql = "select * from pre_article where orgin_url='$link'";
	return query($sql);
}

function addArticle($article){
    $sql = "insert into pre_article 
        (title,sid,thumbnail,intro,orgin_url,attr,content,comment,appendix) 
 values ('$article[title]','$article[sid]','$article[thumbnail]','$article[intro]','$article[link]','$article[attr]','$article[contn]','','')";

//    $sql = "insert into pre_article 
//        (title,sid,thumbnail,orgin_url,attr,content,comment,appendix) 
// values ('$article[title]','$article[sid]','$article[thumbnail]','$article[link]','$article[attr]','$article[contn]','','')";


//echo $sql."<br>";
	$res= insert($sql);
	return $res;
	/*
	if($res){
		echo "ok".$res;
		return $res;
	}else{
		echo "fff";
		return $res;
	}*/
}

function updateArticle(){
    
}

function delArticle(){
    
}



/*------------------------------------------------------------------------*/
function query($sql=""){
        $db = new db();
        $db->init($sql);
        $rs = $db->query($sql);
        $re="";
        if(mysqli_num_rows($rs)>=1){
           while($info = mysqli_fetch_assoc($rs)){
               $re[]=$info;
               //echo $info;
           }
        }
       // echo 'wkey:'.$re[0][site_entry];
        return $re;
}

function insert($sql=""){
        $db = new db();
        $db->init($sql);
        $rs = $db->insert($sql);
        return $rs;
}

function update($sql=""){
        $db = new db();
        $db->init($sql);
        $rs = $db->query($sql);
        //echo $sql;
        //$rc = mysql_affected_rows();
        //echo "Records deleted: " . $rc;
        return $rs;
}


function insertId(){
        $db = new db();
        $db->init('');
        $rs = $db->insertId();
		echo $rs;
        return $rs;
}

?>
