{extends file="../base.tpl"}
{block name="body"}
    {block name="header"}
        <header>
            <div class="navbar" style="position: fixed;top: 0px;width: 100%">
                <div class="topcolor"></div>
                
                  <div class="container">
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav-collapse-01">
                    </button>
                    <a href="javascript:void(0);" class="brand">symkey</a>
                    <div class="nav-collapse collapse" id="nav-collapse-01">
                      <ul class="nav">
                        <li class=""><a href="?proj/intro/#work" class="work">Work</a></li>
                        <li class=""><a href="#about" class="about">About</a></li>
                        <li class=""><a href="#contact" class="contact">Contact</a></li>
                        <li><a href="?activity/alist/">Blog</a></li>
                      </ul> <!-- /nav -->
                    </div><!--/.nav-collapse -->
                    {block name="user_manager"}
                        {include './user/user_info.tpl'}
                    {/block}
                  </div>
            </div>
        </header>
    {/block}
    <div style="margin-top:105px;"></div>
    {block name="content"}
        <div id="center" class="content">
            <!--
            <p>
            asdxxxd<br>
                            <div class="topcolor"></div>
            asdcccdf<br>
            asdddddf<br>
            asdfaaaf<br>
            asdfffffdf<br>
            asdfsdf<br>
            asdfsdf<br>
            asdfsdf<br>
            asdfsdf<br>
            asdfsdf<br>
             </p>-->
            {include file="content.tpl"}
         </div>
         <div style="clear:both"></div>

    {/block}
    <div style="clear:both"></div>
    {block name="footer"}
        <div class="footer">
            <p style="color: white"><b>关注我们 关注现代生活<br> 互联网时代 激情无极限</b></p>
        </div>
    {/block}
    
    {block name="others"}
    {/block}
{/block}