{extends file="../layout.tpl"}


    {block name="style-plus"}
        <link href="res/css/module.css" rel="stylesheet"></link>
    {/block}

 {block name="content"}
        <div class="p-wrap">
            <!--标题-->
            <div class="p-head">
                <div class="p-title"><a href="?proj/edit/?{$result->proj[0].p_id}">{$result->proj[0].p_name}</a></div>
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
                            {section loop=$result->attach name=n}
                                <tr>
                                    <th>{$result->attach[n].f_type}</th>
                                    <th>{$result->attach[n].f_name}</th>
                                    <th>{$result->attach[n].f_size}</th>
                                    <th>{$result->attach[n].uid}</th>

                                </tr>
                            {/section}
                        </tbody>
                    </table>
                </div>
                <!--资讯-->
                <div class="p-info">
                    <div class="p-title">资讯</div>
                    <div>
                        {section loop=$result->info name=n}
                            <div class="p-info-item">
                                <div class="p-info-box">
                                    <img src="http://115.28.11.138/ucenter/avatar.php?uid=181&amp;size=small">
                                </div>
                                <div class="p-info-info">
                                    <div>
                                        <a href="#" style="font-weight: bold;color: #EE1B2E;" onclick="atarget(this)" class="s xst">{$result->info[n].title}</a>
                                    </div>
                                    <div>{$result->info[n].content}</div>
                                </div>
                            </div>
                        {/section}
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
                            {section name=loop loop=5}
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
                            {/section}
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
                            {section name=loop loop=10}
                                <li>
                                    <img src="http://imgsize.ph.126.net/?enlarge=true&imgurl=http://s.stu.126.net/res/images/headImg/big.jpg_49x49x1x95.jpg">
                                </li>
                            {/section}
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
                    {section loop=$result->acti name=n}
                        <div class="demo">
                                <div class="p-info-box">
                                    <img style="height: 20px;" src="http://www.iconpng.com/png/google_plus_ui/calendar.png">
                                </div>
                            <p>{$result->acti[n].title}</p>
                        </div>
                    {/section}
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
{/block}