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
echo '
<style>
.title{
    border-left: 10px solid blue;
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
