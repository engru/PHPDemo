<div class="wrapper">
    <div class="row-fluid">
        {block name="filter"}
            <div id="menu" class="span6">
                {include file="common/category-nav.tpl"}
                <ul>
                    <li>list</li>
                    <li>list</li>
                    <li>list</li>
                    <li>list</li>
                    <li>list</li>
                </ul>
            </div>
        {/block}

        <div id="pages-fluid" class="row-fluid">
            {block name="pages"}
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
                        
                        {include file="common/listview.tpl"}
                        
                        <div style="clear:both"></div>
                    </div>
                </div>
            {/block}
            {block name="sidebar"}
                <div id="sidebar" class="spand6">
                    {include file="common/sidebar-nav.tpl"}
                    <ul>
                        <li>sidelist</li>
                        <li>sidelist</li>
                        <li>sidelist</li>
                        <li>sidelist</li>
                        <li>sidelist</li>
                    </ul>
                </div>
            {/block}
        </div>
      </div>
</div>