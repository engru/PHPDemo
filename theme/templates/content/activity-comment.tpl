<style>
    .comment_area{
        margin:5px;
        
    }
    .comment_body{
        border:1px solid #e5e5e5;
    }
    
    .comment{
        margin-left:15px;
        margin-right:50px;
        /*border-bottom: 1px solid #e5e5e5;*/
        margin-bottom: 40px;
        font: 12px/20px arial, helvetica, verdana, tahoma, sans-serif;
    }
    .commentcon{
        margin:10px;
    }
    .userPhoto{
        float:left;
        margin-right:10px;
        background:#f8efeb
    }
    
    .info{
        color: #666;
        background-color: #f8efeb;
        margin-bottom: 8px;
        padding: 3px 5px;
        line-height: normal;
    }
</style>

<div class="comment_area">
    <!--发表评论区-->
    <div>
        <textarea class="defaultext" id="content">有什么感想，您也来说说吧！</textarea>
    </div>
    
    <!--显示评论区-->
    <div class="caption">
        <h3 class="title">最新评论</h3>
    </div>				
    <div class="comment_body">
        {section loop=$comment name=n}
            <div class="comment" id="comment562883476">
                <div class="commentcon">
                    <div class="userPhoto">
                        <a href="#" target="_blank">
                            <img src="http://img3.douban.com/icon/u65689364-3.jpg"></a>
                    </div>
                    <div class="cmt-inner">
                        <div class="info">
                             <a href="#" target="_blank">沧海No1</a>
                             <span> 3天前</span>
                        </div>

                        <div class="con">
                            <div class="text">
                                <p>{$comment[n].comment}<br></p>
                            </div>

                        </div><!--con end-->
                    </div>
                </div>
            </div>

        {/section}
    </div>
</div>