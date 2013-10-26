{extends file="../edit.tpl"}
{block name="edit-content"}
 
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

                {section loop=$result->acti name=n}
                    <div class="info-entity">
                        <a href="javascript:ajax_info({$result->acti[n].a_id})">{$result->acti[n].title}</a>

                       <!-- <p>{$result->acti[n].content}</p>-->
                    </div>
                {/section}
            </div>
        </div>
            
            
        {include file="./ajax-acti.tpl"}
        
    </div>
    <div style="clear:both"></div>
    
    
{/block}