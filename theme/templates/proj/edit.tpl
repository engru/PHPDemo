
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
                <li id="{if $result->current_app == "base"}select{/if}">
                    <a href="?proj/edit/base?{$result->proj[0].p_id}">项目信息</a>
                </li>
                <li id="{if $result->current_app == "intro"}select{/if}">
                    <a href="?proj/edit/intro?{$result->proj[0].p_id}">项目简介</a>
                </li>
                <li id="{if $result->current_app == "team"}select{/if}">
                    <a href="?proj/edit/team?{$result->proj[0].p_id}">团队人员</a>
                </li>
                <li id="{if $result->current_app == "res"}select{/if}">
                    <a href="?proj/edit/res?{$result->proj[0].p_id}">资源文档</a>
                </li>
                <li id="{if $result->current_app == "info"}select{/if}">
                    <a href="?proj/edit/info?{$result->proj[0].p_id}">项目资讯动态</a>
                </li>
                <li id="{if $result->current_app == "acti"}select{/if}">
                    <a href="?proj/edit/acti?{$result->proj[0].p_id}">活动</a>
                </li>
                <li id="{if $result->current_app == "comment"}select{/if}">
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
        {block name="edit-content"}
        <div>
            <h1>til</h1>
            contensdf<br>
            sdfjk<br>
            sdkfjksdfj
        </div>
        {/block}
        </div>
    </section>
</div>
</body>