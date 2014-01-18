<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$uid = $_GET['uid'];
$gid=$_GET['gid'];
$group = $_GET['group'];
?>

        <div id="j-fixed-head" class="g-hd f-bg1"> 
            <div class="g-wrap"> 
                <div class="m-header f-pr f-cb"> 
                    <div class="m-logo" style="width:auto"> 
                        <a hidefocus="true" href="group.php"> 
                            <img src="../../static/img/yiyun.jpg" title="易平台"> 
                        </a> 
                    </div> 
                    <div class="m-nav f-cb" id="j-navFind"  style="width:auto"> 
                        <a href="?action=home&gid=<?php echo $gid ?>" hidefocus="true"><?php echo $group[0][g_name]; ?></a>
                        <a href="?action=list&gid=<?php echo $gid ?>" hidefocus="true">消息/文章列表</a>
                        <a href="?action=member&gid=<?php echo $gid ?>" hidefocus="true">成员</a>
                        <a href="?action=statist&gid=<?php echo $gid ?>" hidefocus="true">统计</a>
                        
                    </div>  <div class="m-links" id="j-topnav">
                        <div class="unOpen">
                            <?php if($uid){
                                    $isGroupOn = isGroupOn($uid);
                                if($isGroupOn){ ?>
                                <a id="navOpenBtn" href="?action=home&gid=<?php echo $isGroupOn ?>">我的易云消息组</a> 
                            <?php }else{ ?>
                                <a id="navOpenBtn" href="?action=active">开通组</a>
                                <a>/</a>
                                <a id="navOpenBtn" href="?action=join&gid=<?php echo $gid ?>">申请加入该组</a>
                            <?php }
                                echo '<a id="navOpenBtn" href="#">'.$_SESSION['userid'][0][username].'</a>';
                            }else{?>
                                <a id="navOpenBtn" href="../user/user.php?action=login">登录</a>
                            <?php } ?>
                            <a href="../admin.php" hidefocus="true">返回首页</a>
                        </div>    
                    </div>  
                    <div class="nav-search u-searchUI f-fr" id="j-searchP"> 
                        <div class="box off j-search f-cb"> 
                            <div class="submit j-submit f-hide f-fl">搜索</div>
                            <input type="text" class="j-input f-fl" id="auto-id-WeWgAL0yZWWeXMiT">
                            <label class="j-label" id="auto-id-7dZtbVpd9PgSDFqs">搜索</label> 
                        </div>
                        <div class="j-suggest sug"></div> 
                    </div> 
                </div> 
            </div> 
        </div>
        