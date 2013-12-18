<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * 订阅模块
 * 
 */
require '../../function/func-db.php';
require '../../class/db/db.php';
require '../../function/func-user.php';
error_reporting(-9);
$islogin = islogin();
$action = $_GET['action'];
$sid = $_GET['sid'];        //订阅的站点
if($islogin){
    if($action){
        if($action=='addSubs'){
            siteSubs(true,$islogin,$sid);
        }else if($action=='delSubs'){
            siteSubs(false,$islogin,$sid);
        }
    }else{
        subsUI($islogin);   //进入订阅界面
    }
}else{
    echo '未登录';
}

function siteSubs($action,$uid,$sid){
    if($action){
        if(addSubs($uid,$sid)){
            echo '<a class="site-subs" id="'.$sid.'" style="float:right" href="javascript:ajax_request(\''.$sid.'\',\'subs.php?action=delSubs&sid='.$sid.'\')">√</a>';
        }else{
            echo '<a class="site-subs" id="'.$sid.'" style="float:right" href="javascript:ajax_request(\''.$sid.'\',\'subs.php?action=addSubs&sid='.$sid.'\')">+</a>';
        }
    }else{
        if(delSubs($uid,$sid)){
            echo '<a class="site-subs" id="'.$sid.'" style="float:right" href="javascript:ajax_request(\''.$sid.'\',\'subs.php?action=addSubs&sid='.$sid.'\')">+</a>';
        }else{
            echo '<a class="site-subs" id="'.$sid.'" style="float:right" href="javascript:ajax_request(\''.$sid.'\',\'subs.php?action=delSubs&sid='.$sid.'\')">√</a>';
        }
    }
    
}


function isSubsed($uid,$sid){
    return isSiteSubsed($uid, $sid);
    
}

function subsUI($islogin){
    //-------------------------------------------------------------//
    ?>
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
        }
        
        a{
            text-decoration: none; 
        }
    </style>
    
    <script type="text/javascript">
        function ajax_request(sid,url){
           // alert("sid");
            $.ajax({
                type:"GET",
                url:url,
                success:function(str){
                    $(".site-subs[id="+sid+"]").replaceWith(str);
                }
            });
        }
    </script>

    <!--添加订阅-->
    <ul>
        <?php foreach (getSiteList() as $site){?>
          <li class="site-link">
              <a style="float:left" href="javascript:void(0)"><?php echo $site['site_name']?></a>
              <?php if(isSubsed($islogin, $site['sid'])){?>
              <a class="site-subs" id="<?php echo $site['sid']?>" style="float:right" href="javascript:ajax_request('<?php echo $site['sid']?>','subs.php?action=delSubs&sid=<?php echo $site['sid'] ?>')">√</a>
              <?php }else{ ?>
              <a class="site-subs" id="<?php echo $site['sid']?>" style="float:right" href="javascript:ajax_request('<?php echo $site['sid']?>','subs.php?action=addSubs&sid=<?php echo $site['sid'] ?>')">+</a>
              <?php } ?>
              
              <div style="clear:both"></div>
          </li>
        <?php } ?>
    </ul>

    <?php 
     //-------------------------------------------------------------//
} 



?>