<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require '../function/func-db.php';
require '../class/db/db.php';
require '../function/func-core.php';
error_reporting(0);


$req = $_SERVER['QUERY_STRING'];
$id = $_GET['id'];
$url= $_GET['url'];

$res = getSite($id);

if($req==''){
    ;
}else{

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
//echo '<link href="http://v2.bootcss.com/assets/css/bootstrap.css" rel="stylesheet">';
//echo '<link href="http://v2.bootcss.com/assets/css/bootstrap-responsive.css" rel="stylesheet">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '
<style>
@media screen and (min-width:600px){
	body{
		margin:0px;
		padding:0px;
		background: #1F76BC;
	}
}
@media screen and (max-width:600px){
	body{
		margin:0px;
		padding:0px;
		background: #1F76BC;
		
	}
}


td,img{
    width:100%;
}



a{
    font-family: \'微软雅黑\',\'hei\',\'黑体\',Arial, Helvetica,sans-serif;
    color: #0088cc;
    text-decoration:none;
}

a:hover{
    color: #005580;
    text-decoration:none;
}


@media screen and (min-width:600px){
	.container{
		padding: 20px;
		margin: 40px;
		background: #ffffff;
	}
}
@media screen and (max-width:600px){
	h1,h2,h3,h4{
		font-size: 18px;
	}
	.container{
		padding: 5px;
		margin: 10px;
		background: #ffffff;
	}
}

.title{
    border-left: 10px solid #006cca;
    padding-left: 20px;
    margin: 20px;
}
.meta{
    margin: 20px;
    color:gray;
}
.content{
    border-top: 1px dotted black;
    padding-top: 10px;
    margin: 20px;
}


</style>
';
    
    
    
    parserContent(geturl($url),$res[0]);//"http://www.36kr.com/p/207843.html"));
}



?>
