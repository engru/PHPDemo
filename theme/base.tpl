<!DOCTYPE html>
<html lang="en">
<head>
    {block name="meta"}<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />{/block}
    {block name="title"}<title>Test proj</title>{/block}
    {block name="style"}
        <script src="res/jquery-2.0.3.min.js" type="text/javascript"></script>
	<script src="res/bootstrap/js/bootstrap.js"type="text/javascript"></script>
	<link href="res/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="res/bootstrap/css/bootstrap-responsive.css" rel="stylesheet"></link>
        <link href="res/css/base.css" rel="stylesheet"></link>
        <link href="res/css/custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet"></link>
    {/block}
</head>

<body>
{block name="body"}
<div class="container">
  <div class="header"><a href="#"><img src="" alt="在此处插入徽标" name="Insert_logo" width="20%" height="90" id="Insert_logo" style="background: #8090AB; display:block;" /></a> 
    <!-- end .header --></div>
  <div class="content">
    <h1>说明</h1>
    <p>请注意，这些布局的 CSS 带有大量注释。如果您的大部分工作都在设计视图中进行，请快速浏览一下代码，获取有关如何使用液态布局 CSS 的提示。您可以先删除这些注释，然后启动您的站点。要了解有关这些 CSS 布局中使用的方法的更多信息，请阅读 Adobe 开发人员中心上的以下文章：<a href=http://www.adobe.com/go/adc_css_layouts">http://www.adobe.com/go/adc_css_layouts</a>。</p>
    <h2>布局</h2>
    <p>由于这是一列布局，因此 .content 不是浮动的。 </p>
    <h3>徽标替换</h3>
    <p>此布局的 .header 中使用了图像占位符，您可能希望在其中放置徽标。建议您删除此占位符，并将其替换为您自己的链接徽标。 </p>
    <p> 请注意，如果您使用属性检查器导航到使用 SRC 字段的徽标图像（而不是删除并替换占位符），则应删除内嵌背景和显示属性。这些内嵌样式仅用于在浏览器中出于演示目的而显示徽标占位符。 </p>
    <p>要删除内嵌样式，请确保将 CSS 样式面板设置为“当前”。选择图像，然后在“CSS 样式”面板的“属性”窗格中右键单击并删除显示和背景属性。（当然，您始终可以直接访问代码，并在其中删除图像或占位符的内嵌样式。）</p>
    <!-- end .content --></div>
  <div class="footer">
    <p>脚注</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
{/block}
</body>
</html>
