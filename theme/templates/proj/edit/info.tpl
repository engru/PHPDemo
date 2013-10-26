{extends file="../edit.tpl"}
{block name="edit-content"}
<script type="text/javascript">
    //$(document).ready(function(){
   // });
    function ajax_info(info_id){
       // $(".info-entity").bind("click",function(){
            //htmlobj=$.ajax(url:"/jquery/test1.txt",async:false});
            //$("#myDiv").html(htmlobj.responseText);
            $.ajax({
                    type:'GET',
                    url:"?proj/edit/info?"+info_id,//$(".info-entity a").attr("href"),
                    //data:$("form").serialize(),
                    success:function(str){
                            $(".info-content").replaceWith(str);
                    }
            })
       // });
      }

</script>
    <div class="ctn-header">
    </div>
    <div>
        <div class="info-list">
            <div class="info-bar">Info¡–±Ì</div>
            <div class="info-wrap">

                {section loop=$result->info name=n}
                    <div class="info-entity">
                        <a href="javascript:ajax_info({$result->info[n].info_id})">{$result->info[n].title}</a>

                       <!-- <p>{$result->info[n].content}</p>-->
                    </div>
                {/section}
            </div>
        </div>

        <div class="info-content">
                <h1>{$result->info[0].title}</h1>
                <p>{$result->info[0].content}</p>
        </div>
    </div>
    <div style="clear:both"></div>
    
{/block}