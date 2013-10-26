<?php /* Smarty version Smarty-3.1.14, created on 2013-10-24 20:08:46
         compiled from "E:\Web\Demo\Test\theme\templates\proj\intro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1962352526c63bca0a8-99395531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54566f37d1d211de89763e260f8e399211685389' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\proj\\intro.tpl',
      1 => 1381901818,
      2 => 'file',
    ),
    '18125ec67af0a61b2b7d312d9b5ab8dec3209347' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\templates\\layout.tpl',
      1 => 1382616524,
      2 => 'file',
    ),
    '164b3b1b8f393a3eff1f7a210da36f6db19a285e' => 
    array (
      0 => 'E:\\Web\\Demo\\Test\\theme\\base.tpl',
      1 => 1381150564,
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
  'nocache_hash' => '1962352526c63bca0a8-99395531',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52526c63ef6968_45702496',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52526c63ef6968_45702496')) {function content_52526c63ef6968_45702496($_smarty_tpl) {?><!DOCTYPE html>
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
    
    
        <link href="res/css/module.css" rel="stylesheet"></link>
    
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
                        <li class=""><a href="?proj/intro/#work" class="work">Work</a></li>
                        <li class=""><a href="#about" class="about">About</a></li>
                        <li class=""><a href="#contact" class="contact">Contact</a></li>
                        <li><a href="?activity/alist/">Blog</a></li>
                      </ul> <!-- /nav -->
                    </div><!--/.nav-collapse -->
                    
                        <?php /*  Call merged included template "./user/user_info.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('./user/user_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1962352526c63bca0a8-99395531');
content_52690dce789478_64350959($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./user/user_info.tpl" */?>
                    
                  </div>
            </div>
        </header>
    
    <div style="margin-top:105px;"></div>
    
        <div class="p-wrap">
            <!--标题-->
            <div class="p-head">
                <div class="p-title"><a href="?proj/edit/?<?php echo $_smarty_tpl->tpl_vars['result']->value->proj[0]['p_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['result']->value->proj[0]['p_name'];?>
</a></div>
                <img src="res/images/99bg.jpg">
                <!--<img style="position: absolute;left: 0;top:0" src="res/images/OPPO-N1.png">-->
            </div>
            <div class="p-content">
                <!--简介-->
                <div class="p-intro">
                     <div class="p-title">简介</div>
                     <div>改善小组推行以后部门参与率、人均数呈直线上升的趋势，完全超出了推行初期制定的目标：
                         参与率95%，人均数2条/月（推行两周后目标调整为参与率100%，人均数不变）；附带的成果是6月份软件品质部获得“TBB先进部门”称号，同时推行干事当选为6月最优秀推行干事；当然这仅仅是显性的成果，隐性成果主要体现在提升部门士气、改善组织氛围，这一部分无法量化，但从推行部门长的总结感言中可见一斑：<br>
                        1、部门参与度的提升，说明改善小组的形式是非常好的；<br>
                        2、希望部门人员与部门共通成长：从我对改善小组的观察看，员工对能为部门提升改善而感到高兴，说明大家已经在自主自发地进行改善；<br>
                        3、希望通过改善小组让大家养成一种热爱集体的精神，并将这种精神传承下去。<br></div>
                </div>
                <!--资源文档-->
                <div class="p-res">
                    <div class="p-title">资源文档</div>
                    <table class="p-table">
                        <thead>
                            <tr>
                                <th>编号</th>
                                <th>文件名</th>
                                <th>大小</th>
                                <th>作者</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <th>filebase.txt</th>
                                <th>332KB</th>
                                <th>anyd</th>
                                
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>assert.log</th>
                                <th>6.208KB</th>
                                <th>SICK</th>
                                
                            </tr>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['result']->value->attach) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <tr>
                                    <th><?php echo $_smarty_tpl->tpl_vars['result']->value->attach[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['f_type'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['result']->value->attach[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['f_name'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['result']->value->attach[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['f_size'];?>
</th>
                                    <th><?php echo $_smarty_tpl->tpl_vars['result']->value->attach[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['uid'];?>
</th>

                                </tr>
                            <?php endfor; endif; ?>
                        </tbody>
                    </table>
                </div>
                <!--资讯-->
                <div class="p-info">
                    <div class="p-title">资讯</div>
                    <div>
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['n'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['n']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['n']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['result']->value->info) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                            <div class="p-info-item">
                                <div class="p-info-box">
                                    <img src="http://115.28.11.138/ucenter/avatar.php?uid=181&amp;size=small">
                                </div>
                                <div class="p-info-info">
                                    <div>
                                        <a href="#" style="font-weight: bold;color: #EE1B2E;" onclick="atarget(this)" class="s xst"><?php echo $_smarty_tpl->tpl_vars['result']->value->info[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</a>
                                    </div>
                                    <div><?php echo $_smarty_tpl->tpl_vars['result']->value->info[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['content'];?>
</div>
                                </div>
                            </div>
                        <?php endfor; endif; ?>
                    </div>
                </div>
                
                <!--评论讨论-->
                <div class="p-comment">
                    <div class="p-title">评论</div>
                    <div class="p-container">
                        <div class="p-tarea">
                            <div class="head">
                                <img src="http://img3.douban.com/icon/g280261-1.jpg?param=50y50">
                            </div>
                            <div class="content">
                                <textarea class="u-txt area j-flag" placeholder="评论" id="auto-id-lvBDiTekPMflfpGg"></textarea>
                            </div>
                        </div>
                        
                        <div class="p-content">
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=5) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
                                <div class="item">
                                    <div class="head">
                                        <img src="http://img3.douban.com/icon/g280261-1.jpg?param=50y50">
                                    </div>
                                    <div class="inner">
                                        <div class="cnt f-brk">
                                            <a href="#" class="s-fc7">Nxiao</a>：很久前第一次听就深深喜欢上了 （9月30日 21:08）
                                        </div>
                                        <div class="rp">
                                            <a href="#" class="s-fc3" >回复</a>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor; endif; ?>
                        </div>
                        <div class=""></div>
                    </div>
                </div>
            </div>

            <div class="p-sidebar">
                <!--团队-->
                <div class="p-team">
                    <div class="p-title">团队</div>
                    <div>
                        <ul>
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
                                    <img src="http://imgsize.ph.126.net/?enlarge=true&imgurl=http://s.stu.126.net/res/images/headImg/big.jpg_49x49x1x95.jpg">
                                </li>
                            <?php endfor; endif; ?>
                        </ul>
                        <div class="clear"></div>
                    </div>
                </div>
                <!--进度-->
                <div class="p-sche">
                    <div class="p-title">进度</div>
                    <br>
                    <img src="http://dribbble.s3.amazonaws.com/users/109101/screenshots/950452/metro-start-dashboard_1x.jpg">
                </div>
                <!--相关活动-->
                <div class="p-activity">
                    <div class="p-title">活动</div>
                    <style>
                        .demo{
                            word-wrap: break-word;
                            border-bottom:1px dotted #cecece;
                        }
                    </style>
                    <br>
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
                        <div class="demo">
                                <div class="p-info-box">
                                    <img style="height: 20px;" src="http://www.iconpng.com/png/google_plus_ui/calendar.png">
                                </div>
                            <p><?php echo $_smarty_tpl->tpl_vars['result']->value->acti[$_smarty_tpl->getVariable('smarty')->value['section']['n']['index']]['title'];?>
</p>
                        </div>
                    <?php endfor; endif; ?>
                </div>
                
                <!--项目剪影-->
                <div class="p-photo">
                    <div class="p-title">剪影</div>
                    <img src="http://www.awaker.hk/wp-content/themes/Invoker/timthumb.php?src=http://www.awaker.hk/wp-content/uploads/2012/05/1_201106251727101b1bt.jpg&w=300&h=190&zc=1&q=100">
                    <img src="http://static.wumii.cn/site_images/f/8/v/cmSRzo.jpg">
                    <img src="http://static.wumii.cn/site_images/f/S/q/w9AWcf.jpg">
                </div>

            </div>
            <div class="clear"></div>
        </div>

    <div style="clear:both"></div>
    
        <div class="footer">
            <p style="color: white"><b>关注我们 关注现代生活<br> 互联网时代 激情无极限</b></p>
        </div>
    
    
    
    

</body>
</html>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-10-24 20:08:46
         compiled from "E:\Web\Demo\Test\theme\templates\user\user_info.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52690dce789478_64350959')) {function content_52690dce789478_64350959($_smarty_tpl) {?><!--
<div class="user-info">
    <a class="user-info__login" href="#" gaevent="top/login">登录</a>
    <a class="user-info__signup" href="#" gaevent="top/signup">注册</a>
</div>
--><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-10-24 20:08:46
         compiled from "E:\Web\Demo\Test\theme\templates\content.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52690dce794ff4_91679423')) {function content_52690dce794ff4_91679423($_smarty_tpl) {?><div class="wrapper">
    <div class="row-fluid">
        
            <div id="menu" class="span6">
                <?php /*  Call merged included template "common/category-nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("common/category-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1962352526c63bca0a8-99395531');
content_52690dce79ccf7_28571070($_smarty_tpl);
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
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("common/listview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1962352526c63bca0a8-99395531');
content_52690dce7cf980_64490001($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "common/listview.tpl" */?>
                        
                        <div style="clear:both"></div>
                    </div>
                </div>
            
            
                <div id="sidebar" class="spand6">
                    <?php /*  Call merged included template "common/sidebar-nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("common/sidebar-nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '1962352526c63bca0a8-99395531');
content_52690dce7eed81_98714312($_smarty_tpl);
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
</div><?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-10-24 20:08:46
         compiled from "E:\Web\Demo\Test\theme\templates\common\category-nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52690dce79ccf7_28571070')) {function content_52690dce79ccf7_28571070($_smarty_tpl) {?><div class="cate-nav">
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



<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-10-24 20:08:46
         compiled from "E:\Web\Demo\Test\theme\templates\common\listview.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52690dce7cf980_64490001')) {function content_52690dce7cf980_64490001($_smarty_tpl) {?>

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

<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2013-10-24 20:08:46
         compiled from "E:\Web\Demo\Test\theme\templates\common\sidebar-nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52690dce7eed81_98714312')) {function content_52690dce7eed81_98714312($_smarty_tpl) {?><div class="sidebar-nav">
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