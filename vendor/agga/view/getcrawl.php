<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require '../function/func-db.php';
require '../class/db/db.php';
require '../function/func-core.php';
error_reporting(0);

//读取列表
$page = $_GET["page"];
//echo 'page:'.$page;


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
}


</style>
';
    
echo '<div class="contains">';
//$res = getSiteList();

if($page+1){
    $articles = getPageArticle($page);
}else{
    
    $articles = getAllArticle();
}

foreach ($articles as $article){
    //echo '======================'.'<br>';
    //flushState();
   // parselink($site);
 //echo '<li class="site-link"><a style="float:left" href="javascript:ajax_request(\'test.php?'.$site[sid].'\')">'.$site[site_name].'</a>'
 //         .'<a class="fancybox fancybox.iframe" style="float:right" href="./site-edit.php?'.$site[sid].'">+</a>'
 //         .'<div style="clear:both"></div></li>';
        echo '<div class="article-item">'
        //找图片
        .'<div class="item-img"><img src="'.$article[thumbnail].'" width="200px" height="100px"/>'
        .'<div style="color: #999;font-size: 12px;">来源 '.$article[attr].'</div></div>'
        //标题//链接
        .'<div class="item-title"><a target="_blank" href="showarticle.php?id='.$article[sid].'&url='.$article[aid].'&local=y">'.$article[title].'</a>'
         
        //简介
		.'<div style="color: #777;font-size: 12px;">'.$article[intro].'</div></div>'

        .'<div style="clear:both"></div>'
        .'</div>';
    
}
echo '</div>';

if($page+1){
    //查阅更多
    //$articles = getPageArticle($page);
    echo '<div class="read_more"><a href="javascript:ajax_page(\'getcrawl.php?page='.($page+1).'\')">查阅更多</a></div>';
}else{
    //$articles = getAllArticle();
}


/*
function flushState(){
    ob_flush();
    flush();
}

function crawl($url){
    return geturl($url);
}

//抓取链接
function parselink($site){
    echo '<b>开始抓取'.$site[site_name].'</b><br>';
    flushState();
    $str = crawl($site[site_entry]);

    require_once '../class/HtmlParserModel.php';
    require_once '../class/simplehtmldom_1_5/simple_html_dom.php';
    $html = str_get_html($str);
    $blog = $html->find($site[url_reg]);
    foreach ($blog as $res){
        $web;
        //------------------------
        echo '解析链接、内容...'.$site[url_reg].'<br>';
        flushState();
        //------------------------
        $re = str_get_html($res);
        $links = 't'.$re->find($site[url_link],0)->href;
        if($re->find($site[url_link],0)->href){
        
            $sites = explode("/",$site[site_entry]);

            $site_domain = $sites[0].'//'.$sites[1].$sites[2].'/';
            //var_dump($site);
            if(strpos($links,$site_domain)!=1){
                $links = $site_domain.$re->find($site[url_link],0)->href;
            }else{
                $links = $re->find($site[url_link],0)->href;
            }
            //------------------------
            echo '链接：'.$links.'|'.$site_domain.'<br>';
            flushState();
            //-----------------------------
            $web[title] = $re->find($site[url_link],0)->plaintext;
            $web[link] = $links;
            $web[sid] = $site[sid];
            $web[intro] = $re->find($site[url_intro],0);
            $web[thumbnail] = $re->find('img',0)->src;

            $web[attr] = $site[site_name];//$attr;
            $web[contn] = getcontn($links,$site[arti_contn_label]);

            dbstore($web);
        }
    }
   // for(i;i;i){
   //     crawl();
   //     $attr = parse();
  //      $attr[url];
  //      $attr[contn] = getcontn(url);
   // }
}
//获取文章
function getcontn($url,$contn){
    echo '获取内容...'.'<br>';
    flushState();
    $content = crawl($url);
    
    $html = str_get_html($content);
    
    return str_replace('\'', '\\\'', $html->find($contn,0));
}

//数据存库
function dbstore($web){
    //去重，从链接
    //
    $res = addArticle($web);
    if($res){
        echo '保存数据库：ok'.'<br>';
        flushState();
    }else{
        echo "保存数据库：fail".'<br>';
        flushState();
    }
}
*/


?>
