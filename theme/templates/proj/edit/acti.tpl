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
        //������HTMLƬ�ΰ�<\/script>���
        var htmlBlock = html.split("<\/script>");
        for (var i in htmlBlock) 
        {
            var blocks;//ƥ��������ʽ���������飬blocks[1]����������һ�νű����ݣ���Ϊǰ��reg���������������Ž����˲������
            if (blocks = htmlBlock[i].match(reg)) 
            {
                //������ܴ��ڵ�ע�ͱ�ǣ�����ע�ͽ�β--���Ժ��Դ���evalһ������������
                var code = blocks[1].replace(/<!--/, '');
                try 
                {
                    eval(code) //ִ�нű�
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
            <div class="info-bar">��б�</div>
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