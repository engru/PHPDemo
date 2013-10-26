<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 10:46:51
         compiled from "E:\Web\Demo\Test\theme\templates\proj\edit\acti.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9210525e4045b56117-39061420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c80b69015a59f74ed1e830c0c6f8bcaafbce6fe4' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\proj\\edit\\acti.tpl',
      1 => 1382667266,
      2 => 'file',
    ),
    '0c7f546a7be829838b6d6e4593c47a2e2fa6b058' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\proj\\edit.tpl',
      1 => 1382755469,
      2 => 'file',
    ),
    '726773355db0987d11b63777a5f7e7ef87c0c7f4' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\proj\\edit\\ajax-acti.tpl',
      1 => 1382755605,
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
<!--	<script src="res/bootstrap/js/bootstrap.js"type="text/javascript"></script>
	<link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="res/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"></link>
-->
<script src="res/jquery-2.0.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="vendor/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="vendor/ueditor/ueditor.all.js"></script>
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
        <!--
        <div class="filter">
            <a class="btn" href="#">操作</a>
            <a class="btn" href="#">动态</a>
            <div class="view">
                <a class="btn" href="#">图</a>
                <a class="btn" href="#">表</a>
            </div>
        </div>
        -->
        <div class="wrapper">
        
 
<script type="text/javascript">
    //$(document).ready(function(){
   // });
    function ajax_info(a_id){
       // $(".info-entity").bind("click",function(){
            //htmlobj=$.ajax(url:"/jquery/test1.txt",async:false});
            //$("#myDiv").html(htmlobj.responseText);
            $.ajax({
                    type:'GET',
                    url:"?proj/edit/acti?"+a_id,//$(".info-entity a").attr("href"),
                    //data:$("form").serialize(),
                    success:function(str){
                            $(".info-content").replaceWith(str);
                            //$(".info-content").html(str);
                           // executeScript(str);
                    }
            })
       // });
      }
</script>
<!--
      /*
    function executeScript(html)
    {
        var reg = /<script[^>]*>([^\x00]+)$/i;
        //对整段HTML片段按<\/script>拆分
        var htmlBlock = html.split("<\/script>");
        for (var i in htmlBlock) 
        {
            var blocks;//匹配正则表达式的内容数组，blocks[1]就是真正的一段脚本内容，因为前面reg定义我们用了括号进行了捕获分组
            if (blocks = htmlBlock[i].match(reg)) 
            {
                //清除可能存在的注释标记，对于注释结尾--可以忽略处理，eval一样能正常工作
                var code = blocks[1].replace(/<!--/, '');
                try 
                {
                    eval(code) //执行脚本
                } 
                catch (e) 
                {
                }
            }
        }
    }*/
-->
    <div class="ctn-header">
    </div>
    <div>
        <div class="info-list">
            <div class="info-bar">活动列表</div>
            <div class="info-wrap">

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
                    <div class="info-entity">
                        <a href="javascript:ajax_info(<?php echo $_smarty_tpl->tpl_vars['result']->value->acti[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['a_id'];?>
)"><?php echo $_smarty_tpl->tpl_vars['result']->value->acti[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a>

                       <!-- <p><?php echo $_smarty_tpl->tpl_vars['result']->value->acti[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['content'];?>
</p>-->
                    </div>
                <?php endfor; endif; ?>
            </div>
        </div>
            
            
        <?php /*  Call merged included template "./ajax-acti.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./ajax-acti.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '9210525e4045b56117-39061420');
content_526b2d1b34ffe0_86284943($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./ajax-acti.tpl" */?>
        
    </div>
    <div style="clear:both"></div>
    
    

        </div>
    </section>
</div>
</body><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 10:46:51
         compiled from "E:\Web\Demo\Test\theme\templates\proj\edit\ajax-acti.tpl" */ ?>
<?php if ($_valid && !is_callable('content_526b2d1b34ffe0_86284943')) {function content_526b2d1b34ffe0_86284943($_smarty_tpl) {?>
        <div class="info-content">
            <div class="title">
                <h1><?php echo $_smarty_tpl->tpl_vars['result']->value->acti[0]['title'];?>
</h1>
            </div>
            <div class="con-wrap">
                <div class="tags"></div>
                <p><?php echo $_smarty_tpl->tpl_vars['result']->value->acti[0]['content'];?>
</p>
                <!--<iframe id="editor" style="width: 100%;">
                    
                </iframe>
                <script>
                    var ifr = document.getElementById('editor');
                    ifr.contentWindow.document.designMode = 'On';
                    
                </script>
                -->
                	<textarea name="后台取值的key" id="myEditor">这里写你的初始化内容</textarea>
                    <script type="text/javascript">
                            //var editor = new UE.ui.Editor();
                            //editor.render("myEditor");
                            //1.2.4以后可以使用一下代码实例化编辑器
                            UE.getEditor('myEditor')
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