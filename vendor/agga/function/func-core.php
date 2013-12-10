<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function geturl($url){
    if($url==""){
        $url = "http://www.36kr.com/";
    }
    
    $ch = curl_init();

    // set the url to fetch 
    curl_setopt($ch, CURLOPT_URL, $url);

    //return the transfer (the result of curl_exec()) as a string instead of outputing directly
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //return the HTTP Response header using the callback function readHeader
    //curl_setopt($ch, CURLOPT_HEADERFUNCTION, 'readHeader');

    // execute the curl session
    $output = curl_exec($ch);

    // close curl resource to free up system resources 
    curl_close($ch);

    //the callback function used to retreive the header info
    //function readHeader($ch, $string) {
    //    $length = strlen($string);
    //    //only display the headers with content
   //     if (trim($string) != '')
   //         echo "<center>Header: $string</center><br />\n";
   //     return $length;
   // }

    //echo "<br /><center><b><u>BELOW this line is the content fetched from www.example.com:</u></b></center><br />";
    return $output;
}


function parser($str,$reg,$site,$req){
    $match;
    //echo $str; '{(?<= href=")/p/([^"]+)}'
    preg_match_all($reg,$str,$match);
    
    //var_dump($match[0]);
    foreach ($match[0] as $value){
       // echo $value;
        echo "<a target=\"_blank\" href=\"showarticle.php?id=".$req."&url=".$site.$value."\">$value</a><br>";
    }
}

function parserDom($str,$site,$reg,$link,$img,$intro,$req){
    require '../class/HtmlParserModel.php';
    require '../class/simplehtmldom_1_5/simple_html_dom.php';
    $html = str_get_html($str);
    $blog = $html->find($reg);
    foreach ($blog as $res){
        //echo "<b>=test========================</b><br>\n";
        //echo $res . '<br>';
        $re = str_get_html($res);
        $links = 't'.$re->find($link,0)->href;
        //echo strpos($links,$site.'sb');
        
        $sites = explode("/",$site);
        
        $site = $sites[0].'//'.$sites[1].$sites[2].'/';
        
        if(strpos($links,$site)!=1){
            $links = $site.$re->find($link,0)->href;
        }else{
            $links = $re->find($link,0)->href;
        }
        
        
        echo '<div class="article-item">'
        //找图片
        .'<div class="item-img"><img src="'.$re->find('img',0)->src.'" width="200px" height="100px"/>'
        .'<div style="color: #999;font-size: 12px;">来源 '.$site.'</div></div>'
        //标题//链接
        .'<div class="item-title"><a target="_blank" href="showarticle.php?id='.$req.'&url='.$links.'">'.$re->find($link,0)->plaintext.'</a>'
         
        //简介
		.'<div style="color: #777;font-size: 12px;">'.$re->find($intro,0).'</div></div>'

        .'<div style="clear:both"></div>'
        .'</div>';
    }
}


//php 数组去重，排序
//php 多线程

//解析内容 clipper
function parserContent($str,$res){
    require '../class/HtmlParserModel.php';
    require '../class/simplehtmldom_1_5/simple_html_dom.php';
    
    $html = str_get_html($str);
    echo '<div class="container">';
    echo '<div class="title"><h1>'.$html->find($res[arti_title_label],0).'<h1></div>';
    
    //echo $html->find($res[arti_attri_label],0);
    echo '<div class="meta">'.$res[site_name].'</div>';
    
    echo '<div class="content">'.$html->find($res[arti_contn_label],0).'</div>';
    echo '</div>';
   // echo $html;
    
    //$html_dom = new HtmlParserModel($str);
    
    //$content = $html_dom->find('div .krContent');
   // echo $content->getPlainText();
   /* $html = str_get_html($str);
    echo $html->find('.entry-title',0);
    
    echo $html->find($res[arti_attri_label]);
    
    echo $html->find('div .mainContent',0);
    * 
    */
}


?>
