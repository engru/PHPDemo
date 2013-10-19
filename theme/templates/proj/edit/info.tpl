{extends file="../edit.tpl"}
{block name="edit-content"}

    <div class="info-list">
        <div class="info-bar">
        </div>
        <div class="info-wrap">
            {section loop=$result->info name=n}
                <div class="info-entity">
                    <a href="#"><h1>{$result->info[n].title}</h1></a>

                   <!-- <p>{$result->info[n].content}</p>-->
                </div>
            {/section}
            {section loop=$result->info name=n}
                <div class="info-entity">
                    <a href="#"><h1>{$result->info[n].title}</h1></a>

                   <!-- <p>{$result->info[n].content}</p>-->
                </div>
            {/section}
        </div>
    </div>
    
    <div class="info-content">
            <h1>{$result->info[0].title}</h1>
            <p>{$result->info[0].content}</p>
    </div>
    <div style="clear:both"></div>
    
{/block}