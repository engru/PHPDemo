p_id p_name<br>
{section loop=$result->proj name=n}
    {$result->proj[n].p_id}  <a href="?proj/intro/?{$result->proj[n].p_id}">{$result->proj[n].p_name}</a><br>
{/section}