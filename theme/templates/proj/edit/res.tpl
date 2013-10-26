{extends file="../edit.tpl"}
{block name="edit-content"}
    <style>
        .list{
            border:1px solid;
        }
        .list table{
            width:100%;
        }
        
        table .data:hover{
            background:#FFF4E2;
        }
        table .ji{
            background:#cee2f2;
        }
        .fl{
            float:left;
            }
            
    </style>
    <div class="list">
        <table>
            <tbody>
                <tr>
                    <th>格式</th>
                    <th>文件名称</th>
                    <th>文件大小</th>
                    <th>用户</th>
                </tr>
            
            
            </tbody>
            {section loop=$result->attach name=n}
                <tr class="data {if $smarty.section.n.index%2==0}ji{/if}">
                    <td>{$result->attach[n].f_type}</td>
                    <td>{$result->attach[n].f_name}</td>
                    <td>{$result->attach[n].f_size}</td>
                    <td>{$result->attach[n].uid}</td>
                </tr>
            {/section}
        </table>
    </div>
{/block}