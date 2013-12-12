<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require '../function/func-db.php';
require '../class/db/db.php';
require '../function/func-core.php';
error_reporting(-9);
/*E_ALL：-1
E_ERROR:1
E_WARNING:2
E_PARSE:4
E_NOTICE:8
E_CORE_ERROR:16
E_CORE_WARNING:32
 */
set_time_limit(100);

//读取列表

//$res = getSiteList();
foreach (getSiteList() as $site){
    echo '======================'.'<br>';
    flushState();
    parselink($site);
 //echo '<li class="site-link"><a style="float:left" href="javascript:ajax_request(\'test.php?'.$site[sid].'\')">'.$site[site_name].'</a>'
 //         .'<a class="fancybox fancybox.iframe" style="float:right" href="./site-edit.php?'.$site[sid].'">+</a>'
 //         .'<div style="clear:both"></div></li>';
    
    
}

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
        $bloglink = $re->find($site[url_link],0)->href; //博文链接
        $links = 't'.$bloglink;     //中介
        if($bloglink){
        
            $sites = explode("/",$site[site_entry]);

            $site_domain = $sites[0].'//'.$sites[1].$sites[2].'/';  //站点域名
            //var_dump($site);
            if(strpos($links,$site_domain)==1){     //博文链接与站点域名匹配
                $links = $bloglink;
            }else if(stripos($links,'http')==1){    //非同一域名完整链接
                $links = $bloglink;
            }else{
                $links = $site_domain.$bloglink;
            }
            //------------------------
            echo '链接：'.$links.'|'.$site_domain.'<br>';
            flushState();
            //-----------------------------
            //链接去重
            $dblink = getArticleLink($links);
            if($dblink){
                //var_dump($dblink);
            }else{
                //echo 'null<br>';
            
                flushState();

                $web[title] = $re->find($site[url_link],0)->plaintext;
                $web[link] = $links;
                $web[sid] = $site[sid];
                //$web[intro] = $re->find($site[url_intro],0);
                $web[intro] = str_replace('\'', '\\\'', $re->find($site[url_intro],0));
                
                $web[thumbnail] = $re->find('img',0)->src;

                $web[attr] = $site[site_name];//$attr;
                $web[contn] = getcontn($links,$site[arti_contn_label]);
                if($web[contn]){
                    dbstore($web);
                }else{
                    echo '内容为空'.'<br>';
                    flushState();
                }
            }
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
    if($content){
        $content = str_replace('\\', '', $content);
        $html = str_get_html($content);

        return str_replace('\'', '\\\'', $html->find($contn,0));
    }
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



?>
