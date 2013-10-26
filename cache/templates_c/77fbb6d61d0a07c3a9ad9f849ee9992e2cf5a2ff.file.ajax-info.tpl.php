<?php /* Smarty version Smarty-3.1.14, created on 2013-10-22 17:37:04
         compiled from "E:\Web\Demo\Test\theme\templates\proj\edit\ajax-info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2127652664740a01598-90954597%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77fbb6d61d0a07c3a9ad9f849ee9992e2cf5a2ff' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\proj\\edit\\ajax-info.tpl',
      1 => 1382433042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2127652664740a01598-90954597',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52664740a4f7a5_10920451',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52664740a4f7a5_10920451')) {function content_52664740a4f7a5_10920451($_smarty_tpl) {?>        <div class="info-content">
                <h1><?php echo $_smarty_tpl->tpl_vars['result']->value->info[0]['title'];?>
</h1>
                <p><?php echo $_smarty_tpl->tpl_vars['result']->value->info[0]['content'];?>
</p>
        </div><?php }} ?>