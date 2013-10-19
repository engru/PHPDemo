<?php /* Smarty version Smarty-3.1.14, created on 2013-10-18 12:54:28
         compiled from "E:\Web\Demo\Test\theme\templates\proj\edit\acti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9210525e4045b56117-39061420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c80b69015a59f74ed1e830c0c6f8bcaafbce6fe4' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\proj\\edit\\acti.tpl',
      1 => 1381908226,
      2 => 'file',
    ),
    '0c7f546a7be829838b6d6e4593c47a2e2fa6b058' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\proj\\edit.tpl',
      1 => 1382071989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9210525e4045b56117-39061420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525e4045be69b2_75278225',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525e4045be69b2_75278225')) {function content_525e4045be69b2_75278225($_smarty_tpl) {?>
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
        
    
    <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['result']->value->acti) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <h1><?php echo $_smarty_tpl->tpl_vars['result']->value->acti[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</h1>

        <p><?php echo $_smarty_tpl->tpl_vars['result']->value->acti[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['content'];?>
</p>
    <?php endfor; endif; ?>

        </div>
    </section>
</div>
</body><?php }} ?>