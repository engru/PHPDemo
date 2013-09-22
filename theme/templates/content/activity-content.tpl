{extends file="../layout.tpl"}

{block name="listview"}
    <style>
        .list_c{
            position: relative;
            width: 650px;
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
    
    {block name="activity-content"}
        {section loop=$result name=n}
            <div class="list_c">
                <div class="list_img">
                    <img class="nonretina" width="100%" height="400" src="res/images/ropes_A_1840x700_normal.jpg">
                </div>

                <div id="seq">{$result[n].id}</div>
                <h2>{$result[n].title}：test</h2>
                <p>{$result[n].content}:《图腾跑酷 Totem Runner》于去年登陆 iOS，彼时已是跑酷游戏大肆挞伐人们的视觉审美之际。如此一款跑酷游戏却也没有理所当然地成为炮灰，反而受到了很多玩家的喜爱和评论人士的推崇，玩过本作的人自是有所体会。而在缺席安卓将近一年的时间里，这款游戏也终于在近日推出了安卓版。这款跑酷作品究竟有何特别之处？且接着往下看！</p>
                <p>由于跑酷题材被各大开发商竞相制作，这类游戏可以称得上手游界的一场瘟疫，有时候，甚至都厌恶到令人去讨论、去推荐。当然也偶有一些不错的作品，但终究是好的作品少，吸引力大打折扣。《图腾跑酷 Totem Runner》在一众作品确实有自己的优势所在，但也有的地方不尽如人意。但总体而言，瑕不掩瑜，是一款有想法，有诚意，有新意的作品。</p>
                <img alt="《图腾跑酷 Totem Runner》" src="http://res.d.cn/android/new/news/201309/1378278512768ZiPK.jpg">
                <p>“世界被邪恶的黑暗领主所诅咒而变成了一片死气沉沉的废墟，英勇的主角——图腾战士，为了打败邪恶恢复世界而踏上了跑酷的道路”，这就是游戏的剧情，标准的魔幻题材的故事设定。所以，也就没什么好说的了，跑酷游戏的故事一向是「软肋」 ，不过，说成是「软肋」合适吗？因为通常都没故事。难道不是吗？</p>
            </div>
        {/section}
    {/block}
    
    {block name="activity-comment"}
        {include file="./activity-comment.tpl"}
    {/block}
{/block}