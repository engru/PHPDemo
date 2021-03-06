<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require '../function/func-db.php';
require '../class/db/db.php';
require '../function/func-user.php';
error_reporting(-9);
$islogin = islogin();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://v2.bootcss.com/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        body{
            padding-top: 60px;
        }
        
      .sidebar-nav {
        padding: 9px 0;
      }

      @media screen and (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
        
        #nav-collapse{
            height:auto;
            display:none;
        }
      }
      
      .brand1{
          display: block;
          float:left;
          background-image: url(../static/pic_40.png);
          width:40px;
          height:40px;
      }
      
        .hero-unit {
                font-size: 16px;
                font-weight: 200;
                line-height: 25px;
                color: inherit;
        }

        @media screen and (min-width:600px){
                .hero-unit {
                    padding: 20px;
                }
        }

        @media screen and (max-width:600px){
                .hero-unit {
                    padding: 0px;
                }
        }
        
        .h2-title {
            line-height: 38px;
            border-bottom: 1px solid #0088cc;
            position: relative;
            top: -3px;
            color: #0088cc;
            font-size: 26px;
        }
        .h2-title strong{
            margin:0;
            border-bottom: 3px solid #0088cc;
            line-height: 38px;
            display: inline-block;
        }
    </style>

    <link href="http://v2.bootcss.com/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://v2.bootcss.com/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://v2.bootcss.com/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://v2.bootcss.com/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://v2.bootcss.com/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="http://v2.bootcss.com/assets/ico/favicon.png">
    
    <script type="text/javascript" src="http://www.w3school.com.cn/jquery/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".btn-success").click(function(){
               $(".cover_dialog").slideToggle();//css("display","none");
            });
            
            $(".btn-navbar").click(function(){
                $(".nav-collapse").slideToggle();//css("height","auto");
            });
			
            $(".btn-submit").click(function(){
                    $.ajax({
                                    type:"POST",
                                    url:"post.php",
                                    data:$("form").serialize(),
                                    success:function(str){
                                                    $(".nav-list").append(str);
                                    }
                            });
            });
                        
            $(".fancybox").fancybox({
                 openEffect  : 'none',
                 closeEffect : 'none',
                 nextEffect  : 'none',
                 prevEffect  : 'none',
                 padding     : 0,
                 margin      : [20, 60, 20, 60] // Increase left/right margin
             });

           $.ajax({
                type:"GET",
                url:"getcrawl.php?page=0",
                success:function(str){
                    $(".content-list").replaceWith(str);
                }
          });      
        });
        
        function ajax_request(url){
                //alert(url);
                $.ajax({
                    type:"GET",
                    url:url,
                    success:function(str){
                        $(".content-list").replaceWith(str);
                    }
                });
        }
        
        function ajax_page(url){
                //alert(url);
                $.ajax({
                    type:"GET",
                    url:url,
                    success:function(str){
                        //$(".read_more").remove();
                        //$(".content-list").append(str);
                        $(".read_more").replaceWith(str);
                    }
                });
        }
        
    </script>
    <link href="../static/css/core.css" rel="stylesheet">
    <script type="text/javascript" src="../static/js/jquery.fancybox.js"></script>
    <link href="../static/css/jquery.fancybox.css" rel="stylesheet">
    
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand1" href="#"></a>
          <a class="brand" href="#">Crawl</a>
          <div class="nav-collapse collapse" id="nav-collapse">
            <p class="navbar-text pull-right">
              <?php if($islogin){?>
              <a href="#" class="navbar-link"><?php echo $_SESSION['userid'][0][username] ?></a>
              <a href="./user/user.php?action=logout" class="navbar-link">退出</a>
              <?php }else{?>
              <a class="fancybox fancybox.iframe navbar-link" href="./user/user.php?action=login">登录</a>
              <strong>/</strong>
              <a class="fancybox fancybox.iframe navbar-link" href="./user/user.php?action=register">注册</a>
              <?php }?>
              
              <a class="navbar-link" href="group/group.php">易云消息组平台</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <?php if($islogin){
                  echo '<li><a class="fancybox fancybox.iframe" href="./user/favorite.php?action=getfavor">收藏</a></li>';
              } ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
            
        <div class="well">
<?php if($islogin){?>
            <a type="button" href="./user/subs.php" class="btn btn-success fancybox fancybox.iframe">添加订阅</a>
<?php }else{ ?>
            <button type="button" class="btn btn-success">添加站点</button>


<div class="tizi_fb_nr tizi_fb_nr_border cover_dialog" id="tizi_fb_nr" style="top: 60px; display: none;">
    	<div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">添加站点</h3>
            </div>
        </div>
    
<form class="form-inline" action="t" method="post">
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="site_name" placeholder="站点名">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="site_entry" placeholder="站点URL">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="url_reg" placeholder="列表标签">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="url_link" placeholder="文链标签">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="url_img" placeholder="配图标签">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="url_intro" placeholder="摘要标签">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" placeholder="正文标题标签">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="attri" placeholder="正文属性标签">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contn" placeholder="正文内容标签">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="btn btn-default btn-submit">提交</div>
    </div>
  </div>
</form>
</div>
<?php } ?>   
        </div>
  
            
            
            
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="active nav-header">
                  <a><span class="label label-info">全部站点</span></a>
              </li>
              
              <?php
              //$res = getSiteList();
              
              if($islogin){
                $r = getSubsLists($islogin);
                if($r)
                    foreach ($r as $site){
                        //var_dump($site);
                    //echo $site[0][site_name];
                      echo '<li class="site-link"><a style="float:left" href="javascript:ajax_request(\'test.php?'.$site[0]['sid'].'\')">'.$site[0][site_name].'</a>'
                             // .'<a class="fancybox fancybox.iframe" style="float:right" href="./site-edit.php?'.$site[sid].'">+</a>'
                              .'<div style="clear:both"></div></li>';
                    }
              }else{
                foreach (getSiteList() as $site){
                  echo '<li class="site-link"><a style="float:left" href="javascript:ajax_request(\'test.php?'.$site['sid'].'\')">'.$site['site_name'].'</a>'
                          .'<a class="fancybox fancybox.iframe" style="float:right" href="./site-edit.php?'.$site['sid'].'">+</a>'
                          .'<div style="clear:both"></div></li>';
                }
              }
              ?>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">

            
            
          <div class="hero-unit">
            <h2 class="h2-title"><strong>文章列表</strong></h2>
            <p>测试阶段，提供的展示可能不完善，后续会完善.</p>
            <div class="content-list"></div>
          </div>
        </div><!--/span-->
      </div><!--/row-->

      <hr>


    </div><!--/.fluid-container-->
    

    
      <style>
          footer {
            background-color: #2c3f4f;
            padding:40px;
            bottom: 0;
            font-size: 14px;
            font-weight: 300;
            line-height: 20px;
            }
            
            footer p{
                color:white;
                text-align: center
            }
      </style>
      <footer>
        <p>
            &copy; Company 2013
            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000211641'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1000211641%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
        </p>:3
              </footer>
  </body>
</html>