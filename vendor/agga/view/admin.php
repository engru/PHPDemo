<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require '../function/func-db.php';
require '../class/db/db.php';
error_reporting(0);

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
      body {
        padding-top: 60px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
      
      .brand1{
          display: block;
          float:left;
          background-image: url(../static/pic_40.png);
          width:40px;
          height:40px;
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
    </script>
    <link href="../static/css/core.css" rel="stylesheet">
    
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
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
            
        <div class="well">
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
      <input type="text" class="form-control" name="url_reg" placeholder="文链规则">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" placeholder="标题标签">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="attri" placeholder="属性标签">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contn" placeholder="内容标签">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="btn btn-default btn-submit">提交</div>
    </div>
  </div>
</form>
</div>
            
        </div>
            
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="active nav-header">
                  <a><span class="label label-info">全部站点</span></a>
              </li>
              
              <?php
              //$res = getSiteList();
              foreach (getSiteList() as $site){
                echo '<li class="site-link"><a href="javascript:ajax_request(\'getarticle.php?'.$site[sid].'\')">'.$site[site_name].'</a></li>';
              }
              ?>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">

            
            
          <div class="hero-unit">
            <h1>文章列表</h1>
            <p>测试阶段，提供的展示可能不完善，后续会完善.</p>
            <div class="content-list"></div>
          </div>
          <div class="row-fluid">
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
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
        <p>&copy; Company 2013</p>
      </footer>
  </body>
</html>