<?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 11:52:08
         compiled from "E:\Web\Demo\Test\theme\templates\layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15956521ca98687e546-67923705%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18125ec67af0a61b2b7d312d9b5ab8dec3209347' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\layout.tpl',
      1 => 1378891803,
      2 => 'file',
    ),
    '164b3b1b8f393a3eff1f7a210da36f6db19a285e' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\base.tpl',
      1 => 1378533783,
      2 => 'file',
    ),
    'c92f368df5595777458956753681d346dd7862d3' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\user\\user_info.tpl',
      1 => 1378892826,
      2 => 'file',
    ),
    '317e13c8375a0206180cff02423b3fc61b6bf68f' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\common\\category-nav.tpl',
      1 => 1378263614,
      2 => 'file',
    ),
    'e23ef212cd1af71f29fcba89a7673aedefb383db' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\common\\listview.tpl',
      1 => 1378209231,
      2 => 'file',
    ),
    'f5697bc6e6ed026bd6eb71625471268b1c55028a' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\common\\sidebar-nav.tpl',
      1 => 1378214186,
      2 => 'file',
    ),
    'bf13a1ee11b39762edfd2318cfb99a3d977b684e' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\content.tpl',
      1 => 1378285686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15956521ca98687e546-67923705',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_521ca98697c3f6_34994276',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_521ca98697c3f6_34994276')) {function content_521ca98697c3f6_34994276($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Test proj</title>
    
        <script src="res/jquery-2.0.3.min.js" type="text/javascript"></script>
	<script src="res/bootstrap/js/bootstrap.js"type="text/javascript"></script>
	<link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="res/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"></link>
        <link href="res/css/base.css" rel="stylesheet"></link>
        <link href="res/css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet"></link>
    
</head>

<body>

    
        <header>
            <div class="navbar" style="position: fixed;top: 0px;width: 100%">
                <div class="topcolor"></div>
                
                  <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav-collapse-01">
                    </button>
                    <a href="javascript:void(0);" class="brand">symkey</a>
                    <div class="nav-collapse collapse" id="nav-collapse-01">
                      <ul class="nav">
                        <li class=""><a href="#work" class="work">Work</a></li>
                        <li class=""><a href="#about" class="about">About</a></li>
                        <li class=""><a href="#contact" class="contact">Contact</a></li>
                        <li><a href="http://www.atfirstsightfilms.com/blog">Blog</a></li>
                      </ul> <!-- /nav -->
                    </div><!--/.nav-collapse -->
                    
                        <?php /*  Call merged included template "./user/user_info.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./user/user_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '15956521ca98687e546-67923705');
content_52313a68c72702_48595534($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./user/user_info.tpl" */?>
                    
                  </div>
            </div>
        </header>
    
    <div style="margin-top:105px;"></div>
    
        <div id="center" class="content">
            <!--
            <p>
            asdxxxd<br>
                            <div class="topcolor"></div>
            asdcccdf<br>
            asdddddf<br>
            asdfaaaf<br>
            asdfffffdf<br>
            asdfsdf<br>
            asdfsdf<br>
            asdfsdf<br>
            asdfsdf<br>
            asdfsdf<br>
             </p>-->
            <?php /*  Call merged included template "content.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '15956521ca98687e546-67923705');
content_52313a68c7e284_25761643($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "content.tpl" */?>
         </div>
         <div style="clear:both"></div>

    
    <div style="clear:both"></div>
    
        <div class="footer">
            <p style="color: white"><b>关注我们 关注现代生活<br> 互联网时代 激情无极限</b></p>
        </div>
    
    
    
    

</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 11:52:08
         compiled from "E:\Web\Demo\Test\theme\templates\user\user_info.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52313a68c72702_48595534')) {function content_52313a68c72702_48595534($_smarty_tpl) {?><!--
<div class="user-info">
    <a class="user-info__login" href="#" gaevent="top/login">登录</a>
    <a class="user-info__signup" href="#" gaevent="top/signup">注册</a>
</div>
--><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 11:52:08
         compiled from "E:\Web\Demo\Test\theme\templates\content.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52313a68c7e284_25761643')) {function content_52313a68c7e284_25761643($_smarty_tpl) {?><div class="wrapper">
    <div class="row-fluid">
        
            <div id="menu" class="span6">
                <?php /*  Call merged included template "common/category-nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("common/category-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '15956521ca98687e546-67923705');
content_52313a68c85f87_57176406($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "common/category-nav.tpl" */?>
                <ul>
                    <li>list</li>
                    <li>list</li>
                    <li>list</li>
                    <li>list</li>
                    <li>list</li>
                </ul>
            </div>
        

        <div id="pages-fluid" class="row-fluid">
            
                <div id="pages" class="spand6">
                    <div>
                        
                        <div class="topcolor"></div>
                        <div class="content-nav">
                            <div itemprop="breadcrumb" class="breadcrumb-trail breadcrumbs">
                                <span class="trail-begin">
                                    <a class="trail-begin" rel="home" title="优设" href="#">Home</a>
                                </span> 
                                <span class="sep">&nbsp; / &nbsp;</span>
                                <span class="trail-end" id="cate-name">
                                    <a href="#" title="查看 界面&amp; 图标设计 中的全部文章">界面&amp; 图标设计</a> / 
                                    <a href="#" title="查看 WEB UI 元素 中的全部文章" rel="category tag">WEB UI 元素</a> / 
                                    <a href="#" title="查看 酷站推荐 中的全部文章" rel="category tag">酷站推荐</a>
                                </span> 
                                <span class="sep">&nbsp; / &nbsp;</span> 
                                <span class="trail-end">正文</span>
                            </div>
                        </div>                   
                        
                        <?php /*  Call merged included template "common/listview.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("common/listview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '15956521ca98687e546-67923705');
content_52313a68ca9217_04606693($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "common/listview.tpl" */?>
                        
                        <div style="clear:both"></div>
                    </div>
                </div>
            
            
                <div id="sidebar" class="spand6">
                    <?php /*  Call merged included template "common/sidebar-nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("common/sidebar-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '15956521ca98687e546-67923705');
content_52313a68ccc497_53776285($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "common/sidebar-nav.tpl" */?>
                    <ul>
                        <li>sidelist</li>
                        <li>sidelist</li>
                        <li>sidelist</li>
                        <li>sidelist</li>
                        <li>sidelist</li>
                    </ul>
                </div>
            
        </div>
      </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 11:52:08
         compiled from "E:\Web\Demo\Test\theme\templates\common\category-nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52313a68c85f87_57176406')) {function content_52313a68c85f87_57176406($_smarty_tpl) {?><div class="cate-nav">
    <div class="cate-item">
        <dl>
            <dt id="item_label">标题</dt>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
        </dl>
    </div>
    <div class="cate-item">
        <dl>
            <dt id="item_label">标题</dt>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
        </dl>
    </div>
    <div class="cate-item">
        <dl>
            <dt id="item_label">标题</dt>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
        </dl>
    </div>
    <div class="cate-item">
        <dl>
            <dt id="item_label">标题</dt>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
        </dl>
    </div>
</div>



<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 11:52:08
         compiled from "E:\Web\Demo\Test\theme\templates\common\listview.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52313a68ca9217_04606693')) {function content_52313a68ca9217_04606693($_smarty_tpl) {?>

<style type="text/css">
ul{
	list-style: none
}

li {
	/*position: relative;*/
        /*float:left;
        background:#3d773d;*/
}

#list{
	float:left;
	width:100px;
	height:100px;
	border: 1px solid #ebebeb;
	margin:5px;
}

#list div:first-child{
    position:absolute;
}



li .info {
opacity: 0;
position: relative;
top: 0;
left: 0;
width: 100px;
height: 100px;
cursor: pointer;
background: #444;
background: rgba(68,68,68,0.85);
z-index: 1;
}

.item{
	/*float: left;
	position: relative;*/
	width: 612px;
	padding: 15px;
	margin-bottom: 14px;
	background: #FFF;
	border: 1px #d4d4d4 solid;
	box-shadow: 1px 2px 2px rgba(222,222,222,.6);
}
.item .cover{
	/*position: relative;*/
	width: 312px;
	height: 189px;
	overflow: hidden;
	float: left;
}

.trade-geo {
/*position: absolute;*/
bottom: 0;
width: 292px;
padding: 5px 10px;
max-height: 166px;
line-height: 24px;
color: #fff;
opacity: 0;
filter: Alpha(opacity=0);
overflow: hidden;
background-color: #000;
cursor: pointer;
text-decoration: none!important;
-moz-transition: opacity .5s ease-out;
-webkit-transition: opacity .5s ease-out;
transition: opacity .5s ease-out;
}
.deal-mark {
/*	position: relative;*/
	z-index: 9;
	top: -4px;
	left: 10px;
	background:#adf;
}
a {
color: #0BB;
text-decoration: none;
font-size:15px;
}

.extra-info {
/*position: relative;*/
margin: 8px -15px -15px;
padding: 0 15px;
border-top: 1px #e5e5e5 solid;
border-bottom: 1px #FFF solid;
height: 40px;
overflow: hidden;
background-color: #f9f9f9;
}
</style>

<script type="text/javascript">
$(document).ready(function(){
  $("#list").mouseover(function(){
    $(".info").css("opacity","1");
  });
  $("#list").mouseout(function(){
    $(".info").css("opacity","0");
  });
});
</script>


<ul>
<li id="list">
    <div>
		<img title="TCM Summer Under the Stars '13 | CSS Website" width="100px" height="100px" src="http://static.awwwards.com/screenshots/2013/08/5203c212930a7.jpeg" alt="TCM Summer Under the Stars '13">
    </div>
	<div class="info" style="opacity: 0; ">
            <div class="details">
                <p>SOTD. AUG 14, 2013 <span class="note">7.5</span></p>
            </div>
            <div class="bts">
                <a href="http://www.jobsisfree.com" target="_blank">VISIT SITE</a>
                <a href="/web-design-awards/jobs-is-free">DETAILS</a>
            </div>
        </div>
</li>
<li id="list">
    <div>
		<img title="Jobs is free | CSS Website" width="100px" height="100px" src="http://static.awwwards.com/awards/images/2013/08/jobs-film-webdesign.jpg" alt="Jobs is free">
	 </div>
	 <div class="info" style="opacity: 1; ">
            <div class="details">
                <p>SOTD. AUG 14, 2013 <span class="note">7.5</span></p>
            </div>
            <div class="bts">
                <a href="http://www.jobsisfree.com" target="_blank">VISIT SITE</a>
                <a href="/web-design-awards/jobs-is-free">DETAILS</a>
            </div>
        </div>
</li>
<li id="list">
    <div>
		<img title="TCM Summer Under the Stars '13 | CSS Website" width="100px" height="100px" src="http://static.awwwards.com/screenshots/2013/08/5203c212930a7.jpeg" alt="TCM Summer Under the Stars '13">
    </div>
</li>
<li id="list">
    <div>
		<img title="Jobs is free | CSS Website" width="100px" height="100px" src="http://static.awwwards.com/awards/images/2013/08/jobs-film-webdesign.jpg" alt="Jobs is free">
	 </div>
</li>

<li style="clear:both"> </li>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=10) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>

<li>
<div class="item" >
	<div class="cover">
		<a href="http://www.mal/1721597.html" class="trade-geo">广场、万象城、南头、龙岗中心区、大运、海雅缤纷城</a>
		<a target="_blank" href="http://www.meituan.com/deal/1721597.html">
			<img width="312" height="189" alt="多芒亮晶晶套餐，7城48店通用，免费WiFi" src="http://static.awwwards.com/screenshots/2013/08/5203c212930a7.jpeg" >
		</a>
	</div>
	
	<h3 id="yui_3_10_3_1_1377757149741_217">
		<a target="_blank" href="http://www.meituan.com/deal/1721597.html" title="许留山" id="yui_3_10_3_1_1377757149741_216">
			<span class="xtitle" >【深圳等】许留山</span>
			<span class="short-title">多芒套餐，免费WiFi</span>
		</a>
	</h3>
	
	<p class="detail" ><a rel="nofollow" class="ui-button-primary ui-button"  href="http://www.meal/1721597.html" >去看看</a>
		<em class="price num">￥23.8</em>
		<span class="bypast" >门店价 </span>
	</p>
	
	<div class="extra-info">
		<span class="total">
			<strong class="num">214</strong>人已团购
		</span>
	</div>
	
	<span class="deal-mark" id="yui_3_10_3_1_1377757149741_394">
		<a href="http://www.mei/1721597.html" class="deal-mark__item" title="多套餐">多套餐</a>
		<a href="http://www.meitua1721597.html" class="deal-mark__item" title="今日新单">今日新单</a>
		<a href="http://www.mel/1721597.html" class="deal-mark__item" title="免预约">免预约</a>
	</span>
</div>
</li>
<?php endfor; endif; ?>
</ul>

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-09-12 11:52:08
         compiled from "E:\Web\Demo\Test\theme\templates\common\sidebar-nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52313a68ccc497_53776285')) {function content_52313a68ccc497_53776285($_smarty_tpl) {?><div class="sidebar-nav">
    <div class="ex-side">
        <a href="">边栏导航</a>
    </div>
    
    <div class="ex-side">
        <a href="">边栏导航</a>
    </div>
    
    <div class="ex-side">
        <a href="">边栏导航</a>
    </div>
    
    <div class="ex-side">
        <a href="">边栏导航</a>
    </div>
    
    <div class="ex-side">
        <a href="">边栏导航</a>
    </div>
    
    <div class="ex-side">
        <a href="">边栏导航</a>
    </div>
    
    <div class="ex-side">
        <a href="">边栏导航</a>
    </div>
    
    <div class="ex-side">
        <a href="">边栏导航</a>
    </div>
</div><?php }} ?>