{extends file="../edit.tpl"}
{block name="edit-content"}
    
    {section loop=$result->acti name=n}
        <h1>{$result->acti[n].title}</h1>

        <p>{$result->acti[n].content}</p>
    {/section}
{/block}