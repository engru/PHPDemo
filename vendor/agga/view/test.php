<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require '../function/func-db.php';
require '../class/db/db.php';
require '../function/func-core.php';
error_reporting(0);
set_time_limit(100);
$req = $_SERVER['QUERY_STRING'];

$res = getSite($req);


$reg = $res[0][url_reg];//'.blogPost';
$link = $res[0][url_link];
$img  = $res[0][url_img];
$intro= $res[0][url_intro];
$site = $res[0][site_entry];//'http://www.36kr.com';
//$req =3;

echo '<div class="content-list">';
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
echo '
<style>
.body{
    background: #1F76BC;
}
.contains{
    
}

.hero-unit {
	font-size: 16px;
	font-weight: 200;
	line-height: 25px;
	color: inherit;
}

.article-item{
    border: 1px solid #d3d3d3;
    background: #ffffff;
    padding:20px;
    /*height:100px;*/
    padding-left: 20px;
    margin-bottom: 5px;
}


.item-title a{
    font-family: \'微软雅黑\',\'hei\',\'黑体\',Arial, Helvetica,sans-serif;
}
.item-title a:hover{
    text-decoration:none;
}

@media screen and (min-width:600px){
	.item-img{
		float: left;
		padding-right: 20px;
		width: 200px;
		height:100px;
		color:gray;
	}

	.item-img img{
		width: 200px;
		height:100px;
	}
	.item-title{
		padding-left: 220px;
		/*border-top: 1px dotted black;
		padding-top: 10px;
		margin: 20px;*/
	}
        .hero-unit {
            padding: 20px;
        }
}

@media screen and (max-width:600px){
	.item-img{
		padding-right: 20px;
		width: 100%;
		height:120px;
		color:gray;
	}

	.item-img img{
		width: 100%;
		height:100px;
	}
	.item-title{
		/*border-top: 1px dotted black;
		padding-top: 10px;
		margin: 20px;*/
	}
        .hero-unit {
            padding: 0px;
        }
}


</style>
';

echo '<div class="contains">';
parserDom(geturl($site),$site,$reg,$link,$img,$intro,$req);
echo '</div></div>';

?>
