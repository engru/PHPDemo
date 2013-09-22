{block name="listview"}

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

{section name=loop loop=10}

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
{/section}
</ul>

{/block}