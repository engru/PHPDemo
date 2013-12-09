<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require '../function/func-db.php';
require '../class/db/db.php';
require '../function/func-core.php';
error_reporting(0);

$req = $_SERVER['QUERY_STRING'];
$res = getSite($req);


?>
<link href="http://v3.bootcss.com/dist/css/bootstrap.css" rel="stylesheet">
<link href="http://v3.bootcss.com/dist/css/bootstrap-responsive.css" rel="stylesheet">



        <div class="well">

<div class="tizi_fb_nr tizi_fb_nr_border cover_dialog" id="tizi_fb_nr" style="top: 60px;">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">添加/添加站点</h3>
            </div>
        </div>
    
<form class="form-horizontal" action="./post.php?id=<?php echo $req?>" method="post" role="form">
  <div class="form-group">
    <label class="col-sm-2 control-label">站点名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="site_name" placeholder="站点名" value="<?php echo $res[0][site_name] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">站点URL</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="site_entry" placeholder="站点URL" value="<?php echo $res[0][site_entry] ?>">
    </div>
  </div>

    
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">文章列表：</h3>
            </div>
        </div>

    
  <div class="form-group">
    <label class="col-sm-2 control-label">列表标签</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="url_reg" placeholder="列表标签" value="<?php echo $res[0][url_reg] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">文链标签</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="url_link" placeholder="文链标签" value="<?php echo $res[0][url_link] ?>">
    </div>
  </div>
  <div class="form-group">
     <label class="col-sm-2 control-label">配图标签</label>
   <div class="col-sm-10">
      <input type="text" class="form-control" name="url_img" placeholder="配图标签" value="<?php echo $res[0][url_img] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">摘要标签</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="url_intro" placeholder="摘要标签" value="<?php echo $res[0][url_intro] ?>">
    </div>
  </div>
  
    
    
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">内容数据：</h3>
            </div>
        </div>

    
  <div class="form-group">
    <label class="col-sm-2 control-label">正文标题标签</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" placeholder="正文标题标签" value="<?php echo $res[0][arti_title_label] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">正文属性标签</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="attri" placeholder="正文属性标签" value="<?php echo $res[0][arti_attri_label] ?>">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">正文内容标签</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contn" placeholder="正文内容标签" value="<?php echo $res[0][arti_contn_label] ?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default btn-submit btn btn-success">提交</button>
    </div>
  </div>
</form>
</div>
            
        </div>