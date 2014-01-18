<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!--
文章编辑中。。。<br>
完整内容	<br>

aid<br>
attr<br>
title  <标题>必需<br>
content  <内容>必需<br>
orgin_url<br>
sid     <所属群组><br>
type    <类型><br>
status  <状态><br>
intro   <摘要>必需<br>
thumbnail   <缩略图>必需<br>
comment     <评论状态><br>
appendix    <附加><br>
date        <日期>必需<br>

提交


标题，分类
编辑框
保存
-->
<style type="text/css">
    form{
        margin:30px 0;
    }
    .note-title {
        width: 100%;
        height: 30px;
        margin: 10px 0;
        padding: 20px;
        background: #cedece;
        box-shadow: inset 1px 1px 0 rgba(0, 0, 0, 0.1), inset 0 -1px 0 rgba(0, 0, 0, 0.07);
    }
    #submit1{
        background-color: #388bff;
    }
    
    .button1{
        background-color: #5C5F68;
        border-color: #3c8dff #408ffe #3680e6;
        color: #fff !important;
        display: inline-block;
        padding: 2px 14px;
        margin: 0;
        font-weight: normal;
        text-align: center;
        vertical-align: middle;
        filter: chroma(color=#000000);
        overflow: visible;
        border: 1px solid #d8d8d8;
        cursor: pointer;
        line-height: 28px;
        font-size: 14px;
        font-family: "微软雅黑","黑体";
    }
    .fl{
        float:left;
    }
    .fr{
        float:right;
    }
</style>

<form action="post.php?action=article" method="post">
    
    <div>
            <input type="submit" class="button1" id="submit1" name="Submit" value="发表" />
            <input type="reset" class="button1" value="取消" />

            <button class="button1 fr">图片上传</button>
            <button class="button1 fr">保存</button>
            <button class="button1 fr">显示详情</button>
    </div>

    <div class="note-title1">
        <span class="note-title1">
            <input type="text" name="title" class="note-title" value="标题">
        </span>
    </div>
    
    <!--权限、分类设置-->
    <!--
    <div>    
        <!--插入上传缩略图- ->
        <img width="40" src="http://qlogo3.store.qq.com/qzone/690445606/690445606/100" alt="Template for iOS 7 App Icons">
        <img width="40" src="http://qlogo3.store.qq.com/qzone/690445606/690445606/100" alt="Template for iOS 7 App Icons">
        <img width="40" src="http://qlogo3.store.qq.com/qzone/690445606/690445606/100" alt="Template for iOS 7 App Icons">
        <img width="40" src="http://qlogo3.store.qq.com/qzone/690445606/690445606/100" alt="Template for iOS 7 App Icons">
        <img width="40" src="http://qlogo3.store.qq.com/qzone/690445606/690445606/100" alt="Template for iOS 7 App Icons">
    </div>
    -->
                    <textarea name="contn" id="myEditor">这里写你的初始化内容</textarea>
                    <script type="text/javascript">
                            //var editor = new UE.ui.Editor();
                            //editor.render("myEditor");
                            //1.2.4以后可以使用一下代码实例化编辑器
                            UE.getEditor('myEditor')
                    </script>
                    
</form>