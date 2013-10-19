<?php /* Smarty version Smarty-3.1.14, created on 2013-10-11 20:47:14
         compiled from "E:\Web\Demo\Test\theme\templates\proj\create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:304505253745f20f180-00549656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a42a2d48c574879de31a0ab0d8407e436d038ac' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\proj\\create.tpl',
      1 => 1381495631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304505253745f20f180-00549656',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5253745f24d994_96030576',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5253745f24d994_96030576')) {function content_5253745f24d994_96030576($_smarty_tpl) {?><link href="res/css/module-create.css" rel="stylesheet"></link>
<link href="vendor/ueditor/themes/default/css/ueditor.css" rel="stylesheet"></link>
<script type="text/javascript" src="vendor/ueditor/editor.config.js"></script>
<script type="text/javascript" src="vendor/ueditor/editor.all.js"></script>
<body>
<div>
    <section class="nav">
        <div class="nav-wrap">
            <div class="nav-logo">
                <a href="#">
                    <img id="sb-logo" src="res/images/OPPO-FIND5TS.png" alt="PUSH">
                </a>
            </div>
        </div>
        <div>
            <ul>
                <li id="select">
                    <a href="#">项目信息</a>
                </li>
                <li class="">
                    <a href="#">项目简介</a>
                </li>
                <li class="">
                    <a href="#">团队人员</a>
                </li>
                <li class="">
                    <a href="#">资源文档</a>
                </li>
                <li class="">
                    <a href="#">项目资讯动态</a>
                </li>
                <li class="">
                    <a href="#">活动</a>
                </li>
                <li class="">
                    <a href="#">主要评论</a>
                </li>
                
            </ul>
        </div>
        
        <div class="info">
            <a href="#">Info</a>
        </div>
        
    </section>
    
    <section class="wrap">
        <div class="title-nav">
            <a href="#">项目信息管理系统</a>
        </div>
        <div class="filter" style="display: none">
            <a class="btn" href="#">操作</a>
            <a class="btn" href="#">动态</a>
            <div class="view">
                <a class="btn" href="#">图</a>
                <a class="btn" href="#">表</a>
            </div>
        </div>
        
        <div class="wrapper">
            <div class="proj">
                <h1>创建项目</h1>
            </div>
            <!--
            <div>
                进度
            </div>
            
            <textarea name="后台取值的key" id="myEditor">这里写你的初始化内容</textarea>
            <script type="text/javascript">
                //var editor = new UE.ui.Editor();
                //editor.render("myEditor");
                //1.2.4以后可以使用一下代码实例化编辑器
                UE.getEditor('myEditor')
            </script>
            -->
            <div class="content">
                <div class="nav-step">1、填写项目信息</div>
                <form>
                    <div class="row">
                        <label>项目名称</label>
                        <input type="text" name="p_name">
                    </div>
                    <div class="row">
                        <label>责任人员</label>
                        <input type="text" name="p_owner">
                    </div>
                    <input class="submit" type="submit" value="提交">
                </form>
            </div>
        </div>
        
    </section>
</div>
</body><?php }} ?>