<?php /* Smarty version Smarty-3.1.14, created on 2013-10-25 10:08:26
         compiled from "E:\Web\Demo\Test\theme\templates\proj\edit\ajax-acti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175695267491ad95a22-53537324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '726773355db0987d11b63777a5f7e7ef87c0c7f4' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\proj\\edit\\ajax-acti.tpl',
      1 => 1382616411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175695267491ad95a22-53537324',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5267491b4950a3_62324704',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5267491b4950a3_62324704')) {function content_5267491b4950a3_62324704($_smarty_tpl) {?>
        <div class="info-content">
            <div class="title">
                <h1><?php echo $_smarty_tpl->tpl_vars['result']->value->acti[0]['title'];?>
</h1>
            </div>
            <div class="con-wrap">
                <div class="tags"></div>
                <p><?php echo $_smarty_tpl->tpl_vars['result']->value->acti[0]['content'];?>
</p>
                <iframe id="editor" style="width: 100%;">
                    
                </iframe>
                <script>
                    var ifr = document.getElementById('editor');
                    ifr.contentWindow.document.designMode = 'On';
                    
                </script>
            </div>
            <div>
                <!-- UY BEGIN -->
                <div id="uyan_frame"></div>
                <script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1824155"></script>
                <!-- UY END -->
            </div>
        </div> 
<?php }} ?>