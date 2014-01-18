<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require '../function/func-db.php';
require '../class/db/db.php';
require '../function/func-core.php';
require '../function/func-user.php';
require '../function/func-group.php';
require '../function/func-group-article.php';
error_reporting(-9);

$islogin = islogin();
$req = $_SERVER['QUERY_STRING'];
$id = $_GET['id'];
$url= $_GET['url'];
$local=$_GET['local'];
$group=$_GET['group'];

$res = getSite($id);


echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
//echo '<link href="http://v2.bootcss.com/assets/css/bootstrap.css" rel="stylesheet">';
//echo '<link href="http://v2.bootcss.com/assets/css/bootstrap-responsive.css" rel="stylesheet">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '
<script type="text/javascript" src="http://www.w3school.com.cn/jquery/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("img").removeAttr("style");
        });

        function ajax_request(url){
            $.ajax({
                type:"GET",
                url:url,
                success:function(str){
                    //$(".site-subs[id="+sid+"]").replaceWith(str);
                    alert(str);
                }
            });
        }
    </script>
';

echo '
<style>
@media screen and (min-width:600px){
	body{
		margin:0px;
		padding:0px;
		background: #1F76BC;
		font-family: \'微软雅黑\',\'hei\',\'黑体\',Arial, Helvetica,sans-serif;
	}
}
@media screen and (max-width:600px){
	body{
		margin:0px;
		padding:0px;
		background: #1F76BC;
		font-family: \'微软雅黑\',\'hei\',\'黑体\',Arial, Helvetica,sans-serif;
	}
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
        
        td{
            width:auto;
            height: auto;
        }
        img{
            display:block;
            margin:0 auto;
            width:80%;
            height: auto;
        }
        iframe {
            text-align: center;
            width: 100%;
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
        td,img{
            padding:0px;
            margin: 0 auto;
            width:95%;
            height: auto;
        }
        iframe {
            display:none;
            width: 100%;
            height:auto;
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
  


if($local){
    if($id){
        $article = getArticle($url);
    }else{
        $article = getGroupArticle($url);
    }
    //var_dump($article);
    echo '<div class="container">';
    echo '<div class="title"><h1>'.$article[0][title].'<h1></div>';
    
    //echo $html->find($res[arti_attri_label],0);
    echo '<div class="meta">'.$res[0][site_name].'  '.date('Y-m-d H:i', $article[0][date]);//'.'</div>';
    if($islogin){
        $fav = getFavorite($islogin,$article[0][aid]);
        //var_dump($fav);
        if($fav==''){
            echo '  <a href="javascript:ajax_request(\'./user/favorite.php?action=addfavor&aid='.$article[0][aid].'\')">收藏</a>';
        }else{
            echo '  <a href="javascript:ajax_request(\'./user/favorite.php?action=delfavor&aid='.$article[0][aid].'\')">已收藏</a>';
        }
    }
    echo '</div>';

    
    echo '<div class="content">'.$article[0][content].'</div>';
    echo '</div>';
}else{

    parserContent(geturl($url),$res[0]);//"http://www.36kr.com/p/207843.html"));
}



?>
