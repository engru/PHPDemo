<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$group = $_GET['group'];
$gid = $_GET['gid'];
$uid = $_GET['uid'];
//读取文章列表
require '../../function/func-group-article.php';
$list = getGroupArticlePageListByGid(0,$gid);
//var_dump($list);
?>


<?php //如果当前群组和用户加入的群组一致，则可编辑
    if($uid)
    if(isCurrent($uid,$gid)){
?>
<div class="f-bg" style="padding:20px;margin:0 0 20px 0">
    <a href="?action=edit&gid=<?php echo $_GET['gid']; ?>">写文章</a>
</div>
<?php } ?>
<!--文章选项，原创文章，转载文章，爬取文章-->
<!--全部、原创、转载-->


        <div class="g-mnc f-bg f-pr" >
            <h2 class="u-ctit dir f-ib">发布的</h2>
            <div class="j-coursebox coursebox auto-1388822642793-parent" style="">
                <div class="m-basepool f-cb auto-1388822642793">
                    <div class="m-data-lists f-cb f-pr j-data-list" style="">
                        
                        <?php if($list)foreach ($list as $article) { ?>
                        
                        <a href="../showarticle.php?id=<?php if($article['type']=='2'){ echo $article['sid'];}else{echo '0';}?>&url=<?php echo $article[aid]?>&local=y">
                            <div class="u-centerCourse f-cb" id="auto-id-X1Jvzy3abM9uaO2B">
                            
                            <div class="courseImg f-fl f-pr">
                                <?php if($article[thumbnail]){?>
                                    <img src="<?php echo $article[thumbnail] ?>" class="j-info img">
                                <?php }else{?>
                                    <img src="../../static/img/default.png" class="j-info img">
                                <?php } ?>
                                <span class="publicStatus f-pa j-publicStatus" style="display: none;"></span>
                            </div>
                            <div class="course f-cb f-fl">
                                <div class="f-cb"><div class="tit f-cb"><h4 class="j-info courseTit f-fl"><?php echo $article[title]?></h4>
                                        <div class="continued j-con f-fl"></div>
                                        <span class="j-priv privIcon f-ib f-dn f-fl" title="私有"></span>
                                    </div>
                                </div>
                                <ul class="j-info score f-cb">
                                    <li class="li-1 f-ib f-fl">
                                        <div class="u-rating">
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <div class="star on"></div>
                                            <span class="j-tip"></span>
                                        </div>
                                    </li>
                                    <li class="f-ib f-fl scoreNum f-thide">(186份评价)</li>
                                    <li class="j-enroll li-1  f-ib f-fl" title="选课人数" style="">
                                        <span class="numImg f-ib"></span>
                                        <span class="j-info">5698人在学</span>
                                    </li>
                                </ul>
                                <div class="liclass f-ib f-fl j-info f-thide"><?php echo $article[intro]?></div>
                            </div>
                            <span class="j-price price f-ib f-fr"></span>
                            <div class="j-join joinTime"><?php echo date('Y-m-d H:i', $article[0][date]) ?>更新</div>
                            
                        </div>
                        </a>
                       <?php } ?>
                    </div></div></div></div>
            