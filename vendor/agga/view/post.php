<?php

require '../function/func-db.php';
require '../class/db/db.php';
error_reporting(0);
$s;
if($_POST){
	
	$site[name] = $_POST["site_name"];
	$site[entry]= $_POST["site_entry"];
	$site[reg]  = $_POST["url_reg"];
        $site[link] = $_POST["url_link"];
        $site[img]  = $_POST["url_img"];
        $site[intro]= $_POST["url_intro"];
        $site[title]= $_POST["title"];
        $site[attri]= $_POST["attri"];
        $site[contn]= $_POST["contn"];

        $req = $_SERVER['QUERY_STRING'];
        if($_GET['id']){
            $res = updateSite($site,$_GET[id]);
        }else{
            $res = addSite($site);
        }
	
	
	if($res){
            //echo 'ok';
            //var_dump($res);
            if($_GET['id']){
                $s = getSite($_GET['id']);
                //var_dump($s);
            }else{
		$s = getSite($res);
            }
	}else{
		echo "fail";
	}

}
/*
	$site[name] = "site_name";
	$site[entry]= "site_entry";
	$site[reg]  = "url_reg";

	echo "kkkk";
	$res = addSite($site);
	if($res){
		var_dump(getSite($res));
		echo "login ok";
	}else{
		echo "login fail<br>";
	}
	
	*/

	


?>
<li class=""><a href="<?php echo $s[0][site_entry]?>"><?php echo $s[0][site_name]?></a></li>