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
    function readHeader($ch, $string) {
        $length = strlen($string);
        //only display the headers with content
        if (trim($string) != '')
            echo "<center>Header: $string</center><br />\n";
        return $length;
    }

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


//php 数组去重，排序
//php 多线程

//解析内容 clipper
function parserContent($str,$res){
    require '../class/HtmlParserModel.php';
    require '../class/simplehtmldom_1_5/simple_html_dom.php';
    
    $html = str_get_html($str);
    echo '<div class="title"><h1>'.$html->find($res[arti_title_label],0).'<h1></div>';
    
    //echo $html->find($res[arti_attri_label],0);
    echo '<div class="meta">'.$res[site_name].'</div>';
    
    echo '<div class="content">'.$html->find($res[arti_contn_label],0).'</div>';
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
