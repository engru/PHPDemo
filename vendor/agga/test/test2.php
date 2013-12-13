<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    require '../class/HtmlParserModel.php';
    require '../class/simplehtmldom_1_5/simple_html_dom.php';
    $str='<div class="content"><a href="\\t">hliluk</a><img alt="bts" src="http://link.com/#"><strong>hello</strong></div>';
    $html = str_get_html($str);
    echo '<div class="container">';
    //echo '<div class="cont">'.$html->find('.content',0).'</div>';
    echo '</div>';
	
	
	//$time =time();
	$i = 0;
	echo date("Y-m-d H:i:s",$i).'<br>';
	
	$date = "2013-12-13 11:36:42";
	echo StrToTime($date);
	
	echo '<br>';
	echo time();
	echo '<br>';
	echo date('Y-m-d H:i:s',time()); 
	echo '<br>';
$timestamp = time();
$datetime = date('Y-m-d H:i:s', $timestamp);
echo "该时间戳代表的时间：", $datetime, "<br>\n";
echo "从此时间重新转回时间戳：", strtotime($datetime), "<br>\n";
var_dump($datetime);
$timess="1213112510";

echo ($timess+1).'<br>';
echo ((int)$timess+1).'<br>';
echo intval($timess).'<br>';
echo strtotime((int)$timess).'<br>';
$tim = $timess+0;
var_dump($tim);
echo "从此时间重新转回时间戳：". strtotime($tim). "<br>\n";
	


?>
