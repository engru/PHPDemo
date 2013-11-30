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

function modifySite(){
    
}

function addSite($site){
    $sql = "insert into pre_site (site_name,site_entry,url_reg,arti_title_label,arti_attri_label,arti_contn_label) values ('$site[name]','$site[entry]','$site[reg]','$site[title]','$site[attri]','$site[contn]')";
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


function insertId(){
        $db = new db();
        $db->init('');
        $rs = $db->insertId();
		echo $rs;
        return $rs;
}

?>
