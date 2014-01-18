<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$gid = $_GET['gid'];
//获取群组成员列表
if($gid){
    $members = getGroupMember($gid);
    $follows = getGroupFollows($gid);
?>


<html>
    <head>
        <meta charset="utf-8">
        <link href="http://s.stu.126.net/s/core.css?873f67a8bbf1ec53c6936b589bd8f95e" type="text/css" rel="stylesheet">
        <style>
            .red{
                color: #dd2222;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php';?>

        <div style="margin:0 auto;width:960px">
            <div style="margin:10px 0;padding: 40px;background: #cfdfad;">
                <b>土豪是怎样炼成的。。。</b><br>
                getStatus() //<br>
                如果用户没有加入任何群组，可申请加入该群组<br>
                <?php if($_GET['uid'])
    // var_dump(isCurrent($_GET['uid'], $gid));
                    if(isCurrent($_GET['uid'], $gid)){ ?>
                <br>你已经加入了该组<br>
                <?php }else if(isFollow($_GET['uid'], $gid)){?>
                <a class="red" id="navOpenBtn red" href="?action=delfollow&gid=<?php echo $gid; ?>">已关注（点击取消关注）</a>
                <?php }else{ ?>
                <a class="red" id="navOpenBtn red" href="?action=addfollow&gid=<?php echo $gid; ?>">关注该组</a>
                <?php } ?>
            </div>
            
            <div style="float:left">
                <?php include 'list.php';?>
            </div>
            
            <div style="float:right;width:260px;margin-left:10px;">
                <div class="f-bg" style='padding:20px;'>
                    <b class='u-ctit'>成员列表</b><br><br>
                    <?php if($members)foreach ($members as $member) { 
                        echo $member[username].'<br><br>';
                        ?>
                    <?php } ?>
                </div>
                <br>
                <div class="f-bg" style='padding:10px;'>
                    <b class='u-ctit'>粉丝关注列表</b><br><br>
                    <?php if($follows)foreach ($follows as $follow) { 
                        echo $follow[username].'<br><br>';
                        ?>
                    <?php } ?>
                    <br><br>
                </div>
            </div>
            <div style="clear:both"></div>  
        </div>
        <?php include 'footer.php';?>
    </body>
    
</html>
<?php
}else{
    header('Location:?action=home&gid=1');
}
?>