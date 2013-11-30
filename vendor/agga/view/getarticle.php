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

$res = getSite($req);

if($req==''){
    ;
}else{
    echo '<div class="content-list">';
    parser(geturl($res[0][site_entry]),$res[0][url_reg],$res[0][site_entry],$req);//parserContent(geturl($req));//"http://www.36kr.com/p/207843.html"));
   // function parser($str,$reg,$site){
    echo '</div>';
}

?>
