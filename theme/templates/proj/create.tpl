<link href="res/css/module-create.css" rel="stylesheet"></link>
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
                    <a href="?proj/edit/base?{$result->proj[0].p_id}">项目信息</a>
                </li>
                <li class="">
                    <a href="?proj/edit/intro?{$result->proj[0].p_id}">项目简介</a>
                </li>
                <li class="">
                    <a href="?proj/edit/team?{$result->proj[0].p_id}">团队人员</a>
                </li>
                <li class="">
                    <a href="?proj/edit/res?{$result->proj[0].p_id}">资源文档</a>
                </li>
                <li class="">
                    <a href="?proj/edit/info?{$result->proj[0].p_id}">项目资讯动态</a>
                </li>
                <li class="">
                    <a href="?proj/edit/acti?{$result->proj[0].p_id}">活动</a>
                </li>
                <li class="">
                    <a href="?proj/edit/comment?{$result->proj[0].p_id}">主要评论</a>
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
</body>