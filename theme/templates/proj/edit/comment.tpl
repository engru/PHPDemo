{extends file="../edit.tpl"}
{block name="edit-content"}
    {if $result->current_app == "comment"}
        ok
    {else}
        fail
    {/if}
{/block}