{extends file="../edit.tpl"}
{block name="edit-content"}
    {section loop=$result->team name=n}
        {$result->team[n].uid}
        {$result->team[n].t_pos}<br>
    {/section}
{/block}