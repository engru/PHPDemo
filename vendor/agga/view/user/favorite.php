<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * 收藏夹模块
 * 
 */
require '../../function/func-db.php';
require '../../class/db/db.php';
require '../../function/func-user.php';
error_reporting(-9);
$islogin = islogin();
$action = $_GET['action'];
$aid = $_GET['aid'];        //收藏的文章


if($action){
    if($action=='getfavor'){
        getfavor($islogin);
    }else if($action=='addfavor'){
        addfavor($islogin,$aid);
    }else if($action=='delfavor'){
        delfavor($islogin,$aid);
    }else{
        ;
    }
}



function getfavor($uid){
    ?>
<link href="http://v2.bootcss.com/assets/css/bootstrap.css" rel="stylesheet">
<script type="text/javascript" src="http://www.w3school.com.cn/jquery/jquery.js"></script>
        <style>
        ul{
            width: auto;
            margin: 0 auto;
            padding: 0px 20px;
            background: #ccc;  
        }
        ul li{
            list-style:none;
            padding-top: 10px;
        }
        
        a{
            text-decoration: none; 
        }
    </style>
    <!--查询收藏-->
    <ul>
        <?php foreach (getFavorList($uid) as $favor){?>
          <li class="site-link">
              <a target="_blank" style="float:left" href="../showarticle.php?id=<?php echo $favor['sid'] ?>&url=<?php echo $favor['aid'] ?>&local=y"><?php echo $favor['title']?></a>
              
              <div style="clear:both"></div>
          </li>
        <?php } ?>
    </ul>
    <?php
    
}

function addfavor($uid,$aid){
    if(addFavorite($uid,$aid)){
        echo 'ok';
    }else{
        echo 'fail';
    }
    
}



?>
