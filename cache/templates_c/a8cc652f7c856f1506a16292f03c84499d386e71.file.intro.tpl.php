<?php /* Smarty version Smarty-3.1.14, created on 2013-10-18 12:53:49
         compiled from "E:\Web\Demo\Test\theme\templates\proj\edit\intro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24507525e3aa1debda1-65828034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8cc652f7c856f1506a16292f03c84499d386e71' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\proj\\edit\\intro.tpl',
      1 => 1381907608,
      2 => 'file',
    ),
    '0c7f546a7be829838b6d6e4593c47a2e2fa6b058' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\proj\\edit.tpl',
      1 => 1382071989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24507525e3aa1debda1-65828034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525e3aa1e3de39_39061189',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525e3aa1e3de39_39061189')) {function content_525e3aa1e3de39_39061189($_smarty_tpl) {?>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<link href="res/css/module-create.css" rel="stylesheet"></link>

<script>
</script>
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
                <li id="<?php if ($_smarty_tpl->tpl_vars['result']->value->current_app=="base"){?>select<?php }?>">
                    <a href="?proj/edit/base?<?php echo $_smarty_tpl->tpl_vars['result']->value->proj[0]['p_id'];?>
">项目信息</a>
                </li>
                <li id="<?php if ($_smarty_tpl->tpl_vars['result']->value->current_app=="intro"){?>select<?php }?>">
                    <a href="?proj/edit/intro?<?php echo $_smarty_tpl->tpl_vars['result']->value->proj[0]['p_id'];?>
">项目简介</a>
                </li>
                <li id="<?php if ($_smarty_tpl->tpl_vars['result']->value->current_app=="team"){?>select<?php }?>">
                    <a href="?proj/edit/team?<?php echo $_smarty_tpl->tpl_vars['result']->value->proj[0]['p_id'];?>
">团队人员</a>
                </li>
                <li id="<?php if ($_smarty_tpl->tpl_vars['result']->value->current_app=="res"){?>select<?php }?>">
                    <a href="?proj/edit/res?<?php echo $_smarty_tpl->tpl_vars['result']->value->proj[0]['p_id'];?>
">资源文档</a>
                </li>
                <li id="<?php if ($_smarty_tpl->tpl_vars['result']->value->current_app=="info"){?>select<?php }?>">
                    <a href="?proj/edit/info?<?php echo $_smarty_tpl->tpl_vars['result']->value->proj[0]['p_id'];?>
">项目资讯动态</a>
                </li>
                <li id="<?php if ($_smarty_tpl->tpl_vars['result']->value->current_app=="acti"){?>select<?php }?>">
                    <a href="?proj/edit/acti?<?php echo $_smarty_tpl->tpl_vars['result']->value->proj[0]['p_id'];?>
">活动</a>
                </li>
                <li id="<?php if ($_smarty_tpl->tpl_vars['result']->value->current_app=="comment"){?>select<?php }?>">
                    <a href="?proj/edit/comment?<?php echo $_smarty_tpl->tpl_vars['result']->value->proj[0]['p_id'];?>
">主要评论</a>
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
        <div class="filter">
            <a class="btn" href="#">操作</a>
            <a class="btn" href="#">动态</a>
            <div class="view">
                <a class="btn" href="#">图</a>
                <a class="btn" href="#">表</a>
            </div>
        </div>
        <div class="wrapper">
        
<h1><?php echo $_smarty_tpl->tpl_vars['result']->value->intro[0]['title'];?>
</h1>

<p><?php echo $_smarty_tpl->tpl_vars['result']->value->intro[0]['content'];?>
</p>

        </div>
    </section>
</div>
</body><?php }} ?>