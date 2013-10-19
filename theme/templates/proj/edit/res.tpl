{extends file="../edit.tpl"}
{block name="edit-content"}
    <style>
        .list{
            border:1px solid;
        }
        
        .fl{
            float:left;
            }
    </style>
    {section loop=$result->attach name=n}
        <div class="list">
            <div class="fl">{$result->attach[n].f_type}</div>
            <div class="fl">{$result->attach[n].f_name}</div>
            <div class="fl">{$result->attach[n].f_size}</div>
            <div>{$result->attach[n].uid}</div>
        </div>
    {/section}
{/block}