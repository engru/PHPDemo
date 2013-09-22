<?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 17:51:52
         compiled from "E:\Web\Demo\Test\theme\templates\content\activity-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1204852271332b58fb1-06406513%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0d00a3a2e81bff9c13ba461f3f6176f7ed34dbf' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\content\\activity-content.tpl',
      1 => 1378295598,
      2 => 'file',
    ),
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
      1 => 1379336974,
      2 => 'file',
    ),
    '6f12ef336eccabfe5816074f2db76bb0b443ecbe' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\content\\activity-comment.tpl',
      1 => 1379421065,
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
  'nocache_hash' => '1204852271332b58fb1-06406513',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52271332c85c86_41858464',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52271332c85c86_41858464')) {function content_52271332c85c86_41858464($_smarty_tpl) {?><!DOCTYPE html>
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./user/user_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1204852271332b58fb1-06406513');
content_523977b8ea0f07_29787809($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1204852271332b58fb1-06406513');
content_523977b8eeb294_59841432($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "content.tpl" */?>
         </div>
         <div style="clear:both"></div>

    
    <div style="clear:both"></div>
    
        <div class="footer">
            <p style="color: white"><b>关注我们 关注现代生活<br> 互联网时代 激情无极限</b></p>
        </div>
    
    
    
    

</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 17:51:52
         compiled from "E:\Web\Demo\Test\theme\templates\user\user_info.tpl" */ ?>
<?php if ($_valid && !is_callable('content_523977b8ea0f07_29787809')) {function content_523977b8ea0f07_29787809($_smarty_tpl) {?><!--
<div class="user-info">
    <a class="user-info__login" href="#" gaevent="top/login">登录</a>
    <a class="user-info__signup" href="#" gaevent="top/signup">注册</a>
</div>
--><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 17:51:52
         compiled from "E:\Web\Demo\Test\theme\templates\content.tpl" */ ?>
<?php if ($_valid && !is_callable('content_523977b8eeb294_59841432')) {function content_523977b8eeb294_59841432($_smarty_tpl) {?><div class="wrapper">
    <div class="row-fluid">
        
            <div id="menu" class="span6">
                <?php /*  Call merged included template "common/category-nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("common/category-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1204852271332b58fb1-06406513');
content_523977b8ef2f93_63410845($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("common/listview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1204852271332b58fb1-06406513');
content_523977b8f35622_63731017($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "common/listview.tpl" */?>
                        
                        <div style="clear:both"></div>
                    </div>
                </div>
            
            
                <div id="sidebar" class="spand6">
                    <?php /*  Call merged included template "common/sidebar-nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("common/sidebar-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1204852271332b58fb1-06406513');
content_523977b90b28d0_52923369($_smarty_tpl);
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 17:51:52
         compiled from "E:\Web\Demo\Test\theme\templates\common\category-nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_523977b8ef2f93_63410845')) {function content_523977b8ef2f93_63410845($_smarty_tpl) {?><div class="cate-nav">
    <div class="cate-item">
        <dl>
            <dt id="item_label">☣ 标题</dt>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
        </dl>
    </div>
    <div class="cate-item">
        <dl>
            <dt id="item_label">❁ 标题</dt>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
        </dl>
    </div>
    <div class="cate-item">
        <dl>
            <dt id="item_label">☢ 标题</dt>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
            <dd id="label">导航链接</dd>
        </dl>
    </div>
</div>



<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 17:51:52
         compiled from "E:\Web\Demo\Test\theme\templates\common\listview.tpl" */ ?>
<?php if ($_valid && !is_callable('content_523977b8f35622_63731017')) {function content_523977b8f35622_63731017($_smarty_tpl) {?>
    <style>
        .list_c{
            position: relative;
            width: 650px;
            padding: 13px;
            padding-left:14px;
            margin:5px;
            background: #FFF;
            border: 1px #d4d4d4 solid;
            -webkit-box-shadow: 2px 2px 4px #ced9e4;
            -moz-box-shadow: 2px 2px 4px #ced9e4;
            box-shadow: 2px 2px 4px #ced9e4;
        }
        .list_img{
            float:left;
        }
        #seq{
            position:absolute;
            background:url('res/images/nav.png') no-repeat;
            width:20px;
            height:20px;
        }
        .outer-box-link {
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            z-index: 3;
            width: 100%;
            height: 100%;
            background: url(about:blank) repeat;
        }
    </style>
    
    
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['result']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
            <div class="list_c">
                <div class="list_img">
                    <img class="nonretina" width="100%" height="400" src="res/images/ropes_A_1840x700_normal.jpg">
                </div>

                <div id="seq"><?php echo $_smarty_tpl->tpl_vars['result']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['id'];?>
</div>
                <h2><?php echo $_smarty_tpl->tpl_vars['result']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
：test</h2>
                <p><?php echo $_smarty_tpl->tpl_vars['result']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['content'];?>
:《图腾跑酷 Totem Runner》于去年登陆 iOS，彼时已是跑酷游戏大肆挞伐人们的视觉审美之际。如此一款跑酷游戏却也没有理所当然地成为炮灰，反而受到了很多玩家的喜爱和评论人士的推崇，玩过本作的人自是有所体会。而在缺席安卓将近一年的时间里，这款游戏也终于在近日推出了安卓版。这款跑酷作品究竟有何特别之处？且接着往下看！</p>
                <p>由于跑酷题材被各大开发商竞相制作，这类游戏可以称得上手游界的一场瘟疫，有时候，甚至都厌恶到令人去讨论、去推荐。当然也偶有一些不错的作品，但终究是好的作品少，吸引力大打折扣。《图腾跑酷 Totem Runner》在一众作品确实有自己的优势所在，但也有的地方不尽如人意。但总体而言，瑕不掩瑜，是一款有想法，有诚意，有新意的作品。</p>
                <img alt="《图腾跑酷 Totem Runner》" src="http://res.d.cn/android/new/news/201309/1378278512768ZiPK.jpg">
                <p>“世界被邪恶的黑暗领主所诅咒而变成了一片死气沉沉的废墟，英勇的主角——图腾战士，为了打败邪恶恢复世界而踏上了跑酷的道路”，这就是游戏的剧情，标准的魔幻题材的故事设定。所以，也就没什么好说的了，跑酷游戏的故事一向是「软肋」 ，不过，说成是「软肋」合适吗？因为通常都没故事。难道不是吗？</p>
            </div>
        <?php endfor; endif; ?>
    
    
    
        <?php /*  Call merged included template "./activity-comment.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./activity-comment.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1204852271332b58fb1-06406513');
content_523977b9097346_46823372($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./activity-comment.tpl" */?>
    
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 17:51:53
         compiled from "E:\Web\Demo\Test\theme\templates\content\activity-comment.tpl" */ ?>
<?php if ($_valid && !is_callable('content_523977b9097346_46823372')) {function content_523977b9097346_46823372($_smarty_tpl) {?><style>
    .comment_area{
        margin:5px;
        
    }
    .comment_body{
        border:1px solid #e5e5e5;
    }
    
    .comment{
        margin-left:15px;
        margin-right:50px;
        /*border-bottom: 1px solid #e5e5e5;*/
        margin-bottom: 40px;
        font: 12px/20px arial, helvetica, verdana, tahoma, sans-serif;
    }
    .commentcon{
        margin:10px;
    }
    .userPhoto{
        float:left;
        margin-right:10px;
        background:#f8efeb
    }
    
    .info{
        color: #666;
        background-color: #f8efeb;
        margin-bottom: 8px;
        padding: 3px 5px;
        line-height: normal;
    }
</style>

<div class="comment_area">
    <!--发表评论区-->
    <div>
        <textarea class="defaultext" id="content">有什么感想，您也来说说吧！</textarea>
    </div>
    
    <!--显示评论区-->
    <div class="caption">
        <h3 class="title">最新评论</h3>
    </div>				
    <div class="comment_body">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comment']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['name'] = 'n';
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['n']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['n']['total']);
?>
            <div class="comment" id="comment562883476">
                <div class="commentcon">
                    <div class="userPhoto">
                        <a href="#" target="_blank">
                            <img src="http://img3.douban.com/icon/u65689364-3.jpg"></a>
                    </div>
                    <div class="cmt-inner">
                        <div class="info">
                             <a href="#" target="_blank">沧海No1</a>
                             <span> 3天前</span>
                        </div>

                        <div class="con">
                            <div class="text">
                                <p><?php echo $_smarty_tpl->tpl_vars['comment']->value[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['comment'];?>
<br></p>
                            </div>

                        </div><!--con end-->
                    </div>
                </div>
            </div>

        <?php endfor; endif; ?>
    </div>
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-09-18 17:51:53
         compiled from "E:\Web\Demo\Test\theme\templates\common\sidebar-nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_523977b90b28d0_52923369')) {function content_523977b90b28d0_52923369($_smarty_tpl) {?><div class="sidebar-nav">
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