{extends file="../layout.tpl"}

{block name="listview"}
    <style>
        .list_c{
            position: relative;
            float:left;
            width: 200px;
            padding: 13px;
            padding-left:14px;
            margin:5px;
            background: #FFF;
            border: 1px #d4d4d4 solid;
            -webkit-box-shadow: 2px 2px 4px #ced9e4;
            -moz-box-shadow: 2px 2px 4px #ced9e4;
            box-shadow: 2px 2px 4px #ced9e4;
        }
        .list_img{
            float:left;
        }
        #seq{
            position:absolute;
            background:url('res/images/nav.png') no-repeat;
            width:20px;
            height:20px;
        }
        .outer-box-link {
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            z-index: 3;
            width: 100%;
            height: 100%;
            background: url(about:blank) repeat;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".list_c").click(function(){
                //alert("ok");
            });
            $(".list_c").mouseover();
        });
    </script>
    
    {section loop=$result name=n}
        <div class="list_c">
            <a href="?activity/article/?{$smarty.section.n.index}" target="_blank" class="outer-box-link"></a>
            <div class="list_img">
                <img class="nonretina" width="200" height="200" src="res/images/ropes_A_1840x700_normal.jpg">
            </div>
            
            <div id="seq">{$smarty.section.n.index}</div>
            <h2>{$result[n].title}</h2>
            <p>{$result[n].content}</p>

        </div>
    {/section}
    
    {block name="wumi_get"}
        {$wumi_content}
    {/block}
{/block}